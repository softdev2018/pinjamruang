<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property integer $ID_PEMINJAMAN
 * @property integer $ID_PEMINJAM
 * @property integer $ID_RUANG
 * @property integer $ID_SESI
 * @property string $TANGGAL_PINJAM
 * @property string $STATUS_PINJAM
 *
 * @property User $iDPEMINJAM
 * @property Ruang $iDRUANG
 * @property Sesi $iDSESI
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PEMINJAM', 'ID_RUANG', 'ID_SESI', 'TANGGAL_PINJAM', 'STATUS_PINJAM','KEPERLUAN'], 'required'],
            [['ID_PEMINJAM', 'ID_RUANG', 'ID_SESI'], 'integer'],
            [['STATUS_PINJAM','KEPERLUAN'], 'string'],
            [['TANGGAL_PINJAM'], 'string', 'max' => 50],
            [['ID_PEMINJAM'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID_PEMINJAM' => 'id']],
            [['ID_RUANG'], 'exist', 'skipOnError' => true, 'targetClass' => Ruang::className(), 'targetAttribute' => ['ID_RUANG' => 'ID_RUANG']],
            [['ID_SESI'], 'exist', 'skipOnError' => true, 'targetClass' => Sesi::className(), 'targetAttribute' => ['ID_SESI' => 'ID_SESI']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PEMINJAMAN' => 'Id  Peminjaman',
            'ID_PEMINJAM' => 'Peminjam',
            'ID_RUANG' => 'Ruang',
            'KEPERLUAN' => 'Keperluan',
            'ID_SESI' => 'Sesi',
            'TANGGAL_PINJAM' => 'Tanggal  Pinjam',
            'STATUS_PINJAM' => 'Status  Pinjam',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDPEMINJAM()
    {
        return $this->hasOne(User::className(), ['id' => 'ID_PEMINJAM']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDRUANG()
    {
        return $this->hasOne(Ruang::className(), ['ID_RUANG' => 'ID_RUANG']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDSESI()
    {
        return $this->hasOne(Sesi::className(), ['ID_SESI' => 'ID_SESI']);
    }

    public function AllSesi(){
        return Sesi::find()->asArray()->all();
    }

    public function getPengajuan(){
        $peminjaman = (new \yii\db\Query())
                    ->select('*')
                    ->from('peminjaman')
                    ->join('join',
                            'user',
                            'peminjaman.ID_PEMINJAM = user.ID'
                        )
                    ->join('join',
                            'RUANG',
                            'peminjaman.ID_RUANG = ruang.ID_RUANG'
                        )
                    ->groupBy('peminjaman.KEPERLUAN')
                    ->orderBy('STATUS_PINJAM')
                    ->all();
        return $peminjaman;
    }

    //DATAPEMINJAMAN USER DENGAN ID YANG LOGIN
    public function getPengajuanUser(){
        $peminjaman = (new \yii\db\Query())
                    ->select('*')
                    ->from('peminjaman')
                    ->join('join',
                            'user',
                            'peminjaman.ID_PEMINJAM = user.ID'
                        )
                    ->join('join',
                            'RUANG',
                            'peminjaman.ID_RUANG = ruang.ID_RUANG'
                        )
                    ->where(["ID_PEMINJAM" => Yii::$app->user->identity->id]) 
                    ->groupBy('peminjaman.KEPERLUAN')
                    ->all();
        return $peminjaman;
    }

    //data sesi peminjaman user yang login jika memesan lebih dari satu sesi untuk 1 keperluan
    public function getPengajuanSesiUser(){
        $peminjaman = (new \yii\db\Query())
                    ->select('*')
                    ->from('peminjaman')
                    ->join('join',
                            'user',
                            'peminjaman.ID_PEMINJAM = user.ID'
                        )
                    ->join('join',
                            'RUANG',
                            'peminjaman.ID_RUANG = ruang.ID_RUANG'
                        )
                    ->where(["ID_PEMINJAM" => Yii::$app->user->identity->id]) 
                    ->all();
        return $peminjaman;
    }

    public function dataPeminjaman($tanggal, $keperluan, $peminjam){
        $tgl = '\''.$tanggal.'\'';
        $kep = '\''.$keperluan.'\'';
        $id_peminjam = '\''.$peminjam.'\'';
        $data = (new \yii\db\Query())
                ->select('*')
                ->from('peminjaman')
                ->join('join',
                            'user',
                            'peminjaman.ID_PEMINJAM = user.ID'
                        )
                ->join('join',
                            'RUANG',
                            'peminjaman.ID_RUANG = ruang.ID_RUANG'
                        )
                ->where("peminjaman.TANGGAL_PINJAM = $tgl AND peminjaman.KEPERLUAN = $kep AND peminjaman.ID_PEMINJAM = $id_peminjam")
                ->groupBy('peminjaman.KEPERLUAN')
                ->all();
                
        return $data;
    }

    public function sesiDataPeminjaman($tanggal, $keperluan, $peminjam){
        $tgl = '\''.$tanggal.'\'';
        $kep = '\''.$keperluan.'\'';
        $id_peminjam = '\''.$peminjam.'\'';
        $data = (new \yii\db\Query())
                ->select('*')
                ->from('peminjaman')
                ->join('join',
                            'user',
                            'peminjaman.ID_PEMINJAM = user.ID'
                        )
                ->join('join',
                            'RUANG',
                            'peminjaman.ID_RUANG = ruang.ID_RUANG'
                        )
                ->where("peminjaman.TANGGAL_PINJAM = $tgl AND peminjaman.KEPERLUAN = $kep AND peminjaman.ID_PEMINJAM = $id_peminjam")
                ->all();
                
        return $data;
    }
}
