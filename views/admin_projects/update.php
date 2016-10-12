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


            <h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название фото проекта</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $project['image']; ?>">

                        <p>Описание проекта</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $project['description']; ?>">

                        <p>Ссылка на проект</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $project['link']; ?>">

<!--                        <p>Изображение проекта</p>-->
<!--                        <img src="--><?php //echo Product::getImage($project['id']); ?><!--" width="200" alt="" />-->
<!--                        <input type="file" name="image" placeholder="" value="--><?php //echo $project['image']; ?><!--">-->
<!--                        -->
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer_admin.php'; ?>

