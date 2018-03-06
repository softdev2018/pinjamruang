<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */

$this->title = 'Ajuan Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view">

    <table class="table table-bordered tabel-hover">
        <tr>
            <td width="20%">
                Pengaju
            </td>
            <td>
            <?php
                foreach ($data_peminjaman as $data) {
            ?>

            <?= $data['username'] ?>
            <?php  }   ?>


            </td>
        </tr>
        <tr>
            <td>
                Keperluan
            </td>
            <td>
            <?php
                foreach ($data_peminjaman as $data) {
            ?>

            <?= $data['KEPERLUAN'] ?>
            <?php  }   ?>


            </td>
        </tr>

        <tr>
            <td>
                Ruang
            </td>
            <td>
              <?php
              $temp = "";
                  foreach ($sesi_data_peminjaman as $data) {
                    if($temp!=$data['NAMA_RUANG']){
                      if($temp!=""){
                        echo ", ";
                      }
                      $temp = $data['NAMA_RUANG'];
                      echo "Ruang ".$temp;
                    }
                  }   ?>

            </td>
        </tr>
        <tr>
            <td>
                Tanggal
            </td>
            <td>
            <?php
                foreach ($data_peminjaman as $data) {
            ?>
            <?php $status = $data['STATUS_PINJAM']; ?>
            <?= $data['TANGGAL_PINJAM'] ?>
            <?php  }   ?>

            </td>
        </tr>
        <tr>
            <td>
                Sesi
            </td>
            <td>
            <?php
                foreach ($sesi_view_data_peminjaman as $sesi_pinjam) {
            ?>

            <?= "<button class='btn btn-primary'>".$sesi_pinjam['ID_SESI'].'</button> ' ?>
                        <?php  }   ?>


            </td>
        </tr>
        <tr>
            <td>
                Status
            </td>
            <td>
            <?php
                foreach ($data_peminjaman as $data) {

                    if( $data['STATUS_PINJAM'] == 'DIPROSES'){
                        echo "Menunggu konfirmasi admin";
                    }else{
                        echo $data['STATUS_PINJAM'];
                    }

                }
            ?>


            </td>
        </tr>
    </table>
    <br>
    <?php
        if ($status == 'APPROVED') {
            echo  Html::a('Approve', ['updatestatusterima', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-primary disabled',
                'data' => [
                    'confirm' => 'Anda akan membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]) ;
            echo " ";
            echo Html::a('Not Approve', ['updatestatustolak', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Anda TIDAK membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]);
        }elseif ($status == 'NOT APPROVED') {
            echo  Html::a('Approve', ['updatestatusterima', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-primary',
                'data' => [
                    'confirm' => 'Anda akan membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]) ;
            echo " ";
            echo Html::a('Not Approve', ['updatestatustolak', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-danger disabled',
                'data' => [
                    'confirm' => 'Anda TIDAK membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]);
        }else{
            echo  Html::a('Approve', ['updatestatusterima', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-primary',
                'data' => [
                    'confirm' => 'Anda akan membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]) ;
            echo " ";
            echo Html::a('Not Approve', ['updatestatustolak', 'tanggal' => $_GET['tanggal'], 'keperluan' => $_GET['keperluan'], 'peminjam' => $_GET['peminjam']], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Anda TIDAK membolehkan acara untuk memakai ruangan ini?',
                    'method' => 'post',
                ],
            ]);
        }
    ?>


</div>
