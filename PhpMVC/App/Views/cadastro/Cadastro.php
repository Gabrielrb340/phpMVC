
      <html>
      <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo HOME;?>/public/css/main.css" rel="stylesheet" type="text/css">
        <link href="<?php echo HOME;?>App/Views/cadastro/Cadastro.css" rel="stylesheet">
        <script src="<?php echo HOME; ?>/public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
          <script src="<?php echo HOME; ?>/public/js/jquery.validate.min.js"type="text/javascript"></script>
        <script src="<?php echo HOME;?>/public/js/validacao.js" type="text/javascript"></script>


        <script type="text/javascript">
      function ValidarIgualdadeForm() {
          var result =document.createElement('res')
          var campoI = document.getElementById('pass');
          var campoII = document.getElementById('cpass');
          while(campoI!=campoII){
              console.log('fpp')
              campoI = document.getElementById('pass');
              campoII = document.getElementById('cpass');
              document.getElementById('demo').innerHTML = 'Senhas diferentes. Digite novamente!';
              document.getElementById('demo').style.color='red';
            //    alert('senhas diferentes');
              return false
          }    while(campoI===campoII){

              console.log('bar')
              document.getElementById('demo').innerHTML = 'Senhas Iguais!';
              document.getElementById('demo').style.color='green';
          return true;
          }
      }
      $(document).ready(function(){
          $("#cpass").keyup(function(){
            var valido =false;

                  if ($("#pass").val() != $("#cpass").val()) {
              $("#messagem").html("*Senhas Diferentes").css("color","red");
              $("button[type=submit]").attr("disabled", "disabled");
              
                  }else{
              $("#messagem").html("Senhas Validas").css("color","green");
              $("button[type=submit]").removeAttr("disabled");
                  }
            });
        });

        
          function limitarInput(cpf) {
        cpf.value = cpf.value.substring(0,11); //Aqui eu pego o valor e só deixo o os 11 primeiros caracteres de valor no input
        }
        function limitarInput(tel) {
          tel.value = tel.value.substring(0,11);

        }

    
      
        </script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>cadastro</title>
      </head>

        
      <body>
        <div class="container vertical-center col-12 " >

          <div class="card centerx1 border-primary ">
                                
            <img src="<?php echo HOME; ?>\public\Icons\imgcad.png" class="card-top" style="max-height: 300px; max-width: 300px;">
            <form >
          <div class="form-group col-md-12">
            
            <input type="text" class="form-control" id="nome" placeholder="Nome de usuario">
            </div>
            <div class="form-group col-md-12">

            <div class="form-group col-md-14">
            <input type="number" class="form-control "  id="CPF" placeholder="CPF " onkeyup="limitarInput(this)" >
            </div>

            <div class="form-group col-md-14">
            <input type="number"class="form-control" id="tel" name="tel" placeholder="Telefone" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" onkeyup="limitarInput(this)">
            </div>
            

          <div class="form-group col-md-14">
            <select class="form-control" id="setor">
              <option value="teste">teste</option>
              <option value="fazer"> tabela setor</option>
            </select>
          </div>
            
            <input type="email" class="form-control" id="email" placeholder="Email">
             </div>
          <div class="form-group col-md-12">
          
            <input type="password" class="form-control" id="pass" placeholder="Senha" onkeyup=" return ValidarIgualdadeForm()">
          <div id="messagem"></div>

          </div>
          <div class="form-group col-md-12">
          
            <input type="password" class="form-control" id="cpass" placeholder="Digite sua senha novamente">
          <p><span class="emsg hidden">Senhas Divergentes</span></p>

          </div>
          <div class="form-group">
          
        </div>
        <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>	
      </form>
          </div>
        </div>


      </body>
      </html>