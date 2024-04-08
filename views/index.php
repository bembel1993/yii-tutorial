<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Users</h1>
<ul>
<?php foreach ($names as $name): ?>
    <li>
        <?= Html::encode("{$name->code} ({$name->name})") ?>:
        <?= $name->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>