const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');
const dotenv = require('dotenv');

dotenv.config();

const app = express();
app.use(bodyParser.json());

// Configuración de Nodemailer
const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: process.env.EMAIL,
        pass: process.env.PASSWORD
    }
});

// Ruta para enviar el correo de recuperación
app.post('/forgot-password', (req, res) => {
    const { email } = req.body;
    const token = Math.random().toString(36).substring(2);

    console.log(`Token para ${email}: ${token}`);

    const mailOptions = {
        from: process.env.EMAIL,
        to: email,
        subject: 'Recuperación de Contraseña',
        text: `Usa este token para restablecer tu contraseña: ${token}`
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return res.status(500).send(error.toString());
        }
        res.status(200).send('Correo enviado');
    });
});

app.listen(process.env.PORT || 3001, () => {
    console.log('Servidor corriendo en el puerto 3001');
});
