<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/style.css">
    <!--nav-->
    <script src="./js/nav.js"></script>
</head>
<body>
     <div id="wrap">
       <?php
		 include("./layout/header_nav.php")
		 ?>
        <div class="top_bg">
            <div class="top_bgOpacity">
                <div class="top_text">
                    <h2>CONTACT</h2>
                    <p>저희는 늘 준비되어 있습니다.<p>
                </div>
            </div>
        </div>
        
        <div class="box01 container">
            <div class="box01_content">
                <div class="ul_wrap">
                    <ul class="user_info">
                        <li>
                            <p>ADRESS</p>
                            <p>제주특별자치도 제주시 조천읍 남조로 1717-35</p>
                        </li>
                        <li>
                            <p>TEL</p>
                            <p>064)780-3300, 1636(제주개발공사 또는 삼다수를 말하세요) </p>
                        </li>
                        <li>
                            <p>FAX</p>
                            <p>(064)784-5020</p>
                        </li>
                        <li>
                            <p>E-mail</p>
                            <p></p>
                        </li>
                    </ul>
                </div>
                <div class="ul_wrap">
                   <p>메세지를 보내주세요(*필수입력)</p>
                    <ul class="form_wrap">
                        <form action="">
                            <input type="text" placeholder="이름&#42;">
                            <input type="text" placeholder="이메일&#42;">
                            <input type="text" placeholder="연락처">
                            <textarea name="" id="" cols="30" rows="10" placeholder="메세지&#42;">
                            </textarea>
                            <p>
                                <input type="checkbox" value="1" id="check_protect">
                                <label for="check_protect">개인보호정책에 동의합니다.</label>
                            </p>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
         
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22400.472910679353!2d126.6644160975324!3d33.427149075556045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350d030a620155d9%3A0x61b96c053a8d02ab!2z7KCc7KO87Yq567OE7J6Q7LmY64-EIOygnOyjvOyLnCDsobDsspzsnY0g64Ko7KGw66GcIDE3MTctMzU!5e0!3m2!1sko!2skr!4v1490058294548" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <?php
		 include("./layout/footer.php")
		 ?>
    </div>
</body>
</html>