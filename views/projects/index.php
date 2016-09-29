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

<div class="page-content-wrapper projects">
    <div class="container-fluid">
    <?php foreach ($projectsPage as $projectsItem):?>
        <div class="col-md-4 col-lg-4">
            <div class="row">
                <div class="projects">
                    <a class="project_img" href="http://<?php echo $projectsItem['link']?>">
                        <img src="/template/images/<?php echo $projectsItem['image']?>" alt="<?php echo $projectsItem['image']?>" class="img-responsive">
                        <div class="hidden_project" style="display: none;">
                            <div class="project_description">
                                <?php echo $projectsItem['description']?>
                            </div>
                            <div class="project_link">
                                <p><?php echo $projectsItem['link']?></p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="/template/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/template/vendors/scrolloverflow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script>
    $(".menu-toggle").click(function (e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
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
<script>
    $(".project_img").hover(function(){
        $(".helping-block").remove();
        $(this).append('<span class="helping-block"></span>');
        $(".helping-block").prev().fadeIn(400);
        return false;
    },function(){
        $(".helping-block").prev().fadeOut(500);
        $(".helping-block").remove();
        return false;
    });
</script>


</body>
</html>