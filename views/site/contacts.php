
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/simple-sidebar.css">
    <link rel="stylesheet" href="/template/css/jquery.fullPage.css">
    <link rel="stylesheet" href="/template/css/style1.css">
    <link rel="stylesheet" href="/template/css/media.css">
</head>
<body class="wrapper contacts">
<?php include ROOT.'/views/layout/sidebar.php'?>

<div class="page-content-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="contacts_page">
                <h1>Контакты</h1>
                <div class="menuBottom">
                    <div class="address">
                        <img src="/template/images/place_tag.png" alt="metka" class="img-responsive">
                        <p>Казахстан, г.Шымкент, ул.Рыскулова 8а, Бизнес центр Даму</p>
                    </div>
                    <div class="telContacts">
                        <img src="/template/images/phone.png" alt="phone" class="img-responsive">
                        <p class="content">
                            +7 747 108 07 25<br>
                            +7 747 717 22 06<br>
                            +7 7252 97 57 90<br>
                        </p>
                    </div>
                    <div class="emailAddres">
                        <img src="/template/images/mailbox.png" alt="email" class="img-responsive">
                        <p class="content"> ok@greengo.kz</p>
                    </div>
                    <div class="social-links">
                        <div class="facebookLogo">
                            <a href="#"><img src="/template/images/facebook_logo.png" alt="facebook" class="img-responsive"></a>
                        </div>
                        <div class="vkLogo">
                            <a href="#"><img src="/template/images/vk.png" alt="vk" class="img-responsive"></a>
                        </div>
                        <div class="twLogo">
                            <a href="#"><img src="/template/images/Twitter_logo_blue.png" alt="twitter" class="img-responsive"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="look_at_the_map">
    <img src="/template/images/map.png" alt="map" class="img-responsive center-block">
    <p>Просмотреть на карте</p>
    <a href="">
        <img src="/template/images/strelka_black.png" alt="black_strelka" class="img-responsive center-block">
    </a>
</div>
<div class="zayavka">
    <div class="comment">
        <img src="/template/images/comment_logo.png" alt="comment" class="img-responsive">
    </div>
    <div class="right_slide">
        <p>Оставить заявку</p>
    </div>
</div>

<div class="phorma_zayavki">
    <div class="comment">
        <img src="/template/images/comment_logo_asd.png" alt="comment" class="img-responsive center-block">
    </div>
    <p>Ваша заявка</p>
    <?php if ($result): ?>
        <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
    <?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form id="zayavka" name="zayavka" method="post" action="#">
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $userName; ?>" name="userName" placeholder="Your Name">
            <input type="email" class="form-control" value="<?php echo $userEmail; ?>" name="userEmail" placeholder="Your Email">
            <input type="text" class="form-control" value="<?php echo $phoneNumber ?>" name="phoneNumber" placeholder="Your phone number">
            <textarea rows="6" cols="20" placeholder="Текст сообщения" type="text" class="form-control" name="userText">
                </textarea>
        </div>
        <input type="submit" name="submit" class="otpravka btn btn-default center-block" id="submit button" value="отправить заявку">
    </form>
    <?php endif; ?>

</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="/template/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/template/vendors/scrolloverflow.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<!--<script src="/template/js/jquery-3.1.0.js" ></script>-->

<script>
    $(".menu-toggle").click(function (e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });
    $(".comment").click(function (e){
        e.preventDefault();
        $(".wrapper").toggleClass("toggled2");
    });
    $("#zayavka").submit(function (){
        $(".wrapper").toggleClass("toggled2");
    });
</script>
<script>
    function ready(){
        var a = document.querySelector('#first_menu');
        a.onmouseout=function(e){
            document.getElementById('second').style.display='none';
            var b=document.getElementsByClassName('first');
            var elements=b[0].getElementsByTagName('li');
            for(var i=0;i<elements.length; i++){
                var input=elements[i];
                input.style.lineHeight=1.5;
            }
        };
        a.onmouseover=function (e) {
            document.getElementById('second').style.display='block';
            var b=document.getElementsByClassName('first');
            var elements=b[0].getElementsByTagName('li');
            for(var i=0;i<elements.length; i++){
                var input=elements[i];
                input.style.lineHeight=1;
            }
        };
    };
    document.addEventListener("DOMContentLoaded", ready);
</script>


</body>
</html>