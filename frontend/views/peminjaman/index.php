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


    <table class="table table-bordered">
        <tr class="info">
            <td>
                No
            </td>
            <td>
                Tanggal
            </td>
            <td width=600px>
                Keperluan
            </td>

            <td>
                Status
            </td>
            <td>
                Detail
            </td>
            <td>
                Cetak Surat
            </td>
        </tr>

        <?php
        $temp="";
        $temp1="";
              foreach ($data_pinjam as $key => $dp) {
                if($temp!=$dp['TANGGAL_PINJAM'].$dp['KEPERLUAN'].$dp['ID_PEMINJAM']){
                $temp=$dp['TANGGAL_PINJAM'].$dp['KEPERLUAN'].$dp['ID_PEMINJAM'];
          ?>
          <tr>
              <td>
                  <?= $key+1 ?>
              </td>
              <td>
                  <?= $dp['TANGGAL_PINJAM']; ?>
              </td>
              <td>
                  <?= $dp['KEPERLUAN']; ?>
              </td>
              <?php
                  if($dp['STATUS_PINJAM'] == 'NOT APPROVED'){
                      echo "<td align='center' class='danger'>";
                      echo $dp['STATUS_PINJAM'];
                      echo "</td>";
                  }elseif ($dp['STATUS_PINJAM'] == 'DIPROSES') {
                      echo "<td align='center' class='info'>";
                      echo $dp['STATUS_PINJAM'];
                      echo "</td>";
                  }else{
                      echo "<td align='center' class='success'>";
                      echo $dp['STATUS_PINJAM'];
                      echo "</td>";
                  }//akhir if ?>
              <td align=center>
                   <?= Html::a('Detail', [
                     'view',
                     'tanggal' => $dp['TANGGAL_PINJAM'],
                     'keperluan' => $dp['KEPERLUAN'],
                     'peminjam' => Yii::$app->user->identity->id],
                     ['class' => 'btn btn-primary'])
                  ?>

              </td>
              <td align=center>
                   <?= Html::a('Cetak', [
                     'cetak-surat',
                     'tanggal' => $dp['TANGGAL_PINJAM'],
                     'keperluan' => $dp['KEPERLUAN'],
                     'peminjam' => Yii::$app->user->identity->id],
                     ['class' => 'btn btn-primary'])
                  ?>

              </td>

            <?php }}//akhir foreach ?>

        </tr>

    </table>
</div>
