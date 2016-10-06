<?php include_once ROOT."/views/layout/header_admin.php";?>
<div class="login">
    <a href="/" class="logo"><img class="img-responsive" src="/template/images/greengoLogo.png" alt="Greergo_logo"></a>
</div>
<div class="content">
    <form action="" method="POST" class="login-form">
        <h3>Пожалуйста войдите</h3>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="create-account"></div>
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="glyphicon glyphicon-user"></i>
                    <input type="email" class="m-wrap" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="glyphicon glyphicon-lock"></i>
                    <input type="password" class="m-wrap" placeholder="Пароль" name="password" value="<?php echo $password; ?>">
                </div>
                <a href="/auth/remind" id="forget-password" style="float:right; color:#868686;">
                    Забыли Ваш пароль?            </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="form-actions">

            <label class="checkbox">
                <div class="checker"><span><input type="checkbox" name="remember" value="1"></span></div> Запомнить меня</label>
            <button type="submit" class="btn purple pull-right" name="submit"><i class="preloader" style="display: none; background-image: url(&quot;https://d2599kud7uucku.cloudfront.net/themes/h2/img/sprites.png?v=2.3.2&quot;);"></i>
                Войти <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
</div>

<style>
    .preloader {
        width: 14px;
        height: 14px;
        display: inline-block;
        margin-bottom: -3px;
    }
</style>

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 770px; width: 1440px; z-index: -999999; position: fixed;"><img src="https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/7.jpg?v=2.3.2" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1440px; height: 1080.38px; max-width: none; z-index: -999999; left: 0px; top: -155.191px;"></div>


<?php include_once ROOT.'/views/layout/footer_admin.php'?>
