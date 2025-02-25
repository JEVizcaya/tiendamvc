<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class CustomerController extends Controller{
    public function index(...$params){
        $customers=Customer::all();
// Envía datos a la vista
//$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
$this->view('home', $customers);
}
public function show(...$params){
    if(isset($params[0])){
        $customer=Customer::find($params[0]);
        if($customer){
            $this->view('detail',$customer);
            exit();

        }
    }
    header("Location: ".base_url()."customer");


}
}
?>