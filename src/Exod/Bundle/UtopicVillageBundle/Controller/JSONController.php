<?php
namespace Exod\Bundle\UtopicVillageBundle\Controller;

use Exod\Bundle\UtopicVillageBundle\Constante\Constante;

use Exod\Bundle\UtopicVillageBundle\Entity\User;

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
    
    /**
     * Test de Connection
     * @Route("/{email}/{password}/testConnect", name="testConnect")
     */
    public function testConnectAction($email,$password){
    	$repository = $this->getDoctrine()->getRepository('ExodUtopicVillageBundle:User');
    	$user = $repository->testConnect($email,$password);
    	
    	$responseJSON;
    	if($user !=null){
    		$responseJSON = new Response(json_encode(array("status" => "ok")));
    	}else{
    		$responseJSON = new Response(json_encode(array("status" => "nook")));
    	}
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
	* Sauvegarde de la latitude et de la longitude
	* @Route("/{idUser}/{lat}/{long}/savePosition", name="savePosition")
	*/
    public function savePositionAction($idUser,$lat,$long){
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'user en question
    	$user = $em->getRepository('ExodUtopicVillageBundle:User')->find($idUser);
    	$user->setLatitude($lat);
    	$user->setLongitude($long);
    	
    	$em->persist($user);
        $em->flush();
        
        $responseJSON = new Response(json_encode(array("status" => "ok")));
        $responseJSON->headers->set("Content-type", "application/json");
        return $responseJSON;
    }
    
    /**
     * new player
     * @Route("/{login}/{password}/{birthdate}/{email}/{name}/{firstname}/insertUser",name="insertUser")
     */
    public function insertJoueurAction($login,$password,$birthdate,$email,$name,$firstname){
    	$em = $this->getDoctrine()->getEntityManager();
    	
    	//recuperation du role joueur
    	$roleUser = $em->getRepository('ExodUtopicVillageBundle:Role')->findOneByidFonctionnel(Constante::ROLE_USER);
    	
    	//setting joueur
    	$user = new User();
    	$user->setActive(1);
    	$user->setBirthdate(new \DateTime($birthdate));
    	$user->setLogin($login);
    	$user->setEmail($email);
    	$user->setFirstname($firstname);
    	$user->setName($name);
    	$user->setPassword($password);
    	$user->setReport(0);
    	$user->setSalt("123");
    	$user->setRole($roleUser);
    	$user->setPicture(NULL);
    	$user->setLatitude(0);
    	$user->setLongitude(0);
    	$user->setLastConnection(new \DateTime());
    	
    	$em->persist($user);
    	$em->flush();
    	
    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
}