<?php

class Post extends PostRepositorie{
    private $id ;
    private $titre;
    private $contenu;
    private $auteur_id;

    public function __construct($titre, $contenu, $auteur_id,$id = null){
        $this->id = $id;
        $this->setTitre($titre);
        $this->setContenu($contenu);
        $this->setAuteurId($auteur_id);
    }

    // Accesseurs et mutateurs
    public function getId(){return $this->id;}
    public function setTitre($titre){$this->titre = htmlspecialchars($titre);}
    public function getTitre(){return $this->titre;}

    public function setContenu($contenu){$this->contenu = htmlspecialchars($contenu);}
    public function getContenu(){return $this->contenu;}

    public function setAuteurId($auteur_id){$this->auteur_id = htmlspecialchars($auteur_id);}
    public function getAuteurId(){return $this->auteur_id;}

}