<?php
/**
 * Creado por  Felipe Viñoles / felipe.vinoles@gmail.com
 * Fecha: 04/04/2017
 * Hora: 09:00 AM
 */

namespace WebSite\AppBundle\Controller;

use WebSite\AppBundle\Entity\ListApp;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Listapp controller.
 *
 * @Route("listapp")
 */
class ListAppController extends Controller {

    /**
     * Lists all listApp entities.
     *
     * @Route("/index", name="list_app_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $listApps = $em->getRepository('WebSiteAppBundle:ListApp')->findAll();
        
        return array('listApps' => $listApps,
            'user' => $this->get('app.get.user')->getUser()
        );
    }

    /**
     * Creates a new listApp entity.
     *
     * @Route("/new/create", name="list_app_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $listApp = new ListApp();
        $form = $this->createForm('WebSite\AppBundle\Form\ListAppType', $listApp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $listApp->setUser($this->get('app.get.user')->getUser());
            $listApp->setCreated(new \DateTime('now'));
            $em->persist($listApp);
            $em->flush();

            return $this->redirectToRoute('list_app_show', array('id' => $listApp->getId()));
        }

        return array(
            'listApp' => $listApp,
            'form' => $form->createView(),
            'user' => $this->get('app.get.user')->getUser());
    }

    /**
     * Finds and displays a listApp entity.
     *
     * @Route("/{id}", name="list_app_show")
     * @param  ListApp $listApp, objet ListApp
     * @Method("GET")
     * @Template()
     */
    public function showAction(ListApp $listApp) {

        return array(
            'listApp' => $listApp,
            'user' => $this->get('app.get.user')->getUser());
    }

    /**
     * Displays a form to edit an existing listApp entity.
     *
     * @Route("/{id}/edit", name="list_app_edit")
     * @param  ListApp $listApp, objet ListApp
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, ListApp $listApp) {
        $editForm = $this->createForm('WebSite\AppBundle\Form\ListAppType', $listApp);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('list_app_show', array('id' => $listApp->getId()));
        }

        return array(
            'listApp' => $listApp,
            'form' => $editForm->createView(),
            'user' => $this->get('app.get.user')->getUser()
        );
    }

    /**
     * Delete a list entity.
     *
     * @Route("/delete/list/{id}", name="list_app_delete")
     * @param  ListApp $listApp, objet ListApp
     * @Method("DELETE")
     */
    public function deleteAction(ListApp $listApp) {
        
        if (!$listApp) {
            $response["message"] = "No existe el elemento a eliminar";
            $response["error"] = true;
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listApp);
            $em->flush();
            $response["success"] = true;
            $response["message"] = "El elemento ha sido borrado con existo";
        }

        return new JsonResponse(array("response" => $response));
    }

}
