<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;
setlocale(LC_TIME, 'Indonesian');

?>
<!DOCTYPE html>
<html>
<header>
  <table style="border: none; width: 100%; td{vertical-align:top}">
    <tr>
      <td style="vertical-align: middle;">
        <div class="logo">
          <?= Html::img('@web/images/logo-uns-870x870.jpg', [
            'style' => [
              'width' => '90px',
              'margin-left' => '20px' ,
            ],
          ])
          ?>
        </div>
      </td>
      <td style="vertical-align: top; text-align: center; padding-right: 30px;">
        <div class="letterhead" style="text-align: center;">
          <p style="margin: 10; font-weight: normal">
            <b>KEMENTRIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</b>
          </p>
          <p style="margin: 10;"><b>UPT TIK</b></p>
          <p style="margin: 10;"><b>UNIVERSITAS SEBELAS MARET</b></p>
          <p class="uns-address" style="font-size: 11pt; margin: 10">
            <b>Jalan Ir. Sutami No. 36 A Kentingan Surakarta 57126 Telp/Fax. (0271) 669376</b>
          </p>
        </div>
      </td>
    </tr>
  </table>
  <div class="letterhead-sep" style="padding: 2px; border-top: 1px solid #000; border-bottom: 3px solid #000;"></div>
  <br/>
</header>
    <body>
        <p align=right>Surakarta, <?= strftime("%d %B %Y", strtotime(date('d-M-Y'))) ?></p>
        <table>
          <tr>
            <td>No</td>
            <td>: 002/UN27.28/LL/<?= strftime("%Y", strtotime(date('d-M-Y'))) ?></td>
          </tr>
          <tr>
            <td>Hal</td>
            <td>: Peminjaman Ruang</td>
          </tr>
          <tr>
            <td>Lamp</td>
            <td>: -</td>
          </tr>
        </table>
        <br/>
        Kepada Yth.<br/>
        Kepala UPT TIK <br/>

        Universitas Sebelas Maret <br/>
        Di Surakarta <br/>
        <br/>
        <br/>
        Dengan hormat,
        <br/>
        <p style="text-indent:50px;text-align: justify;">Sehubungan dengan perihal diatas, dengan ini kami mengajukan peminjaman ruang sebagai berikut:</p>
        <table>
          <tr>
            <td width="50px"></td>
            <td>Ruang</td>
            <td>:   <?php
              $temp = "";
                  foreach ($sesi_data_peminjaman as  $data) {
                    if($temp!=$data['NAMA_RUANG']){
                      if($temp!=""){
                        echo ", ";
                      }
                      $temp = $data['NAMA_RUANG'];
                      echo "Ruang ".$temp;
                    }
                  }   ?></td>

          </tr>
          <tr>
            <td></td>
            <td>Keperluan</td>
            <td>: <?php
            foreach ($data_peminjaman as $data) {
             echo $data['KEPERLUAN'];
           }?></td>

          </tr>
          <tr>
            <td></td>
            <td>Sesi</td>
            <td>: <?php
              foreach ($sesi_view_data_peminjaman as $key => $sesi_pinjam) {
                if ($key>0){
                  echo ", ";
                }
                echo $sesi_pinjam['ID_SESI'];
              }
            ?></td>

          </tr>
        </table>
        <br/>
        <p style="text-indent:50px;text-align: justify;">Demikian surat ini kami sampaikan. Atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
        <br/><br/>
        <table align="right" style="margin-top: 40px;">
            <tr>
                  <td align="left">Surakarta, <?= strftime("%d %B %Y", strtotime(date('d-M-Y'))) ?></td>
            </tr>
            <tr>
                <td align="left">Pengaju,</td>
            </tr>
            <tr>
              <td align="left"><?=Yii::$app->user->identity->username?></td>
                <br/><br/><br/><br/><br/><br/><br/>
            </tr>
            <tr>
                <td align="left" style="text-decoration: underline;"></td>
            </tr>
        </table>
    </body>
</html>
