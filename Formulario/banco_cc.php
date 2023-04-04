<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancário - Conta Corrente</title>
    <link rel="stylesheet" href="estilos_cc.css">
</head>

<body>
    <form name="conta_corrente" method="post" action="conta-corrente.php">
        <table>
            <caption>Cadastro de Conta Corrente</caption>
            <tr>
                <td><label for="nome">Nome:</td>
                <td><input type="text" name="nome" size="40" maxlength="50" required
                        placeholder="Infome o nome do correntista"></td>
            </tr>
            <tr>
                <td><label for="banco">Banco</td>
                <td>
                    <select name="banco">
                        <option value="#"></option>
                        <option value="caixa">Caixa Econômica Federal</option>
                        <option value="brasil">Banco do Brasil</option>
                        <option value="mercantil">Banco Mercantil</option>
                        <option value="santander">Banco Santander</option>
                        <option value="bradesco">Banco Bradesco</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="conta_corrente">Conta Corrente:</td>
                <td><input type="text" name="conta_corrente" size="30" maxlength="25" required
                        placeholder="Informe o número da conta corrente"></td>
            </tr>
            <tr>
                <td><label for="tipo_conta"><strong>Tipo de conta:</strong></td>
                <td>
                    <input type="radio" name="tipo_conta">Conta Comum
                    <input type="radio" name="tipo_conta">Conta Especial
                </td>
            </tr>
            <tr>
                <td><label for="data_abertura">Data de Abertura:</label></td>
                <td><input type="date" name="data_abertura" required></label>
            </tr>
            <tr>
                <td><label for="cpf">CPF:</label></td>
                <td><input type="text" name="cpf" size="14" maxlength="14"></td>
            </tr>
            <tr>
                <td><label for="saldo_inicial">Saldo inicial</label></td>
                <td><input type="number" name="saldo_inicial" value="0" step="0.01" min="0"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Cadastrar" nome="cadastratar" class="botao">
                </td>
            </tr>
        </table>
</body>

</html>