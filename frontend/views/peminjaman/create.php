<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */

$this->title = 'Membuat Peminjaman';

?>
<div class="peminjaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'sesi' => $model->AllSesi(),
        'ruang' => $ruang,
    ]) ?>

</div>
