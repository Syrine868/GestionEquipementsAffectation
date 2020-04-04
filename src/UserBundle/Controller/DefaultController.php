<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
            if ($this->isGranted('ROLE_ADMIN'))
            {
                return $this->render('@User/Default/index.html.twig');
            }
            else
            {
               return $this->render('@Faqs/Default/front.html.twig');
            }
    }


}
