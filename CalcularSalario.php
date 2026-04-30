<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Calculo de Salario</title>
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #1a202c;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .result-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
            border-radius: 16px;
        }

        h2 {
            font-size: 1.25rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .salary-value {
            font-size: 2rem;
            font-weight: 700;
            color: #764ba2;
            display: block;
        }

        .btn-back {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.8rem 1.5rem;
            background-color: #764ba2;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-back:hover {
            background-color: #667eea;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result-box">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $horas = isset($_POST["txthoras"]) ? floatval($_POST["txthoras"]) : 0;
                    $valor = isset($_POST["txtvalor"]) ? floatval($_POST["txtvalor"]) : 0;
                    $salario = $horas * $valor;
                    
                    echo "<h2>Salário Calculado</h2>";
                    echo "<span class='salary-value'>R$ " . number_format($salario, 2, ",", ".") . "</span>";
                } else {
                    echo "<p>Nenhum dado recebido.</p>";
                }
            ?>
        </div>
        <a href="javascript:history.back()" class="btn-back">Voltar</a>
    </div>
</body>
</html>
