import React from 'react';
import { Form, Button } from 'react-bootstrap';

function ForgotPassword() {
    return (
        <div className="container">
            <h2>Recuperar Contraseña</h2>
            <Form>
                <Form.Group controlId="formBasicEmail">
                    <Form.Label>Correo Electrónico</Form.Label>
                    <Form.Control type="email" placeholder="Ingresa tu correo" required />
                </Form.Group>

                <Button variant="primary" type="submit">
                    Enviar Correo de Recuperación
                </Button>
            </Form>
        </div>
    );
}

export default ForgotPassword;
