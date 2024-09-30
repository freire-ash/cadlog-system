<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        body {
            background-color: #FFFFFF; /* Fundo branco */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #333; /* Texto em cinza escuro para contraste suave */
        }
 
        div {
            background-color: #f5f5f5; /* Fundo cinza bem claro para destacar a div */
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 40px auto; /* Centralizado e com margem superior */
            border: 1px solid #000000; /* Borda verde neon minimalista */
        }
 
        h2 {
            color: #32c718;
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }
 
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
 
        label {
            color: #333; 
            font-size: 14px;
        }
 
        input, select {
            border-radius: 5px;
            border: 1px solid #000000;
            padding: 10px;
            background-color: #FFFFFF; 
            color: #333; 
        }
 
        input:focus, select:focus {
            outline: none;
            border-color: #e2e4e1; 
            box-shadow: 0 0 5px rgba(57, 255, 20, 0.3); 
        }
 
        button {
            background-color: #39FF14;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
 
        button:hover {
            background-color: #32CC12; 
        }
 
        a {
            color: #ffffff; 
            position: relative;
           
            text-decoration: none;
        }
 
        a:hover {
            color: #ffffff; 
        }
        #link{background-color: #39FF14; 
            color: #FFFFFF; 
            border-radius: 5px;
            border: none;
            font-size: 16px;
            position: relative;
            left:90%;
            cursor: pointer;
            transition: background-color 0.3s ease; }
    #link:hover{ background-color: #32CC12;}
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
 
 