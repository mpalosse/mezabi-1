<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mezabi - All categories</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
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

<h2>Catégories</h2>

<table>
    <tr>
        <th>Code</th>
        <th>Désignation</th>
        <th></th>
    </tr>
    <?php while ($row = $searchStmt->fetch()) { ?>
        <tr>
            <td><?php echo $row['code_categorie'] ?></td>
            <td><?php echo $row['designation'] ?></td>
            <td><a href="/mezabi-1?controller=Articles&code_categorie=<?php echo $row['code_categorie'] ?>&categorie=<?php echo $row['designation'] ?>">Voir les articles</a></td>
        </tr>
    <?php } ?>
</table>



</body>
</html>