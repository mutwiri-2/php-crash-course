<?php

// connect to database using PDO instead of mysqli - more powerful, supports multiple dbs & ObjOriented
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_CRUD;', 'root', 'admin1424'); //DSN string, user, password
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // throw exception if there is an error during connection

// make query and select all products
// use prepare to select, execute should be used to make changes to db schema
// $statement is an instance of PDO statement
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute(); // makes query in database
$products = $statement->fetchAll(PDO::FETCH_ASSOC); // returns each product as an associative array
// echo '<pre>';
// var_dump($products);
// echo '</pre>';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
</head>

<body>
    <h1>Products CRUD</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Date Added</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i => $product) : ?>
                <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['create_date']; ?></td>
                    <td>
                    <button type="button" class="btn-sm btn-outline-primary">Edit</button>
                    <button type="button" class="btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>