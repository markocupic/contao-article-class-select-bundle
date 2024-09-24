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

use Contao\BackendUser;
use Contao\Controller;
use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

// Subpalettes
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['addBackgroundImage'] = 'singleSRC,size,fixedBackgroundImage';

// Selectors
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'addBackgroundImage';

// Extend the default palettes
PaletteManipulator::create()
    // Add legends
    ->addLegend('article_class_select_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    ->addLegend('background_image_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    ->addLegend('padding_class_select_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    ->addLegend('margin_class_select_legend', 'expert_legend', PaletteManipulator::POSITION_BEFORE)
    // Add fields
    ->addField(['containerClass', 'backgroundClass'], 'article_class_select_legend', PaletteManipulator::POSITION_APPEND)
    ->addField(['addBackgroundImage'], 'background_image_legend', PaletteManipulator::POSITION_APPEND)
    ->addField(['paddingMobileClass', 'paddingTabletClass', 'paddingDesktopClass'], 'padding_class_select_legend', PaletteManipulator::POSITION_APPEND)
    ->addField(['marginMobileClass', 'marginTabletClass', 'marginDesktopClass'], 'margin_class_select_legend', PaletteManipulator::POSITION_APPEND)
    // Apply
    ->applyToPalette('default', 'tl_article');

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = [
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.container_class'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['container_class_ref'],
    'eval'      => ['tl_class' => 'w50', 'includeBlankOption' => true],
    'sql'       => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass'] = [
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.background_class'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['background_class_ref'],
    'eval'      => ['tl_class' => 'w50', 'multiple' => true, 'chosen' => true, 'includeBlankOption' => true],
    'sql'       => 'blob NULL',
];

$GLOBALS['TL_DCA']['tl_article']['fields']['paddingMobileClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.padding_mobile_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['padding_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['paddingTabletClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.padding_tablet_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['padding_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['paddingDesktopClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.padding_desktop_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['padding_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['marginMobileClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.margin_mobile_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['margin_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['marginTabletClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.margin_tablet_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['margin_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['marginDesktopClass'] = [
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => System::getContainer()->getParameter('markocupic_article_class_select.margin_desktop_class'),
    'eval'      => ['tl_class' => 'w33'],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['margin_class_ref'],
    'sql'       => "varchar(32) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['addBackgroundImage'] = [
    'inputType' => 'checkbox',
    'eval'      => ['submitOnChange' => true],
    'sql'       => ['type' => 'boolean', 'default' => false],
];

$GLOBALS['TL_DCA']['tl_article']['fields']['singleSRC'] = [
    'inputType' => 'fileTree',
    'eval'      => ['extensions' => '%contao.image.valid_extensions%', 'filesOnly' => true, 'fieldType' => 'radio', 'mandatory' => true, 'tl_class' => 'clr'],
    'sql'       => "binary(16) NULL",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['size'] = [
    'label'            => &$GLOBALS['TL_LANG']['MSC']['imgSize'],
    'inputType'        => 'imageSize',
    'reference'        => &$GLOBALS['TL_LANG']['MSC'],
    'options_callback' => static fn() => System::getContainer()->get('contao.image.sizes')->getOptionsForUser(BackendUser::getInstance()),
    'eval'             => ['rgxp' => 'natural', 'includeBlankOption' => true, 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50 clr'],
    'sql'              => "varchar(128) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_article']['fields']['fixedBackgroundImage'] = [
    'inputType' => 'checkbox',
    'sql'       => ['type' => 'boolean', 'default' => false],
];
