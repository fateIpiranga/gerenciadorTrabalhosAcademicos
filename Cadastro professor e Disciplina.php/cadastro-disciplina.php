<!doctype html>
<html>
    <head>
        <title>Cadastro Disciplina</title>
        <meta name="keywords" content="fatec, cadastro trabalhos , professor, fatec ipiranga, faculdade" />
        <link href="css/sb-admin.css"rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="cadastro professor.css" rel="stylesheet">
    </head>    
    <body>
        <div class=centralizado>
            <h1>Cadastro de Disciplina</h1>
            <form method="post" action="cadastro-disciplina.php"> <!--lembrar de alterar para refletir o nome do arquivo-->
                <label for="nome_disc">Nome:</label>
                <input type="text" id="nome_disc" name="nome_disc" required />
                <br />
                <label>Descritivo:</label>
                <br>
                <textarea id="msg" name="msg" cols="40" rows="5"></textarea>
                <br />
                <label for="Ativo">Ativo:</label>
                <select name="Ativo" id="Ativo">
                    <option value="ops">Sim</option>
                    <option value="opN">Não</option>
                </select>
                <br />
                <label for="Curso">Curso:</label>
                <select name="Curso" id="Curso">
                    <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
                    <option value="GRH">Gestão em Recursos Humanos</option>
                </select>

                <br />
                <br />
                <input type="submit" name="btn1" value="Cadastrar" />
            </form>
        </div>
        <?php
        //$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
        if (isset($_POST["btn1"])) {
            inserir();
        }
        //$con->close();		
        ?>
    </body>
</html>

<?php

function inserir() {
    $con = new mysqli("baratheon0001.hospedagemdesites.ws", "norto_fatecig", "freiJoao59", "norton_fatecig");
    $nome_disc = $_POST["nome_disc"];
    $msg = $_POST["msg"];
    $ativo = $_POST["Ativo"];
    $curso = $_POST["Curso"];
    //var_dump($_POST);die();
    $sql = "insert into usuario(disciplina, descricao, ativo, curso) values ('$nome_disc', '$msg', '$ativo', '$curso')";
    mysqli_query($con, $sql);
    echo "registro inserido com sucesso !";
    $con->close();
}
?>