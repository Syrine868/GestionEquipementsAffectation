<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thread
 *
 * @ORM\Table(name="thread")
 * @ORM\Entity
 */
class Thread
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

