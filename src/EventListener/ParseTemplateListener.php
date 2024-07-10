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
use Contao\StringUtil;
use Contao\Template;

#[AsHook(self::HOOK, priority: 100)]
class ParseTemplateListener
{
    public const HOOK = 'parseTemplate';

    private Adapter $stringUtil;

    public function __construct(
        private readonly ContaoFramework $framework,
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
            $arrClasses = array_merge($arrClasses, $arrBackgroundClasses);
            $arrClasses = array_unique(array_filter($arrClasses));
            $objTemplate->class = implode(' ', $arrClasses);
        }
    }
}
