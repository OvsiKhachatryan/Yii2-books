<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\BookAuthor;

/** @var yii\web\View $this */
/** @var app\models\Book $model */
/** @var  app\models\Author $authors */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="book-form">

    <?php
        $form = ActiveForm::begin();
    ?>
    <?= $form->field($model, 'authorIds')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($authors, 'id', 'name'),
        'name' => 'authorIds',
        'maintainOrder' => true,
        'attribute' => 'id',
        'pluginOptions' => [
            'allowClear' => true,
            'multiple' => true
        ],
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
