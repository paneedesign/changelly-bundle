<?php

namespace PaneeDesign\ChangellyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ped_changelly');

        $rootNode
            ->children()
            ->scalarNode('endpoint')->end()
            ->scalarNode('api_key')->end()
            ->scalarNode('api_secret')->end()
            ->end();

        return $treeBuilder;
    }
}
