<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThreadMetadata
 *
 * @ORM\Table(name="thread_metadata")
 * @ORM\Entity
 */
class ThreadMetadata
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

