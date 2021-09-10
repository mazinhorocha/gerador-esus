<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CidadaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidadao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'paciente_cns') ?>

    <?= $form->field($model, 'paciente_nome') ?>

    <?= $form->field($model, 'paciente_cpf') ?>

    <?= $form->field($model, 'paciente_enumSexoBiologico') ?>

    <?php // echo $form->field($model, 'paciente_nome_mae') ?>

    <?php // echo $form->field($model, 'paciente_dataNascimento') ?>

    <?php // echo $form->field($model, 'paciente_racaCor_valor') ?>

    <?php // echo $form->field($model, 'paciente_nome_pai') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'naturalidade') ?>

    <?php // echo $form->field($model, 'paciente_endereco_nmMunicipio') ?>

    <?php // echo $form->field($model, 'paciente_endereco_bairro') ?>

    <?php // echo $form->field($model, 'paciente_endereco_cep') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
