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
$GLOBALS['TL_LANG']['tl_article']['article_class_select_legend'] = 'Artikel-Layout-Einstellungen';
$GLOBALS['TL_LANG']['tl_article']['background_image_legend'] = 'Hintergrundbild';
$GLOBALS['TL_LANG']['tl_article']['padding_class_select_legend'] = 'Innerer Abstand nach oben und unten';
$GLOBALS['TL_LANG']['tl_article']['article_class_select_legend'] = 'Artikel-Layout-Einstellungen';
$GLOBALS['TL_LANG']['tl_article']['margin_class_select_legend'] = 'Äußerer Abstand nach unten zum nächsten Artikel';

// Fields
$GLOBALS['TL_LANG']['tl_article']['containerClass'] = ['Container-Klasse', 'Bitte wählen Sie die Container-Klasse aus.'];
$GLOBALS['TL_LANG']['tl_article']['backgroundClass'] = ['Hintergrund-Klasse', 'Bitte wählen Sie eine oder mehrere Hintergrund-Klassen aus.'];
$GLOBALS['TL_LANG']['tl_article']['paddingMobileClass'] = ['Mobile', 'Abstand in der Mobileansicht.'];
$GLOBALS['TL_LANG']['tl_article']['paddingTabletClass'] = ['Tablet', 'Abstand in der Tabletnsicht.'];
$GLOBALS['TL_LANG']['tl_article']['paddingDesktopClass'] = ['Desktop', 'Abstand in der Desktopansicht.'];
$GLOBALS['TL_LANG']['tl_article']['marginMobileClass'] = ['Mobile', 'Abstand in der Mobileansicht.'];
$GLOBALS['TL_LANG']['tl_article']['marginTabletClass'] = ['Tablet', 'Abstand in der Tabletnsicht.'];
$GLOBALS['TL_LANG']['tl_article']['marginDesktopClass'] = ['Desktop', 'Abstand in der Desktopansicht.'];
$GLOBALS['TL_LANG']['tl_article']['addBackgroundImage'] = ['Hintergrundbild hinzufügen', 'Dem Artikel ein Hintergrundbild hinzufügen.'];
$GLOBALS['TL_LANG']['tl_article']['singleSRC'] = ['Quelldatei', 'Bitte wählen Sie eine Datei oder einen Ordner aus der Dateiübersicht.'];
$GLOBALS['TL_LANG']['tl_article']['size'] = ['Bildgröße', 'Hier können Sie die Abmessungen und den Skalierungsmodus festlegen.'];
$GLOBALS['TL_LANG']['tl_article']['fixedBackgroundImage'] = ['Hintergrundbild fixieren', 'Das Hintergrundbild bleibt fest stehen und scrollt NICHT mit.'];

// References
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container'] = 'Mittig zentriert [container]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container p-0'] = 'Mittig zentriert ohne padding [container p-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container px-0'] = 'Mittig zentriert ohne horizontales padding [container px-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container py-0'] = 'Mittig zentriert ohne vertikales padding [container py-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container mt-0 mb-0'] = 'Mittig zentriert ohne vertikalen Aussenabstand [container mt-0 mb-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container p-0 mt-0 mb-0'] = 'Mittig zentriert ohne vertikalen Aussenabstand und ohne Innenabstand [container p-0 mt-0 mb-0]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container-fluid'] = 'Ganze Breite [container-fluid]';
$GLOBALS['TL_LANG']['tl_article']['container_class_ref']['container-fluid p-0 m-0'] = 'Ganze Breite ohne padding und margin [container-fluid p-0 m-0]';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['mob_pad_xl'] = 'Sehr großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['tab_pad_xl'] = 'Sehr großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['padding_class_ref']['desk_pad_xl'] = 'Sehr großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['mob_mabo_xl'] = 'Sehr großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['tab_mabo_xl'] = 'Sehr großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_none'] = 'Kein Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_s'] = 'Kleiner Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_m'] = 'Mittlerer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_l'] = 'Großer Abstand';
$GLOBALS['TL_LANG']['tl_article']['margin_class_ref']['desk_mabo_xl'] = 'Sehr großer Abstand';
