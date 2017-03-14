<?php

namespace Librinfo\SonataSyliusUserBundle\Entity\OuterExtension;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;

trait HasUsers
{
    /**
     * @var Collection
     */
    private $users;

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function addUser(UserInterface $user)
    {
        $this->users->add($user);

        return $this;
    }

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function removeUser(UserInterface $user)
    {
        $this->users->removeElement($user);

        return $this;
    }

    /**
     * @return Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function initUsers()
    {
        $this->users = new ArrayCollection();
    }
}
