/* [ ---- Gebo Admin Panel - validation ---- ] */

	$(document).ready(function() {
		//* regular validation
		gebo_validation.reg();
	});
	
	//* validation
	gebo_validation = {
        reg: function() {
            reg_validator = $('#formCadastro').validate({
				onkeyup: false,
				errorClass: 'error',
				validClass: 'valid',
				highlight: function(element) {
					$(element).closest('div').addClass("f_error");
				},
				unhighlight: function(element) {
					$(element).closest('div').removeClass("f_error");
				},
                errorPlacement: function(error, element) {
                    //$(element).closest('div').append(error);
                },
                rules: {
					login: { required: true, minlength: 4 },
					pass_check: { required: true, minlength: 4 },
					razaSocial: { required: true, minlength: 4 },
					cnpj: { required: true, minlength: 18 },
					cep: { required: true, minlength: 9 },
					rua: { required: true, minlength: 4 },
					numero: { required: true, minlength: 4 },
					tel: { required: true, minlength: 13 },
					cel: { required: true, minlength: 4 },
					fax: { required: true, minlength: 13 },
					email: { required: true, minlength: 4 },
					contato: { required: true, minlength: 4 }
				},
                invalidHandler: function(form, validator) {
					$.sticky("Por favor preenchar todos os campos!", {autoclose : 8000, position: "top-right", type: "st-error" });
				}
            })
        }
	};