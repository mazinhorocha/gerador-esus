<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Carbon\Carbon;
use DateTime;
use yii\console\Controller;
use yii\console\ExitCode;
use thamtech\uuid\helpers\UuidHelper;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;
use app\models\Cidadao;
use app\models\CidadaoSearch;
use Yii;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class XmlFilesController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex()
    {
        // GERAÇÃO INDIVIDUAL
        /*$model = $this->findModel(4);
        $model->lote = '102030';
        $model->uuid = '3900452'.'-'.UuidHelper::uuid();
        $model->codigoIbge = '5201405'; // COD IBGE APARECIDA
        $model->cnpj = '37942539000250'; // CNPJ DO ESTABELECIMENTO
        $model->cnes = $model->cnes ?: '3900452'; // CNES DO ESTABLECIMENTO
        $model->estabelecimento = $model->estabelecimento ?: 'UNIDADE BASICA DE SAUDE DELFIORI';
        $model->profissional_nome = $model->profissional_nome ?: 'IZABEL CRISTINA PEREIRA MEDEIROS SILVA';
        $model->profissional_cns = $model->profissional_cns ?: '898002751745425'; // CNS DO PROFISSIONAL
        $model->profissional_cbo = $model->profissional_cbo ?: '223565'; // ENFERMEIRO DA ESTRATEGIA DE SAUDE DA FAMILIA
        $model->profissional_ine = $model->profissional_ine ? str_pad($model->profissional_ine, 10, "0", STR_PAD_LEFT) : '0001683713'; // CÓD INE DA EQUIPE MEDICA
        $model->paciente_cpf = $model->paciente_cpf ? str_pad($model->paciente_cpf, 11, "0", STR_PAD_LEFT) : null;
        $model->paciente_cns = $model->paciente_cns ?: null;
        $model->paciente_racaCor = $this->racaCorCidadao($model->paciente_racaCor_valor);
        $model->etnia_indigena = $model->paciente_racaCor === 5 ? $this->etniaIndigena() : null;
        $model->paciente_sexo = $this->sexoCidadao($model->paciente_enumSexoBiologico);
        $model->dataAtendimento = $this->randomDateTime()['date'];
        $model->turno_atendimento = $this->randomDateTime()['turno'];
        $model->statusEhGestante = $this->statusEhGestante($model->paciente_sexo, $model->paciente_dataNascimento, $model->dataAtendimento);
        $model->paciente_dataNascimento = strtotime(DateTime::createFromFormat('d/m/Y', $model->paciente_dataNascimento)->format('Y-m-d'));

        //$cidadao = $this->renderPartial('_ficha_cidadao', ['model' => $model]);
        //file_put_contents(Yii::getAlias('@app/web/lote-fichas/Cadastro_Individual-') . $model->uuid . '.esus.xml', $cidadao);
        //$procedimento = $this->renderPartial('_ficha_procedimento', ['model' => $model]);
        //file_put_contents(Yii::getAlias('@app/web/lote-fichas/Procedimentos-') . $model->uuid . '.esus.xml', $procedimento);*/

        // GERAÇÃO EM MASSA
        $rows = Cidadao::find()->where(['!=', 'paciente_cpf', ''])->all(); //->limit(100)
        foreach($rows as $model){
            if(!$model->paciente_cpf && !$model->paciente_cns || strlen($model->paciente_cns) < 15 && $model->paciente_cpf)
                continue;
            $model->lote = '102050';
            $model->uuid = '3900452'.'-'.UuidHelper::uuid();
            $model->codigoIbge = '5201405'; // COD IBGE APARECIDA
            $model->cnpj = '37942539000250'; // CNPJ DO ESTABELECIMENTO
            $model->cnes = $model->cnes ?: '3900452'; // CNES DO ESTABLECIMENTO
            $model->estabelecimento = $model->estabelecimento ?: 'UNIDADE BASICA DE SAUDE DELFIORI';
            $model->profissional_nome = $model->profissional_nome ?: 'IZABEL CRISTINA PEREIRA MEDEIROS SILVA';
            $model->profissional_cns = $model->profissional_cns ?: '898002751745425'; // CNS DO PROFISSIONAL
            $model->profissional_cbo = $model->profissional_cbo ?: '223565'; // ENFERMEIRO DA ESTRATEGIA DE SAUDE DA FAMILIA
            $model->profissional_ine = $model->profissional_ine ? str_pad($model->profissional_ine, 10, "0", STR_PAD_LEFT) : '0001683713'; // CÓD INE DA EQUIPE MEDICA
            $model->paciente_cpf = $model->paciente_cpf ? str_pad($model->paciente_cpf, 11, "0", STR_PAD_LEFT) : null;
            $model->paciente_cns = $model->paciente_cns ?: null;
            $model->paciente_racaCor = $this->racaCorCidadao($model->paciente_racaCor_valor);
            $model->etnia_indigena = $model->paciente_racaCor === 5 ? $this->etniaIndigena() : null;
            $model->paciente_sexo = $this->sexoCidadao($model->paciente_enumSexoBiologico);
            $model->dataAtendimento = $this->randomDateTime()['date'];
            $model->turno_atendimento = $this->randomDateTime()['turno'];
            $model->statusEhGestante = $this->statusEhGestante($model->paciente_sexo, $model->paciente_dataNascimento, $model->dataAtendimento);
            $model->paciente_dataNascimento = strtotime(DateTime::createFromFormat('d/m/Y', $model->paciente_dataNascimento)->format('Y-m-d'));

            $cidadao = $this->renderPartial('_ficha_cidadao', ['model' => $model]);
            file_put_contents(Yii::getAlias('@app/web/lote-405052-cpf/Cadastro_Individual-') . $model->uuid . '.esus.xml', $cidadao);
            //$procedimento = $this->renderPartial('_ficha_procedimento', ['model' => $model]);
            //file_put_contents(Yii::getAlias('@app/web/lote-fichas/Procedimentos-') . $model->uuid . '.esus.xml', $procedimento);
        }

        echo "Finalizado!!";
        return ExitCode::OK;
    }

    /**
     * Finds the Cidadao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Cidadao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cidadao::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function sexoCidadao($sx)
    {
        $sexo = null;

        switch($sx){
            case 'M';
                $sexo = 0;
                break;
            case 'F';
                $sexo = 1;
                break;
            default;
                $sexo = 4; // Não informado
                break;
        }

        return $sexo;
    }

    protected function racaCorCidadao($raca)
    {
        $codigo = null;

        switch($raca){
            case 'BRANCA';
                $codigo = 1;
                break;
            case 'PRETA';
                $codigo = 2;
                break;
            case 'PARDA';
                $codigo = 3;
                break;
            case 'AMARELA';
                $codigo = 4;
                break;
            case 'INDIGENA';
                $codigo = 5;
                break;
            case 'SEM INFORMACAO';
                $codigo = 6;
                break;
        }

        return $codigo;
    }

    protected function etniaIndigena()
    {
        $etnias = ['0057', '0058', '0059', '0060', '0143', '0181', '0182', '0188', '0207', '0208', '0245', '0255', '0256', '0257'];
        $key = array_rand($etnias, 1);  
        return $etnias[$key];
    }

    protected function statusEhGestante($sexo, $idade, $dataAtendimento)
    {
        if($sexo === 0) return null;

        $start = date('Y', $dataAtendimento);
        $end = date_create_from_format('d/m/Y', $idade)->format('Y');
        $age = $start - $end;
        return $age >= 9 && $age <= 60 ? true : false;
    }

    protected function randomDateTime()
    {
        $random = mt_rand(1609804800, 1627776000); // Data inicio e fim em formato epoch timestamp

        if(date("N", $random) == 1 || date("N", $random) == 7)
        {
            return self::randomDateTime();
        } else {
            $turno = date("A", $random) == "AM" ? "1" : "2";
            return ['date' => $random, 'turno' => $turno];
        }
    }
}
