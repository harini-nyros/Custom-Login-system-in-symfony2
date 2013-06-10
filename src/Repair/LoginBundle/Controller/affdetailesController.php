<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\admin;

class affdetailesController extends Controller
{
	
	
    public function detailesAction(Request $request)
    {
	$request = $this->getRequest();
	$id = $this->get('session')->get('id');
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('RepairStoreBundle:admin');
	$query = $repository->affdetailes($id);
	return $this->render('RepairLoginBundle:admin:affdetailes.html.php',array('query'=>$query)); 

    }
}
