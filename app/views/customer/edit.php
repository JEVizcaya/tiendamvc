<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Store<i class="fa-solid fa-shop"></i></span>
            <a href="<?= base_url() ?>customer" style="color:white"><input type="button"
                        value="Customers"></a>

        </nav>
        <h3>Edit Customer</h3>
        <form action="" method="post">

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?= $data->name ?>">
                </div>
                <?php foreach ($data->addresses as $key => $address) { ?>
                    <div class="form-group col-12">
                        <label for="street">Address</label>
                        <input name="street" type="text" class="form-control" id="street" value="<?= $address->street ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Zip Code</label>
                    <input name="zip_code" type="number" class="form-control" id="zip_code" value="<?= $address->zip_code ?>">
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="inputCity">City</label>
                        <input name="city" type="text" class="form-control" id="inputCity" value="<?= $address->city ?>">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="inputState">Country</label>
                        <select name="country" id="inputState" class="form-control" >
                            <option selected><?= $address->country ?></option>
                            <option value="Andorra">Andorra</option>
                            <option value="Albania">Albania</option>
                            <option value="Austria">Austria</option>
                            <option value="Bielorrusia">Bielorrusia</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Croacia">Croacia</option>
                            <option value="Chipre">Chipre</option>
                            <option value="República Checa">República Checa</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Finlandia">Finlandia</option>
                            <option value="Francia">Francia</option>
                            <option value="Alemania">Alemania</option>
                            <option value="Grecia">Grecia</option>
                            <option value="Hungría">Hungría</option>
                            <option value="Islandia">Islandia</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Italia">Italia</option>
                            <option value="Letonia">Letonia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lituania">Lituania</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="Malta">Malta</option>
                            <option value="Moldavia">Moldavia</option>
                            <option value="Mónaco">Mónaco</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Países Bajos">Países Bajos</option>
                            <option value="Macedonia del Norte">Macedonia del Norte</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Polonia">Polonia</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Rumania">Rumania</option>
                            <option value="Rusia">Rusia</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Eslovaquia">Eslovaquia</option>
                            <option value="Eslovenia">Eslovenia</option>
                            <option value="España">España</option>
                            <option value="Suecia">Suecia</option>
                            <option value="Suiza">Suiza</option>
                            <option value="Turquía">Turquía</option>
                            <option value="Ucrania">Ucrania</option>
                            <option value="Reino Unido">Reino Unido</option>
                            
                        </select>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($data->phones as $key => $phone) { ?>
            <div class="form-group">
                <label for="phonenumber">Phone number</label>
                <input name="phonenumber" type="number" class="form-control" id="phonenumber"
                value="<?= $phone->number ?>"    >
            </div>
            <?php } ?>
            <button type="submit" class="btn col-12 btn-primary">Save</button>
        </form>
    </div>
</body>

</html>