<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
class AdminController extends Controller{
    public function index(...$params){
        $customer=new Customer();
       
        $customer->name="Antonia";
        $customer->save();
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $data);
    }
    
}
?>