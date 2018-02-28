<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajukan Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
     <?php  //GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],

    //         // 'ID_PEMINJAMAN',
    //         // 'ID_PEMINJAM',
    //         'TANGGAL_PINJAM',
    //         'iDRUANG.NAMA_RUANG',
    //         'KEPERLUAN',
    //         'ID_SESI',
    //         'STATUS_PINJAM',

    //         // ['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]); 
    ?>

    <table class="table table-bordered">
        <tr class="info">
            <td>
                No
            </td>
            <td>
                Tanggal
            </td>
            <td>
                Keperluan
            </td>
            <td>
                Ruang
            </td>
            <td>
                Sesi
            </td>
            <td>
                Status
            </td>
        </tr>
        
            <?php
                foreach ($data_pinjam as $key => $dp) {
            ?><tr>
                <td>
                    <?= $key+1 ?>
                </td>
                <td>
                    <?= $dp['TANGGAL_PINJAM']; ?>
                </td>
                <td>
                    <?= $dp['KEPERLUAN']; ?>
                </td>
                <td>
                    <?= $dp['NAMA_RUANG']; ?>
                </td>
            <?php } ?>

            <td>
            <?php
                foreach ($data_sesi as $key => $ds) {
            ?>
                     <?= "<button class='btn btn-primary'>".$ds['ID_SESI']."</button>"; ?>
                
            <?php } ?>
            </td>
             <?php
                foreach ($data_pinjam as $key => $dp) {
                   
                        echo "<td align='center' class='warning'>";
                        echo $dp['STATUS_PINJAM'];
                        echo "</td>";
                    

            ?>
                
            <?php } ?>
        </tr>
        
    </table>
</div>
