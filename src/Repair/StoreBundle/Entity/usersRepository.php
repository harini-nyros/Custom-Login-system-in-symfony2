<?php

namespace Repair\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * usersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class usersRepository extends EntityRepository
{
public function authorize($name,$password)
{
 	$em = $this->getEntityManager();
 	$query = $em->createQuery("SELECT u.role,u.id FROM RepairStoreBundle:users u where u.username='".	$name."' and u.password='".$password."'")->getResult();
	return $query;
}
public function checkunameaff($username)
{
	$em = $this->getEntityManager();
	$result=$em->createQuery("SELECT u FROM RepairStoreBundle:users u where u.username='".$username."'");
        return $result;
        //return $result->getArrayResult();

}
public function edit($id)
{
	$em = $this->getEntityManager();
        $result=$em->createQuery("SELECT u FROM RepairStoreBundle:users u where u.id=$id");
        return $result->getArrayResult(); 

}
public function affliateusers($id)
{
	$em = $this->getEntityManager();
	$result=$em->createQuery("SELECT u FROM RepairStoreBundle:users u where u.parentid=$id");
        return $result->getArrayResult(); 
}
public function getaffname($id)
{
	$em = $this->getEntityManager();
	$result=$em->createQuery("SELECT u.username FROM RepairStoreBundle:users u where u.id=$id")->getResult();
	return $result;
}

public function parentname($pid)
{
	$em = $this->getEntityManager();
$result=$em->createQuery("SELECT a.username FROM RepairStoreBundle:affliates a where a.id=$pid")->getResult();
	return $result;

}
	
}
