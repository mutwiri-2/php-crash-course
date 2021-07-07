<?php 

// connect to database using PDO instead of mysqli - more powerful, supports multiple dbs & ObjOriented
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_CRUD;', 'root', 'admin1424'); //DSN string, user, empty password
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
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</body>

</html>