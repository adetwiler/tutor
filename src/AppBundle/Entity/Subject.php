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
 * @ORM\Table(name="subject")
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }
}
