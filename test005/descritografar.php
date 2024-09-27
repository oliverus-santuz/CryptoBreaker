<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #D3C188;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        #bloco{
            flex-direction: column;
            gap: 10px;
            background-color: black;
            color: white;
            margin: auto;
            max-width: 250px;
            min-width: none;
            width: auto;
            min-height: 150px;
            height: auto;
            text-align: center;
            font-size: larger;
            font-weight: 700;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 30px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.712);
            padding: 2em;
            word-wrap: break-word;
            white-space: normal;
            overflow: hidden;
            word-break: break-all;
        }button{
            border-style: none;
            color: white;
            background-color: black;
            width: 10vw;
            height: 8vh;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.712);
            text-decoration: none;
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 700;
            font-size: 2vw;
        }
        button:hover{
            width: 11vw;
            height: 9vh;
            text-decoration: underline;
            transition-duration: 0.2s;
        }
    </style>
</head>
<body>
    <div id="bloco">
        <h1>Resultado:</h1>
        <?php 
            function descriptografar($frase,$n1){
                $resultado = "";
                $n = (int) $n1;
                for($i=0;$i < strlen($frase);$i++){
                    $ascii = ord($frase[$i]);
                    $alfabeto = 127;
                    $fora = 33;
                    $somadecasa = $ascii-$n;
                    $somadecasa = $somadecasa % $alfabeto;
                    
                    if ($somadecasa < 0){
                        $somadecasa= $somadecasa + $alfabeto;
                    }
                    if ($somadecasa >= 0 && $somadecasa < $fora){
                        $somadecasa -= $fora; 
                        
                    }
                    $resultado .= chr($somadecasa);
                };
                return $resultado;
            };
            
            echo descriptografar($_POST["crip"],$_POST["casascrip"]);
           
        ?>

    </div>
            <a href="index.html"><button>Voltar</button></a>
</body>
</html>