<?php
/**
 * Routes - all standard routes are defined here.
 *
 * @author David Carr - dave@daveismyname.com
 *
 * @version 2.2
 * @date updated Sept 19, 2015
 */

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;
use Helpers\Url;

/* Define routes. */
// AJAX
Router::any(Url::URI_AJAX_ADD, 'Controllers\AjoutRecetteController@ajax');
Router::any(Url::URI_AJAX_ACCUEIL, 'Controllers\Welcome@ajax');
// VUES
Router::any('', 'Controllers\Welcome@index');
Router::any(Url::URI_AJOUT_RECETTE, 'Controllers\ajoutRecetteController@index');
Router::any('subpage', 'Controllers\Welcome@subPage');

/* Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/* If no route found. */
Router::error('Core\Error@index');

/* Turn on old style routing. */
Router::$fallback = false;

/* Execute matched routes. */
Router::dispatch();
