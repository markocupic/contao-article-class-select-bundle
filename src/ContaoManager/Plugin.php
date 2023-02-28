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

namespace Markocupic\ContaoArticleClassSelectBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Markocupic\ContaoArticleClassSelectBundle\MarkocupicContaoArticleClassSelectBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(MarkocupicContaoArticleClassSelectBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ]),
        ];
    }
}
