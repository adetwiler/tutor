<?php
/**
 * TutorService
 *
 * PHP version 7
 *
 * @category   TutorService
 * @package    AppBundle\Service
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * TutorService
 *
 * @category   TutorService
 * @package    AppBundle\Service
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */
class TutorService extends EntityService
{
    /**
     * @var Request
     */
    private $currentRequest;

    /**
     * TutorService constructor.
     * @param EntityManager $entityManager
     * @param RequestStack $requestStack
     */
    public function __construct(
        EntityManager $entityManager,
        RequestStack $requestStack
    ) {
        parent::__construct($entityManager);

        $this->currentRequest = $requestStack->getCurrentRequest();
    }

    /**
     * @param $criteria
     * @return array
     */
    public function findTutorsByCriteria($criteria)
    {
        return $this->entityManager->getRepository('AppBundle:Tutor')
            ->searchTutor($criteria)
        ;
    }
}
