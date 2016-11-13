<?php
/**
 * Tutor
 *
 * PHP version 7
 *
 * @category   Tutor
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tutor
 *
 * @category   Tutor
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TutorRepository")
 * @ORM\Table(
 *    name="tutor",
 *    indexes={
 *        @ORM\Index(name="fullName_idx", columns={"full_name"}),
 *        @ORM\Index(name="zipCode_idx", columns={"zip_code"})
 *    }
 * )
 */
class Tutor
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fullName;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Subject", inversedBy="tutors")
     * @ORM\JoinTable(name="tutor_subjects",
     *      joinColumns={@ORM\JoinColumn(name="tutor_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="subject_id", referencedColumnName="id")}
     * )
     */
    private $subjects;

    /**
     * Tutor constructor.
     */
    public function __construct()
    {
        $this->subjects = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return integer
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param $zipCode
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubjects()
    {
        $subjects = [];
        if ($this->subjects) {
            foreach ($this->subjects as $subject) {
                $subjects[] = $subject->getSubjectName();
            }

            $subjects = implode(', ', $subjects);
        }

        return $subjects;
    }

    /**
     * @param Subject $subject
     * @return $this
     */
    public function addSubject(Subject $subject)
    {
        $this->subjects[] = $subject;

        return $this;
    }
}
