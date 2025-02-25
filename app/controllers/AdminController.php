<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
class AdminController extends Controller{
    public function index(...$params){
//crea o encuentra el cliente
       $customer=new Customer();
       //asigna atributoa
       $customer->name= "Joreg E.";
       $customer->save();
       //crea una nueva direccion
       $address=new Address();
       $address->street="Sobrado de Trives";
       //asicia direccion al cliente
       $customer->addresses()->save($address);
       //opcional asegurarse de que ambos estan guardados
       $customer->save();
       $address->save();
       
       $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
       $this->view('home', $data);
    }
    
}
?>