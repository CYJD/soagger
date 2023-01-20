<?php

namespace App\Repository;

use App\Entity\Checksum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CarDataRepository extends ServiceEntityRepository
{
	public function findChecksum()
	{
		return $this->createQueryBuilder('c')
            ->select()
			->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult()
        ;
	}
}