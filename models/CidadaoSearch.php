<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cidadao;

/**
 * CidadaoSearch represents the model behind the search form of `app\models\Cidadao`.
 */
class CidadaoSearch extends Cidadao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['paciente_cns', 'paciente_nome', 'paciente_cpf', 'paciente_enumSexoBiologico', 'paciente_nome_mae', 'paciente_dataNascimento', 'paciente_racaCor_valor', 'paciente_nome_pai', 'telefone', 'naturalidade', 'paciente_endereco_nmMunicipio', 'paciente_endereco_bairro', 'paciente_endereco_cep'], 'safe'],
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
        $query = Cidadao::find();

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
        ]);

        $query->andFilterWhere(['like', 'paciente_cns', $this->paciente_cns])
            ->andFilterWhere(['like', 'paciente_nome', $this->paciente_nome])
            ->andFilterWhere(['like', 'paciente_cpf', $this->paciente_cpf])
            ->andFilterWhere(['like', 'paciente_enumSexoBiologico', $this->paciente_enumSexoBiologico])
            ->andFilterWhere(['like', 'paciente_nome_mae', $this->paciente_nome_mae])
            ->andFilterWhere(['like', 'paciente_dataNascimento', $this->paciente_dataNascimento])
            ->andFilterWhere(['like', 'paciente_racaCor_valor', $this->paciente_racaCor_valor])
            ->andFilterWhere(['like', 'paciente_nome_pai', $this->paciente_nome_pai])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'naturalidade', $this->naturalidade])
            ->andFilterWhere(['like', 'paciente_endereco_nmMunicipio', $this->paciente_endereco_nmMunicipio])
            ->andFilterWhere(['like', 'paciente_endereco_bairro', $this->paciente_endereco_bairro])
            ->andFilterWhere(['like', 'paciente_endereco_cep', $this->paciente_endereco_cep]);

        return $dataProvider;
    }
}
