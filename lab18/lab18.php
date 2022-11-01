<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 18</title>
</head>

<body>
    <h1>Registrar Nuevo Usuario</h1>
    <br>
    <?php
    if (array_key_exists("registrar", $_POST)) {
        function verificar_email($email)
        {
            if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
                return true;
            }
            return false;
        }

        function verificar_password_strenght($password)
        {
            if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password))
                echo "Su password es seguro.";
            else
                echo "Su password no es seguro.";
        }

        function verificar_ip($ip)
        {
            return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
                "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip);
        }
        if(verificar_email($_POST["email"]) && verificar_ip($_POST["ip"]))
        {
            print("<form action='lab18.php' method='post'>");
            print("<label for='nombre'>Nombre:</label>");
            print("<input type='text' name='nombre' id='' required><br><br>");
            print("<label for='apellido'>Apellido:</label>");
            print("<input type='text' name='apellido' id='' required><br><br>");
            print("<label for='email'>Email:</label>");
            print("<input type='email' name='email' id='' required><br><br>");
            print("<label for='contrasena'>Contraseña:</label>");
            print("<input type='password' name='password' id='' required><br><br>");
            print("<label for='repetirContrasena'>Repetir Contraseña:</label>");
            print("<input type='password' name='repetirContrasena' id='' required><br><br>");
            print("<label for='ip'>IP actual del equipo:</label>");
            print("<input type='text' name='ip' id='' required><br><br>");
            print("<input type='submit' value='Registrar Usuario' name='registrar'>");
            print("</form>");

            print("Usuario registrado exitosamente!"); 
        }else{
            print("<form action='lab18.php' method='post'>");
            print("<label for='nombre'>Nombre:</label>");
            print("<input type='text' name='nombre' id='' required><br><br>");
            print("<label for='apellido'>Apellido:</label>");
            print("<input type='text' name='apellido' id='' required><br><br>");
            print("<label for='email'>Email:</label>");
            print("<input type='email' name='email' id='' required><br><br>");
            if(!verificar_email($_POST["email"])){
                print("<p style='color: red;'>Debe colocar un correo valido!</p>");
            }
            print("<label for='contrasena'>Contraseña:</label>");
            print("<input type='password' name='password' id='' required><br><br>");
            $pass = verificar_password_strenght($_POST["password"]);
            print("<p style='color: red;'>".$pass."</p>");
            
            print("<label for='repetirContrasena'>Repetir Contraseña:</label>");
            print("<input type='password' name='repetirContrasena' id='' required><br><br>");
            print("<label for='ip'>IP actual del equipo:</label>");
            print("<input type='text' name='ip' id='' required><br><br>");
            if(!verificar_ip($_POST["ip"])){
                print("<p style='color: red;'>Debe colocar un ip valido!</p>");
            }
            print("<input type='submit' value='Registrar Usuario' name='registrar'>");
            print("</form>");
        }
    } else {
    ?>
        <form action="lab18.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="" required><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="" required><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="" pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" required><br><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="password" id="" pattern="/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/" required><br><br>
            <label for="repetirContrasena">Repetir Contraseña:</label>
            <input type="password" name="repetirContrasena" id="" required><br><br>
            <label for="ip">IP actual del equipo:</label>
            <input type="text" name="ip" id="" pattern="/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/" required><br><br>
            <input type="submit" value="Registrar Usuario" name="registrar">
        </form>
    <?php
    }


    ?>
</body>

</html>