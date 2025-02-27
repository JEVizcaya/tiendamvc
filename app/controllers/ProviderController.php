<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Provider;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class ProviderController extends Controller{
    public function index(...$params){
        $providers=Provider::all();
// Envía datos a la vista
//$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
$this->view('home', $providers);
}
public function show(...$params){
    if(isset($params[0])){
        $providers=Provider::find($params[0]);
        if($providers){
            $this->view('detail', $providers);
            exit();

        }
    }
    header("Location: ".base_url()."customer");


}
public function new(){
    if(isset($_POST["name"])){
        $providers=new Provider();
        $providers->name=$_POST["name"];
        $providers->save();
        if(isset($_POST["street"]) && $_POST["street"]!=""){
            $address=new Address();
            $address->street=$_POST["street"];
            $address->zip_code=$_POST["zip_code"];
            $address->city=$_POST["city"];
            $address->country=$_POST["country"];
            $providers->addresses()->save($address);
        }
        if(isset($_POST["phonenumber"])&&$_POST["phonenumber"]!=""){
            $phone=new Phone();
            $phone->number=$_POST["phonenumber"];
            $providers->phones()->save($phone);
        }
        header("Location: ".base_url()."provider");

        
    }
    $this->view("new");
}


}
?>