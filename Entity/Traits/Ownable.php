<?php

/*
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SonataSyliusUserBundle\Entity\Traits;

use Symfony\Component\Security\Core\User\UserInterface;

trait Ownable
{
    /**
     * @var UserInterface
     */
    private $owner = null;

    /**
     * @return UserInterface
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param UserInterface $owner
     * @return self
     */
    public function setOwner(UserInterface $owner = NULL)
    {
        $this->owner = $owner;

        return $this;
    }
}
