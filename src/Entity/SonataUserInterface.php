<?php

/*
 * This file is part of the Blast Project package.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
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
    public function getFirstName(): ?string;

    /**
     * @param string $firstName
     */
    public function setFirstName(?string $firstName): void;

    /**
     * @return string
     */
    public function getLastName(): ?string;

    /**
     * @param string $lastName
     */
    public function setLastName(?string $lastName): void;

    /**
     * @return string
     */
    public function getLocaleCode();

    /**
     * @param string $code
     */
    public function setLocaleCode($code);
}
