@extends('adminlte::page')

@section('title', 'Formulário de Pré-Mapeamento de Dados')
@section('content_header')
<div class="cotainer-fluid">
	<h5><label>Formulário de Pré-Mapeamento de Dados</label></h5>
	<p class=" text-align: justify;"> Este formulário foi desenvolvido com o propósito de coletar informações essenciais sobre o tratamento de dados pessoais em sua organização. Sua contribuição é fundamental para assegurar a conformidade com as regulamentações de proteção de dados, garantindo assim a preservação da privacidade e segurança das informações dos titulares.
		<br><br>Solicitamos que suas respostas sejam detalhadas e precisas, considerando o impacto e a relevância do tratamento de dados em suas atividades cotidianas. Caso surjam dúvidas ou necessite de esclarecimentos adicionais, por favor, não hesite em entrar em contato com o DPO de sua organização.<br><br>
		Expressamos sinceros agradecimentos por sua colaboração neste processo vital para o cumprimento das regulamentações e para o fortalecimento da confiança e transparência no tratamento de dados pessoais.
	</p>

</div>
@stop
@section('content')
<div class="container-fluid ">
	<div class="row mt-5">
		<div>

			<form action="{{ route('formulario.store') }}" method="POST" id="formulario">
				@csrf
				<div class="col-md-12 col-md-offset-1">
					<h5><strong>Informações Gerais</strong></h5>
					<label>1. Qual Secretaria você faz parte?</label>
					<div id="">
						<div class="">
							<input type="text" class="form-control " name="secretaria" placeholder="Qual Secretaria você faz parte?">

						</div>
					</div>
					<label>2. Qual departamento você pertence?</label>
					<div id="">
						<div class="">
							<input type="text" class="form-control " name="departamento" placeholder="Qual departamento você pertence?">

						</div>
					</div>
					<label>3. Qual o seu cargo?</label>
					<div id="">
						<div class="">
							<input type="text" class="form-control " name="cargo" placeholder="Qual o seu cargo?">

						</div>
					</div>
					<h5 class="mt-5"><strong>Sistemas</strong></h5>
					<label>4. Informe os sistemas que você utiliza:</label>
					<div id="sistemas_container">
						<div class="input-group 3 sistema_input">
							<input type="text" class="form-control sistema_input_text " name="nome_sistema[]" placeholder="Informe o sistema">
							<div class="input-group-append">
								<button class="btn btn-danger remove_sistema" type="button">Remover</button>
							</div>
						</div>
					</div>
					<button id="add_sistema" type="button" class="btn btn-success mt-3">Adicionar Sistema</button>
				</div>
				<div class="col-md-12 mt-5">
					<label>5. Descreva qual é a funcionalidade dos sistemas utilizados? </label>
					<ul id="sistemas_list" class="list-group"></ul>
				</div>
				<div class="col-md-12 mt-5">
					<label for="">6. Qual é o site, Link ou Ip dos Sistemas?</label>
					<ul id="sistemas_list_site" class="list-group"></ul>
				</div>
				<div class="col-md-12 mt-5">
					<label for="">7. Quem é o responsável pelos sistemas utilizados?</label>
					<ul id="sistemas_list_responsavel" class="list-group"></ul>
				</div>


				<!---processos--->
				<div class="row mt-5">
					<h5><strong>Processos</strong></h5>
					<div class="col-md-12 col-md-offset-1">
						<div id="processos_container">
							<label for="">8. Quais os processos que você executa no dia a dia?</label>
							<div class="input-group 3 processo_input">
								<input type="text" class="form-control processo_input_text" name="nome_processo[]" placeholder="Informe o processo">
								<div class="input-group-append1">
									<button class="btn btn-danger remove_processo" type="button">Remover</button>
								</div>
							</div>
						</div>
						<button id="add_processo" type="button" class="btn btn-success mt-3">Adicionar Processo</button>
					</div>
					<div class="col-md-12 mt-5">
						<label>9. Qual é o responsável, telefone e e-mail dos processos listados de sua área? Caso seja uma empresa terceira, colocar o nome da empresa. </label>
						<ul id="processos_list" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>10. Descreva os processos que você listou da forma mais completa desde o início até o fim? </label>
						<ul id="processos_list_descreva" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label for="">11. Qual são as fases do Ciclo de Vida do tratamento de Dados Pessoais, para cada processo listado?</label>

						<ul id="processos_list_fases" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>12. De que forma (como) os dados pessoais são coletados, retidos/armazenados, processados/usados, compartilhados e/ou eliminados? </label>
						<ul id="processos_list_coleta" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>13. Há exclusão de dados? Se sim em quais processos: </label>
						<ul id="processos_list_exclusao" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>14. Qual a finalidade do Tratamento dos Dados Pessoais em cada processo ? Por favor detalhar </label>
						<ul id="processos_list_finalidade" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>15. Existe uma previsão legal para o tratamento dos Dados Pessoais em cada processo? Se sim descrever. </label>
						<ul id="processos_list_previsao" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>16. Quais os resultados pretendidos para o Titular de Dados e os benefícios para organização a tratar estes dados? </label>
						<ul id="processos_list_resultados" class="list-group"></ul>
					</div>
					<div class="col-md-12 mt-5">
						<label>17. Qual Categoria de Dados Pessoais serão Tratados </label>
						<div class="toggle-checkbox">
							<ul id="processos_list_categoria" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>18. Categoria de Dados Pessoais para cada processo listado: </label>
						<div class="toggle-categoria">
							<ul id="processos_list_catpro" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>19. Categoria de Dados Pessoais Sensiveis para cada processo listado: </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_dados_pessoais" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 col-md-offset-1">

						<div class=" col-md-12 mt-5">
							<label for="">20. É realizado processamento que envolva a avaliação dos titulares, a exemplo de profiling, definição de perfil ou comportamento?</label>

							<div class="pessoas">
								<ul id="processos_profiling" class="list-group "></ul>

							</div>
						</div>

					</div>
					<div class="col-md-12 mt-5">
						<label>21. É gerado algum documento (PDF, DOC, CSV, XML, XLS ou outros)? Se sim especificar quais processos </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_documento" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>22. Qual a frequência de tratamento dos dados pessoais? É realizado diariamente, semanalmente, mensal, semestral, anual. </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_frenquencia_tratamento_dos_Dados" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>23. Qual é a quantidade estimada de titulares de dados tratados? </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_quantidade_estimada" class="list-group "></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>24. Qual é a quantidade estimada de dados pessoais e dados pessoais sensíveis tratadas? </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_quantidade_estimada_pesoaisesensiveis" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>25. Qual é a abrangência da área geográfica do tratamento de dados pessoais, para cada processo listado? </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_geografica" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>26. Informe quais áreas, departamentos, empresas e/ou instituições que realiza o compartilhamento dos dados pessoais, para cada processo listado: </label>
						<div class="pessoais_sensiveis">
							<ul id="processos_list_Areas_Compart" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>27. Informe se você sabe se ocorre transferência internacional de dados pessoais? </label>
						<div class="pessoais_sensiveis_transf_inter">
							<ul id="processos_list_transf_inter_dados_pessoais" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>28. É desempenhada alguma operação de tratamento mediante a tomada de decisões automatizadas? </label>
						<div class="processos_decisao">
							<ul id="processos_list_operacao" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>29. Todos os processos listados são realizados de forma digital? Se caso negativo, quais processos é realizado de forma física (papel)? </label>
						<div class="processos_realizados_forma_fisica">
							<ul id="processos_realizados_forma_fisica" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5">
						<label>30. Existe alguma trilha de auditoria (log de transações) para os processos listados? </label>
						<div class="processos_realizados_auditoria">
							<ul id="processos_auditoria" class="list-group"></ul>


						</div>
					</div>
					<div class="col-md-12 mt-5 col-md-offset-1">
						<div>
							<label for="">31. Quaisquer observações que você ache necessário para aprimorar o mapeamento de dados?</label>
							<div class=" 3 ">
								<x-adminlte-textarea name="observacao" placeholder="Observações">

								</x-adminlte-textarea>



							</div>
						</div>
						<x-adminlte-button label="Enviar Formulário" type="submit" class="bg bg-success float-right mb-5 ml-3 mt-5" />
						<x-adminlte-button label="Salvar Formulário" type="" id="botao-salvar" class="bg bg-primary float-right mb-5 mt-5" />
					</div>
				</div>
				<br>

		</div>
		</form>
	</div>

</div>

@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush


@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	const textArea = document.querySelector('#observacao');
	textArea.addEventListener("keyup", e => {
		let scHeight = e.target.scrollHeight;
		console.log(scHeight)
		textArea.style.height = `${scHeight}px`
	})
</script>
<script>
	// const processodescri = document.querySelector('#processo_descricao');
	// console.log(processodescri)
	// processodescri.addEventListener("keyup", e => {
	// 	let scHeight1 = e.target.scrollHeight;
	// 	console.log(scHeight1)
	// 	processodescri.style.height = `${scHeight1}px`
	// })
</script>



@endpush


@push('js')


<script type="text/javascript">
	$(document).ready(function() {
		$('#add_sistema').click(function() {
			var newInput = '<div class="input-group mt-1 sistema_input">' +
				'<input type="text" class="form-control sistema_input_text" name="nome_sistema[]" placeholder="Informe o sistema">' +
				'<div class="input-group-append">' +
				'<button class="btn btn-danger remove_sistema" type="button">Remover</button>' +
				'</div>' +
				'</div>';
			$('#sistemas_container').append(newInput);
		});

		$(document).on('click', '.remove_sistema', function() {
			$(this).closest('.sistema_input').remove();
			atualizarListaSistemas();
		});

		$(document).on('change', '.sistema_input_text', function() {
			atualizarListaSistemas();
		});

		function atualizarListaSistemas() {
			$('#sistemas_list').empty();
			$('#sistemas_list_site').empty();
			$('#sistemas_list_responsavel').empty();
			$('.sistema_input_text').each(function() {
				var sistema = $(this).val();
				if (sistema.trim() !== '') {}
				$('#sistemas_list').append('<li class="list-group-item"><h5> Sistema: ' + sistema + '</h5><input type="text" class="form-control sistema_descricao"  name="informativo_sistema[]" placeholder="Descrição do sistema"></li>');
				$('#sistemas_list_site').append('<li class="list-group-item"><h5> Sistema: ' + sistema + '</h5><input type="text" class="form-control sistema_descricao" name="sitelinkousistema[]" i placeholder="Site,Link ou ip"></li>');
				$('#sistemas_list_responsavel').append('<li class="list-group-item"><h5> Sistema: ' + sistema + '</h5><input type="text" class="form-control sistema_descricao" name="responsavel_sistema[]"  placeholder="Responsável pelo sistema"></li>');
			});
		}

	});
</script>
<!--processos -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#add_processo').click(function() {
			var newInput = '<div class="input-group 3 processo_input mt-1">' +
				'<input type="text" class="form-control processo_input_text" name="nome_processo[]" placeholder="Informe o processo">'

				+
				'<div class="input-group-append1">' +
				'<button class="btn btn-danger remove_processo" type="button">Remover</button>' +
				'</div>' +
				'</div>';
			$('#processos_container').append(newInput);
		});

		$(document).on('click', '.remove_processo', function() {
			$(this).closest('.processo_input').remove();
			atualizarListaProcessos();
		});

		$(document).on('change', '.processo_input_text', function() {
			atualizarListaProcessos();
		});

		function atualizarListaProcessos() {
			$('#processos_list').empty();
			$('#processos_list_descreva').empty();
			$('#processos_list_fases').empty();
			$('#processos_list_coleta').empty();
			$('#processos_list_exclusao').empty();
			$('#processos_list_finalidade').empty();
			$('#processos_list_previsao').empty();
			$('#processos_list_categoria').empty();
			$('#processos_list_catpro').empty();
			$('#processos_list_documento').empty();
			$('#processos_list_dados_pessoais').empty();
			$('#processos_profiling').empty();
			$('#processos_list_geografica').empty();
			$('#processos_list_Areas_Compart').empty();
			$('#processos_list_quantidade_estimada_pesoaisesensiveis').empty();
			$('#processos_auditoria').empty();
			$('#processos_list_resultados').empty();
			$('#processos_list_operacao').empty();
			$('#processos_list_quantidade_estimada').empty();
			$('#processos_list_transf_inter_dados_pessoais').empty();
			$('#processos_list_frenquencia_tratamento_dos_Dados').empty();
			$('#processos_realizados_forma_fisica').empty();
			$('.processo_input_text').each(function() {
				var processo = $(this).val();
				if (processo.trim() !== '') {}
				$('#processos_list').append('<li class="list-group-item"><div class=" border-bottom  container-fluid"><h5> Processo: ' + processo +
					'</h5></div></div>' + '<input type="text" name="nome_do_responsavel_processo[]" " class="form-control processos_nome" placeholder="Nome do responsável ou/ Nome da Empresa">'

					+
					'<input type="text" class="form-control  telefonemask processo_telefone"  name="telefone_responsavel[]" maxlength="15" onkeyup="handlePhone(event)" placeholder="Telefone do responsável">' +
					'<input type="email" class="form-control " name="processo_email[]" id="email"   placeholder="Informe aqui o e-mail" onChange="validarEmail()"></li>');

				$('#processos_list_descreva').append(`
				<li class="list-group-item">
					<div class=" border-bottom 3 container-fluid">
						<h5> Processo: ${processo}</h5>
						</div>
					</div>
						<x-adminlte-textarea id="processo_descricao" name="processo_descricao[]"></x-adminlte-textarea>
				</li>`);
				const processodescri = document.querySelector('#processo_descricao');
				console.log(processodescri)
				processodescri.addEventListener("keyup", e => {
					let scHeight1 = e.target.scrollHeight;
					console.log(scHeight1)
					processodescri.style.height = `${scHeight1}px`
				})



				$('#processos_list_fases').append('<li class="list-group-item">  <div class=" border-bottom  container-fluid"><h5> Processo: ' + processo + '</h5></div>'

					+
					'<div class="row p-3 " >' +
					'<div><label><input type="checkbox" class=" m-1 ml-3   processo_fases"  name="processo_ciclodevida[]" value="Coleta"> Coleta' +
					'</label></div>' +
					'<div><label><input type="checkbox" class=" m-1 ml-3   processo_fases"  name="processo_ciclodevida[]" value="Retencao">' +
					'Retenção</label></div>' +
					'<div><label><input type="checkbox" class="  m-1 ml-3 processo_fases" name="processo_ciclodevida[]"  value="Processamento">Processamento</label></div>' +
					'<div> <label><input type="checkbox" class="  m-1 ml-3  processo_compartilhamento" name="processo_ciclodevida[]"  value="Compartilhamento">Compartilhamento</label></div>' +
					' <div> <label><input type="checkbox" class=" m-1 ml-3 processo_descricao" name="processo_ciclodevida[]"  value="Eliminacao"> Eliminação </label> </div> </li> ');

				//processos descricao 
				$('#processos_list_coleta').append(
					`<li class="list-group-item">
							<div class="border-bottom-3 container-fluid">
								<h5>Processo: ${processo}</h5>
							</div>
							<x-adminlte-textarea class="form-control processo_coleta" id="processo_coleta" name="processo_coleta[]" placeholder="Informar como os dados pessoais são coletados, retidos/armazenados, processados/usados, compartilhados e/ou eliminados?"></x-adminlte-textarea>
						</li>`
				);
				const processo_coleta = document.querySelector('#processo_coleta');
				console.log(processo_coleta)
				processo_coleta.addEventListener("keyup", e => {
					let scHeight1 = e.target.scrollHeight;
					console.log(scHeight1)
					processo_coleta.style.height = `${scHeight1}px`
				})

				$('#processos_list_exclusao').append('<li class="list-group-item"><div class=" border-bottom  container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +

					'<br> <label> <input type="checkbox" class="possuiexclusaodedados m-1" name="processo_exclusao[]" " value="sim"> Sim</label> <label> <input type="checkbox" class="naopossuiexclusaodedados m-1" name="processo_exclusao[]" value="nao"> Não <br> </label>'


					+
					' </div> </li>');

				$('#processos_list_finalidade').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<input type="text" class="form-control processo_finalidade" name="processo_finalidade[]" placeholder="Detalhe a finalidade dos processos "></li>');
				// existe um previsao para tratamento de dados ?
				$('#processos_list_previsao').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid mb-2"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<label><input type="checkbox" class="simprevtratamentodados m-1 " name="processo_previsao[prev][]" value="sim" >Sim </label>' +
					'<label><input type="checkbox" class="naoprevtratamentodados m-1 " name="processo_previsao[]" value="nao">Não</label>' +
					'<div class="previsaotratamentodados" style="display:none;">' +
					'<input type="text" class="form-control processo_finalidade" name="processo_previsao[]" value="" placeholder="Existe uma previsao legal para o tratamento dos dados ? ">' +
					'</div>' +
					'</li>');

				$('#processos_list_resultados').append(
					`<li class="list-group-item">
								<div class="border-bottom-3 container-fluid">
									<h5>Processo: ${processo}</h5>
								</div>
								<x-adminlte-textarea id="processo_resultados_pretendidos" name="processo_resultados_pretendidos[]"></x-adminlte-textarea>
							</li>`
				);
				const processo_resultados = document.querySelector('#processo_resultados_pretendidos');
				console.log(processo_resultados)
				processo_resultados.addEventListener("keyup", e => {
					let scHeight1 = e.target.scrollHeight;
					console.log(scHeight1)
					processo_resultados.style.height = `${scHeight1}px`
				})

				//check dados especiais
				$('#processos_list_categoria').append(`
			<li class="list-group-item Info ">
				<div class="row">
					<div class="border-bottom container-fluid col-12">
						<h5>Processo: ${processo}</h5>
					</div>

				</div><br>
				<div class=" container-fluid d-flex align-content-start flex-wrap-3 ">
					<div >
						<label>
							<input type="checkbox" name="dados_pessoais[x]" class="dadospessoais m-2" value="dados pessoais"> Dados Pessoais
						</label>
					</div>
					<div >
						<label>
							<input type="checkbox" name="dados_pessoais[z]" class="dadospessoaissensiveis m-2" value="dados pessoais sensiveis"> Dados Pessoais Sensíveis
						</label>
					</div>
					<div >
						<label>
							<input type="checkbox" class="dadospessoaisespeciais m-2"> Dados Pessoais Especiais
						</label>
					</div>
				</div>
				<div class="rounded listaCheck1 col-12" style="display:none;">
					<div class="p-3 d-flex align-content-end flex-wrap-3">
						<input type="checkbox" name="dados_pessoais[]" class="Opcoes m-2" value="beneficiario"> Beneficiário
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="clientes"> Clientes
						<input type="checkbox" name="dados_pessoais[]" class="s m-2" value="contribuintes"> Contribuintes
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="dependentes"> Dependentes
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="eleitores"> Eleitores
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="empregados"> Empregados
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="estudantes"> Estudantes
						<input type="checkbox" name="dados_pessoais[]" class="m-2" value="motoristas"> Motoristas
					</div>
				</div>
				<div class="rounded listaCheck2 col-12" style="display:none;">
					<div class="p-3 d-flex align-content-end flex-wrap-3">
						<input type="checkbox" name="dados_pessoais_especiais[]" class="crianca Opcoes m-2" value="crianca"> Criança
						<input type="checkbox" name="dados_pessoais_especiais[]" class="adolescente m-2" value="adolescente"> Adolescente
						<input type="checkbox" name="dados_pessoais_especiais[]" class="vulneravel m-2" value="vulneravel"> Vulnerável
						<input type="checkbox" name="dados_pessoais_especiais[]" class="idoso m-2" value="idoso"> Idoso
					</div>
				</div>
		
			</li>
		`);



				$('#processos_list_catpro').append('<li class="list-group-item d-flex align-content-end flex-wrap  "><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<div class ="row container-fluid">' +
					' <div class="p-3 col-12   "><label><input type="checkbox" name="ctdadospessoais[]" class=" Deip ml-4"  value="Dados identificacao pessoal"> Dados de Identificação Pessoal</label>' +
					'<div class="dip  " style="display:none">' +
					'<div class="dd"><input type="checkbox" name="ctdadospessoais[]" class=" vi  ml-5"  value="Informações de identificação pessoal"> Informações de identificação pessoal ' +
					' <div class="info border p-2 ml-5 ml-5 "  style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  >  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Renteção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  ">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  ">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div></div> </div> <br>' +
					'<div class="dd"><input type="checkbox" name="ctdadospessoais[]" class=" vi  ml-5"  value="Informações de identificação atribuídas por instituições governamentais"> Informações de identificação atribuídas por instituições governamentais ' +
					' <div class="info border p-2 ml-5 ml-5 "  style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  >  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Renteção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  ">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  ">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div></div> </div>'

					+
					'<br><div class="dd"><input type="checkbox" name="ctdadospessoais[]" class=" iv ml-5" value="Dados de identificação eletrônica"> Dados de identificação eletrônica' +
					' <div class="info1 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Renteção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div></div> </div>' +
					'<br><div class="dd"><input type="checkbox" name="ctdadospessoais[]" class=" voz ml-5"  value="Dados de localização eletrônica"> Dados de localização eletrônica ' +
					'<div class="info2 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Renteção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div></div> </div>' +
					'</div></div> ' +


					' <div class="p-3 col-12   "><label><input type="checkbox" name="ctdadospessoais[]" class="Dadosf ml-4"  value="Dados financeiros"> Dados Financeiros </label> '

					+
					'<div class="df" style="display:none">' + '<div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class=" Financeiro ml-5"  value="Dadosidentificacao_financeira"> Dados de identificação financeira' +
					' <div class="financeiro border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Renteção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div></div> </div>'

					+
					'<br><div "><input type="checkbox" name="ctdadospessoais[]" class=" Financeiro1 ml-5" value="recursos financeiros"> Recursos finceiros' +
					' <div class="financeiro1 border p-2 ml-5 ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'


					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class=" Financeiro2 ml-5"  value="divida e despesa"> Dividas e Despesas' +
					' <div class="financeiro2 border p-2 ml-5 ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro3 ml-5"  value="situacao financeira"> Situação financeira (Solvência)' +
					' <div class="financeiro3 border p-2 ml-5 ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro4 ml-5"  value="emprestimos hipotecas linhas credito"> Empréstimos, hipotecas e linhas de crédito' +
					' <div class="financeiro4 border p-2 ml-5  ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro5 ml-5"  value="Assistencia financeira"> Assistência financeira' +
					' <div class="financeiro5 border p-2 ml-5  ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro6 ml-5"  value="Detalhes apolice de seguro"> Detalhes da apólice de seguro' +
					'<div class="financeiro6 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro7 ml-5"  value="plano pensao"> Detalhes do plano de pensão' +
					'<div class="financeiro7 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro8 ml-5"  value="transcoes financeiras"> Transações financeiras' +
					'<div class="financeiro8 border p-2 ml-5  ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro9 ml-5"  value="compensacao"> Compensação' +
					'<div class="financeiro9 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro10 ml-5"  value="atividades profissionais"> Atividades profissionais' +
					' <div class="financeiro10 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro11 ml-5"  value="acordos ajustes"> Acordos e Ajustes' +
					'<div class="financeiro11 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>'

					+
					'<br><div class="financeiro"><input type="checkbox" name="ctdadospessoais[]" class="Financeiro12 ml-5"  value="autorizacoes ou consentimentos"> Autorizações ou consentimentos' +
					' <div class="financeiro12 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >    </div></div> </div>' +
					'</div></div>' +


					' <div class="p-3 col-12 "><label><input type="checkbox" name="ctdadospessoais[]" class="Cp ml-4"  value="caracteristicas pessoais"> Caracteristicas Pessoais</label>' +
					' <div class="Cpessoais" style="display:none;"><div ><input type="checkbox" name="ctdadospessoais[]" class=" Pessoais0 ml-5"  value="detalhes"> Detalhes Pessoais' +
					' <div class="pessoais0 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div></div> </div>'

					+
					'<br><div ><input type="checkbox" name="ctdadospessoais[]" class="Pessoais1 ml-5" value="detalhes militares"> Detalhes militares' +
					' <div class="pessoais1 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div></div> </div>'

					+
					'<br><div class="Pessoais"><input type="checkbox" name="ctdadospessoais[]" class="Pessoais2 ml-5"  value="situacao de migracao "> Situação de migração	' +
					' <div class="pessoais2 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div></div> </div>'

					+
					'<br><div class="Pessoais"><input type="checkbox" name="ctdadospessoais[]" class="Pessoais3 ml-5"  value="descricao fisica"> Descrição fisica' +
					' <div class="pessoais3 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div></div> </div>' +
					'</div></div>' +

					'<div class="p-3 col-12 "><label><input type="checkbox" name="ctdadospessoais[]" class="HP ml-4" value="habitos pessoais"> Hábitos Pessoais </label>' +
					' <div class="Habitospesso" style="display:none;" > ' +
					'<div ><input type="checkbox" name="ctdadospessoais[]" class=" Habitos ml-5" value="Habitos"> Hábitos' +
					' <div class="hab border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div></div> </div>'

					+
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos0 ml-5" value="estilo de vida"> Estilo de Vida' +
					' <div class=" hab0 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div>  </div></div>' +
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos1 ml-5" value="viagens e deslocamentos"> Viagens e deslocamentos' +
					' <div class=" hab1 border p-2 ml-5  ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div></div>'

					+
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos2 ml-5" value="contatos sociais"> Contatos sociais' +
					' <div class=" hab2 border ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div> </div>  </div>' +

					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos3 ml-5" value="posses"> Posses' +
					' <div class=" hab3 border p-2 ml-5  ml-5" style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div></div>  </div>' +
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos4 ml-5" value="denuncias incidentes"> Denúncias, incidentes ou acidentes' +
					' <div class=" hab4 border p-2 ml-5  ml-5 "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>' +
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos5 ml-5" value="distincoes"> Distinções ' +
					' <div class="hab5 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Habitos6 ml-5" value="midia"> Uso de mídia ' +
					' <div class=" hab6 border p-2 ml-5 ml-5  "style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  ></div>  </div> </div>' +
					' </div> </div>  ' +

					' <div class="p-3  col-12"><label><input type="checkbox" name="ctdadospessoais[]" class="Cpsi ml-4 "  value="caracterjstjcas psiciologicas"> Caracteristicas Psicológicas</label>' +
					' <div class="Cpsicolo" style="display:none"><br><div ><input type="checkbox" name="ctdadospessoais[]" class="Psicologicas ml-5 "  value="descicao psiscologicas"> Descrição Psicológica <div id="Psicologicas">' +
					' <div class=" descrps border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  ></div>  </div> </div>' +
					'</div></div> </div> </div> </div>  ' +


					' <div class="p-3 col-12"><label><input type="checkbox" name="ctdadospessoais[]" class="Cf ml-4  "  value="composicao familiar"> Composição Familiar </label>' +
					' <div class="composicaofamíliar" style="display:none">' +
					'<div ><input type="checkbox" name="ctdadospessoais[]" class="Cfac Opcoes ml-5"  value="casamento forma atual de cobitacao"> Casamento ou forma atual de coabitação' +
					' <div class=" famíliar border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<div class="famíliar"><input type="checkbox" name="ctdadospessoais[]" class="Hc ml-5" value="historico conjugal"> Histórico conjugal' +
					' <div class=" famíliar0 border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<div class="famíliar"><input type="checkbox" name="ctdadospessoais[]" class="Fm ml-5"  value="familiares"> Familiares ou membros da família ' +
					' <div class=" famíliar01 border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div>' +
					'</div></div> </div> </div></div>   ' +
					' <div class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="interesse_delazer ml-4"  value="interesses lazer"> <label> Interesses de lazer </label>' +
					' <div class="interesse_lazer" style="display:none"><input type="checkbox" name="ctdadospessoais[]" class="lazer ml-5"  value="atividade"> Atividade e interesses de lazer<div class="lazer">' +
					' <div class=" lazerperg border p-2 ml-5 ml-5" border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  ></div>  </div> </div>'

					+
					'</div></div></div> </div> </div>   ' +
					' <div class="p-3 col-12"><label><input type="checkbox" name="ctdadospessoais[]" class="Associa ml-4"  value="Associacoes"> Associações (exceto profissionais, políticas, em sindicatos ou qualquer outra)</label>' +
					'  <div class="associ" style="display:none"> <div ><input type="checkbox" name="ctdadospessoais[]" class="Sociacoes ml-5"  value="Associacoes"> Associações' +
					' <div class=" socia border p-2 ml-5 ml-5" border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'</div></div></div> </div> </div>  ' +
					' <div class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="Pj ml-4"  value="processo judicial"> <label> Processo Judicial </label>' +
					' <div class="judic " style="display:none"><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class=" ProcessosJudicial ml-5"  value=""> Suspeitas  ' +
					' <div class=" processo0 border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="ProcessosJudicial0 ml-5" value="condencacoes sentencas"> Condenações e sentenças' +
					' <div class=" processo1 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="ProcessosJudicial1 ml-5"  value="acoes judicias"> Ações judiciais 		' +
					' <div class=" processo2 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="ProcessosJudicial2 ml-5"  value="penalidades adm"> Penalidades Administrativas 					' +
					' <div class=" processo3 border p-2 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>' +
					'</div></div></div></div></div> ' +
					' <div class="p-3 col-12"><label><input type="checkbox" name="ctdadospessoais[]" class="Hc2 ml-4"  value="habitos de Consumo "> Habitos de Consumo </label> ' +
					' <div class=" habitoscons border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div> </div></div>' +
					'</div></div></div> </div> </div> ' +

					' <div class="p-3 col-12"><label><input type="checkbox" name="ctdadospessoais[]" class="DD ml-4"  value="Dados Residenciais "> Dados Residenciais </label> ' +
					' <div class="p-3 col-12 " ><div class="aDD1" style="display:none;"><input type="checkbox" name="ctdadospessoais[]" class=" Dr ml-5"  value="Dados Residenciais "> Residência </div> ' +
					' <div class=" drcons border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  >  </div> </div></div>' +
					'</div></div></div> </div> </div> ' +
					' <div class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="Ed ml-4"  value="Educação e treinamento"> <label> Educação e treinamento </label>' +
					' <div class="Edu " style="display:none"><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="Ed1 ProcessosJudicial ml-5"  value="Dados acadêmicos/escolares"> Dados acadêmicos/escolares  ' +
					' <div class=" educa0 border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="Edu"><input type="checkbox" name="ctdadospessoais[]" class="Ed2 ml-5" value="Registros financeiros do curso/treinamento"> Registros financeiros do curso/treinamento' +
					' <div class=" educa1 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="Ed3 ProcessosJudicial1 ml-5"  value="Qualificação e experiência profissional"> Qualificação e experiência profissional 		' +
					' <div class=" educa2 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+

					'</div></div></div></div></div> ' +
					' <div class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="profi ml-4"  value="Profissão"> <label> Profissão e emprego </label>' +
					' <div class="proficao " style="display:none"><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof1 ProcessosJudicial ml-5"  value="Emprego atual">Emprego atual  ' +
					' <div class=" profici border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="Edu"><input type="checkbox" name="ctdadospessoais[]" class="prof2 ml-5" value="Recrutamento"> Recrutamento' +
					' <div class=" profici1 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof3 ProcessosJudicial1 ml-5"  value="Rescisão de trabalho"> Rescisão de trabalho 		' +
					' <div class=" profici2 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof4 ProcessosJudicial1 ml-5"  value="Carreira"> Carreira 		' +
					' <div class=" profici3 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof5 ProcessosJudicial1 ml-5"  value=" Absentismo e disciplina"> Absentismo e disciplina ' +
					' <div class=" profici4 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'
					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof6 ProcessosJudicial1 ml-5"  value=" ">  Avaliação de Desempenho ' +
					' <div class=" profici5 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+

					'</div></div></div></div></div> ' +
					
					
					' <div class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="RGV ml-4"  value="Registros/gravações de vídeo, imagem e voz"> <label> Registros/gravações de vídeo, imagem e voz </label>' +
					' <div class="RGVideo " style="display:none"><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="prof1 ProcessosJudicial ml-5"  value="Vídeo e imagem">Vídeo e imagem  ' +
					' <div class=" profici border p-2 ml-5 ml-5  " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="Edu"><input type="checkbox" name="ctdadospessoais[]" class="RGV1 ml-5" value="Imagem de Vigilância">Imagem de Vigilância' +
					' <div class=" RGVideo1 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'



					+
					'<br><div class="judicial"><input type="checkbox" name="ctdadospessoais[]" class="RGV2 ProcessosJudicial1 ml-5"  value="Voz"> Voz		' +
					' <div class=" RGVideo2 border p-2 ml-5   " style="display:none;"> <div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ctdadospessoais[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ctdadospessoais[]" class="form-control"  > </div>  </div> </div>'

					+
			
					

					'</div></div></div></div></div> </div> ' +



					
				
					' <label class="p-3 col-12"><input type="checkbox" name="ctdadospessoais[]" class="outros ml-4"  value="Outros"> Outros </label>  ' +
					' <div class=" col-12 outross border" style="display:none;"> <div class="border-dark mt-3 mb-2" >Informe <input type="text" name="ctdadospessoais[]" class="form-control "  value="">  </div>' +

					'   </div></div> </div>'+
					'</div>' +


					
					'</div> ' +
					' </li>');
				$('#processos_list_dados_pessoais').append('<li class="list-group-item d-flex flex-wrap"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<div class="row">' +
					'<div class="p-3 col-12 "  >' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis " id="pessoa1"  value="dados que revelam origem"> Dados que revelam origem racial ou ética </label> ' +
					'<div class="Pessoas_Sensiveisabrir border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12"   >' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis2 " id="pessoa2"  value="conviccao religiosa"> Dados que revelam convicção religiosa </label>   ' +
					'<div class="Pessoas_Sensiveisabrir2 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12"  >' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class=" Pessoas_Sensiveis3 " id="pessoa3"  value="Pessoas Sensiveis politica "> Dados que revelam opinião política</label> ' +
					'<div class="Pessoas_Sensiveisabrir3 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12"  >' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class=" Pessoas_Sensiveis4 " id="pessoa4"  value="dados que revelam filiacao ao sindicato"> Dados que revelam filiação a sindicato </label> ' +
					'<div class="Pessoas_Sensiveisabrir4 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>' +
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis5 " id="pessoa5"  value="dados que revelam filiacao a organizacao de carater religioso"> Dados que revelam filiação a organização de caráter religioso</label> ' +
					'<div class="Pessoas_Sensiveisabrir5 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis6 " id="pessoa6"  value="filiação ou crenca filosofica"> Dados que revelam filiação ou crença filosófica</label> ' +
					'<div class="Pessoas_Sensiveisabrir6 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis7 " id="pessoa7"  value="preferência politica"> Dados que revelam filiação ou preferências política</label> ' +
					'<div class="Pessoas_Sensiveisabrir7 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>'

					+
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class=" Pessoas_Sensiveis8 " id="pessoa8" value=" "> Dados referentes à saúde ou à vida sexual</label> ' +
					'<div class="Pessoas_Sensiveisabrir8 border  p-2 ml-5" style="display:none;"><div class="mr-5" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value=" ">  </div>' +
					'<div class="mr-5" >Tempo de Renteção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="mr-5" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="mr-5" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div></div>' + '</div>'

					+
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis9 " id="pessoa9" value="dados geneticos"> Dados Genéticos</label> ' +

					'<div class="Pessoas_Sensiveisabrir9 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>' +
					'<div class="p-3 col-12">' + '<label><input type="checkbox" name="ct_dadospessoaissensiveis[]" class="Pessoas_Sensiveis10 " id="pessoa10" value="dados biometricos"> Dados biométricos</label> ' +
					'<div class="Pessoas_Sensiveisabrir10 border  p-2 ml-5" style="display:none;"><div class="border-dark mt-3 mb-2" >Descrição <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control "  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Tempo de Rentenção dos Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Fonte de Retenção <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  value="">  </div>' +
					'<div class="border-dark mt-3 mb-2" >Nome da Base de Dados <input type="text" name="ct_dadospessoaissensiveis[]" class="form-control"  > </div></div>' + '</div>' +
					'</div></li>');

				$('#processos_profiling').append('<li class="list-group-item"><div class=" border-bottom  container-fluid"><h5> Processo:  ' + processo + '</h5></div>' +
					'<br> <label> <input type="checkbox" class="processoprofilingsim m-1" name="profilling[prof][]" value="sim"> Sim </label><label> <input type="checkbox" class="processoprofilingnao m-1" name="profilling[]" value="nao"> Não </label>' +
					'<div class="processo-profilling col-md-12"" style="display:none;"><input class="form-control col-md-12" name="profilling[]" value="" type="text" placeholder="Defina"></div></li>');

				$('#processos_list_documento').append('<li class="list-group-item"><div class=" border-bottom  container-fluid"><h5> Processo:  ' + processo + '</h5></div>' +
					'<br> <label> <input type="checkbox" class="processolistdocumentosim m-1" name="documento[doc][]" value="sim"> Sim </label><label> <input type="checkbox" class="processolistdocumentonao m-1" name="documento[]" value="nao"> Não </label>' +
					'<div class="processo-doc col-md-12"" style="display:none;"><input class="form-control col-md-12" name="documento[]" value="" type="text" placeholder="informar"></div></li>');

				$('#processos_list_frenquencia_tratamento_dos_Dados').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div></div>' +
					' <label><input type="checkbox" class="diariamentefrequenciatratamendodado m-1 " name="frequencia[ ]" value="diariamente">Diariamente </label>' +
					' <label><input type="checkbox" class="frequenciatratamendodadosemana m-1 " name="frequencia[ ]" value="semanalmente">Semanalmente </label>' +
					' <label><input type="checkbox" class="frequenciatratamendodadosmensal m-1 " name="frequencia[ ]" value="mensal">Mensal </label>' +
					' <label><input type="checkbox" class="frequenciatratamendodadossemestral  m-1" name="frequencia[ ]" value="semana">Semestral </label>' +
					' <label><input type="checkbox" class="frequenciatratamendodadosanual  m-1" name="frequencia[ ]" value="anual">Anual </label>' +
					'<div class="mostrarcampoparadiariamente" style="display:none;"><input type="text" name="frequenciaobs[]" value="" class=" form-control"  placeholder="Observações "></div>' +
					'<div class="mostrarcampoparasemanal" style="display:none;"><input type="text" name="frequenciaobs[]" class=" form-control" value=""  placeholder="Observações "></div>' +
					'<div class="mostrarcampoparamensal" style="display:none;"><input type="text" name="frequenciaobs[]" class=" form-control" value=""  placeholder="Observações "></div>' +
					'<div class="mostrarcampoparasemestral" style="display:none;"><input type="text" name="frequenciaobs[]" class=" form-control" value=""  placeholder="Observações "></div>' +
					'<div class="mostrarcampoparaanual" style="display:none;"><input type="text" name="frequenciaobs[]" class=" form-control" value=""  placeholder="Observações "></div>' +
					'</li>');
				$('#processos_list_quantidade_estimada').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' + '<br> <input type="text" class="form-control" name="quantidade_dados_titulartratatados[]" placeholder="Informe a Quantidade "></li>');
				$('#processos_list_quantidade_estimada_pesoaisesensiveis').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' + '<br> <input type="text" class="form-control " name="quantidade_pessoasespeciasesensiveis_dadostratados[]" placeholder="Informe a Quantidade "></li>');
				$('#processos_list_geografica').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' + '<br> ' +
					'<select class="form-control 3" required name="geografica[]" aria-label="Default select example">' +

					'<option selected>Escolher</option>' +
					'<option value="Nacional">Nacional</option>' +
					'<option value="Estadual">Estadual</option>' +
					'<option value="Distrital">Distrital</option>' +
					'<option value="Municipal">Municipal</option>' +
					'<option value="Regional">Regional</option>' +
					'</select>' +

					'</li>');
				$('#processos_list_Areas_Compart').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<br> <input type="text" class="form-control " name="processos_list_Areas_Compart[]"  value="" placeholder="Informe aqui o departamento "></li>');

				//precesso transferencia dados pessoais
				$('#processos_list_transf_inter_dados_pessoais').append(
					`<li class="list-group-item">
							<div class="border-bottom-3 container-fluid m-1">
								<h5>Processo: ${processo}</h5>
							</div>
							<div>
								<br><label><input type="checkbox" name="processos_list_transf_dados_pessoais[exemplificar][]" class="processo_dadospessoaisintersim m-1" value="sim"> Sim</label>
							</div>
							<div>
								<label><input type="checkbox" name="processos_list_transf_dados_pessoais[]" class="processo_dadospessoaisinternao m-1" value="nao"> Não</label>
							</div>
							<div>
								<label><input type="checkbox" name="processos_list_transf_dados_pessoais[]" class="processo_dadospessoaisinternaosei m-1" value="nao sei"> Não Sei</label>
							</div>
							<div class="transfdados" style="display:none;">
								<div class="p-3 container-fluid border p-2 border rounded-3">
									<x-adminlte-textarea  id="processos_list_transf_dados_pessoais" name="processos_list_transf_dados_pessoais[]" placeholder="Descreva aqui"></x-adminlte-textarea>
								</div>
							</div>
						</li>`
				);

				const list_transf = document.querySelector('#processos_list_transf_dados_pessoais');
				console.log(list_transf)
				list_transf.addEventListener("keyup", e => {
					let scHeight1 = e.target.scrollHeight;
					console.log(scHeight1)
					list_transf.style.height = `${scHeight1}px`
				})



				$('#processos_list_operacao').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<div class="icheck-primary d-inline">' +
					'<br><label> <input type="checkbox" class="simoperacao m-1 " name="operacao_tratamento_mediante_tomadadecisao[]"  value="sim"> Sim </label>' +
					' </div>' +
					'<div class="icheck-primary d-inline">' +
					'<label> <input type="checkbox" class="naooperacao m-1 ml-1" name="operacao_tratamento_mediante_tomadadecisao[]" value="nao"> Não'

					+
					' </div>' +
					'<div class="operacoes col-md-12"" style="display:none;"><input class="form-control col-md-12" name="auditoria[]" value="" type="text" placeholder="Defina">'


					+
					' </div></li>');
				//processo realizado de forma fisica
				$('#processos_realizados_forma_fisica').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5>Processo:  ' + processo + '</h5></div>' +
					'<div class="icheck-primary d-inline">' +
					'<br><label> <input type="checkbox" name="dado_formafisica[]" class=" m-1" value="físico"> Físico </label> ' +
					'</div>' +
					'<div class="icheck-primary d-inline">' +
					'<label> <input type="checkbox" class=" m-1" name="dado_formafisica[]" value="digital"> Digital </label> ' +
					'</div>' +

					'</div>' +
					'</li>');

				//prcesso auditoria  checado
				$('#processos_auditoria').append('<li class="list-group-item"><div class=" border-bottom 3 container-fluid"><h5> Processo: ' + processo + '</h5></div></div>' +
					'<div>' +
					'<br><label> <input type="checkbox" class="simprocessoaudi m-1" name="auditoria[x][]"  value="sim"> Sim </label>' +
					'<label> <input type="checkbox" class="naoprocessoaudi m-1" name="auditoria[]" value="nao"> Não </div>' +
					'<div class="processo_audi col-md-12"" style="display:none;"><input class="form-control col-md-12" name="auditoria[]" value="" type="text" placeholder="Defina">'


					+
					' </div></li>');
			});
			$(".simprocessoaudi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naoprocessoaudi").prop("checked", false);

					parentListItem.find(".processo_audi").show("slow");


				} else {
					parentListItem.find(".processo_audi").hide("slow");
				}
			});
			$(".naoprocessoaudi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".simprocessoaudi").prop("checked", false);

					parentListItem.find(".processo_audi").hide("slow");


				} else {}
			});
			// Supondo que 'checkbox' seja o seletor para os seus checkboxes

			document.querySelectorAll('input[name="dados_pessoais_especiais[x][]"]').forEach(function(checkbox) {
				checkbox.addEventListener('change', function() {
					var valoresSelecionados = [];
					document.querySelectorAll('input[name="dados_pessoais_especiais[]"]:checked').forEach(function(checkboxSelecionado) {
						valoresSelecionados.push(checkboxSelecionado.value);
					});
					console.log(valoresSelecionados);
				});
			});




			//tratamento de dados 
			$(".Deip").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".dip").show("slow");


				} else {
					parentListItem.find(".dip").hide("slow");
				}
			});
			//informaçao adicional para video e imagme
			$(".vi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".info").show("slow");


				} else {
					parentListItem.find(".info").hide("slow");
				}
			});
			$(".iv").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".info1").show("slow");


				} else {
					parentListItem.find(".info1").hide("slow");
				}
			});
			$(".voz").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".info2").show("slow");


				} else {
					parentListItem.find(".info2").hide("slow");
				}
			});
			$(".Dadosf").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".df").show("slow");


				} else {
					parentListItem.find(".df").hide("slow");
				}
			});
			$(".Financeiro").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro").show("slow");


				} else {
					parentListItem.find(".financeiro").hide("slow");
				}
			});
			$(".Financeiro1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro1").show("slow");


				} else {
					parentListItem.find(".financeiro1").hide("slow");
				}
			});
			$(".Financeiro2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro2").show("slow");


				} else {
					parentListItem.find(".financeiro2").hide("slow");
				}
			});
			$(".Financeiro3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro3").show("slow");


				} else {
					parentListItem.find(".financeiro3").hide("slow");
				}
			});
			$(".Financeiro4").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro4").show("slow");


				} else {
					parentListItem.find(".financeiro4").hide("slow");
				}
			});
			$(".Financeiro5").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro5").show("slow");


				} else {
					parentListItem.find(".financeiro5").hide("slow");
				}
			});
			$(".Financeiro6").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro6").show("slow");


				} else {
					parentListItem.find(".financeiro6").hide("slow");
				}
			});
			$(".Financeiro7").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro7").show("slow");


				} else {
					parentListItem.find(".financeiro7").hide("slow");
				}
			});
			$(".Financeiro8").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro8").show("slow");


				} else {
					parentListItem.find(".financeiro8").hide("slow");
				}
			});
			$(".Financeiro9").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro9").show("slow");


				} else {
					parentListItem.find(".financeiro9").hide("slow");
				}
			});
			$(".Financeiro10").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro10").show("slow");


				} else {
					parentListItem.find(".financeiro10").hide("slow");
				}
			});
			$(".Financeiro11").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro11").show("slow");


				} else {
					parentListItem.find(".financeiro11").hide("slow");
				}
			});
			$(".Financeiro12").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".financeiro12").show("slow");


				} else {
					parentListItem.find(".financeiro12").hide("slow");
				}
			});
			$(".Cp").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Cpessoais").show("slow");


				} else {
					parentListItem.find(".Cpessoais").hide("slow");
				}
			});
			$(".Pessoais0").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".pessoais0").show("slow");


				} else {
					parentListItem.find(".pessoais0").hide("slow");
				}
			});
			$(".Pessoais1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".pessoais1").show("slow");


				} else {
					parentListItem.find(".pessoais1").hide("slow");
				}
			});
			$(".Pessoais2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".pessoais2").show("slow");


				} else {
					parentListItem.find(".pessoais2").hide("slow");
				}
			});
			$(".Pessoais3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".pessoais3").show("slow");


				} else {
					parentListItem.find(".pessoais3").hide("slow");
				}
			});
			$(".HP").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Habitospesso").show("slow");


				} else {
					parentListItem.find(".Habitospesso").hide("slow");
				}
			});
			$(".Habitos").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab").show("slow");


				} else {
					parentListItem.find(".hab").hide("slow");
				}
			});
			$(".Habitos0").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab0").show("slow");


				} else {
					parentListItem.find(".hab0").hide("slow");
				}
			});
			$(".Habitos1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab1").show("slow");


				} else {
					parentListItem.find(".hab1").hide("slow");
				}
			});
			$(".Habitos2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab2").show("slow");


				} else {
					parentListItem.find(".hab2").hide("slow");
				}
			});
			$(".Habitos3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab3").show("slow");


				} else {
					parentListItem.find(".hab3").hide("slow");
				}
			});
			$(".Habitos4").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab4").show("slow");


				} else {
					parentListItem.find(".hab4").hide("slow");
				}
			});
			$(".Habitos5").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab5").show("slow");


				} else {
					parentListItem.find(".hab5").hide("slow");
				}
			});
			$(".Habitos6").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".hab6").show("slow");


				} else {
					parentListItem.find(".hab6").hide("slow");
				}
			});
			$(".Cpsi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Cpsicolo").show("slow");


				} else {
					parentListItem.find(".Cpsicolo").hide("slow");
				}
			});
			$(".Psicologicas").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".descrps").show("slow");


				} else {
					parentListItem.find(".descrps").hide("slow");
				}
			});
			$(".Cf").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".composicaofamíliar").show("slow");


				} else {
					parentListItem.find(".composicaofamíliar").hide("slow");
				}
			});
			$(".Cfac").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".famíliar").show("slow");


				} else {
					parentListItem.find(".famíliar").hide("slow");
				}
			});
			$(".Hc").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".famíliar0").show("slow");


				} else {
					parentListItem.find(".famíliar0").hide("slow");
				}
			});
			$(".Fm").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".famíliar01").show("slow");


				} else {
					parentListItem.find(".famíliar01").hide("slow");
				}
			});
			$(".interesse_delazer").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".interesse_lazer").show("slow");


				} else {
					parentListItem.find(".interesse_lazer").hide("slow");
				}
			});
			$(".lazer").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".lazerperg").show("slow");


				} else {
					parentListItem.find(".lazerperg").hide("slow");
				}
			});
			$(".Associa").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".associ").show("slow");


				} else {
					parentListItem.find(".associ").hide("slow");
				}
			});
			$(".Hc2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".habitoscons").show("slow");


				} else {
					parentListItem.find(".habitoscons").hide("slow");
				}
			});

			$(".DD").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".aDD1").show("slow");


				} else {
					parentListItem.find(".aDD1").hide("slow");
				}
			});
			$(".Dr").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".drcons").show("slow");


				} else {
					parentListItem.find(".drcons").hide("slow");
				}
			});
			$(".Ed").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Edu").show("slow");


				} else {
					parentListItem.find(".Edu").hide("slow");
				}
			});
			$(".Ed1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".educa0").show("slow");


				} else {
					parentListItem.find(".educa1").hide("slow");
				}
			});
			$(".Ed2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".educa1").show("slow");


				} else {
					parentListItem.find(".educa1").hide("slow");
				}
			});
			$(".Ed3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".educa2").show("slow");


				} else {
					parentListItem.find(".educa2").hide("slow");
				}
			});
			$(".Ed4").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".educa3").show("slow");


				} else {
					parentListItem.find(".educa3").hide("slow");
				}
			});
			$(".profi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".proficao").show("slow");


				} else {
					parentListItem.find(".proficao").hide("slow");
				}
			});
			$(".prof1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici").show("slow");


				} else {
					parentListItem.find(".profici").hide("slow");
				}
			});
			$(".prof2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici1").show("slow");


				} else {
					parentListItem.find(".profici1").hide("slow");
				}
			});
			$(".prof3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici2").show("slow");


				} else {
					parentListItem.find(".profici2").hide("slow");
				}
			});
			$(".prof4").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici3").show("slow");


				} else {
					parentListItem.find(".profici3").hide("slow");
				}
			});
			$(".prof5").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici4").show("slow");


				} else {
					parentListItem.find(".profici4").hide("slow");
				}
			});
			$(".prof6").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".profici5").show("slow");


				} else {
					parentListItem.find(".profici5").hide("slow");
				}
			});
			$(".RGV").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".RGVideo").show("slow");


				} else {
					parentListItem.find(".RGVideo").hide("slow");
				}
			});
			$(".RGV1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".RGVideo1").show("slow");


				} else {
					parentListItem.find(".RGVideo1").hide("slow");
				}
			});
			$(".RGV2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".RGVideo2").show("slow");


				} else {
					parentListItem.find(".RGVideo2").hide("slow");
				}
			});
			$(".outros").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".outross").show("slow");


				} else {
					parentListItem.find(".outross").hide("slow");
				}
			});
			$(".Pj").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".judic").show("slow");


				} else {
					parentListItem.find(".judic").hide("slow");
				}
			});
			$(".ProcessosJudicial").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".processo0").show("slow");


				} else {
					parentListItem.find(".processo0").hide("slow");
				}
			});
			$(".ProcessosJudicial0").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".processo1").show("slow");


				} else {
					parentListItem.find(".processo1").hide("slow");
				}
			});
			$(".ProcessosJudicial1").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".processo2").show("slow");


				} else {
					parentListItem.find(".processo2").hide("slow");
				}
			});
			$(".ProcessosJudicial2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".processo3").show("slow");


				} else {
					parentListItem.find(".processo3").hide("slow");
				}
			});
			$(".Sociacoes").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".socia").show("slow");


				} else {
					parentListItem.find(".socia").hide("slow");
				}
			});

			$(".Pessoas_Sensiveis").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis2").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir2").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir2").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis3").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir3").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir3").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis4").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir4").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir4").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis5").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir5").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir5").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis6").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir6").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir6").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis7").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir7").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir7").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis8").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir8").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir8").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis9").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir9").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir9").hide("slow");
				}
			});
			$(".Pessoas_Sensiveis10").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {


					parentListItem.find(".Pessoas_Sensiveisabrir10").show("slow");


				} else {
					parentListItem.find(".Pessoas_Sensiveisabrir10").hide("slow");
				}
			});
			$(".possuiexclusaodedados").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naopossuiexclusaodedados").prop("checked", false);

					parentListItem.find(".exclusaodedados").show("slow");


				} else {
					parentListItem.find(".exclusaodedados").hide("slow");
				}
			});
			$(".naopossuiexclusaodedados").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".possuiexclusaodedados").prop("checked", false);
					parentListItem.find(".exclusaodedados").hide("slow");

				}
			});
			let dadospessoais = $(".dadospessoais");
			let dadossensiveis = $(".dadospessoaissensiveis");
			let dadosespeciais = $(".dadospessoaisespeciais");
			dadospessoais.click(function() {
				var parentListItem = $(this).closest('li');
				if (dadossensiveis.is(':checked') || dadosespeciais.is(':checked')) return;
				if ($(this).is(":checked")) {
					parentListItem.find(".listaCheck1").show("slow");
				} else if (!parentListItem.find(".dadospessoaissensiveis").is(":checked")) {
					parentListItem.find(".listaCheck1").hide("slow");
				}
			});
			dadossensiveis.click(function() {
				var parentListItem = $(this).closest('li');
				if (dadospessoais.is(':checked') || dadosespeciais.is(':checked')) return;
				if ($(this).is(":checked")) {
					parentListItem.find(".listaCheck1").show("slow");
				} else if (!parentListItem.find(".dadospessoais").is(":checked")) {
					parentListItem.find(".listaCheck1").hide("slow");
				}
			});
			dadosespeciais.click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".listaCheck1").show("slow");
					parentListItem.find(".listaCheck2").show("slow");
				} else {
					parentListItem.find(".listaCheck2").hide("slow");
					if (dadospessoais.is(':checked') || dadossensiveis.is(':checked')) return;
					parentListItem.find(".listaCheck1").hide("slow");
				}
			});






			$(".diariamentefrequenciatratamendodado").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".frequenciatratamendodadossemestral").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosanual").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosemana").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosmensal").prop("checked", false);
					parentListItem.find(".mostrarcampoparamensal").hide("slow");
					parentListItem.find(".mostrarcampoparaanual").hide("slow");
					parentListItem.find(".mostrarcampoparasemestral").hide("slow");
					parentListItem.find(".mostrarcampoparadiariamente").show("slow");
					parentListItem.find(".mostrarcampoparasemanal").hide("slow");
				} else {
					parentListItem.find(".mostrarcampoparadiariamente").hide("slow");

				}
			});
			$(".frequenciatratamendodadosmensal").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".frequenciatratamendodadossemestral").prop("checked", false);
					parentListItem.find(".diariamentefrequenciatratamendodado").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosanual").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosemana").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosdiariamente").prop("checked", false);
					parentListItem.find(".mostrarcampoparamensal").show("slow");
					parentListItem.find(".mostrarcampoparaanual").hide("slow");
					parentListItem.find(".mostrarcampoparasemestral").hide("slow");
					parentListItem.find(".mostrarcampoparadiariamente").hide("slow");
					parentListItem.find(".mostrarcampoparasemanal").hide("slow");
				} else {
					parentListItem.find(".mostrarcampoparamensal").hide("slow");
				}
			});

			$(".frequenciatratamendodadosanual").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".frequenciatratamendodadosmensal").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadossemestral").prop("checked", false);
					parentListItem.find(".diariamentefrequenciatratamendodado").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosemana").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosdiariamente").prop("checked", false);
					parentListItem.find(".mostrarcampoparaanual").show("slow");
					parentListItem.find(".mostrarcampoparamensal").hide("slow");
					parentListItem.find(".mostrarcampoparadiariamente").hide("slow");
					parentListItem.find(".mostrarcampoparasemanal").hide("slow");

					parentListItem.find(".mostrarcampoparasemestral").hide("slow");
				} else {
					parentListItem.find(".mostrarcampoparaanual").hide("slow");
				}
			});

			$(".frequenciatratamendodadossemestral").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".frequenciatratamendodadosmensal").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosdiariamente").prop("checked", false);
					parentListItem.find(".diariamentefrequenciatratamendodado").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosanual").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosemana").prop("checked", false);
					parentListItem.find(".mostrarcampoparasemestral").show("slow");
					parentListItem.find(".mostrarcampoparamensal").hide("slow");
					parentListItem.find(".mostrarcampoparadiariamente").hide("slow");
					parentListItem.find(".mostrarcampoparasemanal").hide("slow");
					parentListItem.find(".mostrarcampoparaanual").hide("slow");

				} else {
					parentListItem.find(".mostrarcampoparasemestral").hide("slow");
				}
			});

			$(".frequenciatratamendodadosemana").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".frequenciatratamendodadosmensal").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosdiariamente").prop("checked", false);
					parentListItem.find(".diariamentefrequenciatratamendodado").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadosanual").prop("checked", false);
					parentListItem.find(".frequenciatratamendodadossemestral").prop("checked", false);
					parentListItem.find(".mostrarcampoparasemanal").show("slow");
					parentListItem.find(".mostrarcampoparadiariamente").hide("slow");
					parentListItem.find(".mostrarcampoparamensal").hide("slow");
					parentListItem.find(".mostrarcampoparaanual").hide("slow");
					parentListItem.find(".mostrarcampoparasemestral").hide("slow");
				} else {
					parentListItem.find(".mostrarcampoparasemanal").hide("slow");

				}
			});





			// Para processo de pré-tratamento de dados
			$(".simprevtratamentodados").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naoprevtratamentodados").prop("checked", false);
					parentListItem.find(".previsaotratamentodados").show("slow");
				} else {
					parentListItem.find(".previsaotratamentodados").hide("slow");
				}
			});

			$(".naoprevtratamentodados").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".simprevtratamentodados").prop("checked", false);
					parentListItem.find(".previsaotratamentodados").hide("slow");
				}
			});
			$(".processolistdocumentosim").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processolistdocumentonao").prop("checked", false);
					parentListItem.find(".processo-doc").show("slow");
				} else {
					parentListItem.find(".processo-doc").hide("slow");
				}
			});

			$(".processolistdocumentonao").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processolistdocumentosim").prop("checked", false);
					parentListItem.find(".processo-doc").hide("slow");
				}
			});
			$(".processoprofilingsim").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processoprofilingnao").prop("checked", false);
					parentListItem.find(".processo-profilling").show("slow");
				}
			});
			$(".processoprofilingnao").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processoprofilingsim").prop("checked", false);
					parentListItem.find(".processo-profilling").hide("slow");
				}
			});
			$(".naoprocessofisico").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".simprocessofisico").prop("checked", false);
					parentListItem.find(".processo_forma_fisica").show("slow");
				} else {
					parentListItem.find(".processo_forma_fisica").hide("slow");
				}
			});

			$(".simprocessofisico").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naoprocessofisico").prop("checked", false);
					parentListItem.find(".processo_forma_fisica").hide("slow");
				}
			});
			//
			$(".processo_dadospessoaisintersim").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processo_dadospessoaisinternao").prop("checked", false);
					parentListItem.find(".processo_dadospessoaisinternaosei").prop("checked", false);
					parentListItem.find(".transfdados").show("slow");
				} else {
					parentListItem.find(".transfdados").hide("slow");
				}
			});

			$(".processo_dadospessoaisinternao").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processo_dadospessoaisintersim").prop("checked", false);
					parentListItem.find(".processo_dadospessoaisinternaosei").prop("checked", false);
					parentListItem.find(".transfdados").hide("slow");
				}
			});
			$(".processo_dadospessoaisinternaosei").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".processo_dadospessoaisintersim").prop("checked", false);
					parentListItem.find(".processo_dadospessoaisinternao").prop("checked", false);
					parentListItem.find(".transfdados").hide("slow");
				}
			});

			//para processo de operacao





			$(".simoperacao").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naooperacao").prop("checked", false);
					parentListItem.find(".operacoes").show("slow");
				} else {
					parentListItem.find(".operacoes").hide("slow");
				}
			});

			$(".naooperacao").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".simoperacao").prop("checked", false);
					parentListItem.find(".operacoes").hide("slow");
				}
			});
			//processolistdocumentosim







			//para processo forma fisica



			//para processos auditorias
			$(".simprocessoaudi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".naoprocessosaudi").prop("checked", false);
					parentListItem.find(".processos_audi").show("slow");
				} else {
					parentListItem.find(".processos_audi").hide("slow");
				}
			});

			$(".naoprocessoaudi").click(function() {
				var parentListItem = $(this).closest('li');
				if ($(this).is(":checked")) {
					parentListItem.find(".simprocessoaudi").prop("checked", false);
					parentListItem.find(".processos_audi").hide("slow");
				}
			});



			//function check sim or no
			$(".simounao").click(function(value) {
				console.log("Deu certo" + value + '');

			});
			$("#simounao").click(function(value) {
				console.log("Deu certo" + value + '');

			});



			//caixas de textos para cada check
			//inf







		}


	});
</script>

@endpush
@push('js')

<script src="{{ asset('resources/js/jquery.mask.js') }}"></script>
<script>
	const handlePhone = (event) => {
		let input = event.target
		input.value = phoneMask(input.value)
	}

	const phoneMask = (value) => {
		if (!value) return ""
		value = value.replace(/\D/g, '')
		value = value.replace(/(\d{2})(\d)/, "($1) $2")
		value = value.replace(/(\d)(\d{4})$/, "$1-$2")
		return value
	};
</script>

<script>
	// Selecione o campo de e-mail
	function validarEmail() {
		const emailInput = document.getElementById('email');
		const email = emailInput.value;

		// Expressão regular para validar o formato do e-mail
		const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if (regexEmail.test(email)) {
			// E-mail válido
			console.log('E-mail válido:', email);
			// Adicione aqui o código para lidar com o e-mail válido
		} else {
			// E-mail inválido
			console.log('E-mail inválido:', email);
			alert('E-mail invalido');
			// Adicione aqui o código para lidar com o e-mail inválido
		}
	}
</script>

@endpush
@push('js')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>

<script>
	$(document).ready(function() {
		const campoRequired = "Por favor preencher esse campo";
		$('#form').validate({
			rules: {
				nome_processo: "required",
				nome_do_responsavel_processo: "required",
				telefone_responsavel: "required|regex:/^\(\d{2}\)\s\d{4,5}-\d{4}$/",
				processo_email: "required|email",
				processo_descricao: "required",
				processo_ciclodevida: "required",
				processo_coleta: "required",
				processo_exclusao: "required",
				processo_finalidade: "required",
				processo_previsao: "required",
				processo_resultados_pretendidos: "required",
				profilling: "required",
				documento: "required",
				documentoex: "required",
				frequencia: "required",
				frequenciaobs: "required",
				quantidade_dados_titulartratatados: "required|integer|min:0",
				quantidade_pessoasespeciasesensiveis_dadostratados: "required|integer|min:0",
				geografica: "required",
				processos_list_Areas_Compart: "required",
				processos_list_transf_dados_pessoais: "required",
				operacao_tratamento_mediante_tomadadecisao: "required",
				dado_formafisica: "required",
				auditoria: "required",
				observacoes: "required"
			},


			messages: {
				// Mensagens de validação para a tabela "sistemas"
				nome_sistema: "O campo nome do sistema é obrigatório.",
				informativo_sistema: "O campo informativo do sistema é obrigatório.",
				siteoulinksistema: {
					required: "O campo site ou link do sistema é obrigatório.",
					url: "Por favor, insira uma URL válida para o site ou link do sistema."
				},
				responsavel_sistema: "O campo responsável do sistema é obrigatório.",
				secretaria: "O campo secretaria é obrigatório.",
				departamento: "O campo departamento é obrigatório.",
				cargo: "O campo cargo é obrigatório.",


				// Mensagens de validação para a tabela "processos"
				nome_processo: "O campo nome do processo é obrigatório.",
				nome_do_responsavel_processo: "O campo nome do responsável pelo processo é obrigatório.",
				telefone_responsavel: {
					required: "O campo telefone do responsável é obrigatório.",
					regex: "Por favor, insira um número de telefone válido no formato (xx) xxxxx-xxxx."
				},
				processo_email: {
					required: "O campo e-mail do processo é obrigatório.",
					email: "Por favor, insira um endereço de e-mail válido."
				},
				processo_descricao: "O campo descrição do processo é obrigatório.",
				processo_ciclodevida: "O campo ciclo de vida do processo é obrigatório.",
				processo_coleta: "O campo coleta do processo é obrigatório.",
				processo_exclusao: "O campo exclusão do processo é obrigatório.",
				processo_finalidade: "O campo finalidade do processo é obrigatório.",
				processo_previsao: "O campo previsão do processo é obrigatório.",
				processo_resultados_pretendidos: "O campo resultados pretendidos do processo é obrigatório.",
				profilling: "O campo profilling é obrigatório.",
				documento: "O campo documento é obrigatório.",
				documentoex: "O campo documentoex é obrigatório.",
				frequencia: "O campo frequência é obrigatório.",
				frequenciaobs: "O campo observações sobre a frequência é obrigatório.",
				quantidade_dados_titulartratatados: {
					required: "O campo quantidade de dados do titular tratados é obrigatório.",
					integer: "Por favor, insira um valor inteiro para a quantidade de dados tratados.",
					min: "O valor mínimo para a quantidade de dados tratados é 0."
				},
				quantidade_pessoasespeciasesensiveis_dadostratados: {
					required: "O campo quantidade de pessoas especiais e sensíveis é obrigatório.",
					integer: "Por favor, insira um valor inteiro para a quantidade de pessoas especiais e sensíveis.",
					min: "O valor mínimo para a quantidade de pessoas especiais e sensíveis é 0."
				},
				geografica: "O campo geográfica é obrigatório.",
				processos_list_Areas_Compart: "O campo áreas compartilhadas do processo é obrigatório.",
				processos_list_transf_dados_pessoais: "O campo transferência de dados pessoais do processo é obrigatório.",
				operacao_tratamento_mediante_tomadadecisao: "O campo operação de tratamento mediante tomada de decisão é obrigatório.",
				dado_formafisica: "O campo forma física do dado é obrigatório.",
				auditoria: "O campo auditoria é obrigatório.",
				observacoes: "O campo observações é obrigatório."
			},

			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-valid');
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
				$(element).addClass('is-valid');
			},
			submitHandler: function(form) {
				$('#phoneMask').unmask();

				console.log(form.serialize());
				return;
				// form.submit();
			}

		});
	});
</script>
@endpush