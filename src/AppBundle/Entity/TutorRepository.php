<?php
/**
 * TutorRepository
 *
 * PHP version 7
 *
 * @category   TutorRepository
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * TutorRepository
 *
 * @category   TutorRepository
 * @package    AppBundle\Entity
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */
class TutorRepository extends EntityRepository
{
    /**
     * @param $criteria
     * @return array
     */
    public function searchTutor($criteria)
    {
        return $this->createQueryBuilder('tutor')
            ->leftJoin('AppBundle\\Entity\\TutorSubjects', 'tutor_subjects', Join::WITH, 'tutor.id = tutor_subjects.tutorId')
            ->leftJoin('AppBundle\\Entity\\Subject', 'subject', Join::WITH, 'subject.id = tutor_subjects.subjectId')
            ->where('tutor.fullName LIKE :criteria')
            ->orWhere('tutor.zipCode LIKE :criteria')
            ->orWhere('subject.subjectName LIKE :criteria')
            ->setParameter('criteria', '%' . $criteria . '%')
            ->addGroupBy('tutor.id')
            ->getQuery()
            ->getResult()
        ;
    }
}
