<?php
/**
 * @copyright  Marko Cupic 2017 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao Article Class Select Bundle
 * @license    LGPL-3.0+
 * @see           https://github.com/markocupic/contao-article-class-select-bundle
 *
 */

// Extend the default palettes
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('article_class_select_legend', 'teaser_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
    ->addField(array('containerClass', 'backgroundClass'), 'article_class_select_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article');

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['containerClass'],
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => array('container', 'container-fluid', 'container-fluid p-0 m-0'),
    'eval'      => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql'       => "varchar(32) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['backgroundClass'],
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => array('article-boxed-white', 'article-boxed-blue', 'article-gray', 'article-darkgray', 'article-white', 'article-dark', 'article-blue', 'article-darkcyan', 'dark-mode', 'gradient-blue', 'gradient-dark', 'gradient-gray', 'gradient-darkgray', 'gradient-darkcyan'),
    'eval'      => array('tl_class' => 'w50', 'multiple' => true, 'chosen' => true, 'includeBlankOption' => true),
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql'        => "blob NULL",
);
