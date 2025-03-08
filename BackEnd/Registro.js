document.addEventListener('DOMContentLoaded', function() {

    document.querySelector('form').addEventListener('submit', function (e) {
        const Password = document.getElementById('Password').value;
        const ConfirmPassword = document.getElementById('Confirm_Password').value;
        const PasswordHelp = document.getElementById('PasswordHelp');
        const ConfirmPasswordHelp = document.getElementById('ConfirmPasswordHelp');

        PasswordHelp.textContent = '';
        ConfirmPasswordHelp.textContent = '';
        
        const PasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;

        if (!PasswordRegex.test(Password)) {
            e.preventDefault(); 
            PasswordHelp.textContent = 'La contraseña debe tener al menos 8 caracteres, incluir una mayúscula, una minúscula, un número y un carácter especial.';
            return;
        }

        if (Password !== ConfirmPassword) {
            e.preventDefault(); 
            ConfirmPasswordHelp.textContent = 'Las contraseñas no coinciden.';
            return;
        }

    });
});