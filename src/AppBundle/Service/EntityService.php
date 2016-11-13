<?php
/**
 * EntityService
 *
 * PHP version 5
 *
 * @category   EntityService
 * @package    AppBundle\Service
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * EntityService
 *
 * @category   EntityService
 * @package    AppBundle\Service
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */
class EntityService
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * TutorService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param $entity
     * @return $this
     */
    public function save($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        return $this;
    }

    /**
     * @param $entity
     * @return $this
     */
    public function merge($entity)
    {
        $this->entityManager->merge($entity);
        $this->entityManager->flush();

        return $this;
    }

    /**
     * @param $entity
     * @return $this
     */
    public function delete($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();

        return $this;
    }
}
