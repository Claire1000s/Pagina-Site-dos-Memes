<?php
    if(isset($_POST['email']) && !empty($_POST['email']))
    {
	if(isset($_POST['senha']) && !empty($_POST['senha']))
	{
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cripto64 = base64_encode($senha);
            $descripto = base64_decode($cripto64);
            $criptoMd = md5($senha);
            
            echo "<h1>Formulario validado com sucesso!</h1>";
            echo "E-mail: " . $email . "<br />";
            echo "Senha criptografada Base64: " . $cripto64 . "<br />";
            echo "Senha descriptografada: " . $descripto . "<br />";
            echo "Senha cripto MD5: " . $criptoMd;
	}
    }

