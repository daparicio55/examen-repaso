<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con tabla</title>
</head>
<body>
    <main>
        <table>
            <tr>
                <td colspan="2">Operaciones</td>
            </tr>
            <tr>
                <td>
                    <label for="">Numero 1</label>
                    <input type="text" name="n1" style="display: block;">
                    <label for="">Numero 2</label>
                    <input type="text" name="n2" style="display: block;">
                    <label for="">Operacion</label>
                    <select name="operacion" style="display: block;">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                        <option value="division">Division</option>
                    </select>
                </td>
                <td>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat in, consequuntur, ullam eaque ipsam obcaecati minima explicabo amet quos natus totam iste cumque? Cum odio illo maxime nobis repellat est.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>