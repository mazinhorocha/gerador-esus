<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cidadao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidadao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'paciente_cns')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_enumSexoBiologico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_nome_mae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_dataNascimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_racaCor_valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_nome_pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_endereco_nmMunicipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_endereco_bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paciente_endereco_cep')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
