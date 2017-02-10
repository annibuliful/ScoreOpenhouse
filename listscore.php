<?php

if (isset($_POST['type'])) {
    $pdo = new PDO('mysql:dbname=openhouse;host=127.0.0.1', 'root', '@PeNtesterMYSQL');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare('SELECT num,school,score,coin,flag FROM score WHERE type = :type ORDER BY num ASC;');
    $sql->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo ' <table class="table">';
        echo '<thead>
        <tr>
          <th>ที่</th>
          <th>โรงเรียน</th>
          <th>คะแนน</th>
          <th>อันดับ</th>
        </tr>
      </thead>';
        for ($i = 0; $i < count($fetch); ++$i) {
            echo "<tbody>
          <tr>
            <td>{$fetch[$i]['num']}</td>
            <td>{$fetch[$i]['school']}</td>
            <td>{$fetch[$i]['score']}</td>
            <td>{$fetch[$i]['flag']}</td>
          </tr>
        </tbody>";
        }
        echo '</table><br><br><br><br>';
    } else {
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2>';
    }
} else {
    echo 'error';
}
