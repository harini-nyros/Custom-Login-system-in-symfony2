<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\users;

class loginController extends Controller
{
	
	
    public function loginAction(Request $request)
    {

	$request = $this->getRequest();
	if ($request->getMethod() == 'POST') 
	  	{ 
			$value=$this->get('request')->request->get('logins');
			echo $value;
				if($value == 'iam Affliate')
				{
				  return $this->redirect($this->generateUrl('afflogin'));

				}
				else if($value == 'iam Client')
				{
					return $this->redirect($this->generateUrl('clientlogin'));
				}
				else
				{
					return $this->redirect($this->generateUrl('adminlogin'));
				}	
		}	
	  
         
         
 return $this->render('RepairLoginBundle:login:login.html.php');
           
    }
public function logoutAction(Request $request)
    {
		 $request = $this->getRequest();
		 $session = $request->getSession();
		 $session->remove('id');
		return $this->redirect($this->generateUrl('login'));
  }
	
}
