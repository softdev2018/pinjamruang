<?php

namespace backend\controllers;

use Yii;
use common\models\Peminjaman;
use backend\models\PeminjamanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeminjamanController implements the CRUD actions for Peminjaman model.
 */
class PeminjamanController extends Controller
{
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

    public function actionIndex()
    {
        $model = new Peminjaman();
        $searchModel = new PeminjamanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'peminjaman' => $model->getPengajuan(),
        ]);
    }

    public function actionView($tanggal, $keperluan, $peminjam)
    {   
        $model = new Peminjaman();
        return $this->render('view', [
            'model' => $model,
            'data_peminjaman' => $model->dataPeminjaman($tanggal, $keperluan, $peminjam),
            'sesi_data_peminjaman' => $model->sesiDataPeminjaman($tanggal, $keperluan, $peminjam),
        ]);
    }

     public function actionUpdatestatusterima($tanggal, $keperluan, $peminjam)
    {
        $model = new Peminjaman();
        $update = $model->sesiDataPeminjaman($tanggal, $keperluan, $peminjam);
        if (Yii::$app->request->post()) {
            foreach ($update as $id_update) {
                $id_peminjaman = $id_update['ID_PEMINJAMAN'];
                $update_model = $this->findModel($id_peminjaman);            
                $update_model->STATUS_PINJAM='APPROVED';
                $update_model->update();
            }
                
            return $this->redirect(['index']);
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdatestatustolak($tanggal, $keperluan, $peminjam)
    {
        $model = new Peminjaman();
        $update = $model->sesiDataPeminjaman($tanggal, $keperluan, $peminjam);
        if (Yii::$app->request->post()) {
            foreach ($update as $id_update) {
                $id_peminjaman = $id_update['ID_PEMINJAMAN'];
                $update_model = $this->findModel($id_peminjaman);            
                $update_model->STATUS_PINJAM='NOT APPROVED';
                $update_model->update();
            }
                
            return $this->redirect(['index']);
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionCreate()
    {
        $model = new Peminjaman();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_PEMINJAMAN]);
        } else {
            return $this->render('create', [
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

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Peminjaman::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
