<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancário em PHP</title>
</head>
<body>
    <?php 
       if($_SERVER["REQUEST_METHOD"] == "POST") // Se os dados foram cadastrados no formulário
    {
    echo "<h3>CONTROLE BANCÁRIO EM PHP</h3>";
    $Nome_Banco = ""; // Armazena nome do banco 
    $TipoDeConta = ""; // Armazena o tipo da conta
    $Nome_Correntista = $_POST["nome"];
    echo "<strong>Nome do correntista: </strong>" . $Nome_Correntista;
    $Banco  = $_POST["banco"];

    // Exibindo o nome do banco completo
    if($Banco == "caixa")
       $Nome_Banco = "Caixa Econômica Federal"
    else if($Nome_Banco == )
    echo "<br><strong>Nome do Banco: </strong>" .$Banco;
    }
    else
    {
        echo "Atenção, você tem que cadastrar os dados primeiro!";
        echo "<p><a href='banco_cc.php'>Cadastro da COnta Corrente</a></p>"
    }
    ?>
</body>
</html>