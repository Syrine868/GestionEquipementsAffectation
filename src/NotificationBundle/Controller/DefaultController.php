<?php

namespace NotificationBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Notification/Default/index.html.twig');
    }


    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('Asked Question');
        $notif->setMessage('This Your response');
        $notif->setLink('http://localhost/GestionEquipementsAffectation/web/app_dev.php/Faqs/listQuestions');
        // or the one-line method :
        $manager->createNotification('Asked Question','Your Response for question is here','http://localhost/GestionEquipementsAffectation/web/app_dev.php/Faqs/customer');

        // you can add a notification to a list of entities
        // the third parameter ``$flush`` allows you to directly flush the entities
        $manager->addNotification(array($this->getUser()), $notif, true);

        return $this->redirectToRoute('notification_list');
    }
}
