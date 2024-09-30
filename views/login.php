<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="/style.css">
    <style>
 /* altera fundo e adiciona estilo de fonte*/
        body {
            background-color: #FFFFFF; 
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #333; 
        }
 /*organiza a div ao centro e a estiliza*/
        div {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 120px auto;
            border: 1px solid #000000; 
        }
  /*estiliza e alinha ao centro*/
        h2 {
            color: #32c718; 
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }
  /*organiza form dando espaçamento e a estiliza*/
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
  /*aumenta o tamanho da fonte  */
        label {
            color: #333;
            font-size: 14px;
        }
  /* estiliza input e select*/
        input, select {
            border-radius: 5px;
            border: 1px solid #000000; 
            background-color: #FFFFFF; 
            color: #333; 
        }
 
        input:focus, select:focus {
            outline: none;
            border-color: #e2e4e1; 
            box-shadow: 0 0 5px rgba(57, 255, 20, 0.3); 
        }
  /*button é estilizado*/
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
  /*coloca o texto dentro de "a" ao centro e o colore*/
        a {
            color: #ffffff; 
            position: relative;
           
            text-decoration: none;
        }
 
        a:hover {
            color: #ffffff; 
        }
        /*cria uma segunda configuração de uma div para estilizar e a centralizar*/
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