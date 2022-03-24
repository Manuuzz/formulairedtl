<?php
    class User{
        private $id_;
        private $login_;
        private $mdp_;

        public function __construct($id_,$login_,$mdp_)
        {
            $this->login_ = $login_;
            $this->mdp_ = $mdp_;
            $this->id_ = $id_;
        }
        public function getNom(){
            return $this->login_;
        }
        public function connexion($MotDePasse){
             if($MotDePasse==$this->mdp_){
                 return true;
             }else{
                 return false;
             }
        }


    }






?>