<?php

declare(strict_types=1);

/*
 * This file is part of Contao Article Class Select Bundle.
 *
 * (c) Marko Cupic 2024 <m.cupic@gmx.ch>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-article-class-select-bundle
 */

namespace Markocupic\ContaoArticleClassSelectBundle\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\CoreBundle\Framework\Adapter;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Image\PictureFactoryInterface;
use Contao\CoreBundle\Image\Studio\Studio;
use Contao\FilesModel;
use Contao\Image\Image;
use Contao\StringUtil;
use Contao\Template;
use Symfony\Component\Filesystem\Path;

#[AsHook(self::HOOK, priority: 100)]
class ParseTemplateListener
{
    public const HOOK = 'parseTemplate';

    private Adapter $stringUtil;

    public function __construct(
        private readonly ContaoFramework $framework,
        private readonly PictureFactoryInterface $pictureFactory,
        private readonly Studio $studio,
        private readonly string $projectDir,
    ) {
        $this->stringUtil = $this->framework->getAdapter(StringUtil::class);
    }

    /**
     * Inject more CSS classes to the mod_article template.
     */
    public function __invoke(Template $objTemplate): void
    {
        if (str_starts_with($objTemplate->getName(), 'mod_article')) {
            $arrClasses = [(string) $objTemplate->class];
            $arrBackgroundClasses = $this->stringUtil->deserialize((string) $objTemplate->backgroundClass, true);

            $objTemplate->projectDir = $this->projectDir;

            if ($objTemplate->addBackgroundImage) {
                $arrBackgroundClasses[] = 'has-background-image';

                if ($objTemplate->fixedBackgroundImage) {
                    $arrBackgroundClasses[] = 'kda_bgFixed';
                }

                $this->addImageToTemplate($objTemplate);
                $this->addBackgroundImageToTemplate($objTemplate);
            }

            $arrPaddingMobileClass = $this->stringUtil->deserialize((string) $objTemplate->paddingMobileClass, true);
            $arrPaddingTabletClass = $this->stringUtil->deserialize((string) $objTemplate->paddingTabletClass, true);
            $arrPaddingDesktopClass = $this->stringUtil->deserialize((string) $objTemplate->paddingDesktopClass, true);

            $arrMarginMobileClass = $this->stringUtil->deserialize((string) $objTemplate->marginMobileClass, true);
            $arrMarginTabletClass = $this->stringUtil->deserialize((string) $objTemplate->marginTabletClass, true);
            $arrMarginDesktopClass = $this->stringUtil->deserialize((string) $objTemplate->marginDesktopClass, true);

            $arrClasses = array_merge($arrClasses, $arrBackgroundClasses, $arrPaddingMobileClass, $arrPaddingTabletClass, $arrPaddingDesktopClass, $arrMarginMobileClass, $arrMarginTabletClass, $arrMarginDesktopClass);
            $arrClasses = array_unique(array_filter($arrClasses));
            $objTemplate->class = implode(' ', $arrClasses);
        }
    }

    private function addImageToTemplate(Template $objTemplate): void
    {
        $objTemplate->fullsize = false;
        $objTemplate->overwriteMeta = false;

        $objFile = FilesModel::findByUuid($objTemplate->singleSRC);

        if (null === $objFile || !is_file(Path::makeAbsolute($objFile->path,$this->projectDir))) {
            return;
        }

        $objTemplate->singleSRC = $objFile->path;
        $objTemplate->objFilesModel = $objFile;

        $figure = $this->studio
            ->createFigureBuilder()
            ->from($objTemplate->objFilesModel)
            ->setSize($objTemplate->size)
            ->enableLightbox(false)
            ->buildIfResourceExists()
        ;

        $figure?->applyLegacyTemplateData($objTemplate);
    }

    private function addBackgroundImageToTemplate(Template $objTemplate): void
    {
        $src = Path::makeAbsolute($objTemplate->singleSRC, $this->projectDir);

        if (!is_file($src)) {
            return;
        }

        $picture = $this->pictureFactory->create($src, $objTemplate->size);

        $arrPicture = $picture->getImg();

        if (empty($arrPicture['src'])) {
            return;
        }

        /** @var Image $deferredImage */
        $deferredImage = $arrPicture['src'];

        $objTemplate->backgroundImage = $deferredImage;
    }
}
