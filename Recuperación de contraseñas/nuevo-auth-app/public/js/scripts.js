document.getElementById('reset-password-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const email = document.getElementById('email').value;

    try {
        const response = await fetch('/auth/forgot-password', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email })
        });

        if (response.ok) {
            alert('Correo de recuperación enviado. Revisa tu bandeja de entrada.');
        } else {
            alert('Error al enviar el correo de recuperación.');
        }
    } catch (error) {
        alert('Error al enviar el correo de recuperación.');
    }
});


