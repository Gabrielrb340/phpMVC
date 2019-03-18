<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="<?php echo HOME;?>/public/css/main.css" rel="stylesheet" type="text/css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>
</head>

<body >
	<div class="container vertical-center col-7 " >

		<div class="card centerx1 border-primary ">

			<img src="<?php echo HOME; ?>\public\Icons\imgcad.png" class="card-top" style="max-height: 300px; max-width: 300px;">
			<form>
				<div class="form-group">
					<input type="Usuário" class="form-control " id="" placeholder="Usuário" required="">
				</div>
				<div class="form-group">
					<input type="password" id="inputPassword" class="form-control" placeholder="validacao()" required="">
				</div>
				<div class="form-group">
					<div class="col-6">
						<button type="btn" class="btn btn-primary">Entrar</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-6" style="padding-left: 10px">
					<a <?php if($viewVar['nameController'] == "CadastroController") { ?> class="active" <?php  } ?> target="_blank" href="http://<?php echo APP_HOST; ?>/Cadastro/index" >Criar conta</a>

						
					</div>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>


