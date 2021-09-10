<?php 

/* @var $this yii\web\View */
/* @var $model app\models\Cidadao */

?>
<?xml version="1.0" encoding="UTF-8"?>
<ns3:dadoTransporteTransportXml xmlns:ns2="http://esus.ufsc.br/dadoinstalacao" xmlns:ns3="http://esus.ufsc.br/dadotransporte" xmlns:ns4="http://esus.ufsc.br/fichaprocedimentomaster">
	<uuidDadoSerializado><?= $model->uuid ?></uuidDadoSerializado>
	<tipoDadoSerializado>7</tipoDadoSerializado>
	<codIbge><?= $model->codigoIbge ?></codIbge>
	<cnesDadoSerializado><?= $model->cnes ?></cnesDadoSerializado>
	<ineDadoSerializado><?= $model->profissional_ine ?></ineDadoSerializado>
	<numLote><?= $model->lote?></numLote>
	<ns4:fichaProcedimentoMasterTransport>
		<headerTransport>
			<profissionalCNS><?= $model->profissional_cns ?></profissionalCNS>
			<cboCodigo_2002><?= $model->profissional_cbo ?></cboCodigo_2002>
			<cnes><?= $model->cnes ?></cnes>
			<ine><?= $model->profissional_ine ?></ine>
			<dataAtendimento><?= $model->vacina_dataAplicacao ?></dataAtendimento>
			<codigoIbgeMunicipio><?= $model->codigoIbge ?></codigoIbgeMunicipio>
		</headerTransport>
		<atendProcedimentos>
			<dtNascimento><?= $model->paciente_dataNascimento ?></dtNascimento>
			<sexo><?= $model->paciente_sexo ?></sexo>
			<localAtendimento>1</localAtendimento>
			<turno><?= $model->turno_atendimento ?></turno>
			<procedimentos>ABPG028</procedimentos>
			<dataHoraInicialAtendimento><?= $model->vacina_dataAplicacao ?></dataHoraInicialAtendimento>
			<dataHoraFinalAtendimento><?= $model->vacina_dataAplicacao + 300000 ?></dataHoraFinalAtendimento>
		</atendProcedimentos>
		<uuidFicha><?= $model->uuid ?></uuidFicha>
		<tpCdsOrigem>3</tpCdsOrigem>
	</ns4:fichaProcedimentoMasterTransport>
	<ns2:remetente>
		<contraChave>TREINAMENTO</contraChave>
		<uuidInstalacao>TREINAMENTO</uuidInstalacao>
		<cpfOuCnpj><?= $model->cnpj ?></cpfOuCnpj>
		<nomeOuRazaoSocial><?= $model->estabelecimento ?></nomeOuRazaoSocial>
		<versaoSistema>3.2.18</versaoSistema>
		<nomeBancoDados>Postgres</nomeBancoDados>
	</ns2:remetente>
	<ns2:originadora>
		<contraChave>TREINAMENTO</contraChave>
		<uuidInstalacao>TREINAMENTO</uuidInstalacao>
		<cpfOuCnpj><?= $model->cnpj ?></cpfOuCnpj>
		<nomeOuRazaoSocial><?= $model->estabelecimento ?></nomeOuRazaoSocial>
		<versaoSistema>3.2.18</versaoSistema>
		<nomeBancoDados>Postgres</nomeBancoDados>
	</ns2:originadora>
	<versao major="3" minor="2" revision="4" />
</ns3:dadoTransporteTransportXml>