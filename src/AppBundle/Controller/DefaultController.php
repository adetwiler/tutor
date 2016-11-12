<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\SearchFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $searchForm = $this->createForm(SearchFormType::class);
        $searchForm->handleRequest($request);
        
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            echo"<pre>";var_dump('submitted');exit;
        }
        
        return $this->render('default/index.html.twig', [
            'form' => $searchForm->createView(),
        ]);
    }
}
