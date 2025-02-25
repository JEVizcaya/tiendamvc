<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Phone;
class AdminController extends Controller{
    public function index(...$params){
        $phone=new Phone();
       
        $phone->number="999999999";
        $phone->save();
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $data);
    }
    
}
?>