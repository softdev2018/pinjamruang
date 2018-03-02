<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "peminjaman_sesi".
 *
 * @property integer $ID
 * @property integer $ID_PEMINJAMAN
 * @property integer $ID_SESI
 */
class PeminjamanSesi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman_sesi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PEMINJAMAN', 'ID_SESI'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_PEMINJAMAN' => 'Id  Peminjaman',
            'ID_SESI' => 'Id  Sesi',
        ];
    }
}
