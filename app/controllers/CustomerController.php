<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class CustomerController extends Controller{
    public function index(...$params){

// Envía datos a la vista
$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
$this->view('home', $data);
}
}
?>