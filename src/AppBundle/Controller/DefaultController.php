<?php
/**
 * DefaultController
 *
 * PHP version 5
 *
 * @category   DefaultController
 * @package    AppBundle\Controller
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */

namespace AppBundle\Controller;

use AppBundle\Form\Type\SearchFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * DefaultController
 *
 * @category   DefaultController
 * @package    AppBundle\Controller
 * @author     Andrew Detwiler <adetwiler@adidamnetworks.com>
 * @copyright  2016 Andrew Detwiler
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $tutors = [];
        $searchForm = $this->createForm(SearchFormType::class, null, array(
            'method' => 'GET'
        ));

        $searchForm->handleRequest($request);
        
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $tutors = $this->container->get('app.service.tutor')
                ->findTutorsByCriteria(
                    $request->query->get($searchForm->getName())['q']
                )
            ;
        }
        
        return $this->render('default/index.html.twig', [
            'form' => $searchForm->createView(),
            'results' => $tutors
        ]);
    }
}
