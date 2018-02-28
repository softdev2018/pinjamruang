<?php

namespace frontend\controllers;

use Yii;
use common\models\Ruang;
use backend\models\RuangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RuangController implements the CRUD actions for Ruang model.
 */
class RuangController extends Controller
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
     * Lists all Ruang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Ruang();
         if (Yii::$app->request->post()) {
            $date =  $_POST['cari_data_ruang'];
            return $this->redirect(['data-ruang', 'date' => $date]);
        } else {
            return $this->render('index', [
            'model' => $model,
        ]);
        }
        
    }

    public function actionDataRuang($date){
        $model = new Ruang();
        $data = $model->DataRuang($date);

        if (Yii::$app->request->post()) {
            $date =  $_POST['cari_data_ruang'];
            return $this->redirect(['data-ruang', 'date' => $date]);
        } else {
            return $this->render('_data_ruang',[
                'model' => $model,
                'data' => $model->DataRuang($date),
            ]);
        }

    }

    /**
     * Displays a single Ruang model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Ruang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ruang();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_RUANG]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ruang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_RUANG]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ruang model.
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
     * Finds the Ruang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ruang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ruang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
