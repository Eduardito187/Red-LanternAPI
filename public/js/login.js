document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const usernameError = document.getElementById("username-error");
    const passwordError = document.getElementById("password-error");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        // Validación del campo de usuario
        if (usernameInput.value.trim() === "") {
            usernameError.textContent = "El campo de usuario no puede estar vacío";
        } else {
            usernameError.textContent = "";
        }

        // Validación del campo de contraseña
        if (passwordInput.value.trim() === "") {
            passwordError.textContent = "El campo de contraseña no puede estar vacío";
        } else {
            passwordError.textContent = "";
        }

        // Comprobar si ambos campos son válidos
        if (usernameError.textContent === "" && passwordError.textContent === "") {
            // Aquí puedes agregar la lógica de autenticación
            // Por ejemplo, verificar si el usuario y la contraseña son válidos
            // Si la autenticación es exitosa, puedes redirigir al usuario a otra página
            alert("Inicio de sesión exitoso");
        }
        return true;
    });
});