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

namespace Librinfo\SonataSyliusUserBundle\Admin;

use Blast\CoreBundle\Admin\CoreAdmin;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SonataUserAdmin extends CoreAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        parent::configureRoutes($collection);

        $collection->remove('duplicate');

        if (!$this->isGranted('ROLE_SUPER_ADMIN')) {
            $collection->remove('delete');
            $collection->remove('edit');
        }
    }

    protected function configureFormFields(FormMapper $mapper)
    {
        parent::configureFormFields($mapper);

        $mapper->remove('roles');
        $mapper->tab('form_tab_general')->with('form_group_roles')->add('roles', ChoiceType::class, [
            'choices'  => $this->getRolesChoices(),
            'multiple' => true,
            'expanded' => true,
        ]);

        $this->getSubject()->setLocaleCode('fr_FR');
    }

    public function getRolesChoices()
    {
        $roles = [];

        $roleHierarchy = array_keys($this->getConfigurationPool()->getContainer()->getParameter('security.role_hierarchy.roles'));

        array_walk_recursive($roleHierarchy, function ($role) use (&$roles) {
            $roles[$role] = $role;
        });

        ksort($roles);

        return $roles;
    }
}
