<?php

namespace FaqsBundle\Controller;


use FaqsBundle\Entity\Question;
use FaqsBundle\Entity\Reponse;
use FaqsBundle\Form\QuestionType;
use FaqsBundle\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FaqsController extends Controller
{
    public function indexAction(){
        return $this->render('@Faqs/FaqsViews/faqsfront.html.twig');

    }

    public function aboutAction(){
        return $this->render('@Faqs/FaqsViews/about.html.twig');

    }

    public function listFrontAction(){
        $reps=$this->getDoctrine()->getRepository(Reponse::class)->findAll();
        return $this->render('@Faqs/FaqsViews/faqsfront.html.twig', array('reps'=>$reps));
    }

    public function questionsAction(Request $request){
        $list_faqs =$this->getDoctrine()->getRepository(Reponse::class)->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination= $paginator->paginate(
            $list_faqs,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('@Faqs/FaqsViews/questions.html.twig', array('list_faqs'=>$list_faqs,'pagination'=>$pagination));
    }

    public function AddQuestionAction(Request $request, Reponse $ques=null){
        if(!$ques){
            $ques = new Question();
        }

          $formFaqs= $this->createForm(QuestionType::class, $ques);
         $formFaqs->handleRequest($request);
          if ($formFaqs->isSubmitted() && $formFaqs->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ques);
            $em->flush();
            return $this->redirectToRoute('list_questions_user');
        }
       return $this->render('@Faqs/FaqsViews/addQuestion.html.twig', array('formFaqs'=>$formFaqs->createView()));
    }

    public function listQuestionAction(Request $request){
        $list_questions= $this->getDoctrine()->getRepository(Question::class)->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination= $paginator->paginate(
            $list_questions,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('@Faqs/FaqsViews/listquestions.html.twig', array('list_questions'=>$list_questions,'pagination'=>$pagination));
    }
}
