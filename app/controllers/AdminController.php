<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Address;
class AdminController extends Controller{
    public function index(...$params){
        $address=new Address();
       
        $address->street="Torrecedeira nº 11";
        $address->zip_code="36206";
        $address->city="Vigo";
        $address->country="España";
        $address->save();
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $data);
    }
    
}
?>