<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\User;
use src\Model\Bdd;
use DateTime;
use src\Model\Categorie;

class UserController extends  AbstractController {

    
    public function loginForm()
    {
        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('User/login.html.twig', [
            'token' => $token
        ]);
    }




    public function loginCheck(){

        if($_POST AND $_SESSION['token'] == $_POST['token']){
            
            

            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $_SESSION['errorlogin'] = "Mail invalide";
                header('Location:/');
                return;
            }

            
            //AJOUTER FONCTION VERIFICATION CHECK 

            
            if($_POST["email"]=="login@gmail.com" AND $_POST["password"] == "admin"){
                
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pass'] = $_POST['pass'];

                header('Location:/dashboard');

            }else{

                die;
                $_SESSION['errorlogin'] = "Erreur d'Authentification";
                header('Location:/Login');

            }

        }



    }

    public static function roleNeed($roleATester){
        if(isset($_SESSION['login'])){
            if(!in_array($roleATester,$_SESSION['login']['roles'])){
                $_SESSION['errorlogin'] = "Vous ne possédez pas le rôle : ".$roleATester;
                header('Location:/Contact');
            }
        }else{
            $_SESSION['errorlogin'] = "Veuillez vous identifier !";
            header('Location:/Login');
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/');
    }

    // affichage de la page d'inscription
    public function pageInscription(){

            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('User/inscription.html.twig',[
            'inscrit'=>1
            ,'token' => $token
        ]);

    }

    // quand l'user à terminé son inscription

    public function inscription(){
        

        if($_POST AND $_SESSION['token'] == $_POST['token']){

            if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) 
            && isset($_POST['pass'])) {
                            
                $userModel = new user();
                $verifInscriptionUser = $userModel->inscrireUser(Bdd::GetInstance(), $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pass']);
                if($verifInscriptionUser){
                    $inscrit = 1;
                    return $this->twig->render('User/inscription.html.twig', [
                        'inscrit'=>$inscrit
                    ]);
                }else{
                    $inscrit = 0;
                    return $this->twig->render('User/inscription.html.twig',[
                        'inscrit'=>$inscrit
                    ]);
                }
            }else{
            }
        }else{
            // Génération d'un TOKEN
            
            
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('User/inscription.html.twig',
                [
                    'token' => $token
                ]);
        }
             
    }







    public function pageDashboard(){
    
        $mailAVerif = $_SESSION['email'];
        $passAVerif = $_SESSION['pass'];

        $user = new User();

        //Récupération de l'id de l'user en fonction de sa session
        $userId = $user->checkMailandPass(Bdd::GetInstance(), $mailAVerif, $passAVerif);

        //Récupération de ses infos depuis son id
        $listUser = $user->getUserData(Bdd::GetInstance(), $userId);

        $isConnected = 1;

        $categorie = new Categorie();
        $listCategorie = $categorie->getAllCategories(Bdd::GetInstance(), $userId);


        //AJOUTER LES INFOS DE L'UTILISATEUR
        return $this->twig->render(
            'Dashboard/dashboard.html.twig',[
                'user' => $listUser,
                'listCategorie' => $listCategorie,
                'isConnected' => $isConnected
            ]
        );



    }

    // affichage de la page liste des membres
    public function pagelisteMembre(){
       
        $userModel = new User();
        $lisAllUser =  $userModel->getAllUser(bdd::GetInstance());





        return $this->twig->render('Dashboard/listeMembre.html.twig',[
        'allContact'=> $lisAllUser
    ]);

    }





    
}