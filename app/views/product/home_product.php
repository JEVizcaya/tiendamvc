<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/product.js" defer></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">New Product<i class="fa-solid fa-shop"></i></span>
            <a href="<?= base_url() ?>admin" style="color:white"><input type="button" value="Home"></a>
        </nav>
        <form id="form">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Product name" required>
                </div>
                <div class="form-group col-12">
                    <label for="street">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Product Description">
                </div>
            </div>
            <div class="form-group col-12">
                <label for="inputAddress">Category</label>
                <select id="category" style="width:100%" required>
                    <option selected> Choose...</option>

                </select>
            </div>
            <div class="form-group col-12">
                <label for="">Provider</label>
                <select style="width:100%" id="provider" required>
                    <option selected> Choose...</option>

                </select>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="stock">Stock</label>
                    <input type="number" min="0" class="form-control" id="stock" placeholder="Stock" required>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" min="0" class="form-control" id="price" placeholder="Price"
                        required>
                </div>
            </div>


            <button type="submit" class="btn col-12 btn-primary">Save</button>
        </form>
        <hr>
        <table class="table table-dark table-striped w-auto mx-auto">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Provider</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    



                </tr>
            </thead>
            <tbody id="products">

            </tbody>
        </table>
    </div>
</body>

</html>