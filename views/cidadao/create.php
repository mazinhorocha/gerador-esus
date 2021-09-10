<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cidadao */

$this->title = 'Create Cidadao';
$this->params['breadcrumbs'][] = ['label' => 'Cidadaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cidadao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
