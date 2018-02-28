<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RuangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Ruang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p><b>Cari data ruang berdasarkan tanggal</b></p>
    <?php $form = ActiveForm::begin(); ?>

    <?php          
                $value = date('Y-m-d');
                echo DatePicker::widget([
                                'name'=>'cari_data_ruang',
                                'value' => $value,
                                'pluginOptions'=>[
                                   'autoclose'=>true,
                                    'format' => 'yyyy-mm-dd',
                                ]
                            ]) ;
    ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
