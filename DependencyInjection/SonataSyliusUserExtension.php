<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SonataSyliusUserBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;
use Blast\CoreBundle\DependencyInjection\BlastCoreExtension;

class SonataSyliusUserExtension extends BlastCoreExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
//        $configuration = new Configuration();
//        $config = $this->processConfiguration($configuration, $configs);
//
//        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
//        $loader->load('services.yml');
//        $loader->load('admin.yml');
//
//        $container->setParameter('librinfo_varieties', $config);
//
//        if ($container->getParameter('kernel.environment') == 'test')
//        {
//            $loader->load('datafixtures.yml');
//        }
//
//        $this->mergeParameter('blast', $container, __DIR__ . '/../Resources/config');
    }

}
