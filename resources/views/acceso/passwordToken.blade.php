
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background: linear-gradient(135deg, #00B6F5 0%, #017d99 100%);
            padding: 20px;
            color: white;
            text-align: center;
        }
        .content {
            background-color: white;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .verification-code {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .verification-code input {
            font-size: 20px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 0 5px;
            padding: 10px;
            width: 40px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>ASA - Asociacion Salvadoreña del Agua</h1>
        <p>Compartiendo mensajes importantes</p>
    </div>
    <div class="content">
        <h2>Tu codigo de verificacion es:</h2>
        <div class="verification-code">
            <!-- Suponiendo que $token es 'ABC123' -->
            @foreach (str_split($token) as $char)
                <input type="text" value="{{ $char }}" maxlength="1" autocomplete="off" autocapitalize="off" readonly>
            @endforeach
        </div>
        <p>Utiliza este codigo para cambiar tu contraseña, es un codigo de un solo uso por lo que no lo compartas.</p>
        <p>No respondas a este correo</p>
    </div>
    <div class="footer">
        <p>© 2023 ASA - Todos los derechos reservados</p>
    </div>
</body>
</html>
