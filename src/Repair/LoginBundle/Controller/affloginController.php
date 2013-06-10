<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\affliates;

class affloginController extends Controller
{
	
	
    public function affloginAction(Request $request)
    {
	$error='';
        $status='Affliate';
	$request = $this->getRequest();
        $session = $request->getSession();
	$register = new affliates();
	$form = $this->createFormBuilder($register,array('validation_groups' => array('login')))
         ->add('username', 'text', array('required' =>false))
         ->add('password', 'password', array('required' => false))
          ->getForm();
         $em = $this->getDoctrine()->getManager();
         if ($request->getMethod() == 'POST') 
	  	{
		  		$form->bind($request);
				if($form->isValid()) 
				{
					$name = $form["username"]->getData();
	        			$password = $form["password"]->getData();
					$repository1 = $em->getRepository('RepairStoreBundle:affliates');
					$query = $repository1->authorize($name,$password);
					if($query == true)
					{
					$id=$query[0]['id'];
					$uname=$query[0]['username'];
					$session->set('id',$id);
					$session->set('username',$uname);			
				return $this->redirect($this->generateUrl('affliatesection'));

					}
					else
					{
					$error='sorry username or password is inavlid';
         
 return $this->render('RepairLoginBundle:login:afflogin.html.php', array(
            'form' => $form->createView(),'error'=>$error,'status'=>$status));


					}

				}

		}
		        
 return $this->render('RepairLoginBundle:login:afflogin.html.php', array(
            'form' => $form->createView(),'error'=>$error,'status'=>$status));
           
    }
public function affliatesectionAction(Request $request)
{
$id = $this->get('session')->get('id');
 if(!isset($id))
		{
		return $this->redirect($this->generateUrl('login'));

		}
else
{
$username = $this->get('session')->get('username');
$em = $this->getDoctrine()->getManager();
$repository = $em->getRepository('RepairStoreBundle:affliates');
$res= $repository->affliateusers($id);
return $this->render('RepairLoginBundle:login:affliate.html.php',array('res'=>$res,'username'=>$username,));	
}	
}
}
