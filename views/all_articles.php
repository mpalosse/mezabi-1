<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mezabi - All articles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<?php
spl_autoload_extensions(".php");
spl_autoload_register();

use yasmf\HttpHelper;

?>

<h1>Mezabi</h1>

<a href="/mezabi-1">Catégories</a> > Articles

<h2>Articles de la catégorie <?php echo $categorie ?></h2>

<table>
    <tr>
        <th>Id</th>
        <th>Code</th>
        <th>Désignation</th>
    </tr>
    <?php while ($row = $searchStmt->fetch()) { ?>
        <tr>
            <td><?php echo $row['id_article'] ?></td>
            <td><?php echo $row['code_article'] ?></td>
            <td><?php echo $row['designation'] ?></td>
        </tr>
    <?php } ?>
</table>



</body>
</html>