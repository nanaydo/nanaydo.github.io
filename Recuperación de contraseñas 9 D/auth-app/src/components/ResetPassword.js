import React from 'react';
import { Form, Button } from 'react-bootstrap';

function ResetPassword() {
    return (
        <div className="container">
            <h2>Restablecer Contraseña</h2>
            <Form>
                <Form.Group controlId="formBasicToken">
                    <Form.Label>Token</Form.Label>
                    <Form.Control type="text" placeholder="Ingresa el token" required />
                </Form.Group>

                <Form.Group controlId="formBasicNewPassword">
                    <Form.Label>Nueva Contraseña</Form.Label>
                    <Form.Control type="password" placeholder="Nueva Contraseña" required />
                </Form.Group>

                <Button variant="primary" type="submit">
                    Cambiar Contraseña
                </Button>
            </Form>
        </div>
    );
}

export default ResetPassword;

