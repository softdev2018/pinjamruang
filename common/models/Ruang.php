<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ruang".
 *
 * @property integer $ID_RUANG
 * @property string $NAMA_RUANG
 *
 * @property Peminjaman[] $peminjamen
 */
class Ruang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAMA_RUANG'], 'required'],
            [['NAMA_RUANG'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_RUANG' => 'Id  Ruang',
            'NAMA_RUANG' => 'Nama  Ruang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['ID_RUANG' => 'ID_RUANG']);
    }

    public function DataRuang($date){
        $ruang = (new \yii\db\Query())
                ->select('*')
                ->from('RUANG')
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
