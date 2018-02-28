<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Peminjaman;

/**
 * PeminjamanSearch represents the model behind the search form about `common\models\Peminjaman`.
 */
class PeminjamanSearch extends Peminjaman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PEMINJAMAN', 'ID_PEMINJAM', 'ID_RUANG', 'ID_SESI'], 'integer'],
            [['TANGGAL_PINJAM', 'STATUS_PINJAM'], 'safe'],
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
        $query = Peminjaman::find()->where(['ID_PEMINJAM'=>Yii::$app->user->identity->id]);

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
            'ID_PEMINJAMAN' => $this->ID_PEMINJAMAN,
            'ID_PEMINJAM' => $this->ID_PEMINJAM,
            'ID_RUANG' => $this->ID_RUANG,
            'ID_SESI' => $this->ID_SESI,
        ]);

        $query->andFilterWhere(['like', 'TANGGAL_PINJAM', $this->TANGGAL_PINJAM])
            ->andFilterWhere(['like', 'STATUS_PINJAM', $this->STATUS_PINJAM]);

        return $dataProvider;
    }
}
