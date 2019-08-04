<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addresses Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addresses-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Addresses Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'index',
            'country',
            'city',
            'address',
            'zip',
            //'key',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
