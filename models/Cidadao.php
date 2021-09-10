<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cidadao".
 *
 * @property int $id
 * @property string|null $lote
 * @property string|null $paciente_cns
 * @property string|null $paciente_nome
 * @property string|null $paciente_cpf
 * @property string|null $paciente_enumSexoBiologico
 * @property string|null $paciente_nome_mae
 * @property string|null $paciente_dataNascimento
 * @property string|null $paciente_racaCor_valor
 * @property string|null $paciente_nome_pai
 * @property string|null $telefone
 * @property string|null $naturalidade
 * @property string|null $paciente_endereco_nmMunicipio
 * @property string|null $paciente_endereco_bairro
 * @property string|null $paciente_endereco_cep
 * @property string|null $ibge_municipio_nascimento
 * @property string|null $vacina_dataAplicacao
 */
class Cidadao extends \yii\db\ActiveRecord
{
    public $uuid;
    public $codigoIbge;
    public $estabelecimento;
    public $cnes;
    public $cnpj;
    public $profissional_nome;
    public $profissional_cns;
    public $profissional_cbo;
    public $profissional_ine;
    public $paciente_sexo;
    public $paciente_racaCor;
    public $etnia_indigena;
    public $turno_atendimento;
    public $statusEhGestante;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cidadao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['paciente_cns'], 'string', 'max' => 15],
            [['paciente_nome'], 'string', 'max' => 60],
            [['paciente_cpf'], 'string', 'max' => 11],
            [['paciente_enumSexoBiologico'], 'string', 'max' => 1],
            [['paciente_nome_mae'], 'string', 'max' => 44],
            [['paciente_dataNascimento'], 'string', 'max' => 10],
            [['paciente_racaCor_valor'], 'string', 'max' => 14],
            [['paciente_nome_pai'], 'string', 'max' => 39],
            [['naturalidade'], 'string', 'max' => 28],
            [['paciente_endereco_nmMunicipio'], 'string', 'max' => 20],
            [['paciente_endereco_bairro'], 'string', 'max' => 48],
            [['paciente_endereco_cep'], 'string', 'max' => 8],
            [['ibge_municipio_nascimento', 'vacina_dataAplicacao', 'telefone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'paciente_cns' => 'Paciente Cns',
            'paciente_nome' => 'Paciente Nome',
            'paciente_cpf' => 'Paciente Cpf',
            'paciente_enumSexoBiologico' => 'Paciente Enum Sexo Biologico',
            'paciente_nome_mae' => 'Paciente Nome Mae',
            'paciente_dataNascimento' => 'Paciente Data Nascimento',
            'paciente_racaCor_valor' => 'Paciente Raca Cor Valor',
            'paciente_nome_pai' => 'Paciente Nome Pai',
            'telefone' => 'Telefone',
            'naturalidade' => 'Naturalidade',
            'paciente_endereco_nmMunicipio' => 'Paciente Endereco Nm Municipio',
            'paciente_endereco_bairro' => 'Paciente Endereco Bairro',
            'paciente_endereco_cep' => 'Paciente Endereco Cep',
        ];
    }
}
