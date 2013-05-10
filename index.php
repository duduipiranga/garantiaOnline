<?php
session_start();
$_SESSION['logado'] = 0;
?>
<!DOCTYPE html>
<html lang="en" class="login_page">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Garantia Online</title>
    
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
        <!-- theme color-->
            <link rel="stylesheet" href="css/blue.css" />
        <!-- tooltip -->    
            <link rel="stylesheet" href="lib/qtip2/jquery.qtip.min.css" />
        <!-- main styles -->
            <link rel="stylesheet" href="css/style.css" />
    	<!-- enhanced select -->
            <link rel="stylesheet" href="lib/chosen/chosen.css" />
        <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico" />
    	<!-- notifications -->
            <link rel="stylesheet" href="lib/sticky/sticky.css" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
        <!--[if lte IE 8]>
            <script src="js/ie/html5.js"></script>
            <script src="js/ie/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="login_box">
            
            <form method="post" id="login_form" onSubmit="return Logar();">
                <div class="top_b">Bem Vindo aos Sistema Garantia Online</div>    
                <div class="alert alert-info alert-login">
                    Insera seus dados nos campos abaixo para logar no sistema de Garantia Online
                </div>
                <div class="cnt_b">
                    <div class="formRow">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" id="username" name="username" placeholder="Usuário"  />
                        </div>
                    </div>
                    <div class="formRow">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Senha"  />
                        </div>
                    </div>

                </div>
                <div class="btm_b clearfix">
                    <button class="btn btn-inverse pull-right" type="submit">Entrar</button>
                   <a href="cadastroUsuario.php">Cadastra-se</a>
                </div>  
            </form>
            
            <form action="dashboard.html" method="post" id="pass_form" style="display:none">
                <div class="top_b">Esqueceu a Senha?</div>    
                    <div class="alert alert-info alert-login">
                    Por favor entre com seu e-mail. Você receberá sua senha via e-mail.
                </div>
                <div class="cnt_b">
                    <div class="formRow clearfix">
                        <div class="input-prepend">
                            <span class="add-on">@</span><input type="text" placeholder="Seu endereço de e-mail" />
                        </div>
                    </div>
                </div>
                <div class="btm_b tac">
                    <button class="btn btn-inverse" type="submit">Resgatar minha senha</button>
                </div>  
            </form>
            
            
            
            <div class="links_b links_btm clearfix">
                <span class="linkform"><a href="#pass_form">Esqueceu a Senha?</a></span>
                <span class="linkform" style="display:none"><a href="#login_form">Voltar</a></span>
            </div>
        </div>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="lib/validation/jquery.validate.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- masked inputs -->
            <script src="js/forms/jquery.inputmask.min.js"></script>
        <!-- enhanced select (chosen) -->
            <script src="lib/chosen/chosen.jquery.min.js"></script>
        <!-- sticky messages -->
            <script src="lib/sticky/sticky.min.js"></script>
            
        <script type="text/javascript">
		function Logar(){
	//alert("aa");
	var email = $("#username").val();
	var senha = $("#password").val();
	$.post("env_login.php",
	{email: email,
	  senha: senha},
	    function(retorno){
			//alert(retorno);
			if(retorno == 1){
				$.sticky("Usuário ou Senha Incorreto!", {autoclose : 4000, position: "top-right", type: "st-error" });
			} else {
					if(retorno == 0){
						document.location = "principal.php";
						//alert(33);
					}
			}
        } 
        );
	return false;	
}
		</script>
        
        <script>
            $(document).ready(function(){
                //* boxes animation
                form_wrapper = $('.login_box');
                function boxHeight() {
                    form_wrapper.animate({ marginTop : ( - ( form_wrapper.height() / 2) - 24) },400);   
                };
                form_wrapper.css({ marginTop : ( - ( form_wrapper.height() / 2) - 24) });
                $('.linkform a,.link_reg a').on('click',function(e){
                    var target  = $(this).attr('href'),
                        target_height = $(target).actual('height');
                    $(form_wrapper).css({
                        'height'        : form_wrapper.height()
                    }); 
                    $(form_wrapper.find('form:visible')).fadeOut(400,function(){
                        form_wrapper.stop().animate({
                            height   : target_height,
                            marginTop: ( - (target_height/2) - 24)
                        },500,function(){
                            $(target).fadeIn(400);
                            $('.links_btm .linkform').toggle();
                            $(form_wrapper).css({
                                'height'        : ''
                            }); 
                        });
                    });
                    e.preventDefault();
                });
                
                //* validation
                $('#login_form').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    validClass: 'valid',
                    rules: {
                        username: { required: true, minlength: 3 },
                        password: { required: true, minlength: 3 }
                    },
                    highlight: function(element) {
                        $(element).closest('div').addClass("f_error");
                        setTimeout(function() {
                            boxHeight()
                        }, 200)
                    },
                    unhighlight: function(element) {
                        $(element).closest('div').removeClass("f_error");
                        setTimeout(function() {
                            boxHeight()
                        }, 200)
                    },
                    errorPlacement: function(error, element) {
                        $(element).closest('div').append(error);
                    }
                });
            });
        </script>
    </body>
</html>
