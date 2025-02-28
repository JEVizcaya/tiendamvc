<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Vincula el archivo CSS aquí -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/admin_home.css">
    <!-- Font Awesome (para los iconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Header section -->
    <header>
        <h1><?php echo $data['mensaje'] ?></h1>
    </header>

    <!-- Button links container -->
    <div class="button-container">
        <a href="<?=base_url()?>login">
            <button type="submit" class="square-btn btn-login">
                <i class="fa-solid fa-sign-in-alt"></i>
                Login
            </button>
        </a>
        <a href="<?=base_url()?>customer">
            <button type="submit" class="square-btn btn-customers">
                <i class="fa-solid fa-users"></i>
                Customers
            </button>
        </a>
        <a href="<?=base_url()?>provider">
            <button type="submit" class="square-btn btn-providers">
                <i class="fa-solid fa-truck"></i>
                Providers
            </button>
        </a>
        <a href="<?=base_url()?>product">
            <button type="submit" class="square-btn btn-products">
                <i class="fa-solid fa-cogs"></i>
                Products
            </button>
        </a>
    </div>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2025 Store. All rights reserved.</p>
    </footer>

</body>
</html>