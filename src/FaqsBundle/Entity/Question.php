<?php

namespace FaqsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="questionArea", type="string", length=255, nullable=false)
     */
    private $questionarea;

    /**
     * @return int
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * @param int $idquestion
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;
    }

    /**
     * @return string
     */
    public function getQuestionarea()
    {
        return $this->questionarea;
    }

    /**
     * @param string $questionarea
     */
    public function setQuestionarea($questionarea)
    {
        $this->questionarea = $questionarea;
    }
    public function __toString() {
        return "some string representation of your object";
    }


}

