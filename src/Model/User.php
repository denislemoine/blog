<?php
namespace src\Model;


 
class User {
 
    private $id_user;
    private $nom_user;
    private $prenom_user;
    private $email_user;
    private $mdp;



    function inscrire()
    {
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="cesiblog";
        try
            {
                $bdd = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $username, $password);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }

        $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
     
        $requete=$bdd->prepare("INSERT INTO `cesiblog`.`t_membre` (`MEM_NOM`, `MEM_PRENOM`, `MEM_EMAIL`, `MEM_MDP`) VALUES (':MEM_NOM', ':MEM_PRENOM', ':MEM_EMAIL', ':MEM_MDP')");
        
     
        $requete->execute([
        'MEM_NOM'=> $_POST['MEM_NOM'],
        'MEM_PRENOM' => $_POST['MEM_PRENOM'],
        'MEM_EMAIL'=> $_POST['MEM_EMAIL'],
        'mdp'=> $pass_hache
        ]);
     
        return true;
    }






























    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of nom_user
     */ 
    public function getNom_user()
    {
        return $this->nom_user;
    }

    /**
     * Set the value of nom_user
     *
     * @return  self
     */ 
    public function setNom_user($nom_user)
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    /**
     * Get the value of prenom_user
     */ 
    public function getPrenom_user()
    {
        return $this->prenom_user;
    }

    /**
     * Set the value of prenom_user
     *
     * @return  self
     */ 
    public function setPrenom_user($prenom_user)
    {
        $this->prenom_user = $prenom_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}