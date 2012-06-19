<?php
namespace Exod\Bundle\UtopicVillageBundle\Controller;

use Exod\Bundle\UtopicVillageBundle\Entity\Volunteer;

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
     * insert one help 
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
    	$help->setDate(new \DateTime());
    	
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
    		$responseJSON = new Response(json_encode(array("status" => "ok",
    				"user" =>	$user->toArray())));
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
     * @Route("/{login}/{password}/{birthdate}/{email}/{name}/{firstname}/{description}/insertUser",name="insertUser")
     */
    public function insertJoueurAction($login,$password,$birthdate,$email,$name,$firstname,$description){
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
    	$user->setDescription($description);
    	
    	$em->persist($user);
    	$em->flush();
    	
    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * get your asking help
     * @Route("/{idUser}/askingHelp", name="yourAskingHelp")
     */
    public function youAskingHelpAction($idUser){
    	$em = $this->getDoctrine()->getEntityManager();
    	$repository = $this->getDoctrine()->getRepository('ExodUtopicVillageBundle:Help');
    	 
    	$help = $repository->getYourAskingHelp($idUser);
    	if($help){
    		$responseJSON = new Response(json_encode($help->toArray()));
    	}else{
    		$responseJSON = new Response(json_encode(array("status" => "nook")));
    	}
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * get near asking help
     * @Route("/{userId}/{latitude}/{longitude}/getNearAskingHelp", name="getNearAskingHelp")
     */
    public function getNearAskingHelpAction($userId, $latitude, $longitude){
    	$repository = $this->getDoctrine()->getRepository('ExodUtopicVillageBundle:Help');
    	
    	$helps = $repository->getNearHelp($userId,$latitude,$longitude);
    	//constitution du JSON
    	$arrayJSON = array();
    	foreach ($helps as $help){
    		$arrayJSON[]=$help->toArray(true);
    	}
    	 
    	$responseJSON = new Response(json_encode($arrayJSON));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * insert new volunteer
     * @Route("/{idUser}/{idHelp}/insertNewVolunteer",name="insetNewVolunteer")
     */
    public function inertNewVolunteerAction($idUser,$idHelp){
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'user en question
    	$user = $em->getRepository('ExodUtopicVillageBundle:User')->find($idUser);
    	
    	//On recupere l'aide en question
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($idHelp);
    	$responseJSON;
    	if($user && $help){
    	//on les sauvegarde
	    	$volonteer = new Volunteer();
	    	$volonteer->setUser($user);
	    	$volonteer->setHelp($help);
	    	$volonteer->setDate(new \DateTime());
	    	$em->persist($volonteer);
	    	$em->flush();
	    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	}else{
    		$responseJSON = new Response(json_encode(array("status" => "nook")));
    	}
    	
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * delete help = desactivation
     * @Route("/{idHelp}/deleteHelp", name="deleteHelp")
     */
    public function deleteHelpAction($idHelp){
    	$em = $this->getDoctrine()->getEntityManager();
    	 
    	//on desactive aussi tous les volontaires
    	$em->getRepository('ExodUtopicVillageBundle:Volunteer')->deleteAllUserForOneHelp($idHelp);

    	//On recupere l'aide en question
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($idHelp);
    	$responseJSON;
    	if($help){
	    	$help->setActive(0);
	    	$em->persist($help);
	    	$em->flush();
	    	
	    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	}else{
    		$responseJSON = new Response(json_encode(array("status" => "nook")));
    	}
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * Signaler une demande
     * @Route("/{idHelp}/reportHelp", name="reportHelp")
     */
    public function reportHelpAction($idHelp){
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'aide en question
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($idHelp);
    	$help->setReport(1);
    	$em->persist($help);
    	$em->flush();
    	 
    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * Recuperation des volontaires pour une demande d'aide
     * @Route("/{idHelp}/getVolunteer",name="getVolunteer")
     */
    public function getVolunteer($idHelp){
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'aide en question
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($idHelp);
    	$volunteers = $em->getRepository('ExodUtopicVillageBundle:Volunteer')->findByHelp($idHelp);
    	$arrayVolunteer = array();
    	foreach ($volunteers as $volunteer){
    		$arrayVolunteer[]=$volunteer->getUser()->toArray();
    	}
    	$responseJSON = new Response(json_encode($arrayVolunteer));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * insertion d'un participant et suppression des volontaires 
     * @Route("/{idHelp}/{idUser}/insertParticipant", name="insertParticipant")
     */
    public function insertParticipantAction($idHelp, $idUser){
    	$em = $this->getDoctrine()->getEntityManager();
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($idHelp);
    	$user = $em->getRepository('ExodUtopicVillageBundle:User')->find($idUser);
    	//on supprime ces associations
    	$em->getRepository('ExodUtopicVillageBundle:Volunteer')->deleteAllUserForOneHelp($idHelp);
    	
    	$help->setParticipant($user);
    	$em->persist($help);
    	$em->flush();
    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * payer le joueur
     * @Route("/{helpId}/pay", name="pay")
     */
    public function payAction($helpId){
    	$em = $this->getDoctrine()->getEntityManager();
    	//On recupere l'aide en question
    	$help = $em->getRepository('ExodUtopicVillageBundle:Help')->find($helpId);
    	$responseJSON;
    	//on recupere les deux joueurs
    	if($help){
    		$asker = $help->getUser();
    		$receiver = $help->getParticipant();
    		if($asker && $receiver){
	    		$asker->setAmount($asker->getAmount()-$help->getAmount());
		    	$em->persist($asker);
		    	$em->flush();
		    	
		    	$receiver->setAmount($receiver->getAmount()+$help->getAmount());
		    	$em->persist($receiver);
		    	$em->flush();
		    	
		    	$help->setActive(0);
		    	$help->setPayed(1);
		    	$em->persist($help);
		    	$em->flush();
		    	 
		    	$responseJSON = new Response(json_encode(array("status" => "ok")));
    		}else{
    			$responseJSON = new Response(json_encode(array("status" => "nook")));
    		}
    	}else{
    		$responseJSON = new Response(json_encode(array("status" => "nook")));
    	}
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * On recupere les aide ou on est volontaire
     * @Route("/{userId}/helpWhereYouVolunteer", name="helpWhereYouVolunteer")
     */
    public function helpWhereYouVolunteeerAction($userId){
    	$em = $this->getDoctrine()->getEntityManager();
    	$volunteers = $em->getRepository('ExodUtopicVillageBundle:Volunteer')->findByUser($userId);
    	$arrayHelp = array();
    	foreach ($volunteers as $volunteer){
    		$arrayHelp[]=$volunteer->getHelp()->toArray();
    	}
    	$responseJSON = new Response(json_encode($arrayHelp));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * On recupere les aide ou on est participant
     * @Route("/{userId}/helpWhereYouParticipant", name="helpWhereYouParticipant")
     */
    public function helpWhereYouParticipantAction($userId){
    	$em = $this->getDoctrine()->getEntityManager();
    	$helps = $em->getRepository('ExodUtopicVillageBundle:Help')->findByParticipant($userId);
    	$arrayHelp = array();
    	foreach ($helps as $help){
    		$arrayHelp[]=$help->toArray();
    	}
    	$responseJSON = new Response(json_encode($arrayHelp));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * Recuperation des notifications
     * @Route("/{userId}/getPayementNotification", name="getPayementNotification")
     */
    public function getPayementNotificationAction($userId){
    	$em = $this->getDoctrine()->getEntityManager();
    	$helps = $em->getRepository('ExodUtopicVillageBundle:Help')->getHelpForNotificationPayement($userId);
    	
    	$arrayHelp = array();
    	foreach ($helps as $help){
    		$arrayHelp[] = $help->getUser()->toArray();	
    		$help->setNotified(1);
    		$em->persist($help);
    		$em->flush();
    	}
    	
    	$responseJSON = new Response(json_encode($arrayHelp));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
    
    /**
     * Recuperation par recherche de hashtag
     * @Route("/{string}/search", name="search")
     */
    public function searchAction($string){
    	$em = $this->getDoctrine()->getEntityManager();
    	$helps = $em->getRepository('ExodUtopicVillageBundle:Help')->getSearch($string);
    	$arrayHelp = array();
    	foreach ($helps as $help){
    		$arrayHelp[] = $help->getUser()->toArray();
    	}
    	 
    	$responseJSON = new Response(json_encode($arrayHelp));
    	$responseJSON->headers->set("Content-type", "application/json");
    	return $responseJSON;
    }
}