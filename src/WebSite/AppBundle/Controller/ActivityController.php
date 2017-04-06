<?php
/**
 * Creado por  Felipe Viñoles / felipe.vinoles@gmail.com
 * Fecha: 04/04/2017
 * Hora: 10:00 AM
 */

namespace WebSite\AppBundle\Controller;

use WebSite\AppBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use WebSite\AppBundle\Entity\ListApp;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Activity controller.
 *
 * @Route("activity")
 */
class ActivityController extends Controller {

    /**
     * Lists all activity entities.
     *
     * @Route("/", name="activity_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $activities = $em->getRepository('WebSiteAppBundle:Activity')->findAll();

        return array(
            'activities' => $activities,
            'user' => $this->get('app.get.user')->getUser());
    }

    /**
     * Creates a new activity entity.
     *
     * @Route("/new/list/{list}", name="activity_new")
     * @param  ListApp $list, id list for activity
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request, ListApp $list) {
        $activity = new Activity();
        $form = $this->createForm('WebSite\AppBundle\Form\ActivityType', $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $activity->setList($list);
            $activity->setCreated(new \DateTime('now'));
            $activity->setStatus(false);
            $em->persist($activity);
            $em->flush();

            return $this->redirectToRoute('activity_show', array('id' => $activity->getId()));
        }

        return array(
            'activity' => $activity,
            'listId' => $list->getId(),
            'form' => $form->createView(),
            'user' => $this->get('app.get.user')->getUser());
    }

    /**
     * Finds and displays a activity entity.
     *
     * @Route("/{id}", name="activity_show")
     * @param  Activity $activity, objet Activity
     * @Method("GET")
     * @Template()
     */
    public function showAction(Activity $activity) {
        return array(
            'activity' => $activity,
            'user' => $this->get('app.get.user')->getUser()
        );
    }

    /**
     * Displays a form to edit an existing activity entity.
     *
     * @Route("/{id}/edit/{listId}", name="activity_edit")
     * @param  Activity $activity, objet Activity
     * @param  @param   $listId, id list for activity
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Activity $activity, $listId) {

        $editForm = $this->createForm('WebSite\AppBundle\Form\ActivityType', $activity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activity_show', array('id' => $activity->getId()));
        }

        return array(
            'activity' => $activity,
            'form' => $editForm->createView(),
            'listId' => $listId,
            'user' => $this->get('app.get.user')->getUser());
    }

    /**
     * Delete a list entity.
     *
     * @Route("/delete/list/{id}", name="activity_delete")
     * @param  Activity $activity, objet Activity
     * @Method("DELETE")
     */
    public function deleteAction(Activity $activity) {

        if (!$activity) {
            $response["message"] = "No existe el elemento a eliminar";
            $response["error"] = true;
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activity);
            $em->flush();
            $response["success"] = true;
            $response["message"] = "El elemento ha sido borrado con exito";
        }

        return new JsonResponse(array("response" => $response));
    }

    /**
     * Delete a list entity.
     *
     * @Route("/confirm/{id}", name="activity_confirm")
     * @param  Activity $activity, objet Activity
     * @Method("POST")
     */
    public function confirmAction(Activity $activity) {

        if (!$activity) {
            $response["message"] = "No existe el elemento a cambiar";
            $response["error"] = true;
        } else {
            $em = $this->getDoctrine()->getManager();
            $activity->setStatus(TRUE);
            $activity->setEndDate(new \DateTime('now'));
            $em->flush();
            $response["endDate"] = $activity->getEndDate()->format('d-M-Y H:i');

            $response["success"] = true;
        }
//       
        return new JsonResponse(array("response" => $response));
    }

    /**
     * Get Count activities status true.
     *
     * @Route("/status/true/{idList}", name="activity_get_status_true")
     * @param  $idList id list for Activities
     * 
     */
    public function getSatatusTrueAction($idList) {

        $em = $this->getDoctrine()->getManager();
        $criteria = array("status" => true, "list" => $idList);
        $entities = $em->getRepository('WebSiteAppBundle:Activity')->findBy($criteria);
        return new JsonResponse(count($entities));
    }

    /**
     * Get Count activities status false.
     *
     * @Route("/status/false/{idList}", name="activity_get_status_false")
     * @param  $idList id list for Activities
     * 
     */
    public function getSatatusFalseAction($idList) {

        $em = $this->getDoctrine()->getManager();
        $criteria = array("status" => false, "list" => $idList);
        $entities = $em->getRepository('WebSiteAppBundle:Activity')->findBy($criteria);
        return new JsonResponse(count($entities));
    }

    /**
     * Get Count activities for expiring in 24 hours
     *
     * @Route("/activities/for/expiring/{idList}", name="activity_for_expiring")
     * @param  $idList id list for Activities
     */
    public function activitisForExpiringAction($idList) {
   
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
         // Create query sql native for activities for expiring in 24 hours
        $query = 'SELECT count(*)  FROM  `activity` 
        WHERE  `date_limit` <= DATE_ADD( NOW( ) , INTERVAL 24 HOUR ) 
        AND  `status` = 0  AND `list` = :idList';

        $prepare = $db->prepare($query);
        $params = array("idList" => $idList);
        $prepare->execute($params);
        $result = $prepare->fetchAll();
        $response = (int) $result[0]["count(*)"];

        return new JsonResponse($response);
    }

}
