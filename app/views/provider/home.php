<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">

            <div class="container-fluid">
                <span class="navbar-text">
                    Providers list
                </span>
                <div>
                <a href="<?= base_url() ?>provider/new" style="color:white"><input type="button" value="New Provider"></a>
                <a href="<?= base_url() ?>admin" style="color:white"><input type="button" value="Home"></a>
                </div>
            </div>

        </nav>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>

                <?php $counter=1;
                foreach ($data as $key => $provider) { ?>
                    <tr>
                        <th scope="row"><?=$counter++?></th>
                        <td><?=$provider->name?></td>
                        <td>
                        <a href="<?= base_url() ?>provider/edit/<?= $provider->provider_id ?>" title="Edit">
                                <i class="fa-solid fa-user-pen" style="color: chartreuse; margin-right: 10px;"></i></a>
                            <a href="<?= base_url() ?>provider/show/<?= $provider->provider_id ?>" title="Details">
                                <i class="fa-solid fa-eye" style="color: aqua; margin-right: 10px;"></i></a>
                            <a href="<?= base_url() ?>provider/delete/<?= $provider->provider_id ?>"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');"
                                title="Delete"><i class="fa-solid fa-trash" style="color: red"></i></a>
                        </td>

                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>

</body>

</html>