<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class AdminController extends Controller{
    public function index(...$params){
// Crea o encuentra el cliente
$customer = new Customer();
 /*       
// Asigna atributos al cliente
$customer->name = "Luis";
$customer->save();

// Crea una nueva dirección
$address = new Address();
$address->street = "Perz";

// Asocia la dirección al cliente
$customer->addresses()->save($address);

// Crea un nuevo teléfono
$phone = new Phone();
$phone->number = "222555888"; // Número de teléfono


// Asocia el teléfono al cliente
$customer->phones()->save($phone); // Asegúrate de que haya una relación 'phones()' en el modelo Customer

// Opcional: asegurarse de que tanto el cliente como la dirección y el teléfono están guardados
$customer->save();
$address->save();
$phone->save(); */

// Envía datos a la vista
$data = ['mensaje' => 'Wellcome to my Shop'];
$this->view('home', $data);
}
}
?>