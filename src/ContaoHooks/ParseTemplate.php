<?php

declare(strict_types=1);

/*
 * This file is part of Contao Article Class Selct Bundle.
 *
 * (c) Marko Cupic 2022 <m.cupic@gmx.ch>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-article-class-select-bundle
 */

namespace Markocupic\ContaoArticleClassSelectBundle\ContaoHooks;

use Contao\StringUtil;
use Contao\Template;

class ParseTemplate
{
    public function parseTemplate(Template $objTemplate): void
    {
        if (false !== strpos($objTemplate->getName(), 'mod_article')) {
            $objTemplate->backgroundClass = '' !== $objTemplate->backgroundClass ? trim((string)$objTemplate->backgroundClass) : '';
            $arrBackgroundClasses = StringUtil::deserialize($objTemplate->backgroundClass, true);
            $strBackgroundClasses = implode(' ', $arrBackgroundClasses);

            $strClass = '' !== trim($objTemplate->class) ? trim($objTemplate->class) : '';
            $arrClasses = explode(' ', $strClass);
            $arrClasses[] = $strBackgroundClasses;
            $arrClasses = array_unique($arrClasses);
            $arrClasses = array_filter($arrClasses);
            $objTemplate->class = implode(' ', $arrClasses);
        }
    }
}
