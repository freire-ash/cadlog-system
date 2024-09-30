<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="/style.css">
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
            margin: 120px auto; /* Centralizado e com margem superior */
            border: 1px solid #000000; /* Borda verde neon minimalista */
        }
 
        h2 {
            color: #32c718; /* Verde neon para o título */
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
            color: #333; /* Texto escuro para contraste com o fundo claro */
            font-size: 14px;
        }
 
        input, select {
            border-radius: 5px;
            border: 1px solid #000000; /* Borda verde neon sutil nos campos */
            padding: 10px;
            background-color: #FFFFFF; /* Fundo branco para os campos */
            color: #333; /* Texto escuro para legibilidade */
        }
 
        input:focus, select:focus {
            outline: none;
            border-color: #e2e4e1; /* Cor verde neon mais suave ao focar */
            box-shadow: 0 0 5px rgba(57, 255, 20, 0.3); /* Leve sombra neon */
        }
 
        button {
            background-color: #39FF14; /* Fundo verde neon */
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
            text-align: center;
            padding: 5px;
            width: 10%;
           
            cursor: pointer;
            transition: background-color 0.3s ease; }
    #link:hover{ background-color: #32CC12;}
 
  </style>
</head>
 
<body>
    <div>
     <main>
    <form method="post" action="index.php?action=login">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Login</button>
    </form>
</div>
    <div id="link"><a href="index.php?action=register">Cadastrar-se</a></div>
</main>
</body>
 
</html>