<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersModel */

$this->title = 'Update Users Model: ' . $model->key;
$this->params['breadcrumbs'][] = ['label' => 'Users Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key, 'url' => ['view', 'id' => $model->key]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
