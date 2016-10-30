<?php

require_once 'app/init.php';
if(isset($_GET['as'], $_GET['item'])) {
       $as =$_GET['as'];
       $item =$_GET['item'];

    switch($as){
        case'done':
            $doneQuery= $db->prepare("
              UPDATE items
              SET done=0
              WHERE id = :item
              AND user = :user
            ");

            $doneQuery->exectute([
                'item' =>$item,
                'user' =>$_SESSION['user_id']
            ]);
        break;
        case 'notdone';
    }
}

header ('Location: index.php');