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
		<link rel="stylesheet" href="./css/insert.css">
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
							<p>최근 삼다수의 소식을 전해드립니다.
								<p>
						</div>
					</div>
				</div>

				<?php
            include('./layout/footer.php')
        ?>
		</div>
	</body>
	<script src="./js/news.js"></script>

	</html>
