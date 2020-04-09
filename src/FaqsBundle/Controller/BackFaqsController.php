<?php

namespace FaqsBundle\Controller;

use EquipementBundle\Form\AssignmentType;
use FaqsBundle\Entity\Reponse;
use FaqsBundle\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class BackFaqsController extends Controller
{
    public function ListFaqsBackAction(){
        $list_faqs=$this->getDoctrine()->getRepository(Reponse::class)->findAll();
        return $this->render('@Faqs/BackFaqs/backfaqs.html.twig',array('list_faqs'=>$list_faqs));

    }
    public function AddFaqsBackAction(Request $request, Reponse $rep=null){
        if(!$rep){
            $rep = new Reponse();
        }
           $formFaqs= $this->createForm(ReponseType::class, $rep);
         $formFaqs->handleRequest($request);
          if ($formFaqs->isSubmitted() && $formFaqs->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rep);
            $em->flush();
            return $this->redirectToRoute('back_listfaqs');
         }
      return $this->render('@Faqs/BackFaqs/addFaqsback.html.twig', array('formFaqs'=>$formFaqs->createView()));
    }
    public  function  deleteFaqsAction($idReponse){
        $re = $this->getDoctrine()->getRepository(Reponse::class)->find($idReponse);
        $em= $this->getDoctrine()->getManager();
        $em->remove($re);
        $em->flush();
        return $this->redirectToRoute('back_listfaqs');
    }
    public function UpdateFaqsAction(Request $request,$idReponse){
        $finder=$this->getDoctrine()->getRepository(Reponse::class)->find($idReponse);
        $form=$this->createForm(ReponseType::class,$finder);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($finder);
            $em->flush();
            return $this->redirectToRoute('back_listfaqs');
        }
       return $this->render('@Faqs/BackFaqs/editFaqsback.html.twig',array('form'=>$form->createView(),'idReponse'=>$idReponse));
    }

}
