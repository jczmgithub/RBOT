<!DOCTYPE html>
<html lang="es">
<head>
    <title>Making Accessible Emails</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }

        /* RESET STYLES */
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    </style>
</head>
<body style="background-color: aliceblue; margin: 0 !important; padding: 60px 0 60px 0 !important;">
<table border="0" cellspacing="0" cellpadding="0" role="presentation" width="100%">
    <tr>
        <td bgcolor="aliceblue" style="font-size: 0;">&​nbsp;</td>
        <td bgcolor="white" width="800" style="border-radius: 4px; font-family: sans-serif; padding: 20px 40px;">
            <h1>Nombre: {{ $_POST['nombre'] }}</h1>
            <h1>Email: {{ $_POST['email'] }}</h1>
            <h1>Mensaje: {{ $_POST['mensaje'] }}</h1>
        </td>
        <td bgcolor="aliceblue" style="font-size: 0;">&​nbsp;</td>
    </tr>
</table>
</body>
</html>
