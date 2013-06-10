<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
        'create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\StoreBundle\\Controller\\createController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),),
        'hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\homeController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clilogin',    ),  ),  4 =>   array (  ),),
        'clientlogin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\clientloginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientlogin',    ),  ),  4 =>   array (  ),),
        'afflogin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\affloginController::affloginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affliatelogin',    ),  ),  4 =>   array (  ),),
        'adminlogin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\adminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminlogin',    ),  ),  4 =>   array (  ),),
        'clientreg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\registerBundle\\Controller\\registerController::clientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientregistration',    ),  ),  4 =>   array (  ),),
        'affliatereg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\registerBundle\\Controller\\registeraffliateController::affliateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affliateregistration',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RepairLoginBundle:success:success',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'panel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\adminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminpanel',    ),  ),  4 =>   array (  ),),
        'clientsection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\clientloginController::clientsectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientsection',    ),  ),  4 =>   array (  ),),
        'affliatesection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\affloginController::affliatesectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affliatesection',    ),  ),  4 =>   array (  ),),
        'note' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\sendnoteController::noteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note',    ),  ),  4 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\sendnoteController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
        'adduser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\adduserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adduser',    ),  ),  4 =>   array (  ),),
        'deleteuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\deleteuserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteuser',    ),  ),  4 =>   array (  ),),
        'edituser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\edituserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edituser',    ),  ),  4 =>   array (  ),),
        'upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\uploadController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),),
        'addaccno' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\addaccnoController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addaccno',    ),  ),  4 =>   array (  ),),
        'score' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\scoreController::scoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/score',    ),  ),  4 =>   array (  ),),
        'addaff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\addaffController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addaffliate',    ),  ),  4 =>   array (  ),),
        'creditinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\creditinfoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creditinfo',    ),  ),  4 =>   array (  ),),
        'affcreditinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\affcreditinfoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affcreditinfo',    ),  ),  4 =>   array (  ),),
        'clicreditinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\clicreditinfoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientcreditinfo',    ),  ),  4 =>   array (  ),),
        'cliresources' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\clientresController::resourceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientresources',    ),  ),  4 =>   array (  ),),
        'confirmation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\registerBundle\\Controller\\confirmationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/confirmation',    ),  ),  4 =>   array (  ),),
        'affdetailes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\affdetailesController::detailesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affliatedetailes',    ),  ),  4 =>   array (  ),),
        'addadminaff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\addadminaffController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addadminaffliate',    ),  ),  4 =>   array (  ),),
        'deleteaff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Repair\\LoginBundle\\Controller\\deleteaffController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteaff',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
