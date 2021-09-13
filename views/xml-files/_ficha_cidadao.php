<?php 

/* @var $this yii\web\View */
/* @var $model app\models\Cidadao */

?>
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<ns3:dadoTransporteTransportXml xmlns:ns2="http://esus.ufsc.br/dadoinstalacao" xmlns:ns3="http://esus.ufsc.br/dadotransporte" xmlns:ns4="http://esus.ufsc.br/cadastroindividual">
    <uuidDadoSerializado><?= $model->uuid ?></uuidDadoSerializado>
	<tipoDadoSerializado>2</tipoDadoSerializado>
	<codIbge><?= $model->codigoIbge ?></codIbge>
	<cnesDadoSerializado><?= $model->cnes ?></cnesDadoSerializado>
	<numLote><?= $model->lote ?></numLote>
	<ns4:cadastroIndividualTransport>
		<condicoesDeSaude>
			<statusEhDependenteAlcool>false</statusEhDependenteAlcool>
			<statusEhDependenteOutrasDrogas>false</statusEhDependenteOutrasDrogas>
			<statusEhFumante>false</statusEhFumante>
			<statusEstaAcamado>false</statusEstaAcamado>
			<statusEstaDomiciliado>false</statusEstaDomiciliado>
			<statusTemDiabetes>false</statusTemDiabetes>
			<statusTemDoencaRespiratoria>false</statusTemDoencaRespiratoria>
			<statusTemHanseniase>false</statusTemHanseniase>
			<statusTemHipertensaoArterial>false</statusTemHipertensaoArterial>
			<statusTemTeveCancer>false</statusTemTeveCancer>
			<statusTemTeveDoencasRins>false</statusTemTeveDoencasRins>
			<statusTemTuberculose>false</statusTemTuberculose>
			<statusTeveAvcDerrame>false</statusTeveAvcDerrame>
			<statusTeveDoencaCardiaca>false</statusTeveDoencaCardiaca>
			<statusTeveInfarto>false</statusTeveInfarto>
		</condicoesDeSaude>
		<emSituacaoDeRua>
			<statusSituacaoRua>false</statusSituacaoRua>
		</emSituacaoDeRua>
		<fichaAtualizada>false</fichaAtualizada>
		<identificacaoUsuarioCidadao>
			<codigoIbgeMunicipioNascimento><?= $model->ibge_municipio_nascimento ?: $model->codigoIbge ?></codigoIbgeMunicipioNascimento>
			<dataNascimentoCidadao><?= $model->paciente_dataNascimento ?></dataNascimentoCidadao>
			<desconheceNomeMae>false</desconheceNomeMae>
			<nacionalidadeCidadao>1</nacionalidadeCidadao>
			<nomeCidadao><?= $model->paciente_nome ?></nomeCidadao>
			<nomeMaeCidadao><?= $model->paciente_nome_mae ?></nomeMaeCidadao>
            <cpfCidadao><?=$model->paciente_cpf ?></cpfCidadao>
			<telefoneCelular><?= $model->telefone ?: '62999999999' ?></telefoneCelular>
			<paisNascimento>31</paisNascimento>
			<racaCorCidadao><?= $model->paciente_racaCor ?></racaCorCidadao>
			<sexoCidadao><?= $model->paciente_sexo ?></sexoCidadao>
			<?= $model->paciente_racaCor === 5 ? '<etnia>'.$model->etnia_indigena.'</etnia>' : '' ?>
			<?= $model->paciente_nome_pai ? '<nomePaiCidadao>'.$model->paciente_nome_pai.'</nomePaiCidadao>' : '<desconheceNomePai>true</desconheceNomePai>' ?>			
			<stForaArea>true</stForaArea>
		</identificacaoUsuarioCidadao>
		<informacoesSocioDemograficas>
            <statusFrequentaEscola>false</statusFrequentaEscola>
            <statusMembroPovoComunidadeTradicional>false</statusMembroPovoComunidadeTradicional>
            <statusPossuiPlanoSaudePrivado>false</statusPossuiPlanoSaudePrivado>
            <statusTemAlgumaDeficiencia>false</statusTemAlgumaDeficiencia>
        </informacoesSocioDemograficas>
		<saidaCidadaoCadastro />
		<statusTermoRecusaCadastroIndividualAtencaoBasica>false</statusTermoRecusaCadastroIndividualAtencaoBasica>
		<tpCdsOrigem>3</tpCdsOrigem>
		<uuid><?= $model->uuid ?></uuid>
		<uuidFichaOriginadora><?= $model->uuid ?></uuidFichaOriginadora>
		<headerTransport>
			<profissionalCNS><?= $model->profissional_cns ?></profissionalCNS>
			<cboCodigo_2002><?= $model->profissional_cbo ?></cboCodigo_2002>
			<cnes><?= $model->cnes ?></cnes>
			<ine><?= $model->profissional_ine ?></ine>
			<dataAtendimento><?= $model->dataAtendimento ?></dataAtendimento>
			<codigoIbgeMunicipio><?= $model->codigoIbge ?></codigoIbgeMunicipio>
		</headerTransport>
	</ns4:cadastroIndividualTransport>
	<ns2:remetente>
		<contraChave>TREINAMENTO</contraChave>
		<uuidInstalacao>TREINAMENTO</uuidInstalacao>
		<cpfOuCnpj><?= $model->cnpj ?></cpfOuCnpj>
		<nomeOuRazaoSocial><?= $model->estabelecimento ?></nomeOuRazaoSocial>
		<versaoSistema>3</versaoSistema>
		<nomeBancoDados>Postgres</nomeBancoDados>
	</ns2:remetente>
	<ns2:originadora>
		<contraChave>TREINAMENTO</contraChave>
		<uuidInstalacao>TREINAMENTO</uuidInstalacao>
		<cpfOuCnpj><?= $model->cnpj ?></cpfOuCnpj>
		<nomeOuRazaoSocial><?= $model->estabelecimento ?></nomeOuRazaoSocial>
		<versaoSistema>3</versaoSistema>
		<nomeBancoDados>Postgres</nomeBancoDados>
	</ns2:originadora>
    <versao major="4" minor="0" revision="0" />
</ns3:dadoTransporteTransportXml>