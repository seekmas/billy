<?php

namespace Cms\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function navAction( $route )
    {
        return $this->render('CmsModuleBundle:Default:nav.html.twig' , array('route' => $route));
    }

    public function homeAction()
    {
    	return $this->render('CmsModuleBundle:Default:home.html.twig');
    }

    public function footerAction()
    {
    	return $this->render('CmsModuleBundle:Default:footer.html.twig');
    }
}
