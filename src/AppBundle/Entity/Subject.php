<?php
/**
 * Subject
 *
 * PHP version 7
 *
 * @category   Subject
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @category   Subject
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 *
 * @ORM\Entity
 * @ORM\Table(
 *    name="subject",
 *    indexes={
 *        @ORM\Index(name="subjectName_idx", columns={"subject_name"})
 *    }
 * )
 */
class Subject
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
    private $subjectName;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tutor", mappedBy="subjects")
     * @ORM\JoinTable(name="tutor_subjects",
     *      joinColumns={@ORM\JoinColumn(name="subject_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tutor_id", referencedColumnName="id")}
     * )
     */
    private $tutors;

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
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param string $subjectName
     * @return $this
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;

        return $this;
    }

    /**
     * @return array
     */
    public function getTutors()
    {
        return $this->tutors;
    }
}
