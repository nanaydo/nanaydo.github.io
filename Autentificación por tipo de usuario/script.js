
function generateToken() {
    return Math.floor(100000 + Math.random() * 900000).toString();
}

$(document).ready(function() {
    let generatedToken = '';
    let emailForToken = '';

    
    var forms = document.querySelectorAll('.needs-validation')

   
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })

    
    $('#loginForm').on('submit', function(event) {
        event.preventDefault()
        if (this.checkValidity()) {
            const email = $('#loginEmail').val()
            const password = $('#loginPassword').val()
            const storedUser = JSON.parse(localStorage.getItem(email))
            
            if (storedUser && storedUser.password === password) {
                alert('Inicio de sesión exitoso!')
                // Redirigir a la página principal
                window.location.href = 'pagina-principal.html' 
            } else {
                alert('Correo o contraseña incorrectos')
            }
        } else {
            event.stopPropagation()
        }
        this.classList.add('was-validated')
    })

    
    $('#forgotPasswordLink').on('click', function(event) {
        event.preventDefault();
        emailForToken = prompt('Introduce tu correo electrónico:');
        if (emailForToken) {
            const storedUser = JSON.parse(localStorage.getItem(emailForToken));
            if (storedUser) {
                // Generar y mostrar el token
                generatedToken = generateToken();
                alert(`Tu token de recuperación es: ${generatedToken}`);
                // Mostrar el formulario de token
                $('#loginForm').addClass('d-none');
                $('#forgotPasswordLink').addClass('d-none');
                $('#tokenForm').removeClass('d-none');
            } else {
                alert('Correo no registrado')
            }
        }
    });

    
    $('#tokenForm').on('submit', function(event) {
        event.preventDefault()
        if (this.checkValidity()) {
            const tokenInput = $('#tokenInput').val()
            if (tokenInput === generatedToken) {
                alert('Token verificado correctamente. Accediendo a la página principal...')
                // Redirigir a la página principal
                window.location.href = 'pagina-principal.html' 
            } else {
                alert('Token incorrecto')
            }
        } else {
            event.stopPropagation()
        }
        this.classList.add('was-validated')
    })

    
    $('#registerForm').on('submit', function(event) {
        event.preventDefault()
        if (this.checkValidity()) {
            const username = $('#registerUsername').val()
            const email = $('#registerEmail').val()
            const password = $('#registerPassword').val()
            
           
            localStorage.setItem(email, JSON.stringify({ username, password }))
            alert('Registro exitoso!')
            // Limpiar el formulario
            $('#registerForm')[0].reset()
            $('#registerForm').removeClass('was-validated')
        } else {
            event.stopPropagation()
        }
        this.classList.add('was-validated')
    })
})




