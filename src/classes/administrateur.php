<?php
    
    class Administrateur{
        private $idAdmin;
        private $login;
        private $mdp;

        public function __construct($idAdmin, $login, $mdp) {
            $this->idAdmin = $idAdmin;
            $this->login = $login;
            $this->mdp = $mdp;
        }

        public function setIdAdministrateur($idAdmin){ $this->idAdmin = $idAdmin;}
        public function setLogin($login){ $this->login = $login;}
        public function setMdp($mdp){ $this->mdp = $mdp;}

        public function getIdAministrateur(){return $this->idAdmin;}
        public function getLogin(){return $this->login;}
        public function getMdp(){return $this->mdp;}
        
        public function addetudiant($etudiant , $pdo){$etudiant->create($pdo);}
        public function addenseignant($enseignant , $pdo){$enseignant->create($pdo);}
        public function addSoutenance($soutenance , $pdo){$soutenance->create($pdo);}

        public function removeEtudiant($etudiant,$pdo){$etudiant->remove($pdo); }
        public function removeenseignant($enseignant,$pdo){$enseignant->remove($pdo); }
        public function removeSoutenance($soutenance,$pdo){$soutenance->remove($pdo); }

        public function updateEtudiant($etudiant, $pdo){$etudiant->update($pdo);}
        public function updateEnseignant($enseignant, $pdo){$enseignant->update($pdo);}
        public function updateSoutenance($soutenance, $pdo){$soutenance->update($pdo);}

        public function login($pdo){
            //return a row if the login is successful
            try {
                $query = "select * from admin where login = ? and mdp = ?";
                $stmnt = $pdo->prepare($query);
                $stmnt->execute([$this->getLogin(), $this->getMdp()]);
                return $stmnt->fetch(PDO::FETCH_ASSOC); 
                
            } catch (\Throwable $th) {
                $th->getMessage() ;
            }
        }
    }
?>