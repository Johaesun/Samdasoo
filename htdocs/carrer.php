<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/career.css">
    <link rel="stylesheet" href="./css/style.css">
    <!--jquery등록-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--nav-->
    <script src="./js/nav.js"></script>
    
</head>
<body>
    <div id="wrap">
    <?php
		include("./layout/header_nav.php")
		?>
    	<div class="top_bg scroll_top container">
    	    <video playsinline autoplay muted loop>
    	       <source src="video/band.mp4" type="video/mp4">
            </video>
    	       <div class="top_text">
    	           <h2>브랜드 </h2>
    	           <p></p>
    	       </div>
    	   </div>
    	   
    	   <img src="img/content_bg.png" class="angleArea">
    	
    	
    	<div class="content">
    	    <ul class="box_wrap">
    	        <div class="text_box">
    	            <h3>제주 지하수의 브랜드 시대</h3>
    	            <p>물허벅시대 1960년 이전부터</p>
    	            <p>제주 지하수의 브랜드 시대 2000년대까지</p>
    	            <p>무분별한 지하수 개발에 우리나라 최초의지하수 이용허가제 도입,</p>
    	            <p>지하수 공수로 관리, 지하수 기초조사의 지속적 추진으로</p>
    	            <p>제주도는 세계의 지하수 관리 모델로 떠올랐고,</p>
    	            <p>그렇게 탄생한 제주 삼다수는 세계적으로 우수성을 인증받는</p>
    	            <p>고품질 지하수로 인정받았습니다.</p>
    	        </div>
    	    </ul>
    	</div>
    	
    	<div class="career">
            <ul>
                <li>
                    <img src="./img/nbci.jpg" alt="한국생산성본부">2015 국가브랜드 경쟁력지수(NBCI) 9년 연속 1위 (생수부문,한국생산성본부)
                </li>
                <li>
                    <img src="./img/BrandStar.jpg" alt="브랜드스타">2015 대한민국 브랜드스타 10년 연속 선정 (생수부문1위,브랜드스타)
                </li>
                <li>
                    <img src="./img/K-BPI.jpg" alt="한국농물협회컨설팅">2015 한국산업의 브랜드파워(K-BPI) 1위 (생수부문, 한국농물협회컨설팅)
                </li>
                <li>
                    <img src="./img/kb-pbi.jpg" alt="한국표준협회">2015 프리미엄브랜드지수(KS-PBI) 1위 (생수부문, 한국표준협회)
                </li>
                <li>
                    한국에서 가장 존경받는 기업 (먹는샘물(생수)산업부문 1위,한국농물협회컨설팅)
                </li>
            </ul>
        </div>
    	<?php
		include("./layout/footer.php")
		?>
    </div>
</body>
</html>