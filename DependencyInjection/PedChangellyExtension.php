<?php

namespace PaneeDesign\ChangellyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class PedChangellyExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (array_key_exists('endpoint', $config)) {
            $container->setParameter('ped_changelly.endpoint', $config['endpoint']);
        }
        if (array_key_exists('api_key', $config)) {
            $container->setParameter('ped_changelly.api_key', $config['api_key']);
        }
        if (array_key_exists('api_secret', $config)) {
            $container->setParameter('ped_changelly.api_secret', $config['api_secret']);
        }
    }
}
