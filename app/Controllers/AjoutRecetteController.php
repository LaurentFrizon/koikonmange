<?php 
namespace Controllers;

use Core\Controller;
use Core\View;

class AjoutRecetteController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        View::renderTemplate('header', $data);
        View::render('ajoutRecetteView', $data);
        View::renderTemplate('footer', $data);
        
    }
    
}