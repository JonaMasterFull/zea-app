<?php 
        //Conectamos    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tmproyecto";
    
    $conectar= mysqli_connect($servername, $username, $password,$dbname);

    if(!$conectar){
        echo "No se puede Conectar a la base de Datos";
    }else{
        
        $base = mysqli_select_db($conectar, $dbname);
        
        if(!$base){
            echo "No se encontro la base de datos";
        }else{
       
        }
   
    }
//Variables
    $Id=$_POST['id'];
    $Nombres=$_POST['nombre'];
    $APaternos=$_POST['Apaterno'];
    $AMaternos=$_POST['Amaterno'];
    $Emails=$_POST['email'];
    $Mensajes=$_POST['mensaje'];

    //Realizamos la Sentencia de SQL
    $sql = "INSERT INTO contacto VALUES ('$Id','$Nombres', '$APaternos', '$AMaternos', '$Emails', '$Mensajes')";

    //Ejecutamos la setencia SQL
    
    $ejecutar = mysqli_query($conectar,$sql);

    if(!$ejecutar){
        echo "error";
    }else{
        header("Location: http://localhost/Zea/formulario.html");
        echo "<script>alert('Enviado');</script>";
    }
?>