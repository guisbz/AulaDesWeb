<?php
        $host = "localhost";
        $user = "id20354515_guilherme";
        $pass = "vG!y^L89Z1IBXFH1";
        $dbname = "id20354515_guibanco";
        $connection = mysqli_connect($host, $user, $pass, $dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
        //mysqli_select_db($connection,$dbname);
    
        $query = "INSERT INTO `cliente`(`nome`,`email`,`profissao`,`cep`,`telefone`, `cpf`) VALUES ('".$nome."' , '".$email."','".$profissao."','".$cep."','".$telefone."','".$cpf."')";
    
        echo $query;
        mysqli_query ($connection, $query) or die ('Erro ao salvar');
    
        echo " SALVO - Nome: ".$name." | CPF; ".$cpf." | ";
?>