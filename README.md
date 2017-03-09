# Sonata Sylius User Bundle

Symfony bundle providing a bridge between SonataAdmin and SyliusUser (an alternative to SonataUserBundle)

## Installation

We assume you're familiar with [Composer](http://packagist.org), a dependency manager for PHP.
Use the following command to add the bundle to your `composer.json` and download the package.

If you have [Composer installed globally](http://getcomposer.org/doc/00-intro.md#globally)

```bash
$ composer require libre-informatique/sonata-sylius-user-bundle
```
Otherwise you have to download .phar file.

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar require libre-informatique/sonata-sylius-user-bundle
```

### Adding required bundles to the kernel

You need to enable the bundle inside the kernel.

If you're not using any other Sylius bundles, you will also need to add `SyliusUserBundle` and its dependencies to kernel.
Don't worry, everything was automatically installed via Composer.

```php
<?php

// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // SYLIUS USER BUNDLE AND DEPENDENCIES
        new FOS\RestBundle\FOSRestBundle(),
        new JMS\SerializerBundle\JMSSerializerBundle($this),
        new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
        new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
        new Bazinga\Bundle\HateoasBundle\BazingaHateoasBundle(),
        new winzou\Bundle\StateMachineBundle\winzouStateMachineBundle(),
        // Sylius Bundles have to be declared before DoctrineBundle
        new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
        new Sylius\Bundle\MailerBundle\SyliusMailerBundle(),
        new Sylius\Bundle\UserBundle\SyliusUserBundle(),

        // OTHER BUNDLES...
        new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
        // [...]

        // SONATA SYLIUS USER BUNDLE
        new Librinfo\SonataSyliusUserBundle\SonataSyliusUserBundle(),
    );
}
```

Note:
Please register `SyliusUserBundle` before `DoctrineBundle`. This is important as it uses listeners which have to be processed first.

Configure Doctrine extensions
-----------------------------

Configure doctrine extensions which are used by the bundle.

```yaml
# app/config/config.yml
stof_doctrine_extensions:
    orm:
        default:
            timestampable: true
```

Updating database schema
------------------------

Run the following command.

```bash
$ php bin/console doctrine:schema:update --force
```

Warning:
This should be done only in **dev** environment! We recommend using Doctrine migrations, to safely update your schema.

Congratulations! The bundle is now installed and ready to use. :boom: