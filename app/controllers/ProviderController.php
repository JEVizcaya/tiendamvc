<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Provider;
use Formacom\Models\Address;
use Formacom\Models\Phone;
class ProviderController extends Controller{
    public function index(...$params){
        $provider=Provider::all();
// Envía datos a la vista
//$data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
$this->view('home', $provider);
}
public function show(...$params){
    if(isset($params[0])){
        $provider=Provider::find($params[0]);
        if($provider){
            $this->view('detail', $provider);
            exit();

        }
    }
    header("Location: ".base_url()."customer");


}
public function new(){
    if(isset($_POST["name"])){
        $provider=new Provider();
        $provider->name=$_POST["name"];
        $provider->save();
        if(isset($_POST["street"]) && $_POST["street"]!=""){
            $address=new Address();
            $address->street=$_POST["street"];
            $address->zip_code=$_POST["zip_code"];
            $address->city=$_POST["city"];
            $address->country=$_POST["country"];
            $provider->addresses()->save($address);
        }
        if(isset($_POST["phonenumber"])&&$_POST["phonenumber"]!=""){
            $phone=new Phone();
            $phone->number=$_POST["phonenumber"];
            $provider->phones()->save($phone);
        }
        header("Location: ".base_url()."provider");

        
    }
    $this->view("new");
}
public function edit($id){
    // Obtener el cliente con la relación de direcciones y teléfonos
    $provider = Provider::with(['addresses', 'phones'])->find($id);
    
    // Si el cliente no existe, redirigir
    if (!$provider) {
        header("Location: ".base_url()."customer");
        exit();
    }

    // Si el formulario se ha enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Actualizar el nombre del cliente
        if (isset($_POST["name"])) {
            $provider->name = $_POST["name"];
        }

        // Actualizar dirección si se proporciona una nueva
        if (isset($_POST["street"]) && $_POST["street"] !== "") {
            // Aquí actualizamos la primera dirección asociada al cliente
            $address = $provider->addresses()->first();
            if ($address) {
                $address->street = $_POST["street"];
                $address->zip_code = $_POST["zip_code"];
                $address->city = $_POST["city"];
                $address->country = $_POST["country"];
                $address->save(); // Guardamos los cambios en la dirección existente
            } else {
                // Si no hay dirección, se crea una nueva
                $address = new Address();
                $address->street = $_POST["street"];
                $address->zip_code = $_POST["zip_code"];
                $address->city = $_POST["city"];
                $address->country = $_POST["country"];
                $provider->addresses()->save($address);
            }
        }

        // Actualizar teléfono si se proporciona un nuevo teléfono
        if (isset($_POST["number"]) && $_POST["number"] !== "") {
            // Aquí actualizamos el primer teléfono asociado al cliente
            $phone = $provider->phones()->first();
            if ($phone) {
                $phone->number= $_POST["number"];
                $phone->save(); // Guardamos los cambios en el teléfono existente
            } else {
                // Si no hay teléfono, se crea uno nuevo
                $phone = new Phone();
                $phone->number= $_POST["number"];
                $provider->phones()->save($phone);
            }
        }

        // Guardar los cambios del cliente
        $provider->save();

        // Redirigir a la página de detalle del cliente
        header("Location: ".base_url()."provider");
        exit();
    }

    // Pasar los datos del cliente a la vista para editar
    $this->view('edit',  $provider);
}

public function delete($id){
    // Buscar el cliente por ID
    $provider = Provider::find($id);
    
    // Si el cliente no existe, redirigimos
    if (!$provider) {
        header("Location: ".base_url()."provider");
        exit();
    }

    // Eliminar las relaciones de direcciones y teléfonos asociados
    foreach ($provider->addresses as $address) {
        $address->delete(); // Eliminar la dirección
    }

    foreach ($provider->phones as $phone) {
        $phone->delete(); // Eliminar los teléfonos
    }

    // Eliminar el cliente
    $provider->delete();

    // Redirigir a la lista de clientes después de eliminar
    header("Location: ".base_url()."provider");
    exit();
}



}
?>