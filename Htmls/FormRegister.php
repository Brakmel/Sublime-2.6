<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="StyleSheet" href="../Style/Correo.css " type="text/css">
</head>
<body>
     <!--Aqui esta nuestro header principal, el cual contiene el titulo y los botones para navegar entre nuestras paginas-->
     <header>
        <div class="baul_header">
            <div class="titulo">
                <h1>Sublime</h1>
                <h1 class="Titulo_principal"></h1>
            </div>
            <div class="panel_button">
                <a href="../index.php">
                    <input type="button" value=" Inicio ">
                </a>
                <a href="FormSendEmail.php">
                    <input type="button" value="   Soporte    ">
                </a>
                <a href="../Login/Login.php">
                    <input type="button" value="Entrar">
                </a> 
            </div>
        </div>
        <div class="baul_header">
            <div class="sub_titulo">
                <h2>Profesional, Practico, Perfecto.</h2>
            </div>
        </div>    
    </header>
    <!--Con esta parte del codigo podras registrarte-->
    <main>
        <form action="https://formsubmit.co/Brakmel9@outlook.com" enctype="multipart/form-data" method="POST">
            <div class="form_name">
                <p>¡Recuerda!, puedes comprar sin tener cuenta..</p>
                <input class="Apodo" type="text" name="Apodo" placeholder="Apodo" required> 
                <input class="Direccion" type="text" name="Direccion" placeholder="Direccion" required>
            </div>
            <div class="forma_contacto">
                <input class="Email" type="email" name="Email" placeholder="name@outlook.cl">
                <input class="Numero" type="text" name="Numero" placeholder="+56 9 0000 0000" required>
            </div>
            <div class="form_asunto">
                <input class="password" type="text" name="RUT" placeholder="RUT" required>
                <p>El proceso de registro es solo una forma para que ganes "SublimePoints", no hace falta tener cuenta
                    para comprar, pero si gustas ganar "SublimePoints" por cada compra y más, ¡adelante!
                </p>
            </div>
                
            <div class="form_submit">
                <input type="submit" class="enviar">
            </div>
        </form>
    </main>
    <!--Aqui esta el footer-->
    <footer>
        <div class="baul_numero_contacto">
            <p class="despacho">Call Center: +56 9 8393 7467</p>
        </div>
        <div class="baul_redes_sociales">
               <div class="pildora_red">
                    <a href="https://chat.whatsapp.com/L57aEGWchQlFiryQjs9QQK">
                        <img class="wspp" src="../Style/Img/wsp.PNG">
                    </a>
               </div> 
               <div class="pildora_red">
                    <a href="https://www.facebook.com/">
                        <img class="face" src="../Style/Img/Face.PNG">
                    </a>
               </div>
               <div class="pildora_red">
                    <a href="https://www.instagram.com/">
                        <img class="ints" src="../Style/Img/Insta.PNG">
                    </a>
               </div>
        </div>
        <div class="baul_agradecimientos">
            <p class="despacho"> -Ciudad de los valles</p>
        </div>
    </footer>   
</body>
</html>