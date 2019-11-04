<?php
include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);

$router->get('/', function() {
  ob_start ();
  include './views/index.php';
  return ob_get_clean();
  // return include "./views/index.php" ;
}); 

$router->get('/about', function() { 
  $name = 'Mr_Sdk';
  ob_start ();
  include './views/about.php';
  return ob_get_clean( );  

});

$router->get('/profile', function($request) {
  return <<<HTML
  <h1>Profile</h1>
HTML;
});

$router->post('/data', function($request) {
  return json_encode($request->getBody());
});