<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotifiableNotification
 *
 * @ORM\Table(name="notifiable_notification", indexes={@ORM\Index(name="IDX_ADCFE0FAEF1A9D84", columns={"notification_id"}), @ORM\Index(name="IDX_ADCFE0FAC3A0A4F8", columns={"notifiable_entity_id"})})
 * @ORM\Entity
 */
class NotifiableNotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seen", type="boolean", nullable=false)
     */
    private $seen;

    /**
     * @var \NotifiableEntity
     *
     * @ORM\ManyToOne(targetEntity="NotifiableEntity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notifiable_entity_id", referencedColumnName="id")
     * })
     */
    private $notifiableEntity;

    /**
     * @var \Notification
     *
     * @ORM\ManyToOne(targetEntity="Notification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_id", referencedColumnName="id")
     * })
     */
    private $notification;


}

