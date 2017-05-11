<?php
use App\Model\UserModel;	
$app->get('/', function ($request, $response, $args) {
	$um = new UserModel();
    return $this->renderer->render($response, 'bienvenida.phtml', $args);
}); 
$app->get('/getAll', function ($request, $response, $args) {
	$um = new UserModel();
    return $this->renderer->render($response, 'lista.phtml', array('id' => $um->GetAll()));
}); 
$app->get('/get/{id}', function ($request, $response, $args) {
        $um = new UserModel();
		return $this->renderer->render($response, 'individual.phtml', array('individuo' => $um->Get($args['id'])));
});
$app->get('/getApiSalarial/{minimo}/{maximo}', function ($request, $response, $args) {
        $um = new UserModel();
		return $this->renderer->render($response, 'rango.phtml', array('rango' => $um->getApiRangoSalarial($args['minimo'],$args['maximo'])));
}); 
 
$app->post('/busqueda', function ($request, $response, $args) {
        $um = new UserModel();
		return $this->renderer->render($response, 'busqueda.phtml', array('individuo' => $um->getCorreo($_POST['correo'])));
});     