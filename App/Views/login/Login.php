<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link type="text/css" rel="stylesheet" href="<?php echo APP_HOST;?>/App/Views/login/Login.css" >
        <!-- Paradinha identificar -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
         
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
 
                                <div class="form-top-left">
                                    <img src="assets/img/backgrounds/8.png" class="form-top" style="padding-left: 195px;">
              
                                </div>
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
                                        <input class="btn btn-light" name="Criar conta" type="button" onclick="window.open('http://localhost/Npalunos2/cadastro-view/telacadastroprof.php')" value="Criar conta">

			                    
		                    </div></form>
                        </div>
                    </div>
                    <div class="row"></div>
                  
                        </div>
                    </div>
                </div>
            </div>
            
        


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    

<div class="backstretch background"  ><img src="<?php echo APP_HOST;?>/public/Icons/definitivebackground.jpg" alt=""></div></body>
</html>