<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Empleo</title>
<style>
    body {
        margin:0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #f4f4f4, #e0e0e0);
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
    }
    .container {
        background:#fff;
        padding:25px;
        border-radius:12px;
        box-shadow:0 5px 20px rgba(0,0,0,0.2);
        width:100%;
        max-width:420px;
    }
    h2 {
        text-align:center;
        margin-bottom:20px;
        color:#333;
    }
    label {
        display:block;
        margin:10px 0 5px;
        font-weight:bold;
        color:#444;
    }
    input, select {
        width:100%;
        padding:12px;
        border:1px solid #ccc;
        border-radius:8px;
        font-size:15px;
        margin-bottom:15px;
    }
    button {
        width:100%;
        padding:14px;
        background:#4caf50;
        color:#fff;
        border:none;
        border-radius:8px;
        font-size:16px;
        font-weight:bold;
        cursor:pointer;
    }
    button:hover {
        background:#43a047;
    }
    .note {
        text-align:center;
        font-size:13px;
        color:#666;
        margin-top:10px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Formulario de Empleo</h2>
    <form onsubmit="redirigir(); return false;">
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" required>

        <label for="pais">País</label>
        <input type="text" id="pais" name="pais" required>

        <label for="estado">Estado / Provincia</label>
        <input type="text" id="estado" name="estado" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="+53 55555555">

        <label for="estudios">Nivel de Estudios</label>
        <select id="estudios" name="estudios" required>
            <option value="">Seleccione...</option>
            <option value="secundaria">Secundaria</option>
            <option value="bachiller">Bachillerato</option>
            <option value="universidad">Universidad</option>
            <option value="posgrado">Posgrado</option>
        </select>

        <label>
            <input type="checkbox" id="disponible" name="disponible"> Disponibilidad inmediata
        </label>

        <button type="submit">Enviar</button>
    </form>
    <div class="note">ℹ️ Todos los campos son obligatorios</div>
</div>

<script>
function redirigir(){
    window.location.href = "https://www.effectivecpmnetwork.com/hn9rp2bn?key=f8cae2d6d36b80d6afe91dd23483417d";
}
</script>
</body>
</html>
