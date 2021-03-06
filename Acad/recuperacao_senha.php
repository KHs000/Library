<?php 

    // dados recebidos pela URL
    $recup = "";
    $negado = 0;
    if ( isset($_GET['negado']) ) {
      $negado = $_GET['negado'];
    }
    if ( isset($_GET['recup']) ) {
      $recup = $_GET['recup'];
    }    
    //
    // Imprime página
    //
	echo "<!DOCTYPE html>
	<html>
	<head>

	  <meta http-equiv='content-type' content='text/html' />
	  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	  <link rel='stylesheet' href='../visual2.css'/>
    <link rel='stylesheet' href='acad.css' />
	  <link rel='stylesheet' href='recuperacao_senha.css' />
	  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	  <title>Sistema Acadêmico</title>  

	  <script type='text/javascript'>
	  
	  function verificaResultado() {
	    var negado = ".$negado.";
	    var recup = '".$recup."';
	    if (negado == 1) {  
	      document.getElementById('info').innerHTML = 'Acesso negado.<br>Matrícula e/ou e-mail incorreto(s).';
	      document.getElementById('info').style.color = 'red';
	    }

	    if (recup == 'ok') {
	      document.getElementById('info').innerHTML = 'Recuperação realizada com sucesso!<br>Verifque seu e-mail.';
	      document.getElementById('info').style.color = 'green';	
	    }
	  }

	  </script>

	</head>

	<body onload='verificaResultado()'>

	    <div id='header'>   <!-- Cabeçalho -->        
	         <a href='login.php'><img alt='Sistema Acadêmico' src='http://i.imgur.com/lp5bycZ.png'/><span id='title'>SISTEMA ACADÊMICO</span></a>
	    </div>              <!--Fim do Cabeçalho -->
	    
	    <div id='container'> <!-- O conteudo da página -->
	        <div id='content'>
	        <div id='blank'></div> 
	        <h1>Recuperar Senha</h1>
	        
	        <form action='recupera.php' method='post' enctype='multipart/form-data'>
	          <div class='recup'>
              	  <div>
          			<span class='info' id='info'> </span>
        		  </div>	             

	              <div>
	                <span id='txt_usuario' class='texto_campo'>Matrícula</span>
	                <br>
	                <input type='text' class='campo' id='campo_usuario' name='usuario' autofocus required />
	              </div>
	              
	              <div>
	                <span id='txt_email' class='texto_campo'>E-mail</span>
	                <br>
	                <input type='text' class='campo' id='campo_email' name='email' required />
	              </div>
	              
		          <div class='botoes'>
		            <input type='submit' value='Recuperar' class='button' />
		          </div>
              
              <div class='redirdiv'>
                <!-- link para página de login do sistema acadêmico -->
                <a href='login.php' class='redir'>Voltar</a>
              </div>
	          
            </div>
	        </form>
	        </div>
	        <div class='footer'>  
	           <div id='center'>
	                <span>© 2015 On Est Or Softwares</span>
	           </div>        
	        </div>
	    </div>  <!-- Fim do conteudo da página -->

	</body>
	</html>";

?>