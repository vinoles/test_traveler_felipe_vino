<?php

namespace WebSite\AppBundle\Services;

use Doctrine\ORM\EntityManager;

class User
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getUser()
    {
        $user = $this->em->getRepository('WebSiteAppBundle:User')->find(1);

        return $user;
    }

}