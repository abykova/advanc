<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<div class="site-index">

        <div class="trophy">

			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'username')->textInput() ?>
			<?= $form->field($model, 'points')->textInput(['value' => $point]) ?>
			<?= $form->field($model, 'money')->textInput(['value' => $money]) ?>
			<?= $form->field($model, 'trophy')->textInput(['value' => $trophy]) ?>

            <div class="form-group">
				<?= Html::submitButton('ЖМЯК', ['class' => 'btn btn-primary']) ?>
            </div>
			<?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
