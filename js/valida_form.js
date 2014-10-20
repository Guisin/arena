 $(document).ready(function(){	
        $("#form-contato").validate({
            rules:{
                nome:{
                    required: true, minlength: 2
                },
                email:{
                    required:true, email:true
                },
                telefone:{
                    minlength: 8
                },
                celular:{
                    minlength: 8
                },
                mensagem:{
                    required: true, minlengt: 2
                }
            },
            messages:{
                nome:{
                    required: "Digite o seu nome",
                    minlength: "O seu nome deve conter, no mínimo 2 caracteres"
                },
                email:{
                    required: "Digite seu e-mail",
                    email: "Digite um e-mail valido"
                },
                telefone:{
                    minlength: "Digite um telefone valido"
                },
                celular:{
                    minlength: "Digite um celular valido"
                },
                mensagem:{
                    required: "Digite sua duvida, sugestão ou solicitação.",
                    minlength: "O texto deve conter, no mínimo 2 caracteres"
                },
            },
        })
});