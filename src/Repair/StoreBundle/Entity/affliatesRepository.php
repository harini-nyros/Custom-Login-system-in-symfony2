<?php

namespace Repair\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * affliatesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class affliatesRepository extends EntityRepository
{
public function authorize($name,$password)
{
 	$em = $this->getEntityManager();
 	$query = $em->createQuery("SELECT a.id,a.username FROM RepairStoreBundle:affliates a where a.username='".	$name."' and a.password='".$password."'")->getResult();
  		return $query;
}
public function affliateusers($id)
{
	$em = $this->getEntityManager();
	$result=$em->createQuery("SELECT u FROM RepairStoreBundle:users u where u.parentid=$id");
        return $result->getArrayResult(); 
}
public function authadmin($name,$password)
{
	$em = $this->getEntityManager();
	$query = $em->createQuery("SELECT a.id FROM RepairStoreBundle:admin a where a.username='".	$name."' and a.password='".$password."'")->getResult();


}
}