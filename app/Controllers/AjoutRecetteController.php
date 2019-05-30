<?php 
namespace Controllers;

use Core\Controller;
use Core\View;
use Helpers\Assets;
use Helpers\Url;
use Helpers\Tools;
use Models\mAddIngredient;

class AjoutRecetteController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function ajax()
    {
        $action = Tools::getPost("action");
        $dbg["action"] = $action;

        if($action == "save-ingredient")
        {
            $this->addIngredient($dbg);
        }

    }
    
    public function index() {

        $data['JS'] = Assets::js([
            
        ]);
        
        View::renderTemplate('header', $data);
        View::render('ajoutRecetteView', $data);
        View::renderTemplate('footer', $data);
        
    }

    public function addIngredient($dbg)
    {
        // Récuperation des infos de l'ingredient
        $nom = Tools::getPost("nom");
        $type = Tools::getPost("type");
        $cal = Tools::getPost("cal");
        $prix = Tools::getPost("prix");

        var_dump($nom, $type, $cal, $prix).die;

        $model = new mAddIngredient();
        //$model->addIngredient();
    }
    
}