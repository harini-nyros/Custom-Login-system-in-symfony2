<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Repair\\StoreBundle\\Controller\\createController::createAction',  '_route' => 'create',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // hello
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',));
            }

            // index
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\homeController::homeAction',  '_route' => 'index',);
            }

        }

        if (0 === strpos($pathinfo, '/cli')) {
            // login
            if ($pathinfo === '/clilogin') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
            }

            // clientlogin
            if ($pathinfo === '/clientlogin') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\clientloginController::loginAction',  '_route' => 'clientlogin',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // afflogin
            if ($pathinfo === '/affliatelogin') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\affloginController::affloginAction',  '_route' => 'afflogin',);
            }

            // adminlogin
            if ($pathinfo === '/adminlogin') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\adminController::loginAction',  '_route' => 'adminlogin',);
            }

        }

        // clientreg
        if ($pathinfo === '/clientregistration') {
            return array (  '_controller' => 'Repair\\registerBundle\\Controller\\registerController::clientAction',  '_route' => 'clientreg',);
        }

        // affliatereg
        if ($pathinfo === '/affliateregistration') {
            return array (  '_controller' => 'Repair\\registerBundle\\Controller\\registeraffliateController::affliateAction',  '_route' => 'affliatereg',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'RepairLoginBundle:success:success',  '_route' => 'login_check',);
            }

        }

        // panel
        if ($pathinfo === '/adminpanel') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\adminController::showAction',  '_route' => 'panel',);
        }

        // clientsection
        if ($pathinfo === '/clientsection') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\clientloginController::clientsectionAction',  '_route' => 'clientsection',);
        }

        // affliatesection
        if ($pathinfo === '/affliatesection') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\affloginController::affliatesectionAction',  '_route' => 'affliatesection',);
        }

        // note
        if ($pathinfo === '/note') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\sendnoteController::noteAction',  '_route' => 'note',);
        }

        if (0 === strpos($pathinfo, '/add')) {
            // add
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\sendnoteController::addAction',  '_route' => 'add',);
            }

            // adduser
            if ($pathinfo === '/adduser') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\adduserController::addAction',  '_route' => 'adduser',);
            }

        }

        // deleteuser
        if ($pathinfo === '/deleteuser') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\deleteuserController::deleteAction',  '_route' => 'deleteuser',);
        }

        // edituser
        if ($pathinfo === '/edituser') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\edituserController::editAction',  '_route' => 'edituser',);
        }

        // upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\uploadController::uploadAction',  '_route' => 'upload',);
        }

        // addaccno
        if ($pathinfo === '/addaccno') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\addaccnoController::addAction',  '_route' => 'addaccno',);
        }

        // score
        if ($pathinfo === '/score') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\scoreController::scoreAction',  '_route' => 'score',);
        }

        // addaff
        if ($pathinfo === '/addaffliate') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\addaffController::addAction',  '_route' => 'addaff',);
        }

        // creditinfo
        if ($pathinfo === '/creditinfo') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\creditinfoController::infoAction',  '_route' => 'creditinfo',);
        }

        // affcreditinfo
        if ($pathinfo === '/affcreditinfo') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\affcreditinfoController::infoAction',  '_route' => 'affcreditinfo',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                // clicreditinfo
                if ($pathinfo === '/clientcreditinfo') {
                    return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\clicreditinfoController::infoAction',  '_route' => 'clicreditinfo',);
                }

                // cliresources
                if ($pathinfo === '/clientresources') {
                    return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\clientresController::resourceAction',  '_route' => 'cliresources',);
                }

            }

            // confirmation
            if ($pathinfo === '/confirmation') {
                return array (  '_controller' => 'Repair\\registerBundle\\Controller\\confirmationController::confirmAction',  '_route' => 'confirmation',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // affdetailes
            if ($pathinfo === '/affliatedetailes') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\affdetailesController::detailesAction',  '_route' => 'affdetailes',);
            }

            // addadminaff
            if ($pathinfo === '/addadminaffliate') {
                return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\addadminaffController::addAction',  '_route' => 'addadminaff',);
            }

        }

        // deleteaff
        if ($pathinfo === '/deleteaff') {
            return array (  '_controller' => 'Repair\\LoginBundle\\Controller\\deleteaffController::deleteAction',  '_route' => 'deleteaff',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
