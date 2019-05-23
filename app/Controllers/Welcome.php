<?php
/**
 * Welcome controller.
 *
 * @author David Carr - dave@daveismyname.com
 *
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */
namespace Controllers;

use Core\Controller;
use Core\View;
use Helpers\Assets;
use Helpers\Url;
use Helpers\hError;
use Helpers\Tools;
use Models\mAccueil;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{
    /**
     * Call the parent construct.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function ajax() {
        $action = Tools::getPost("action");
        $dbg["action"] = $action;
        
        if($action == "load-recette-random") {
            $this->loadRecetteRandom($dbg);
            return;
        }
    }
    
    /**
     * Define Index page title and load template files.
     */
    public function index()
    {
        $data['title'] = "Accueil ";
        
        $data['css'] = Assets::css([
        ]);
        $data['js'] = Assets::js([
        ]);
        
        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
    }
    
    public function loadRecetteRandom($dbg)
    {
        $model = new mAccueil();
        $recette = $model->getRecetteRandom();
        
        $error = hError::NO_ERROR;
        $array = [
            "status" => $error,
            "dbg" => $dbg,
            "recette" => $recette,
        ];
        
        echo json_encode($array);
        exit();
    }

    /**
     * Define Subpage page title and load template files.
     */
    public function subPage()
    {
        $data['title'] = $this->language->get('subpage_text');
        $data['welcome_message'] = $this->language->get('subpage_message');

        View::renderTemplate('header', $data);
        View::render('welcome/subpage', $data);
        View::renderTemplate('footer', $data);
    }
}
