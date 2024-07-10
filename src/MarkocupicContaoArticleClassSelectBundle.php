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

namespace Markocupic\ContaoArticleClassSelectBundle;

use Markocupic\ContaoArticleClassSelectBundle\DependencyInjection\MarkocupicContaoArticleClassSelectExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MarkocupicContaoArticleClassSelectBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): MarkocupicContaoArticleClassSelectExtension
    {
        return new MarkocupicContaoArticleClassSelectExtension();
    }
}
