<?php
namespace Models;

use Core\Model;
use Helpers\Database;

class mAccueil extends Model{
    
    const F_ID_RECETTE = "id_recette";
    const F_NOM_RECETTE = "nom_recette";
    const F_ID_INGREDIENT = "id_ingredient";
    const F_NOM_INGREDIENT = "nom_ingredient";
    
    private $table = Database::K_V_RECSINGS;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getRecetteRandom()
    {
        $idRecette = self::F_ID_RECETTE;
        
        $sql = "SELECT * FROM $this->table ";
        $sql .= "ORDER BY RAND() LIMIT 1 ";
        
        return $this->db->select($sql);
    }
    
}