<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\users;

class clientloginController extends Controller
{
	
	
    public function loginAction(Request $request)
    {
	$error='';
        $status='Client';
	$request = $this->getRequest();
        $session = $request->getSession();
	$register = new users();
	$form =  $this->createFormBuilder($register,array('validation_groups' => array('login')))
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
					$repository1 = $em->getRepository('RepairStoreBundle:users');
					$query = $repository1->authorize($name,$password);
				        if($query == true)
					{
					$id=$query[0]['id'];
					$session->set('id',$id);
				return $this->redirect($this->generateUrl('clientsection'));

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
public function clientsectionAction(Request $request)
    {
	$id = $this->get('session')->get('id');
	 if(!isset($id))
		{
		return $this->redirect($this->generateUrl('login'));

		}
	else
	{
		$em = $this->getDoctrine()->getManager();
	  	$repository = $em->getRepository('RepairStoreBundle:users');
		$res= $repository->edit($id);
		$pid=$res[0]['parentid'];
		$name=$repository->parentname($pid);
		if(empty($name))
		{
			$name=array('0'=>array('username'=>'not refered'));
	return $this->render('RepairLoginBundle:login:user.html.php',array('res'=>$res,'name'=>$name));
		}
		else
		{
		return $this->render('RepairLoginBundle:login:user.html.php',array('res'=>$res,'name'=>$name));
		}
	}
   }
}
