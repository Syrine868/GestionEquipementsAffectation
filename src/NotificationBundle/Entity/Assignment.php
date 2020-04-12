<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignment
 *
 * @ORM\Table(name="assignment", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_30C544BA2FD2FED5", columns={"idEquipment"})}, indexes={@ORM\Index(name="idEmp", columns={"idEmp"}), @ORM\Index(name="idEquipment", columns={"idEquipment"})})
 * @ORM\Entity
 */
class Assignment
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateP", type="date", nullable=false)
     */
    private $datep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateR", type="date", nullable=false)
     */
    private $dater;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=false)
     */
    private $state;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmp", referencedColumnName="idEmp")
     * })
     */
    private $idemp;

    /**
     * @var \Equipment
     *
     * @ORM\ManyToOne(targetEntity="Equipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipment", referencedColumnName="idEquipment")
     * })
     */
    private $idequipment;


}

