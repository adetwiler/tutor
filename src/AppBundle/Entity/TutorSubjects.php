<?php
/**
 * TutorSubject
 *
 * PHP version 7
 *
 * @category   TutorSubject
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TutorSubject
 *
 * @category   TutorSubject
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 *
 * @ORM\Entity
 * @ORM\Table(name="tutor_subjects")
 */
class TutorSubjects
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $tutorId;

    /**
     * @ORM\Column(type="integer")
     */
    private $subjectId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTutorId()
    {
        return $this->tutorId;
    }

    /**
     * @param mixed $tutorId
     */
    public function setTutorId($tutorId)
    {
        $this->tutorId = $tutorId;
    }

    /**
     * @return mixed
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param mixed $subjectId
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }
}