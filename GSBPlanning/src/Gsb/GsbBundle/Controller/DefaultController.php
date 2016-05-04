<?php

namespace Gsb\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use models;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session=new Session();
        if($session->get('estlog')) {
            $url = $this->get('router')->generate('gsb_gsb_dashboard');
            return new RedirectResponse($url);
        }else {
            if ($request->request->has('submit')) {
                $mail = $request->get('mail');
                $mdp = $request->get('mdp');
                $pdo = models\PDOGsb::getPDOGsb();
                $result = $pdo->connecter($mail, $mdp);
                if ($result) {
                    $session = new Session();
                    $session->set('estlog', $mail);

                    $pdo = models\PDOGsb::getPDOGsb();
                    $recupID = $pdo->recupID($mail);
                    $session->set('estlogID', $recupID);

                    $pdo = models\PDOGsb::getPDOGsb();
                    $lesDonnees = $pdo->afficherTableau();
                    $url = $this->get('router')->generate('gsb_gsb_dashboard');
                } else {
                    $this->get('session')->getFlashBag()->add('notice', 'Connexion refusée. Mail ou mot de passe incorrect');
                    $url = $this->get('router')->generate('gsb_gsb_homepage');
                }

                return new RedirectResponse($url);
            } else {
                return $this->render('GsbGsbBundle:Default:index.html.twig');
            }

        }
    }

    public function dashboardAction(Request $request)
    {
        $session=new Session();
        if($session->get('estlog')) {
            if ($request->request->has('Supprimer')) {
                $id_cacher = $request->get('id_cacher');
                $pdo = models\PDOGsb::getPDOGsb();
                $pdo->SupprEve($id_cacher);
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherTableau();
                $lesBoutons = $pdo->trierEvenement();
                return $this->render('GsbGsbBundle:Default:dashboard.html.twig', array('lesDonnees' => $lesDonnees, 'lesBoutons' => $lesBoutons));
            }
            if ($request->request->has('Modifier')) {
                $id_cacher = $request->get('id_cacher');
                $session = new Session();
                $session->set('id_modif', $id_cacher);
                $url = $this->get('router')->generate('gsb_gsb_modifier');
                return new RedirectResponse($url);
            }
            if($request->request->has('Rechercher')){
                $recherche = $request->get('champRecherche');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->rechercheEv($recherche);
                $lesBoutons = $pdo->trierEvenement();
                return $this->render('GsbGsbBundle:Default:dashboard.html.twig', array('lesDonnees' => $lesDonnees, 'lesBoutons' => $lesBoutons));
            }
            if ($request->request->has('Cat')) {
                $id_cacher_cat = $request->get('id_cacher_cat');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->AfficherEveTri($id_cacher_cat);
                $lesBoutons = $pdo->trierEvenement();
                return $this->render('GsbGsbBundle:Default:dashboard.html.twig', array('lesDonnees' => $lesDonnees, 'lesBoutons' => $lesBoutons));
            }

            if($request->request->has('allCat')){
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherTableau();
                $lesBoutons = $pdo->trierEvenement();
                return $this->render('GsbGsbBundle:Default:dashboard.html.twig', array('lesDonnees' => $lesDonnees, 'lesBoutons' => $lesBoutons));
            } else {
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherTableau();
                $lesBoutons = $pdo->trierEvenement();
                return $this->render('GsbGsbBundle:Default:dashboard.html.twig', array('lesDonnees' => $lesDonnees, 'lesBoutons' => $lesBoutons));
            }
        }else{
            $url = $this->get('router')->generate('gsb_gsb_homepage');
            return new RedirectResponse($url);
        }
    }


    public function employeAction(Request $request)
    {
        $session = new Session();
        if ($session->get('estlog')) {

            if($request->request->has('Prenom')){
                $idtype = $request->get('Prenom');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherEmpTri($idtype);
                return $this->render('GsbGsbBundle:Default:employe.html.twig', array('lesDonnees' => $lesDonnees));
            }
            if($request->request->has('Nom')){
                $idtype = $request->get('Nom');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherEmpTri($idtype);
                return $this->render('GsbGsbBundle:Default:employe.html.twig', array('lesDonnees' => $lesDonnees));
            }
            if($request->request->has('Rechercher')){
                $recherche = $request->get('champRecherche');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->rechecheEmp($recherche);
                return $this->render('GsbGsbBundle:Default:employe.html.twig', array('lesDonnees' => $lesDonnees));
            }
            if ($request->request->has('Planning')) {
                $id = $request->get('id_cacher');
                $pdo = models\PDOGsb::getPDOGsb();
                $lesDonnees = $pdo->afficherEvEmp($id);
                $leNom = $pdo->afficherEvEmpName($id);
                return $this->render('GsbGsbBundle:Default:planning.html.twig', array('lesDonnees' => $lesDonnees, 'leNom' => $leNom));
            }
            $pdo = models\PDOGsb::getPDOGsb();
            $lesDonnees = $pdo->afficherEmp();
            return $this->render('GsbGsbBundle:Default:employe.html.twig', array('lesDonnees' => $lesDonnees));

        }else{
            $url = $this->get('router')->generate('gsb_gsb_homepage');
            return new RedirectResponse($url);
        }
    }

    public function modifierAction(Request $request){
        $session = new Session();
        if ($session->get('estlog')) {
        if($request->request->has('Valider')) {
            $session = new Session();
            $id_cacher = $session->get('id_modif');
            $duree = $request->get('duree');
            $date = $request->get('date');
            $libelle = $request->get('libelle');
            $heure = $request->get('heure');
            $pdo = models\PDOGsb::getPDOGsb();
            $pdo->modifEvenement($id_cacher, $duree, $date, $libelle, $heure);
            $url = $this->get('router')->generate('gsb_gsb_dashboard');
            return new RedirectResponse($url);
        }
        if($request->request->has('Supprimer')) {
            $session = new Session();
            $id_cacher = $session->get('id_modif');
            $id_emp = $request->get('id_emp');
            $pdo = models\PDOGsb::getPDOGsb();
            $pdo->SupprConvoc($id_cacher, $id_emp);
            $lesDonnees = $pdo->afficherTableauid($id_cacher);
            $lesEmploye = $pdo->afficherEmpConvoc($id_cacher);
            $lesEmployeNotIn = $pdo->afficherNotIn($id_cacher);
            return $this->render('GsbGsbBundle:Default:modifier.html.twig', array('lesDonnees' => $lesDonnees, 'lesEmploye' => $lesEmploye, 'lesEmployeNotIn' => $lesEmployeNotIn));
        }
        if($request->request->has('Ajouter')) {
            $session = new Session();
            $id_cacher = $session->get('id_modif');
            $id_emp = $request->get('selection');
            $pdo = models\PDOGsb::getPDOGsb();
            $pdo->ajouterConvoquer($id_emp, $id_cacher);
            $lesDonnees = $pdo->afficherTableauid($id_cacher);
            $lesEmploye = $pdo->afficherEmpConvoc($id_cacher);
            $lesEmployeNotIn = $pdo->afficherNotIn($id_cacher);
            $mail = $pdo->modifContenuMail($id_emp);

            // Récupération du service
            $mailer = $this->get('mailer');

            // Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
            $message = \Swift_Message::newInstance()
                ->setSubject('Convocation réunion')
                ->setFrom('jlocatelli.pro@gmail.com')
                ->setTo($mail[0])
                ->setBody('Bonjour, ceci est un mail de rappel pour vous avertir que vous avez été ajouté à un événement. Vérifiez cela sur votre application mobile.');

            // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
            $mailer->send($message);
            return $this->render('GsbGsbBundle:Default:modifier.html.twig', array('lesDonnees' => $lesDonnees, 'lesEmploye' => $lesEmploye, 'lesEmployeNotIn' => $lesEmployeNotIn));
        }
        else {
            $session = new Session();
            $id_cacher = $session->get('id_modif');
            $pdo = models\PDOGsb::getPDOGsb();
            $lesDonnees = $pdo->afficherTableauid($id_cacher);
            $lesEmploye = $pdo->afficherEmpConvoc($id_cacher);
            $lesEmployeNotIn = $pdo->afficherNotIn($id_cacher);
            return $this->render('GsbGsbBundle:Default:modifier.html.twig', array('lesDonnees' => $lesDonnees, 'lesEmploye' => $lesEmploye, 'lesEmployeNotIn' => $lesEmployeNotIn));
        }
    }else{
            $url = $this->get('router')->generate('gsb_gsb_homepage');
            return new RedirectResponse($url);
        }
    }

    public function ajoutAction(Request $request)
    {
        $session = new Session();
        if ($session->get('estlog')) {
        if($request->request->has('Valider')){
            $duree = $request->get('duree');
            $date = $request->get('date');
            $libelle = $request->get('libelle');
            $heure = $request->get('heure');
            $idType = $request->get('selectionEvenement');
            $session = new Session();
            $idAdmin = $session->get('estlogID');
            $pdo = models\PDOGsb::getPDOGsb();
            $pdo->ajouterEvenement($date, $libelle, $heure, $duree, $idAdmin, $idType);
            $url = $this->get('router')->generate('gsb_gsb_dashboard');
            return new RedirectResponse($url);
        }else{
            $pdo = models\PDOGsb::getPDOGsb();
            $lesDonnees = $pdo->listeEvenement();
            return $this->render('GsbGsbBundle:Default:ajout.html.twig',array('lesDonnees'=>$lesDonnees));
        }
    }else{
            $url = $this->get('router')->generate('gsb_gsb_homepage');
            return new RedirectResponse($url);
        }
    }

    public function deconnexionAction(Request $request)
    {
        $session = new Session();
        $session->remove('estlog');
        $url = $this->get('router')->generate('gsb_gsb_homepage');
        return new RedirectResponse($url);
    }

   /* public function sendmailAction()
    {
        // Récupération du service
        $mailer = $this->get('mailer');

        // Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
        $message = \Swift_Message::newInstance()
            ->setSubject('Convocation réunion')
            ->setFrom('jlocatelli.pro@gmail.com')
            ->setTo('locat22@hotmail.fr')
            ->setBody('Bonjour, ceci est un mail de rappel pour vous rappeler que vous avez un événement dans moins de 48 heures.');

        // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
        $mailer->send($message);

        // N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
        $url = $this->get('router')->generate('gsb_gsb_homepage');
        return new RedirectResponse($url);
        //return $this->render('ApiBundle:Default:index.html.twig', array('name' => 'Envoi de mail en cours ...'));
    }*/
}
