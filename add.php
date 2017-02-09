<?php

if (isset($_POST['num'])) {
    $type = (string) $_POST['type'].$_POST['grade'].$_POST['type2'];
    $pdo = new PDO('mysql:dbname=openhouse;host=127.0.0.1', 'root', '@PeNtesterMYSQL');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $sql = $pdo->prepare('INSERT INTO score(num,school,score,coin,flag,type)
                            VALUES (:num ,:school ,:score ,:coin ,:flag ,:type)');
        $sql->bindParam(':num', $_POST['num'], PDO::PARAM_INT);
        $sql->bindParam(':school', $_POST['school'], PDO::PARAM_STR);
        $sql->bindParam(':score', $_POST['score'], PDO::PARAM_INT);
        $sql->bindParam(':coin', $_POST['coin'], PDO::PARAM_STR);
        $sql->bindParam(':flag', $_POST['flag'], PDO::PARAM_STR);
        $sql->bindParam(':type', $type, PDO::PARAM_STR);
        $sql->execute();
        echo 'เพิ่มเรียบร้อย';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    echo 'error';
}
