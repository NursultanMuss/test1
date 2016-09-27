<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/simple-sidebar.css">
    <link rel="stylesheet" href="/template/css/jquery.fullPage.css">
    <link rel="stylesheet" href="/template/css/style1.css">

</head>
<body class="wrapper">
<?php include ROOT.'/views/layout/sidebar.php'?>

<div id="fullpage" class="page-content-wrapper">
    <?php foreach ($sitePages as $siteItem):?>
    <div id="page<?php echo $siteItem['id']; ?>" class="section " data-anchor="page<?php echo $siteItem['id']; ?>" style="background: url('/template/images/<?php echo $siteItem['section_background'];?>')no-repeat 100% 0% / cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 left">
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
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 right">
                    <div class="woman">
                        <img class="img-responsive center-block" src="/template/images/<?php echo $siteItem['superman'] ?>">
                    </div>
                </div>
                <?php
                    if($siteItem['id'] !=4){
                        echo '<div class="strelka">
                    <a href="'. ROOT.'/#'.($siteItem['id']+1).'"><img src="/template/images/strelka.png" alt="strelka" class="img-responsive"></a>
            </div>';
                    }
                ?>


            </div>
        </div></div>
    <?php endforeach;?>
</div>
<div class="vline" style="margin-top:-95px;"></div>

<ul id="pagination" >
    <li data-menuanchor="fullpage1" class="pagination-link"><span style="transition: all 1s;"><span style="transition: all 1s;"></span></span></li>
    <li data-menuanchor="fullpage2" class="pagination-link"><span style="transition: all 1s;"><span style="transition: all 1s;"></span></span></li>
    <li data-menuanchor="fullpage3" class="pagination-link"><span style="transition: all 1s;"><span style="transition: all 1s;"></span></span></li>
    <li data-menuanchor="fullpage4" class="pagination-link"><span style="transition: all 1s;"><span style="transition: all 1s;"></span></span></li>
</ul>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="/template/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/template/vendors/scrolloverflow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<!--<script src="/template/js/jquery-3.1.0.js" ></script>-->
<script>
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors: ["fullpage1","fullpage2", "fullpage3","fullpage4"],
            menu: '#pagination',
//            navigation: true,
//            navigationPosition: right;
        });
    });
</script>
<script>
    $(".menu-toggle").click(function (e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });
</script>
<script>
    window.onload=function(){
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
</script>
<script>
    addPagination : function() {
        pagination = $('<ul id="pagination"></ul>');
        var paginationHeight = pagination.height();
        pagination.css({
            marginTop : '-' + (paginationHeight/2) + 'px',
            right : '25px'
        });
    }
</script>

</body>
</html>