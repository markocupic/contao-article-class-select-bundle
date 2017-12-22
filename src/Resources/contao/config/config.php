<?php
/**
 * @copyright  Marko Cupic 2017 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao Article Class Select Bundle
 * @license    LGPL-3.0+
 * @see	       https://github.com/markocupic/contao-article-class-select-bundle
 *
 */


$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('Markocupic\ContaoArticleClassSelectBundle\ContaoHooks\ParseTemplate', 'parseTemplate');


