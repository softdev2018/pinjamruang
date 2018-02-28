<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sesi;

/**
 * SesiSearch represents the model behind the search form about `common\models\Sesi`.
 */
class SesiSearch extends Sesi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SESI'], 'integer'],
            [['SESI_MULAI', 'SESI_SELESAI'], 'safe'],
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
        $query = Sesi::find();

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
            'ID_SESI' => $this->ID_SESI,
            'SESI_MULAI' => $this->SESI_MULAI,
            'SESI_SELESAI' => $this->SESI_SELESAI,
        ]);

        return $dataProvider;
    }
}
