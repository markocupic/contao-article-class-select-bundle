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

use Markocupic\ContaoArticleClassSelectBundle\ContaoHooks\ParseTemplate;

$GLOBALS['TL_HOOKS']['parseTemplate'][] = [ParseTemplate::class, 'parseTemplate'];
