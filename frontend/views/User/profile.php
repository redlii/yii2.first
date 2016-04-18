<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form ActiveForm */
?>
<div class="main-profile col-lg-4 col-md-4">

  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

  <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
      'autoclose' => true,
      'format' => 'yyyy-mm-dd',
    ]
  ]);
  ?>

  <?php
  $items = [
    'male' => 'Мужской',
    'female' => 'Женский',
  ];
  $params = [
    'prompt' => 'Ваш пол...'
  ];
  echo $form->field($model, 'gender')->dropDownList($items, $params);
  ?>
  
  <?= $form->field($model, 'avatar')->fileInput() ?>
  <?= $form->field($model, 'first_name') ?>
  <?= $form->field($model, 'second_name') ?>
  <?= $form->field($model, 'middle_name') ?>

  <div class="form-group col-md-offset-4">
    <?= Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
  </div>

  <?php ActiveForm::end(); ?>

  <p>Name</p>
  <h4><?=$model->first_name ?></h4>
  <p>Second name</p>
  <h4><?=$model->second_name ?></h4>
  <p>Last name</p>
  <h4><?=$model->middle_name ?></h4>
  <p>Birthday</p>
  <h4><?=$model->birthday ?></h4>
  <p>Gender</p>
  <h4><?=$model->gender ?></h4>

</div><!-- main-profile -->
