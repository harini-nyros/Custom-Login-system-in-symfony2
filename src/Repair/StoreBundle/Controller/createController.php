<?php

namespace Repair\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Repair\StoreBundle\Entity\roles;
use Repair\StoreBundle\Entity\users;
use Repair\StoreBundle\Entity\attachments;
use Symfony\Component\HttpFoundation\Response;

class createController extends Controller
{
    public function createAction()
    {
    	$users= new users();
        $users->setUsername('duyfgh');
	$users->setPassword('fdf');
        $users->setRole('0');
	$users->setName('dsd');
        $users->setEmail('fdfd');
        $users->setTo('dsf');
        $users->setFrom('fdfd');
	 $users->setNote('fdfd');
	$users->setTitle('dfdf');
	
        $attachments = new attachments();
	$attachments->setPath('fhj');
        $attachments->setUserId($users);

        $em = $this->getDoctrine()->getManager();
	$em->persist($users);
        $em->persist($attachments);
        
        $em->flush();

        return new Response(
            'Created  id: '.$users->getId().' and user id: '.$attachments->getId()
        );
    }
}
