<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
	return $this->render(
            'AcmeHelloBundle:Default:index1.html.php',
            array('name' => $name)
        );


        //return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
