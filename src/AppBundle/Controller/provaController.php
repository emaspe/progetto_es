<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class provaController extends Controller
{
    /**
     * @Route("/prova", name="ciao")
     */
    public function provaAction(Request $request)
    {
       // die("ciao a tutti !");
        // replace this example code with whatever you need
        return $this->render('default/form.html');
    }

/**
     * @Route("/prova", name="prova")
     */

    public function emaAction(Request $request)
    {
       // die("ciao a tutti !");
        // replace this example code with whatever you need
        //return $this->render('default/form.html');
        die ("ciao");

    }
}