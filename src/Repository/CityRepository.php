<?php

namespace App\Repository;

use App\Entity\City;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, City::class);
    }

    public function findByDepartment($id)
    {
        return $this
            ->createQueryBuilder("c")
            ->innerJoin("c.department", "d")
            ->where("d.id = :id")
                ->setParameter("id", $id)
            ->getQuery()
            ->getArrayResult()
        ;
    }
}
