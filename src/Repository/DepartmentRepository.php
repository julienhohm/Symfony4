<?php

namespace App\Repository;

use App\Entity\Department;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class DepartmentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Department::class);
    }

    public function findByRegion($id)
    {
        return $this
            ->createQueryBuilder('d')
            ->innerJoin("d.region", "r")
            ->where("r.id = :id")
                ->setParameter("id", $id)
            ->getQuery()
            ->getArrayResult()
        ;
    }
}
