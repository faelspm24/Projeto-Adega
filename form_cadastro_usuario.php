

<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="section center #e0f7fa cyan lighten-4">
<h2 class="center center  lighten-6">
    <p> Cadastramento de Usuário - Turma/B </p>
</h2>
<form action="avalia_cadastro_usuario.php" method="POST">
    <div class="container #e0f7fa cyan lighten-5 z-depth-4">
        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="txtnome" class="materialize-textarea"></input>
                    <label for="txtnome" class="black-text">Nome:</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
             <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="txtsenha" class="materialize-textarea"></input>
                    <label for="txtsenha" class="black-text">Senha: </label>
                </div>
            </div>        
        </div>
        <br>
            <div class="row center">
                <div class="links">
                   <button type="submit" class="waves-effect waves-light btn-large">Cadastrar
                        <i class="large material-icons right">arrow_forward</i>
                   </button>                    
                   <button type="reset" class="waves-effect waves-light btn-large">Cancelar
                        <i class="large material-icons right">clear</i>
                   </button>  
                    <br><br>
                    <h6> Página Principal <a href="./index.php"> Clique aqui </a> </h6>
                    <br><br>    
                </div>
            </div>
        </div>
        <br>      
        <br><br>
        <br><br> 
    </div>
</div>
</form>
<footer class="page-footer #e0f7fa cyan lighten-6">
    <div class="center">
        <div class="row">
            <div class="col l12">
                <h5 class="white-text"></h5>
                <p class="grey-text text-lighten-4"><br><br>
                <h6><b><i>© 2022 Desenvolvido por Rafael Pereira de Vasconcellos </i></b></p></h6>
            </div>
        </div>
    <div class="footer-copyright #e0f7fa cyan lighten-6">
        </div>

        </div>
</footer>
<script src="materialize/js/materialize.js"></script>
<script>
    M.AutoInit();
</script>
</body>
</html>