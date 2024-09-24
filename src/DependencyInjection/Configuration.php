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
                        'container px-0',
                        'container py-0',
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
                ->arrayNode('margin_mobile_class')
                    ->info('Allows to configure the margin class for mobile screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'mob_mabo_none',
                        'mob_mabo_s',
                        'mob_mabo_m',
                        'mob_mabo_l',
                        'mob_mabo_xl',
                    ])
                ->end()
                ->arrayNode('margin_tablet_class')
                    ->info('Allows to configure the margin class for tablet screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'tab_mabo_none',
                        'tab_mabo_s',
                        'tab_mabo_m',
                        'tab_mabo_l',
                        'tab_mabo_xl',
                    ])
                ->end()
                ->arrayNode('margin_desktop_class')
                    ->info('Allows to configure the margin class for desktop screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'desk_mabo_none',
                        'desk_mabo_s',
                        'desk_mabo_m',
                        'desk_mabo_l',
                        'desk_mabo_xl',
                    ])
                ->end()
                ->arrayNode('padding_mobile_class')
                    ->info('Allows to configure the padding class for mobile screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'mob_pad_none',
                        'mob_pad_s',
                        'mob_pad_m',
                        'mob_pad_l',
                        'mob_pad_xl',
                    ])
                ->end()
                ->arrayNode('padding_tablet_class')
                    ->info('Allows to configure the padding class for tablet screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'tab_pad_none',
                        'tab_pad_s',
                        'tab_pad_m',
                        'tab_pad_l',
                        'tab_pad_xl',
                    ])
                ->end()
                ->arrayNode('padding_desktop_class')
                    ->info('Allows to configure the padding class for desktop screens in the mod_article template.')
                    ->prototype('scalar')->end()
                    ->defaultValue([
                        'desk_pad_none',
                        'desk_pad_s',
                        'desk_pad_m',
                        'desk_pad_l',
                        'desk_pad_xl',
                    ])
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
