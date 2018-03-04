<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use common\models\Peminjaman;
use common\models\PeminjamanRuang;
use common\models\PeminjamanSesi;
use common\models\Sesi;
use common\models\Ruang;

class HelperController extends Controller
{
  public function actionAjaxSesi()
  {
     Yii::$app->response->format = Response::FORMAT_JSON;
     $ruang = Yii::$app->request->post('ruang');
     $date = Yii::$app->request->post('tanggal');

    $ruang = (new \yii\db\Query())
            ->select('*')
            ->from('RUANG')
            ->where(['ID_RUANG' => $ruang])
            ->all();

    $sesi = (new \yii\db\Query())
            ->select('*')
            ->from('SESI')
            ->all();

    $tanggal = '\''.$date.'\'';
    $data =array();
    $i=0;
     foreach ($ruang as $r) {
        $data[$i] = array('ID_RUANG' => $r['ID_RUANG'],'RUANG' => $r['NAMA_RUANG']);
        $j=0;
        foreach ($sesi as $s) {
             $status = (new \yii\db\Query())
                        ->select('*')
                        ->from('peminjaman')
                        ->join('join',
                                'ruang',
                                "peminjaman.ID_RUANG = ruang.ID_RUANG"
                                )
                        ->join('join',
                                'sesi',
                                'peminjaman.ID_SESI = sesi.ID_SESI'
                                )
                        ->where("TANGGAL_PINJAM = $tanggal AND peminjaman.ID_SESI = $s[ID_SESI] AND peminjaman.ID_RUANG = $r[ID_RUANG]")
                        ->all();
            $stat1 = array();
            foreach ($status as $stat) {
                $stat1 = $stat['STATUS_PINJAM'];
            }



            $data[$i]['DATA'][$j++]  = array('SESI' => $s['ID_SESI'],'STATUS' => $stat1);
        }//akhir foreach sesi
       $i++;
    } //akir foreach ruang

    return $data;
  }
}
 ?>
