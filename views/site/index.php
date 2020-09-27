<?php

/* @var $this yii\web\View */

$this->title = 'Блог';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Блог Алёны</h1>

        <p class="lead">На этой странице будут выводится мои блоги.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($blogs as $blog): ?><!--Создание блоков с блогами по кол-ву записей в бд -->
            <div class="col-lg-4">
                <h2><?php echo $blog['name'];?></h2>
                <p><?php echo $blog['text'];?></p>
                <p><a class="btn btn-default" href="#">Перейти к блогу</a></p><!--Заглушка на переход страницу блога -->
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
