<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/", name="homepage")
 */
class MainController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return new Response('OK');
    }

}
