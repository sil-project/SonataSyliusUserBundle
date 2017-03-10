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

trait Traceable
{
    /**
     * @var UserInterface
     */
    private $createdBy = null;

    /**
     * @var UserInterface
     */
    private $updatedBy = null;

    /**
     * @return UserInterface
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param UserInterface $createdBy
     *
     * @return Traceable
     */
    public function setCreatedBy(UserInterface $createdBy = NULL)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param UserInterface $updatedBy
     *
     * @return Traceable
     */
    public function setUpdatedBy(UserInterface $updatedBy = NULL)
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
}
