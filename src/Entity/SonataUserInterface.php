<?php

/*
 * Copyright (C) Paweł Jędrzejewski
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SonataSyliusUserBundle\Entity;

use Sylius\Component\User\Model\UserInterface as BaseUserInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 * @author Marcos Bezerra de Menezes <marcos.bezerra@libre-informatique.fr>
 */
interface SonataUserInterface extends BaseUserInterface
{
    const ROLE_DEFAULT = 'ROLE_USER';
    const DEFAULT_ADMIN_ROLE = 'ROLE_SONATA_ADMIN';

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * @return string
     */
    public function getLocaleCode();

    /**
     * @param string $code
     */
    public function setLocaleCode($code);
}
