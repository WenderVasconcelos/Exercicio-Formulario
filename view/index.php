<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <form action="../control/controle.php" method="POST">
           <h1>Preencha Seus Dados</h1><br>
            <label>Nome:</label><br>
            <input type="text" name="nome" placeholder="digite seu nome">*<br>
            <br><label>Matrícula:</label><br>
            <input type="text" name="matricula" placeholder="digite sua matricula" >*<br>
            <br><label>Idade:</label><br>
            <input type="number" name="idade" placeholder="digite sua idade">*<br>
            <br><label>CPF:</label><br>
            <input type="text" name="cpf" placeholder="digite seu cpf">*<br>
            <br><label>Cidade:</label><br>
            <select name="cidade">
                <option value="Selecione">Selecione</option>
                <option value="São Leopoldo">São Leopoldo</option>                
                <option value="Novo Hamburgo">Novo Hamburgo</option>             
                <option value="Canoas">Canoas</option>             
                <option value="Esteio">Esteio</option>             
            </select>*<br/>
            <br><input type="submit" name="Enviar">
        </form>
    </body>
</html>
