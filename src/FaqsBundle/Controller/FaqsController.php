<?php

namespace FaqsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FaqsController extends Controller
{
    public function indexAction(){
        return $this->render('@Faqs/FaqsViews/index.html.twig');

    }

    public function aboutAction(){
        return $this->render('@Faqs/FaqsViews/about.html.twig');

    }

    public function backAction(){
        return $this->render('@Faqs/FaqsViews/backfaqs.html.twig');

    }

}
