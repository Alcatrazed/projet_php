<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
//implements PasswordUpgraderInterface
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class); // Spécifiez ici la classe d'entité gérée (User::class)
    }


//    /**
//     * Used to upgrade (rehash) the user's password automatically over time.
//     * @param PasswordAuthenticatedUserInterface $user
//     * @param string $newHashedPassword
//     */
//    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
//    {
//        if (!$user instanceof User) {
//            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
//        }
//
//        $user->setPassword($newHashedPassword);
////        $this->getEntityManager()->persist($user);
////        $this->getEntityManager()->flush();
//    }

    //    /**
    //     * @return User[] Returns an array of User objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

//        public function findOneBySomeField($value): ?User
//        {
//            return $this->createQueryBuilder('u')
//                ->andWhere('u.exampleField = :val')
//                ->setParameter('val', $value)
//                ->getQuery()
//                ->getOneOrNullResult()
//            ;
//        }
}
