<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\admin;

class adminController extends Controller
{
	
	
    public function loginAction(Request $request)
    {
	$error='';
        $status='Admin';
	$request = $this->getRequest();
        $session = $request->getSession();
	$register = new admin();
	$form = $this->createFormBuilder($register)
         ->add('username', 'text',array('required' => false))
         ->add('password', 'password',array('required' => false))
          ->getForm();
         $em = $this->getDoctrine()->getManager();
         if ($request->getMethod() == 'POST') 
	  	{
		  		$form->bind($request);
				if($form->isValid()) 
				{
					
					$name = $form["username"]->getData();
	        			$password = $form["password"]->getData();
					 $em = $this->getDoctrine()->getManager();
					$repository1 = $em->getRepository('RepairStoreBundle:admin');
					$query = $repository1->authadmin($name,$password);
					if($query == true)
					{
					$id=$query[0]['id'];
					$username=$query[0]['username'];
					$session->set('id',$id);
					$session->set('username',$username);
				return $this->redirect($this->generateUrl('panel'));

					}
					else
					{
					$error='sorry username or password is inavlid';
         return $this->render('RepairLoginBundle:login:afflogin.html.php', array(
            'form' => $form->createView(),'error'=>$error,'status'=>$status));


					}

				}
			  else
			  {
				return $this->render('RepairLoginBundle:login:afflogin.html.php', array(
            'form' => $form->createView(),'error'=>$error,'status'=>$status));
			}

		}
         
 return $this->render('RepairLoginBundle:login:afflogin.html.php', array(
            'form' => $form->createView(),'error'=>$error,'status'=>$status));
           
    }
public function showAction(Request $request)
{
       $id = $this->get('session')->get('id');
	$username = $this->get('session')->get('username');
	$request = $this->getRequest();
        $user = new admin();
        $em = $this->getDoctrine()->getManager();
	  $repository = $em->getRepository('RepairStoreBundle:admin');
	    $result = $repository->display();
		if(!isset($id))
		{
		return $this->redirect($this->generateUrl('login'));

		}
	  else
	  {
	  return $this->render('RepairLoginBundle:login:success.html.php',array('result'=>$result,'username'=>$username)); 
	}

}
}
