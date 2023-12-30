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

namespace Markocupic\ContaoArticleClassSelectBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public const ROOT_KEY = 'markocupic_article_class_select';

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder(self::ROOT_KEY);
        $treeBuilder
            ->getRootNode()
            ->children()
                ->arrayNode('container_class')
                    ->info('Allows to configure the container class in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'container',
                        'container p-0',
                        'container-fluid',
                        'container-fluid p-0 m-0',
                    ])
                ->end()
                ->arrayNode('background_class')
                    ->info('Allows to configure the background class in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'article-boxed-transparent',
                        'article-boxed-white',
                        'article-boxed-blue',
                        'article-boxed-gray',
                        'article-boxed-darkgray',
                        'article-boxed-dark',
                        'article-boxed-darkcyan',
                        'article-boxed-red',
                        'article-transparent',
                        'article-white',
                        'article-blue',
                        'article-gray',
                        'article-darkgray',
                        'article-dark',
                        'article-darkcyan',
                        'article-red',
                        'dark-mode',
                        'gradient-blue',
                        'gradient-dark',
                        'gradient-gray',
                        'gradient-darkgray',
                        'gradient-darkcyan',
                        'gradient-red',
                    ])
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
