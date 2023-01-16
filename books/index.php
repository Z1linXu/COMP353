<?php require_once '../database.php';
$statement = $conn->prepare('SELECT * FROM comp353.books AS books');
$statement->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<body>
    <h1>List of books</h1>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Publish</td>
                <td>Date</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($row =$statement->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) { ?>
            <?php } ?>


            
        </tbody>
    </table>
    <a href=" ../">Back to homepage </a>
</body>

</html>