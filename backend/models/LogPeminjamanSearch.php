<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LogPeminjaman;

/**
 * LogPeminjamanSearch represents the model behind the search form about `common\models\LogPeminjaman`.
 */
class LogPeminjamanSearch extends LogPeminjaman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_LOG'], 'integer'],
            [['RUANG', 'PEMINJAM', 'TANGGAL', 'SESI_MULAI', 'SESI_SELESAI'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LogPeminjaman::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID_LOG' => $this->ID_LOG,
            'TANGGAL' => $this->TANGGAL,
            'SESI_MULAI' => $this->SESI_MULAI,
            'SESI_SELESAI' => $this->SESI_SELESAI,
        ]);

        $query->andFilterWhere(['like', 'RUANG', $this->RUANG])
            ->andFilterWhere(['like', 'PEMINJAM', $this->PEMINJAM]);

        return $dataProvider;
    }
}
