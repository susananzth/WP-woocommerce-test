<?php
    $use = $_GET["txt-usuario"];
    $name = $_GET["txt-name"];
    try{//Intenta conectar con la DB
        //Construimos un objeto utilizando PDO para colocar los datos de conexión
        $connection = new PDO("mysql:hots=localhost; dbname=wp-store", "root", "");
        //Nos aseguramos de que no haya error al conectar con la base de datos.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Asignamos el tipo de codificación.
        $connection->exec("SET CHARACTER SET utf8");
        //Guardamos la sentencia sql en una varible.
        $sql = "select * from snzth_users where user_login = :user";
        //Creamos una variable para guardar el PFO statement.
        $result = $connection->prepare($sql);
        //Aquí le pasamos el parámetro para el sql.
        $result->execute(array(":user"=>$use));
        //Aquí recorrerá cada registro de la tabla (statement).
        while ($register = $result->fetch(PDO::FETCH_ASSOC)){
            echo "ID de Usuario: " . $register['ID'] . " -  Usuario: " . $register['user_login'] . " -  Correo: " . $register['user_email'] . ".";
        }
        //Aqui cerramos el statement para que no se quede consumiend memoria.
        $result->closeCursor();
        echo "Conexión OK";
    }    catch (Exception $e){ //Si no logra conectarse entonces hará lo siguiente:
        //Mata el proceso y guarda el mensaje de error.
        die("Error" . $e->GetMessage());
    }   finally{
        //luego de que intente y ya sea que pueda o no, finalizara el proceso.
        $connection = null;
    }
?>