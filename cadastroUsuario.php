<?php
session_start();
require("Connections/conexao.php");
require("funcoes.php");
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
            //document.documentElement.className += 'js';
        </script>
    </head>
    <body>
       <?php include("header.php"); ?>	
            
            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
                    <nav>
                        <div id="jCrumbs" class="breadCrumb module">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-home"></i></a>
                                </li>
                                <li>
                                    Cadastro Usuário
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="row-fluid" >
                                <div class="span6">
									<form class="form-horizontal well" style="width:1000px;" id="formCadastro" action="cadastroUsuario.php" method="post">
										<fieldset>
											<p class="f_legend">Cadastro Usuário</p>
                                            
                                            
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            	<tr>
                                                	<td><span class="label label-inverse">Login</span><span class="f_req">*</span></td>
                                                    <td><input type="text" placeholder="Login" class="span8" id="login" name="login" /></td>
                                                    <td><span class="label label-inverse">Senha</span><span class="f_req">*</span></td>
                                                  <td><input type="password" placeholder="Senha" class="span8" id="pass_check" name="pass_check" /></td>
                                            </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>
                                                  <div id="pass_progress" class="progress progress-danger" style="width:60%">
                                                            <div class="bar" style="width: 0"></div>
                                                    </div>
                                                  </td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">Razão Social</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Razão Social" class="span8" id="razaSocial" name="razaSocial" /></td>
                                            	  <td><span class="label label-inverse">CNPJ</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="CNPJ" class="span8" id="cnpj" name="cnpj" onBlur="verificaCNPJ();" /></td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">CEP</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="CEP" class="span8" id="cep" name="cep" onblur="getEndereco()" /></td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">Rua</span><span class="f_req">*</span></td>
                                            	  <td>
                                            	    <input type="text" placeholder="Rua" class="span8" id="rua" name="rua" />
                                            	  </td>
                                            	  <td><span class="label label-inverse">Número</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Numero" class="span8" id="numero" name="numero" /></td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">Complemento</span></td>
                                            	  <td><input type="text" placeholder="Complemento" class="span8" id="complemento" name="complemento" /></td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">Estado</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Estado" class="span8" id="estado" name="estado" /></td>
                                            	  <td><span class="label label-inverse">Cidade</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Cidade" class="span8" id="cidade" name="cidade" /></td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                            	<tr>
                                            	  <td><span class="label label-inverse">Telefone</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Telefone" class="span8" id="tel" name="tel" /></td>
                                            	  <td><span class="label label-inverse">Celular</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Celular" class="span8" id="cel" name="cel" /></td>
                                          	  </tr>
                                            	<tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                              <tr>
                                            	  <td><span class="label label-inverse">Fax</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Fax" class="span8" id="fax" name="fax" /></td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                              <tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                              <tr>
                                            	  <td><span class="label label-inverse">E-mail</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="E-mail" class="span8" id="email" name="email" /></td>
                                            	  <td><span class="label label-inverse">Contato</span><span class="f_req">*</span></td>
                                            	  <td><input type="text" placeholder="Contato" class="span8" id="contato" name="contato" /></td>
                                          	  </tr>
                                              <tr>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                            	  <td>&nbsp;</td>
                                          	  </tr>
                                              <tr>
                                            	  <td colspan="4" align="right">
                                                  	<button class="btn" id="btnCadastrar" type="submit">Cadastrar</button>
                                                    <button class="btn" id="btnCadastrar" type="button" onClick="location = 'index.php'">Voltar</button>
                                                    </td>
                                           	  </tr>
                                           </table>                                            

                                            

										</fieldset>
									</form>
                                    
                                    
                                    
                                    
                                </div>
                                </div>

                        
                </div>
            </div>
            
            
            <?php include("menuEsquerdo.php"); ?>
            
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
                    setTimeout('$("html").removeClass("js")',1000);
                });
				
				function verificaCNPJ(){
					var cnpj = $("#cnpj").val();
					$.post("post.php",{
						cnpj:cnpj
					},
                  function(valor){
                     //$("select[name=subcategoria]").html(valor);
                  	 if(valor == 1) {
						$.sticky("CNPJ já consta em nosso banco de dados!", {autoclose : 8000, position: "top-right", type: "st-error" });
						$("#btnCadastrar").attr("disabled","disabled");
					 } else {
						$("#btnCadastrar").removeAttr("disabled"); 
					 }
				  }
                  )
				}
				
            </script>
        
        </div>
    </body>
</html>

<?php
require("Connections/conexao.php");
if($_POST) {
	$login			= strtoupper($_POST['login']);
	$senha			= strtoupper($_POST['pass_check']);
	$razaSocial		= strtoupper($_POST['razaSocial']);
	$cnpj			= strtoupper($_POST['cnpj']);
	$cep			= strtoupper($_POST['cep']);
	$rua			= strtoupper($_POST['rua']);
	$numero			= strtoupper($_POST['numero']);
	$complemento	= strtoupper($_POST['complemento']);
	$estado			= strtoupper($_POST['estado']);
	$cidade			= strtoupper($_POST['cidade']);
	$tel			= strtoupper($_POST['tel']);
	$cel			= strtoupper($_POST['cel']);
	$fax			= strtoupper($_POST['fax']);
	$email			= strtoupper($_POST['email']);
	$contato		= strtoupper($_POST['contato']);
	
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