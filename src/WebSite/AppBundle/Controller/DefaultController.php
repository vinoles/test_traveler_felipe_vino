<?php
/**
 * Creado por  Felipe Viñoles / felipe.vinoles@gmail.com
 * Fecha: 04/04/2017
 * Hora: 08:20 AM
 */

namespace WebSite\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('list_app_index');
    }
    
        /**
     * Lists all listApp entities.
     *
     * @Route("/list/menu", name="list_menu_index")
     * @Template()
     */
    public function listMenuAction() {
        $em = $this->getDoctrine()->getManager();

        $listApps = $em->getRepository('WebSiteAppBundle:ListApp')->findAll();

        return array('listApps' => $listApps);
    }
}
