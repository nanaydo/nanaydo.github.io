import React from 'react';
import { Form, Button } from 'react-bootstrap';

function Register() {
    return (
        <div className="container">
            <h2>Registrarse</h2>
            <Form>
                <Form.Group controlId="formBasicEmail">
                    <Form.Label>Correo Electrónico</Form.Label>
                    <Form.Control type="email" placeholder="Ingresa tu correo" required />
                </Form.Group>

                <Form.Group controlId="formBasicPassword">
                    <Form.Label>Contraseña</Form.Label>
                    <Form.Control type="password" placeholder="Contraseña" required />
                </Form.Group>

                <Button variant="primary" type="submit">
                    Registrarse
                </Button>
            </Form>
        </div>
    );
}

export default Register;
