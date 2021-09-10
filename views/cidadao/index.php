<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CidadaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cidadaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cidadao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cidadao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'paciente_cns',
            'paciente_nome',
            'paciente_cpf',
            'paciente_enumSexoBiologico',
            //'paciente_nome_mae',
            //'paciente_dataNascimento',
            //'paciente_racaCor_valor',
            //'paciente_nome_pai',
            //'telefone',
            //'naturalidade',
            //'paciente_endereco_nmMunicipio',
            //'paciente_endereco_bairro',
            //'paciente_endereco_cep',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
