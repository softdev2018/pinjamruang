<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sesi".
 *
 * @property integer $ID_SESI
 * @property string $SESI_MULAI
 * @property string $SESI_SELESAI
 *
 * @property Peminjaman[] $peminjamen
 */
class Sesi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sesi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SESI_MULAI', 'SESI_SELESAI'], 'required'],
            [['SESI_MULAI', 'SESI_SELESAI'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_SESI' => 'Id  Sesi',
            'SESI_MULAI' => 'Sesi  Mulai',
            'SESI_SELESAI' => 'Sesi  Selesai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['ID_SESI' => 'ID_SESI']);
    }
}
