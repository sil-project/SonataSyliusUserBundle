<?php

namespace Librinfo\SonataSyliusUserBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\Container;

class BundleTest extends KernelTestCase
    {

    protected $container;

    protected function setUp() {
        static::bootKernel();

        /** @var Container $container */
        $this->container = self::$kernel->getContainer();
    }

    public function testServicesAreInitializable() {

        $this->markTestIncomplete('This test has not been implemented yet.');

        $serviceIds = array_filter($this->container->getServiceIds(), function ($serviceId) {
            return 0 === strpos($serviceId, "sonata_sylius_user" . '.');
        });

        foreach ($serviceIds as $serviceId) {
            $this->assertNotNull($this->container->get($serviceId));
        }
    }

    }
