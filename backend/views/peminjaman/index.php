<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pengajuan Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table table-borderedt table-hovered">
        <tr class="success">
            <td>
                No.
            </td>
            <td>
                Pengaju
            </td>
            <td width=600px>
                Keperluan
            </td>
            <td>
                Status
            </td>
            <td>
                Aksi
            </td>
        </tr>

            <?php
                $no = 1;
                foreach ($peminjaman as $pinjam) {
            ?><tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
                <?= $pinjam['username'] ?>
            </td>
            <td>
                <?= $pinjam['KEPERLUAN'] ?>
            </td>
             <td>
                <?php
                    if( $pinjam['STATUS_PINJAM'] == 'DIPROSES'){
                            echo "Menunggu konfirmasi admin";
                        }else{
                            echo $pinjam['STATUS_PINJAM'];
                        }
                ?>
            </td>
            <td align=center>
                <?php

                    //echo Html::button('Lihat', ['value' => Url::to("view?tanggal=".$pinjam['TANGGAL_PINJAM']."&keperluan=".$keperluan), 'class' => 'btn btn-primary', 'id' => 'modalButton'])
                    echo Html::a('Lihat', ['view',"tanggal" => $pinjam['TANGGAL_PINJAM'],"keperluan"=>$pinjam['KEPERLUAN'],'peminjam' => $pinjam['id']],[ 'class' => 'btn btn-primary']) ;
                ?>
                <?php
                    // Modal::begin([
                    //     'header' => '<h4>Ajuan Peminjaman</h4>',
                    //     'id' => 'modal',
                    //     'size' => 'modal-lg',
                    // ]);
                    // echo "<div id = 'modalContent'></div>";
                    // Modal::end();
                ?>
            </td>
            <?php } ?>
        </tr>
    </table>

</div>
