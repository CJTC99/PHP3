<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        	Ejercicio PHP
        </title>
    </head>
    <body>

        <form method="post" action="app/test.php">

            <label>N&uacute;mero 1</label>

            <input type ="text" size="5" name="num1" required>
            <br><br>

            <label>N&uacute;mero 2</label>

            <input type="text" size="5" name="num2" required>
            <br><br>

            Seleccione la operacion matem&aacute;tica
            <select name="opciones">
                <option>Suma</option>

                <option>Resta</option>

                <option>Multiplicacion</option>

                <option>Division</option>

            </select>
            <br><br>

            <input type="submit" name="calcular" value="Calcular">
        </form> 
    </body>
</html>