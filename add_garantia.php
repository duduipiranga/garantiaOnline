<?php
session_start();
require ("Connections/conexao.php");
require ("seguranca.php");
require ("funcoes.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Garantia Online</title>

		<!-- Bootstrap framework -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
		<!-- jQuery UI theme-->
		<link rel="stylesheet" href="lib/jquery-ui/css/Aristo/Aristo.css" />
		<!-- breadcrumbs-->
		<link rel="stylesheet" href="lib/jBreadcrumbs/css/BreadCrumb.css" />
		<!-- tooltips-->
		<link rel="stylesheet" href="lib/qtip2/jquery.qtip.min.css" />
		<!-- notifications -->
		<link rel="stylesheet" href="lib/sticky/sticky.css" />
		<!-- code prettify -->
		<link rel="stylesheet" href="lib/google-code-prettify/prettify.css" />
		<!-- notifications -->
		<link rel="stylesheet" href="lib/sticky/sticky.css" />
		<!-- splashy icons -->
		<link rel="stylesheet" href="img/splashy/splashy.css" />
		<!-- datepicker -->
		<link rel="stylesheet" href="lib/datepicker/datepicker.css" />
		<!-- tag handler -->
		<link rel="stylesheet" href="lib/tag_handler/css/jquery.taghandler.css" />
		<!-- nice form elements -->
		<link rel="stylesheet" href="lib/uniform/Aristo/uniform.aristo.css" />
		<!-- multiselect -->
		<link rel="stylesheet" href="lib/multi-select/css/multi-select.css" />
		<!-- enhanced select -->
		<link rel="stylesheet" href="lib/chosen/chosen.css" />
		<!-- upload -->
		<link rel="stylesheet" href="lib/plupload/js/jquery.plupload.queue/css/plupload-gebo.css" />
		<!-- colorbox -->
		<link rel="stylesheet" href="lib/colorbox/colorbox.css" />
		<!-- colorpicker -->
		<link rel="stylesheet" href="lib/colorpicker/css/colorpicker.css" />
		<!-- toggle buttons -->
		<link rel="stylesheet" href="lib/toggle_buttons/bootstrap-toggle-buttons.css" />
		<!-- smoke_js -->
		<link rel="stylesheet" href="lib/smoke/themes/gebo.css" />
		<!-- gebo color theme-->
		<link rel="stylesheet" href="css/blue.css" id="link_theme" />
		<!-- main styles -->
		<link rel="stylesheet" href="css/style.css" />

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/ie.css" />
		<script src="js/ie/html5.js"></script>
		<script src="js/ie/respond.min.js"></script>
		<script src="lib/flot/excanvas.min.js"></script>
		<![endif]-->

		<script>
			//* hide all elements & show preloader
			document.documentElement.className += 'js';
		</script>

	</head>
	<body>
		<?php
		include ("header.php");
		?>

		<!-- main content -->
		<div id="contentwrapper">
			<div class="main_content">
				<p class="f_legend">
					Cadastro de Garantia
				</p>
				<nav>
					<div id="jCrumbs" class="breadCrumb module">
						<ul>
							<li>
								<a href="#"><i class="icon-home"></i></a>
							</li>
							<li>
								<a href="principal.php">Principal</a>
							</li>

							<li>
								Cadastro Garantia
							</li>
						</ul>
					</div>
				</nav>

				<div class="row-fluid" >
					<div class="span6">
						<form class="form-horizontal well" style="width:1000px;" id="formCadastro" action="cadastroUsuario.php" method="post">
							<fieldset>
								<p class="f_legend">
									Dados do DA/CSA
								</p>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td height="27"><span class="label label-inverse">Nome</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Telefone</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Celular</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Nome" class="span8" id="nomeDa" name="nomeDa" />
										</td>
										<td>
										<input type="text" placeholder="Telefone" class="span8" id="telefoneDa" name="telefoneDa" />
										</td>
										<td>
										<input type="text" placeholder="Celular" class="span8" id="celularDa" name="celularDa" />
										</td>
									</tr>
									<tr>
										<td height="40"><span class="label label-inverse">CEP</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Endereço</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Cidade</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Estado</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td>
										<input type="text" placeholder="CEP" class="span8" id="cepDa" name="cep" />
										</td>
										<td>
										<input type="text" placeholder="Endereço" class="span8" id="enderecoDa" name="enderecoDa" />
										</td>
										<td>
										<input type="text" placeholder="Cidade" class="span8" id="cidadeDa" name="cidadeDa" />
										</td>
										<td>
										<input type="text" placeholder="Estado" class="span8" id="estadoDa" name="estadoDa" />
										</td>
									</tr>
									<tr>
										<td height="40"><span class="label label-inverse">Nome do Técnico</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">E-mail</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Data do Atendimento</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Fax</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td>
										<input type="text" placeholder="CEP" class="span8" id="cepDa" name="cepDa" />
										</td>
										<td>
										<input type="text" placeholder="Endereço" class="span8" id="enderecoDa" name="enderecoDa" />
										</td>
										<td>
										<input type="text" placeholder="Cidade" class="span8" id="cidadeDa" name="cidadeDa" />
										</td>
										<td>
										<input type="text" placeholder="Estado" class="span8" id="estadoDa" name="estadoDa" />
										</td>
									</tr>
								</table>
								<br />
								<p class="f_legend">
									Dados do Cliente
								</p>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td height="27"><span class="label label-inverse">Nome</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Telefone</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Celular</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Nome" class="span8" id="nomeCli" name="nomeCli" />
										</td>
										<td>
										<input type="text" placeholder="Telefone" class="span8" id="telefoneCli" name="telefoneCli" />
										</td>
										<td>
										<input type="text" placeholder="Celular" class="span8" id="celularCli" name="celularCli" />
										</td>
									</tr>
									<tr>
										<td height="40"><span class="label label-inverse">CEP</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Endereço</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Cidade</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Estado</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td>
										<input type="text" placeholder="CEP" class="span8" id="cepCli" name="cepCli" />
										</td>
										<td>
										<input type="text" placeholder="Endereço" class="span8" id="enderecoCli" name="enderecoCli" />
										</td>
										<td>
										<input type="text" placeholder="Cidade" class="span8" id="cidadeCli" name="cidadeCli" />
										</td>
										<td>
										<input type="text" placeholder="Estado" class="span8" id="estadoCli" name="estadoCli" />
										</td>
									</tr>
								</table>
								<br />
								<p class="f_legend">
									Dados do Veiculos
								</p>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td height="27"><span class="label label-inverse">Marca</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Modelo Veiculo</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Ano</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Marca" class="span8" id="marcaVei" name="marcaVei" />
										</td>
										<td>
										<input type="text" placeholder="Modelo Veiculo" class="span8" id="modeloVei" name="modeloVei" />
										</td>
										<td>
										<input type="text" placeholder="Ano" class="span8" id="anoVei" name="anoVei" />
										</td>
									</tr>
									<tr>
										<td height="27"><span class="label label-inverse">Chassi</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Motor do Veiculo</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Nº Motor</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Chassi" class="span8" id="chassiVei" name="chassiVei" />
										</td>
										<td>
										<input type="text" placeholder="Motor do Veiculo" class="span8" id="motorVei" name="motorVei" />
										</td>
										<td>
										<input type="text" placeholder="Nº Motor" class="span8" id="numeroMotorVei" name="numeroMotorVei" />
										</td>
									</tr>
									<tr>
										<td height="27"><span class="label label-inverse">Data da Instalação</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Instalação KM/H</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Atual KM/H</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Data da Instalação" class="span8" id="dtInstalacaoVei" name="dtInstalacaoVei" />
										</td>
										<td>
										<input type="text" placeholder="Instalação KM/H" class="span8" id="instalacaoVei" name="instalacaoVei" />
										</td>
										<td>
										<input type="text" placeholder="Atual KM/H" class="span8" id="atualVei" name="atualVei" />
										</td>
									</tr>
									<tr>
										<td height="27"><span class="label label-inverse">Nª NF</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Posto da Venda DA/CSA</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Telefone:</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="Nª NF" class="span8" id="nNfVei" name="nNfVei" />
										</td>
										<td>
										<input type="text" placeholder="Posto da Venda DA/CSA" class="span8" id="postoVendaVei" name="postoVendaVei" />
										</td>
										<td>
										<input type="text" placeholder="Telefone:" class="span8" id="telPostoVei" name="telPostoVei" />
										</td>
									</tr>
									<tr>
										<td height="40"><span class="label label-inverse">CEP</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Endereço</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Cidade</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Estado</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td>
										<input type="text" placeholder="CEP" class="span8" id="cepVei" name="cepVei" />
										</td>
										<td>
										<input type="text" placeholder="Endereço" class="span8" id="enderecoVei" name="enderecoVei" />
										</td>
										<td>
										<input type="text" placeholder="Cidade" class="span8" id="cidadeVei" name="cidadeVei" />
										</td>
										<td>
										<input type="text" placeholder="Estado" class="span8" id="estadoVei" name="estadoVei" />
										</td>
									</tr>
								</table>
								<br />
								<p class="f_legend">
									Dados do Produto
								</p>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td height="27"><span class="label label-inverse">N/P</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Modelo</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Nº de Serie</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td height="40">
										<input type="text" placeholder="N/P" class="span8" id="nomeCli" name="nomeCli" />
										</td>
										<td>
										<input type="text" placeholder="Modelo" class="span8" id="telefoneCli" name="telefoneCli" />
										</td>
										<td>
										<input type="text" placeholder="Nº de Serie" class="span8" id="celularCli" name="celularCli" />
										</td>
									</tr>
									<tr>
										<td height="40"><span class="label label-inverse">Instalação Assegurada?</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Nº Selo</span><span class="f_req">*</span></td>
										<td><span class="label label-inverse">Reclamação do Cliente</span><span class="f_req">*</span></td>
									</tr>
									<tr>
										<td>
										<input type="text" placeholder="CEP" class="span8" id="cepCli" name="cepCli" />
										</td>
										<td>
										<input type="text" placeholder="Endereço" class="span8" id="enderecoCli" name="enderecoCli" />
										</td>
										<td>
										<input type="text" placeholder="Cidade" class="span8" id="cidadeCli" name="cidadeCli" />
										</td>
									</tr>
									<tr>
										<td height="40" colspan="3"><span class="label label-inverse">Observação</span></td>
									</tr>
									<tr>
										<td colspan="3"><textarea id="obsProd" name="obsProd" style="width: 90%"></textarea></td>
									</tr>
									<tr>
                                            	  <td height="40" colspan="4" align="right">
                                                  	<button class="btn" id="btnCadastrar" type="submit">Cadastrar</button>
                                                    </td>
                                           	  </tr>
								</table>
								<br />
								<div class="alert alert-info">
									<a class="close" data-dismiss="alert">×</a>
									<ol type="a">
										<li>
											Todos os dados solicitados nesse documento e os dados da lista de verificação, que compõe esse formulário são obrigatórios e devem ser atendidos antes da retirada do turbo do veículo, pois é de grande importância para a análise da falha, portanto nenhum campo deve ficar sem o preenchimento.
										</li>
										<li>
											Devem ser anexados: Certificado de Garantia devidamente preenchido, cópia da Nota Fiscal de venda para o turbo – 5000 e cópia da Nota Fiscal de venda  do veículo, para o turbo – 0000.
										</li>
										<li>
											O descumprimento dos itens a e b pelos Distribuidores e Centros de Serviço(DA / CSA); implicará na sua responsabilidade pelos custo do produto perante ao cliente, pois a Garrett não validará o laudo por falta da informação.
										</li>
									</ol>
								</div>
								
							</fieldset>
						</form>

					</div>
				</div>

			</div>
		</div>

		<?php
		include ("menuEsquerdo.php");
		?>

		<script src="js/jquery.min.js"></script>
		<script src="js/cepUser.js"></script>
		<script src="js/jquery-migrate.min.js"></script>
		<script src="lib/jquery-ui/jquery-ui-1.10.0.custom.min.js"></script>
		<!-- smart resize event -->
		<script src="js/jquery.debouncedresize.min.js"></script>
		<!-- hidden elements width/height -->
		<script src="js/jquery.actual.min.js"></script>
		<!-- js cookie plugin -->
		<script src="js/jquery_cookie.min.js"></script>
		<!-- main bootstrap js -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- bootstrap plugins -->
		<script src="js/bootstrap.plugins.min.js"></script>
		<!-- tooltips -->
		<script src="lib/qtip2/jquery.qtip.min.js"></script>
		<!-- jBreadcrumbs -->
		<script src="lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
		<!-- sticky messages -->
		<script src="lib/sticky/sticky.min.js"></script>
		<!-- fix for ios orientation change -->
		<script src="js/ios-orientationchange-fix.js"></script>
		<!-- scrollbar -->
		<script src="lib/antiscroll/antiscroll.js"></script>
		<script src="lib/antiscroll/jquery-mousewheel.js"></script>
		<!-- lightbox -->
		<script src="lib/colorbox/jquery.colorbox.min.js"></script>
		<!-- mobile nav -->
		<script src="js/selectNav.js"></script>
		<!-- common functions -->
		<script src="js/gebo_common.js"></script>
		<!-- autosize textareas -->
		<script src="js/forms/jquery.autosize.min.js"></script>

		<!-- globalize for jQuery UI-->
		<script src="lib/jquery-ui/external/globalize.js"></script>
		<!-- touch events for jquery ui-->
		<script src="js/forms/jquery.ui.touch-punch.min.js"></script>
		<!-- masked inputs -->
		<script src="js/forms/jquery.inputmask.min.js"></script>
		<!-- autosize textareas -->
		<script src="js/forms/jquery.autosize.min.js"></script>
		<!-- textarea limiter/counter -->
		<script src="js/forms/jquery.counter.min.js"></script>
		<!-- datepicker -->
		<script src="lib/datepicker/bootstrap-datepicker.min.js"></script>
		<!-- timepicker -->
		<script src="lib/datepicker/bootstrap-timepicker.min.js"></script>
		<!-- tag handler -->
		<script src="lib/tag_handler/jquery.taghandler.min.js"></script>
		<!-- styled form elements -->
		<script src="lib/uniform/jquery.uniform.min.js"></script>
		<!-- animated progressbars -->
		<script src="js/forms/jquery.progressbar.anim.js"></script>
		<!-- multiselect -->
		<script src="lib/multi-select/js/jquery.multi-select.js"></script>
		<script src="lib/multi-select/js/jquery.quicksearch.js"></script>
		<!-- enhanced select (chosen) -->
		<script src="lib/chosen/chosen.jquery.min.js"></script>
		<!-- TinyMce WYSIWG editor -->
		<script src="lib/tiny_mce/jquery.tinymce.js"></script>
		<!-- plupload and all it's runtimes and the jQuery queue widget (attachments) -->
		<script type="text/javascript" src="lib/plupload/js/plupload.full.js"></script>
		<script type="text/javascript" src="lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js"></script>
		<!-- colorpicker -->
		<script src="lib/colorpicker/bootstrap-colorpicker.js"></script>
		<!-- password strength checker -->
		<script src="lib/complexify/jquery.complexify.min.js"></script>
		<!-- toggle buttons -->
		<script src="lib/toggle_buttons/jquery.toggle.buttons.js"></script>
		<!-- validation -->
		<script src="lib/validation/jquery.validate.min.js"></script>
		<!-- validation functions -->
		<script src="js/gebo_validation.js"></script>
		<!-- smoke_js -->
		<script src="lib/smoke/smoke.js"></script>
		<!-- form functions -->
		<script src="js/gebo_forms.js"></script>

		<script>
			$(document).ready(function() {
				//* show all elements & remove preloader
				setTimeout('$("html").removeClass("js")', 1000);
				gebo_auto_expand.init();
			});
						//* textarea autosize
			gebo_auto_expand = {
				init : function() {
					$('#obsProd').autosize();
				}
			};
		</script>

		</div>
	</body>
</html>

<?php
if ($_POST) {
	$login = strtoupper($_POST['login']);
	$senha = strtoupper($_POST['pass_check']);
	$razaSocial = strtoupper($_POST['razaSocial']);
	$cnpj = strtoupper($_POST['cnpj']);
	$cep = strtoupper($_POST['cep']);
	$rua = strtoupper($_POST['rua']);
	$numero = strtoupper($_POST['numero']);
	$complemento = strtoupper($_POST['complemento']);
	$estado = strtoupper($_POST['estado']);
	$cidade = strtoupper($_POST['cidade']);
	$tel = strtoupper($_POST['tel']);
	$cel = strtoupper($_POST['cel']);
	$fax = strtoupper($_POST['fax']);
	$email = strtoupper($_POST['email']);
	$contato = strtoupper($_POST['contato']);

	$sql = "INSERT INTO user (id,login,senha,razao_social,endereco,numero,complemento,cep,estado,cidade,cnpj,telefone,cel,fax,email,contato) VALUES
(NULL,'$login','$senha','$razaSocial','$rua','$numero','$complemento','$cep','$estado','$cidade','$cnpj','$tel','$cel','$fax','$email','$contato')";
	$query = mysql_query($sql) or die(mysql_error());

	$url = 'index.php';
	echo "<script type='text/javascript'>
smoke.signal('Usuario Cadastrado com Sucesso!');
//e.preventDefault();
setTimeout(\"document.location = 'index.php'\",5000);
</script>";
}
?>