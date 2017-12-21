<?php
/**
 * @copyright  Marko Cupic 2017 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao Article Class Select Bundle
 * @license    LGPL-3.0+
 * @see	       https://github.com/markocupic/contao-article-class-select-bundle
 *
 */


// Palettes
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('{teaser_legend', '{article_class_select_legend},containerClass,backgroundClass;{teaser_legend', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);


// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['containerClass'],
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => array('container', 'container-fluid'),
    'eval'      => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql'       => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['backgroundClass'],
    'exclude'   => true,
    'filter'    => true,
    'default'   => 'main',
    'inputType' => 'select',
    'options'   => array('article-grey'),
    'eval'      => array('tl_class' => 'w50', 'includeBlankOption' => true),
    'reference' => &$GLOBALS['TL_LANG']['tl_article'],
    'sql'       => "varchar(32) NOT NULL default ''"
);


