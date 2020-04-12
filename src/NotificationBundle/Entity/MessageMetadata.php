<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageMetadata
 *
 * @ORM\Table(name="message_metadata")
 * @ORM\Entity
 */
class MessageMetadata
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

