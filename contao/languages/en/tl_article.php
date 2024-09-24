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

// Legends
$GLOBALS['TL_LANG']['tl_article']['article_class_select_legend'] = 'article layout settings';
$GLOBALS['TL_LANG']['tl_article']['background_image_legend'] = 'Background image';
$GLOBALS['TL_LANG']['tl_article']['padding_class_select_legend'] = 'Inner spacing to top and bottom';
$GLOBALS['TL_LANG']['tl_article']['article_class_select_legend'] = 'Article layout settings';
$GLOBALS['TL_LANG']['tl_article']['margin_class_select_legend'] = 'Outer spacing to the bottom of the next article';

// Fields
$GLOBALS['TL_LANG']['tl_article']['containerClass'] = ['container class', 'Select the container class please.'];
$GLOBALS['TL_LANG']['tl_article']['backgroundClass'] = ['background class', 'Select one or more background classes please.'];
$GLOBALS['TL_LANG']['tl_article']['paddingMobileClass'] = ['Mobile', 'Spacing in mobile view'];
$GLOBALS['TL_LANG']['tl_article']['paddingTabletClass'] = ['Tablet', 'Spacing in tablet view'];
$GLOBALS['TL_LANG']['tl_article']['paddingDesktopClass'] = ['Desktop', 'Spacing in the desktop view'];
$GLOBALS['TL_LANG']['tl_article']['marginMobileClass'] = ['Mobile', 'Margin in mobile view'];
$GLOBALS['TL_LANG']['tl_article']['marginTabletClass'] = ['Tablet', 'Distance in tablet view'];
$GLOBALS['TL_LANG']['tl_article']['marginDesktopClass'] = ['Desktop', 'Spacing in desktop view'];
$GLOBALS['TL_LANG']['tl_article']['addBackgroundImage'] = ['Add background image', 'Add a background image to the article.'];
$GLOBALS['TL_LANG']['tl_article']['singleSRC'] = ['Source file', 'Please select a file or folder from the file overview.'];
$GLOBALS['TL_LANG']['tl_article']['size'] = ['Image size', 'Here you can specify the dimensions and the scaling mode.'];
$GLOBALS['TL_LANG']['tl_article']['fixedBackgroundImage'] = ['Fix background image', 'The background image remains fixed and does NOT scroll.'];

// References
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container'] = 'container [container]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container p-0'] = 'container without padding [container p-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container px-0'] = 'container without horizontal padding [container px-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container py-0'] = 'container without vertical padding [container py-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container mt-0 mb-0'] = 'container without vertical margin [container mt-0 mb-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container p-0 mt-0 mb-0'] = 'container without padding and vertical margin [container p-0 mt-0 mb-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container-fluid'] = 'container fluid';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container-fluid p-0 m-0'] = 'container fluid without padding and margin';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_none'] = 'No spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_s'] = 'Small spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_xl'] = 'Very large spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_none'] = 'No spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_s'] = 'Small spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_xl'] = 'Very large spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_none'] = 'No spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_s'] = 'Small spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_xl'] = 'Very large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_none'] = 'No margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_s'] = 'Small margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_xl'] = 'Very large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_none'] = 'No margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_s'] = 'Small margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_xl'] = 'Very large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_none'] = 'No margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_s'] = 'Small margin';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_m'] = 'Medium spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_l'] = 'Large spacing';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_xl'] = 'Very large spacing';
