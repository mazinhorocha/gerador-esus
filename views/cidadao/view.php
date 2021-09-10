<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cidadao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cidadaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cidadao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'paciente_cns',
            'paciente_nome',
            'paciente_cpf',
            'paciente_enumSexoBiologico',
            'paciente_nome_mae',
            'paciente_dataNascimento',
            'paciente_racaCor_valor',
            'paciente_nome_pai',
            'telefone',
            'naturalidade',
            'paciente_endereco_nmMunicipio',
            'paciente_endereco_bairro',
            'paciente_endereco_cep',
        ],
    ]) ?>

</div>
