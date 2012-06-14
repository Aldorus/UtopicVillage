<?php
namespace Exod\Bundle\UtopicVillageBundle\Controller;

use Exod\Bundle\UtopicVillageBundle\Entity\Help;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * JSON controller.
 *
 * @Route("/json")
 */
class JSONController extends Controller
{
    /**
     * infos for one help 
     * 
     * @Route("/{id}/help", name="help")
     */
    public function helpAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($id);
    	if (!$help) {
            throw $this->createNotFoundException('Impossible de trouver cette demande d\'aide.');
        }else{
        	$responseJSON = new Response(json_encode($help->toArray()));
	    	$responseJSON->headers->set("Content-type", "application/json");
	    	return $responseJSON;
    	}
    }
    
	/**
     * infos for one help 
     * 
     * @Route("/{idUser}/{amount}/{text}/{reproducible}/insertHelp", name="insertHelp")
     */
    public function insertHelpAction($idUser,$amount,$text,$reproducible)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'user en question
    	$user = $em->getRepository('ExodUtopicVillageBundle:User')->find($idUser);
    	
    	$help = new Help();
    	$help->setActive(1);
    	$help->setAmount($amount);
    	$help->setDescription($text);
    	$help->setReport(0);
    	$help->setReproducible($reproducible);
    	$help->setUser($user);
    	
    	$em = $this->getDoctrine()->getEntityManager();
        $em->persist($help);
        $em->flush();
    	
    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
}