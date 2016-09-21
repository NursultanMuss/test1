<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/template/css/style1.css">
    <link rel="stylesheet" href="/template/css/jquery.fullPage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


</head>
<body>


<div id="fullpage">
    <?php foreach ($sitePages as $siteItem):?>
    <div class="section page<?php echo $siteItem['id']; ?>" style="background: url('/template/images/<?php echo $siteItem['section_background'];?>')no-repeat 100% 0% / cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="page_logo center-block">
                        <img class="img-responsive center-block" src="/template/images/<?php echo $siteItem['page_logo'];?>">
                    </div>
                    <h4 class="slide_text"><?php echo $siteItem['slide_text'];?></h4>
                    <div class="slide_graphiks">
                        <?php  if($siteItem['id'] == 1) {
                             echo '
                             <div class="googleYandex">
                            <div class="google">
                                <img src="/template/images/' . $siteItem['google'] .'" alt="" class="img-responsive">
                            </div>
                            <div class="Yandex">
                                <img src="/template/images/'.$siteItem['yandex'].'" alt="" class="img-responsive">
                            </div>
                        </div>'
                             ;

                        }
                        ?>

                        <div class="dostizhenia">
                            <div class="col-1">
                                <div class="graphik">
                                    <img src="/template/images/graphik.png" alt="graphik" class="img-responsive">
                                </div>
                                <h6 class="discription"><b>БОЛЕЕ 90 КЛИЕНТОВ</b><br> ЕЖЕГОДНО</h6>
                            </div>
                            <div class="col-1">
                                <div class="superMan">
                                    <img src="/template/images/supermanLogo.png" alt="superman" class="img-responsive">
                                </div>
                                <h6 class="discription"><b>Одна из сильнейших</b><br>IT-команд в казахстане</h6>
                            </div>
                            <div class="col-1">
                                <div class="lamp">
                                    <img src="/template/images/lamp.png" alt="lampa" class="img-responsive">
                                </div>
                                <h6 class="discription"><b>Инновационные технологии</b><br>в создании и продвижении
                                    сайтов
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
                    <div class="woman">
                        <img class="img-responsive center-block" src="/template/images/<?php echo $siteItem['superman'] ?>">
                    </div>
                </div>
                <div class="strelka">
                    <a href="http://nurrrs.kz/#second_slide"><img src="/template/images/strelka.png" alt="strelka" class="img-responsive"></a>
                </div>
            </div>
        </div></div>
    <?php endforeach;?>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="/template/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/template/vendors/scrolloverflow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#fullpage').fullpage();
    });
</script>
</body>
</html>