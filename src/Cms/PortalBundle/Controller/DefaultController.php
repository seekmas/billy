<?php

namespace Cms\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('CmsPortalBundle:Default:index.html.twig');
    }

    public function introduceAction()
    {
    	return $this->render('CmsPortalBundle:Default:introduce.html.twig');
    }
}
