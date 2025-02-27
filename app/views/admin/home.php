<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/admin_home.css">
</head>
<body>
    <h1><?php echo $data['mensaje'] ?></h1>
    <nav>
    <a href="<?=base_url()?>customer"><button type="button" class="btn btn-primary btn-lg">Customers</button></a>
    <a href="<?=base_url()?>provider"><button type="submit" class="btn btn-primary btn-lg">Providers</button></a>
    <a href="<?=base_url()?>product"><button type="button" class="btn btn-primary btn-lg">Products</button></a>
    <button type="button" class="btn btn-primary btn-lg">Orders</button>
    </nav>



    

</body>
</html>