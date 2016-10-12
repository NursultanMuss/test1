<?php include ROOT . '/views/layout/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление проектами</li>
                </ol>
            </div>

            <a href="/admin/projects/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить проект</a>

            <h4>Список товаров</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID проекта</th>
                    <th>Картинка проекта</th>
                    <th>Описание проекта</th>
                    <th>Ссылка на проект</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($projectsList as $project): ?>
                    <tr>
                        <td><?php echo $project['id']; ?></td>
                        <td><?php echo $project['image']; ?></td>
                        <td><?php echo $project['description']; ?></td>
                        <td><?php echo $project['link']; ?></td>
                        <td><a href="/admin/projects/update/<?php echo $project['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/projects/delete/<?php echo $project['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer_admin.php'; ?>

