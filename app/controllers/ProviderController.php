<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Provider;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class ProviderController extends Controller{
    public function index(...$params){
// Crea o encuentra el cliente
$provider = new Provider();
        
// Asigna atributos al cliente
$provider->name = "Antonio";
$provider->save();

// Crea una nueva dirección
$address = new Address();
$address->street = "Lopez";

// Asocia la dirección al cliente
$provider->addresses()->save($address);

// Crea un nuevo teléfono
$phone = new Phone();
$phone->number = "999999999"; // Número de teléfono


// Asocia el teléfono al cliente
$provider->phones()->save($phone); // Asegúrate de que haya una relación 'phones()' en el modelo Customer

// Opcional: asegurarse de que tanto el cliente como la dirección y el teléfono están guardados
$provider->save();
$address->save();
$phone->save();

// Envía datos a la vista
$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
$this->view('home', $data);
}
}
?>