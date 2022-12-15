<?php

namespace app\controllers;

use core\Application;
use core\Controller;
use app\models\HomeModel;

/** Handle functionality for home page. */
class HomeController extends Controller
{
    public function index(): string
    {
        $homeModel = new HomeModel();
        $data = ['title' => 'home',
            'page' => $homeModel->getPageText()];
        $data['description_html'] = $homeModel->getViewHtml('html_description', $data);

        return $this->render('home', $data);
    }

    public function faq(): string
    {
        $homeModel = new HomeModel();
        $data = ['title' => 'FAQ',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/accordion.css' rel='stylesheet' type='text/css'>",
            'faq' => $homeModel->getFAQ()];

        return $this->render('faq', $data);
    }

    public function contact(): string
    {

        if (Application::$app->router->getMethod() === 'post') // On vérifie si le sujet a été remplie: c'est juste pour éviter que le serveur exécute tout le script php. Ce qui enverait une erreure
        {
            $to="isante044@gmail.com";   //destinataire du mail
            $subject=$_POST['subject'];  //sujet du mail
            $message="<strong>From :</strong>{$_POST['email']}<br>{$_POST['message']}<br><br><br>Cordialement ".$_POST['name'].'.'; //message du mail

            $headers=array(
                'From'=>  $_POST['email'],
                'Reply-To' => $_POST['email'],
                'content-type' => 'text/html'
            );   // Le header est un paramètre de la fonction mail qui contient entêtes
        
            $sentMail=mail($to,$subject,$message,$headers);
            if(!empty($_POST['message']) ) {
                if($sentMail){
                    echo "Your email has been sent successfully !";
                }else{
                    echo "Error !!!";
                }
            }
        }

        $data = ['title' => 'Contact',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/contact.css' rel='stylesheet' type='text/css'>"];

        return $this->render('contact', $data);
    }
}
