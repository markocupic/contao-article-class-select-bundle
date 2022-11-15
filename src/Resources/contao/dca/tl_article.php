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

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// Extend the default palettes
PaletteManipulator::create()
    ->addLegend('article_class_select_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField(['containerClass', 'backgroundClass'], 'article_class_select_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article')
;

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = [
    'exclude' => true,
    'filter' => true,
    'default' => 'main',
    'inputType' => 'select',
    'options' => ['container', 'container p-0', 'container-fluid', 'container-fluid p-0 m-0'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql' => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass'] = [
    'exclude' => true,
    'filter' => true,
    'default' => 'main',
    'inputType' => 'select',
    'options' => ['article-boxed-white', 'article-boxed-blue', 'article-gray', 'article-darkgray', 'article-white', 'article-dark', 'article-blue', 'article-darkcyan', 'dark-mode', 'gradient-blue', 'gradient-dark', 'gradient-gray', 'gradient-darkgray', 'gradient-darkcyan'],
    'eval' => ['tl_class' => 'w50', 'multiple' => true, 'chosen' => true, 'includeBlankOption' => true],
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql' => 'blob NULL',
];
