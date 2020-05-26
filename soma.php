
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Atividade 1-Quarentena</title>
        <script>
            function somar(){
                var num1= document.getElementById('num1').value;
                var num2= document.getElementById('num2').value;
                resultado= parseInt(num1)+parseInt(num2);
                document.getElementById("result").value = resultado;
            }
                
        </script>
    </head>
    <body>
        <form>    
            <p>
                <input type="number" name="num1" id="num1">
            +
                <input type="number" name="num2" id="num2">
            =
                <input type="result" name="result" id="result" readonly>
            </p>
            <button type="button" onclick="somar()">Calcular</button>
            <input type="reset" value="Limpar"/>
        </form> 
    </body>
</html>
