<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RuangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Jadwal Ruang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-data">
    <p><b>Cari data ruang berdasarkan tanggal</b></p>
    <?php $form = ActiveForm::begin(); ?>

    <?php          
                $value = date('Y-m-d');
                echo DatePicker::widget([
                                'name'=>'cari_data_ruang',
                                'value' => $_GET['date'],
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


    <?php 
        $date = $_GET['date'];
        $str_date =  strtotime($date);
        echo "<b>Data Jadwal Ruang Tanggal ".$date_format = date('d F Y', $str_date).'</b><br><br>';

        $jumlah_sesi = common\models\Sesi::find()->count(); 
    ?> 
    <table border="1" class="table table-bordered table-hovered"> 
        <tr align="center" class="info">
            <td rowspan="2">
                No.
            </td>
            <td rowspan="2">
                Ruang
            </td>
            <td colspan=<?= $jumlah_sesi ?>>
                Sesi
            </td>
        </tr>
        <tr class="warning">
            <?php 
                for ($i=1; $i <= $jumlah_sesi ; $i++) { 
            ?>  
                <td align="center">
                    <?= $i ?>
            <?php } ?>
            
            </td>
        </tr>

        
            <?php 
                $no = 1;
                foreach($data as $data1) {
            ?>
        <tr>
            <td align="center">
                <?= $no++ ?>
            </td>
            <td>
                <?= $data1['RUANG'] ?>
            </td>
            <?php 
                foreach ($data1['DATA'] as $d) {
                    ?>
                    <td align="center">
                        <?php
                            if(!empty($d['STATUS'])){
                                echo Html::a('Dipakai', [''], ['class' => 'btn btn-danger disabled']);
                            }else{
                                echo Html::a('Kosong', ['/peminjaman/pinjam-ruang', 'ruang'=>$data1['ID_RUANG'],'tgl' => $date,'sesi'=>$d['SESI']], ['class' => 'btn btn-success ']);
                            }
                        ?>
                    </td>
               <?php }
            ?>
            
            <?php } ?>
            
        </tr>
        
    </table>
</div>
