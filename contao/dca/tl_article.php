<?php

declare(strict_types=1);

/*
 * This file is part of Contao Article Class Select Bundle.
 *
 * (c) Marko Cupic 2023 <m.cupic@gmx.ch>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-article-class-select-bundle
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

// Extend the default palettes
PaletteManipulator::create()
    ->addLegend('article_class_select_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField(['containerClass', 'backgroundClass'], 'article_class_select_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article');

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = [
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.container_class'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['container_class_ref'],
    'eval'      => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql'       => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass'] = [
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.background_class'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['background_class_ref'],
    'eval'      => ['tl_class' => 'w50', 'multiple' => true, 'chosen' => true, 'includeBlankOption' => true],
    'sql'       => 'blob NULL',
];
