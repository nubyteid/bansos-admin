<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penerima;

/**
 * PenerimaSearch represents the model behind the search form of `app\models\Penerima`.
 */
class PenerimaSearch extends Penerima
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'statusBansos'], 'integer'],
            [['Nama', 'TempatLahir', 'TanggalLahir', 'JenisKelamin', 'InstansiKerja', 'UserId', 'TanggalInput'], 'safe'],
            [['penghasilan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Penerima::find();

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
            'id' => $this->id,
            'statusBansos' => $this->statusBansos,
            'penghasilan' => $this->penghasilan,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'TempatLahir', $this->TempatLahir])
            ->andFilterWhere(['like', 'TanggalLahir', $this->TanggalLahir])
            ->andFilterWhere(['like', 'JenisKelamin', $this->JenisKelamin])
            ->andFilterWhere(['like', 'InstansiKerja', $this->InstansiKerja])
            ->andFilterWhere(['like', 'UserId', $this->UserId])
            ->andFilterWhere(['like', 'TanggalInput', $this->TanggalInput]);

        return $dataProvider;
    }
}
