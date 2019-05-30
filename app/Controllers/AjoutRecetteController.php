<?php 
namespace Controllers;

use Core\Controller;
use Core\View;
use Helpers\Assets;
use Helpers\Url;

class AjoutRecetteController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {

        $data['JS'] = Assets::js([
            
        ]);
        
        View::renderTemplate('header', $data);
        View::render('ajoutRecetteView', $data);
        View::renderTemplate('footer', $data);
        
    }
    
}