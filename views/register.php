<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
       
    </style>
</head>
<body>
 
    <button id="link"><a href="">Voltar ao Login</a></button>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
 
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
 
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
 
            <button type="submit">Cadastrar</button>
        </form>
    </div>
   
</body>
</html>
 
 