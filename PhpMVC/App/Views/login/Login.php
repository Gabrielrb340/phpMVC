<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo HOME;?>/public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo HOME;?>/public/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo HOME;?>/public/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo HOME;?>/public/css/style.css">

        <!-- Paradinha identificar -->
        <link rel="shortcut icon" href="<?php echo HOME;?>/public/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo HOME;?>/public/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo HOME;?>/public/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo HOME;?>/public/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                            <div class="description">
                            	<p>

                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
 								<img src="<?php echo HOME;?>/public/img/backgrounds/8.png" class="form-top" align="center"style="padding-left: 50px">
              
                            
                            </div>
                           
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Usuário</label>
			                        	<input type="text" name="form-username" placeholder="Usuário..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Senha</label>
			                        	<input type="password" name="form-password" placeholder="Senha..." class="form-password form-control" id="form-password">
			                        </div>
                                    <button type="submit" class="btn">ENTRAR</button>
                                
                                    <div class="col-6" style="padding-left: 195px">
                                        <input class="btn btn-light" name="Criar conta" type="button" onClick="window.open('http://localhost/Npalunos2/cadastro-view/telacadastroprof.php')" value="Criar conta">

			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">              
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo HOME;?>/public/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo HOME;?>/public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo HOME;?>/public/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo HOME;?>/public/js/scripts.js"></script>


    </body>

</html>