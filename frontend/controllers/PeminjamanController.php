<?php

namespace frontend\controllers;

use Yii;
use common\models\Peminjaman;
use common\models\Ruang;
use frontend\models\PeminjamanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeminjamanController implements the CRUD actions for Peminjaman model.
 */
class PeminjamanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Peminjaman models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PeminjamanSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Peminjaman();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data_pinjam' => $model->getPengajuanUser(),
            'data_sesi' => $model->getPengajuanSesiUser(),

        ]);
    }

    /**
     * Displays a single Peminjaman model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($tanggal, $keperluan, $peminjam)
    {
        $model = new Peminjaman();
        return $this->render('view', [
            'model' => $model,
            'data_peminjaman' => $model->dataPeminjaman($tanggal, $keperluan, $peminjam),
            'sesi_data_peminjaman' => $model->sesiDataPeminjaman($tanggal, $keperluan, $peminjam),

        ]);
    }

    /**
     * Creates a new Peminjaman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Peminjaman();
        $ruang = Ruang::find()->all();

        if ($model->load(Yii::$app->request->post()) ) {
            $sesi = $_POST['sesi'];
            $ruang = $_POST['ruang'];
            $hasil_cek = array();
            foreach ($ruang as $r) {
                foreach ($sesi as $s) {
                    $model->ID_PEMINJAMAN = NULL;
                    $model->ID_PEMINJAM = Yii::$app->user->identity->id;
                    $model->TANGGAL_PINJAM;
                    $model->ID_RUANG = $r;
                    $model->ID_SESI = $s;
                    $model->STATUS_PINJAM = 'DIPROSES';
                    $cek_jadwal = Peminjaman::find()->where(['ID_SESI' => $model->ID_SESI])->andWhere(['TANGGAL_PINJAM'=>$model->TANGGAL_PINJAM])->andWhere(['ID_RUANG'=>$model->ID_RUANG])->all();

                    if(!empty($cek_jadwal)){
                        $hasil_cek[] = 'DIPAKAI';//cek jika jadwal dipakai
                    }else{
                       $hasil_cek[] = 'KOSONG';
                    }
                }
            }
            //jika ada sesi yang dipakai maka gagal disimpan
            if (in_array('DIPAKAI', $hasil_cek)) {
               return $this->redirect(['create']);
            }else{
              foreach ($ruang as $r) {
                foreach ($sesi as $s) {
                    $model->ID_PEMINJAMAN = NULL;
                    $model->ID_PEMINJAM = Yii::$app->user->identity->id;
                    $model->TANGGAL_PINJAM;
                    $model->ID_RUANG = $r;
                    $model->ID_SESI = $s;
                    $model->STATUS_PINJAM = 'DIPROSES';
                    $model->isNewRecord = TRUE;
                    $model->save();
                }
              }
            }
            return $this->redirect(['view', 'tanggal' => $model->TANGGAL_PINJAM, 'keperluan' =>  $model->KEPERLUAN, 'peminjam' =>  $model->ID_PEMINJAM ] );
        } else {
            return $this->render('create', [
                'model' => $model,
                'sesi' => $model->AllSesi(),
                'ruang' => $ruang,

            ]);
        }
    }

    public function actionPinjamRuang($ruang, $tgl, $sesi){
        $model = new Peminjaman();

        if ($model->load(Yii::$app->request->post())) {
            $model->ID_PEMINJAMAN = NULL;
            $model->ID_PEMINJAM = Yii::$app->user->identity->id;
            $model->TANGGAL_PINJAM = $tgl;
            $model->KEPERLUAN ;
            $model->ID_RUANG = $ruang;
            $model->ID_SESI = $sesi;
            $model->STATUS_PINJAM = 'DIPROSES';
            $model->isNewRecord = TRUE;
            $model->save();

            return $this->redirect(['index']);
        }else{
            return $this->render('_form_pinjam_sesi',[
                    'model' => $model,
                ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_PEMINJAMAN]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Peminjaman model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peminjaman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Peminjaman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Peminjaman::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
