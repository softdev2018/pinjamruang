<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ruang */

$this->title = 'Tambah Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-create">
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
        <div class="box-body">
          <div class="box-header with-border">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
          </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
