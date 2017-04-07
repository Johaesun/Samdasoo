<?php
    include ("./htdocs/db.php");
    $sql = "select * from news";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/news.css">
    <link rel="stylesheet" href="./css/style.css">
    <!--jquery등록-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--nav-->
    <script src="./js/nav.js"></script>
</head>
<body>
    <div id="wrap">
        <?php
            include('./layout/header_nav.php')
        ?>
        <div class="top_bg scroll_top">
            <div class="top_bgOpacity">
                <div class="top_text">
                    <h2>삼다수 소식</h2>
                    <p>최근 삼다수의 소식을 전해드립니다.<p>
                </div>
            </div>
        </div>
        
        <div class="content container">
            <ul class="notice">
                <?php
        foreach($result as $row){
        ?>
                <li>
                    <p>Notice<br>
                        <?=$row['idx']?>
                    </p>
                    <dl>
                        <p>
                            <?=$row['title']?>
                        </p>   
                        <dd>
                            <?=$row['date']?>
                        </dd>
                    </dl>
                    <span class="notice_btn"></span>
                </li>
                <div class="content_box">
                    <div class="cB_wrap">
                        <span>
                           <?=$row['company']." ".$row['name']."기자"?>
                        </span>
                        <p class="tt"><?=$row['title']?></p>
                        <p class="st"><?=$row['subtitle']?></p>
                        <span class="close_btn"></span>
                    </div>
                </div>
                <?php
        }
        ?>        
            </ul>
        </div>
        <?php
            include('./layout/footer.php')
        ?>
    </div>
</body>
<script src="./js/news.js"></script>
</html>