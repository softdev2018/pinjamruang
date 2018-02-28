<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "log_peminjaman".
 *
 * @property integer $ID_LOG
 * @property string $RUANG
 * @property string $PEMINJAM
 * @property string $TANGGAL
 * @property string $SESI_MULAI
 * @property string $SESI_SELESAI
 */
class LogPeminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUANG', 'PEMINJAM', 'TANGGAL', 'SESI_MULAI', 'SESI_SELESAI'], 'required'],
            [['TANGGAL', 'SESI_MULAI', 'SESI_SELESAI'], 'safe'],
            [['RUANG'], 'string', 'max' => 20],
            [['PEMINJAM'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_LOG' => 'Id  Log',
            'RUANG' => 'Ruang',
            'PEMINJAM' => 'Peminjam',
            'TANGGAL' => 'Tanggal',
            'SESI_MULAI' => 'Sesi  Mulai',
            'SESI_SELESAI' => 'Sesi  Selesai',
        ];
    }
}
