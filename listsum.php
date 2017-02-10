<?php

    $pdo = new PDO('mysql:dbname=openhouse;host=127.0.0.1', 'root', '@PeNtesterMYSQL');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '1praone' ORDER BY num ASC;");
    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอ่าน-เขียนคำ ประถมตอนปลาย ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันอ่าน-เขียนคำ ประถมตอนปลาย ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '1tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอ่าน-เขียนคำ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันอ่าน-เขียนคำ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '2praone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันคัดลายมือ ประถมตอนปลาย ประเภทเดี่ยว </h2>';
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
        echo '<h2>การแข่งขันคัดลายมือ ประถมตอนปลาย ประเภทเดี่ยว </h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '2tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันคัดลายมือ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันคัดลายมือ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '3praone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอัจฉริยภาพทางคณิตศาสตร์ ประถมตอนปลาย ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันอัจฉริยภาพทางคณิตศาสตร์ ประถมตอนปลาย ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '3tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอัจฉริยภาพทางคณิตศาสตร์ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันอัจฉริยภาพทางคณิตศาสตร์ มัธยมตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '4praone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันคิดเลขเร็ว ประถมตอนปลาย ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันคิดเลขเร็ว ประถมตอนปลาย ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '4tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันคิดเลขเร็ว มัธยมตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันคิดเลขเร็ว มัธยมตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '5prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอัจฉริยภาพทางวิทยาศาสตร์ ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การแข่งขันอัจฉริยภาพทางวิทยาศาสตร์ ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '5tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันอัจฉริยภาพทางวิทยาศาสตร์ มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การแข่งขันอัจฉริยภาพทางวิทยาศาสตร์ มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '6prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์  ประเภททดลอง ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์  ประเภททดลอง ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '6tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์  ประเภททดลอง มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์  ประเภททดลอง มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '7prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์   ประเภทสิ่งประดิษฐ์ ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์   ประเภทสิ่งประดิษฐ์ ประถมตอนปลาย ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '7tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์   ประเภทสิ่งประดิษฐ์ มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
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
        echo '<h2>การประกวดโครงงานวิทยาศาสตร์   ประเภทสิ่งประดิษฐ์ มัธยมตอนต้น ประเภท ทีม 3 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '8prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“สวดมนต์หมู่ทำนองสรภัญญะ” ประถมตอนปลาย ประเภททีม 5 คน</h2>';
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
        echo '<h2>การแข่งขัน“สวดมนต์หมู่ทำนองสรภัญญะ” ประถมตอนปลาย ประเภททีม 5 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '8tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“สวดมนต์หมู่ทำนองสรภัญญะ” มัธยมตอนต้น ประเภททีม 5 คน</h2>';
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
        echo '<h2>การแข่งขัน“สวดมนต์หมู่ทำนองสรภัญญะ” มัธยมตอนต้น ประเภททีม 5 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '9prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“เกมอัจฉริยะสังคมศึกษา” ประถมตอนปลาย ประเภททีม 2 คน</h2>';
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
        echo '<h2>การแข่งขัน“เกมอัจฉริยะสังคมศึกษา” ประถมตอนปลาย ประเภททีม 2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '9tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“เกมอัจฉริยะสังคมศึกษา” มัธยมต้อนต้น ประเภททีม 2 คน</h2>';
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
        echo '<h2>การแข่งขัน“เกมอัจฉริยะสังคมศึกษา” มัธยมต้อนต้น ประเภททีม 2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '10prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันทักษะกีฬาวอลเลย์บอล ประถมศึกษาตอนปลาย ทีมหญิง 2 คน</h2>';
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
        echo '<h2>การแข่งขันทักษะกีฬาวอลเลย์บอล ประถมศึกษาตอนปลาย ทีมหญิง 2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '11prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันฟุตบอล ประถมศึกษาตอนปลาย ทีม 11 คน</h2>';
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
        echo '<h2>การแข่งขันฟุตบอล ประถมศึกษาตอนปลาย ทีม 11 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '12prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันเซปัคตะกร้อ ประถมศึกษาตอนปลาย ทีมเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันเซปัคตะกร้อ ประถมศึกษาตอนปลาย ทีมเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '13praone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันประกวด “ร้องเพลงไทยลูกทุ่ง”  ประถมศึกษาตอนปลาย ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันประกวด “ร้องเพลงไทยลูกทุ่ง”  ประถมศึกษาตอนปลาย ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '13tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันประกวด “ร้องเพลงไทยลูกทุ่ง”  มัธยมศึกษาตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขันประกวด “ร้องเพลงไทยลูกทุ่ง”  มัธยมศึกษาตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '14prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันกิจกรรมSpelling Bees (การแข่งขันสะกดคำภาษาอังกฤษ) ประถมตอนปลาย ประเภททีม 2 คน </h2>';
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
        echo '<h2>การแข่งขันกิจกรรมSpelling Bees (การแข่งขันสะกดคำภาษาอังกฤษ) ประถมตอนปลาย ประเภททีม 2 คน </h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '14tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันกิจกรรม Spelling Bees (การแข่งขันสะกดคำภาษาอังกฤษ) มัธยมต้น ประเภททีม 2 คน </h2>';
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
        echo '<h2>การแข่งขันกิจกรรม Spelling Bees (การแข่งขันสะกดคำภาษาอังกฤษ) มัธยมต้น ประเภททีม 2 คน </h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '15prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันกิจกรรมQuiz (การแข่งขันตอบคำถามภาษาอังกฤษ) ประถมตอนปลาย ประเภททีม 2 คน </h2>';
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
        echo '<h2>การแข่งขันกิจกรรมQuiz (การแข่งขันตอบคำถามภาษาอังกฤษ) ประถมตอนปลาย ประเภททีม 2 คน </h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '15tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันกิจกรรม Quiz (การแข่งขันตอบคำถามภาษาอังกฤษ) มัธยมตอนต้น ประเภททีม 2 คน</h2>';
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
        echo '<h2>การแข่งขันกิจกรรม Quiz (การแข่งขันตอบคำถามภาษาอังกฤษ) มัธยมตอนต้น ประเภททีม 2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '16praone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“ขับร้องเพลงภาษาจีน” ประถมตอนปลาย ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขัน“ขับร้องเพลงภาษาจีน” ประถมตอนปลาย ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '16tonone' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขัน“ขับร้องเพลงภาษาจีน” มัธยมตอนต้น ประเภทเดี่ยว</h2>';
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
        echo '<h2>การแข่งขัน“ขับร้องเพลงภาษาจีน” มัธยมตอนต้น ประเภทเดี่ยว</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '17prateam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันสร้างหนังสืออิเล็กทรอนิกส์(E - book) ประถมศึกษาตอนปลาย ประเภททีม  2 คน</h2>';
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
        echo '<h2>การแข่งขันสร้างหนังสืออิเล็กทรอนิกส์(E - book) ประถมศึกษาตอนปลาย ประเภททีม  2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }

    $sql = $pdo->prepare("SELECT num,school,score,coin,flag FROM score WHERE type = '18tonteam' ORDER BY num ASC;");

    $sql->execute();
    $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch) {
        echo '<h2>การแข่งขันสร้าง Webpage ประเภท “Web Editor” มัธยมศึกษาตอนต้น ประเภททีม 2 คน</h2>';
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
        echo '<h2>การแข่งขันสร้าง Webpage ประเภท “Web Editor” มัธยมศึกษาตอนต้น ประเภททีม 2 คน</h2>';
        echo '<h2 style="color:red">ยังไม่ได้มีการตัดสิน</h2><br><br>';
    }
