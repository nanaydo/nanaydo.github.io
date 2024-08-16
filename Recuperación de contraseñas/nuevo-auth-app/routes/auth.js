const express = require('express');
const router = express.Router();

// Ruta para manejar el inicio de sesión
router.post('/login', (req, res) => {
    const { email, password } = req.body;

    // Aquí deberías agregar la lógica para validar el correo y la contraseña.
    // Por ahora, vamos a simular un inicio de sesión exitoso.
    if (email === "usuario@ejemplo.com" && password === "contraseña123") {
        res.send('Inicio de sesión exitoso');
    } else {
        res.status(401).send('Correo o contraseña incorrectos');
    }
});

module.exports = router;



