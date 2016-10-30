<?php
require_once'app/init.php';

$query = $db->prepare("SELECT name FROM items");
$query->execute();
$itemsRecup = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($itemsRecup);


foreach ($itemsRecup as $item)
/*
$itemsQuery= $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user= :user

");

$itemsQuery->execute([
    'user'=>$_SESSION['user_id']
]);

$items= $itemsQuery->rowCount() ? $itemsQuery: [];
foreach($items as $item) {
    print_r($item);
}
*/

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>To do</title>

        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

        <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

        <body>
            <div class="list">
                <h1 class="header">Todo List</h1>




                <form class="item-add" action="add.php" method="post">
                    <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
                     <input type="submit" value="add" class="submit">
                </form>

            </div>

        </body>

</html>