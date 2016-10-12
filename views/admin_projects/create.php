<?php include ROOT . '/views/layout/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/projects">Управление проектами</a></li>
                    <li class="active">Редактировать проект</li>
                </ol>
            </div>


            <h4>Добавить новый проект</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название фото проекта</p>
                        <input type="text" name="image" placeholder="" value="">

                        <p>Описание проекта</p>
                        <input type="text" name="description" placeholder="" value="">

                        <p>Ссылка на проект</p>
                        <input type="text" name="link" placeholder="" value="">

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer_admin.php'; ?>

