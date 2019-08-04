<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AddressesModel */

$this->title = 'Create Addresses Model';
$this->params['breadcrumbs'][] = ['label' => 'Addresses Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addresses-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
