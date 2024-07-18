
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,edge">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="3">Mi Formulario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td></td>
                <td>Apellidos</td>
            </tr>
            <tr>
                <td><input class="persona" id="nombre" type="text" name="nombre"></td>
                <td></td>
                <td><input class="persona" id="apellidos" type="text" name="apellidos"></td>
            </tr>
            <tr>
                <td colspan="3">Profesion</td>
            </tr>
            <tr>
                <td colspan="3">
                    <select class="persona" name="profesion" id="profesiones">
                        <option value=""></option>
                        <option value="1">Doctor</option>
                        <option value="2">Enfermero</option>
                        <option value="3">Chef</option>
                        <option value="4">Docente</option>
                        <option value="5">Carpintero</option>
                        <option value="6">Carnicero</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">Género</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="radio" id="genero_m" name="genero" value="M">
                    <label for="genero_m">Masculino</label>
                    <input type="radio" id="genero_f" name="genero" value="F">
                    <label for="genero_f">Femenino</label>
                    <input type="radio" id="genero_o" name="genero" value="O">
                    <label for="genero_o">Otro</label>
                </td>
            </tr>
            <tr>
                <td colspan="3">Correo</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input class="persona" id="correo" type="email" name="correo">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" id="notificaciones" name="notificaciones">
                    <label for="notificaciones">¿Desea recibir notificaciones o correos promocionales?</label>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td align="center" colspan="3">
                    <button class="btnenviar" onclick="creaPersona()">Enviar</button>
                </td>
            </tr>
        </tfoot>
    </table>
    <div id="contenedor_grilla"></div>
    <script src="controlador.js"></script>
</body>
</html>
