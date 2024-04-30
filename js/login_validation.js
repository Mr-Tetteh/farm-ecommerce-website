var email_input = document.getElementById('loginEmail');
var password_input = document.getElementById('loginPassword');
var password_strength = document.getElementById('password-strength');
var login_form = document.getElementById('loginForm');

// Regex Patterns:
const regex_patterns = {
    email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    password: /^(?=.*[A-Z].*[A-Z])(?=.*[a-z].*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>/?]).{8,}$/
}

var email_valid = validateEmail(email_input);
var password_valid = validatePassword(password_input);

// Functions:
function validateEmail(email) {
    if (regex_patterns.email.test(email.value)) {
        email_input.style.border = '1px solid green';
        email_valid = true;
    } else {
        email_input.style.border = '1px solid red';
        email_valid = false;
    }
}

function validatePassword(password) {
    if (regex_patterns.password.test(password.value)) {
        password_input.style.border = '1px solid green';
        password_strength.style.display = 'none';
        password_valid = true;
    } else {
        password_input.style.border = '1px solid red';
        password_strength.style.display = 'block';
        password_valid = false;
    }
}

function handleInvalidInputs() {
    if (!email_valid) {
        email_input.style.border = '1px solid red';
    }

    if (!password_valid) {
        password_input.style.border = '1px solid red';
    }
}

// Event Handlers:

// event listener for email input
email_input.addEventListener('keyup', () => {
    validateEmail(email_input);
});

// event listener for password input
password_input.addEventListener('keyup', () => {
    validatePassword(password_input);
});

// event listener for login form
login_form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    if (email_valid && password_valid) {
        login_form.submit();
    } else {
        handleInvalidInputs();
    }
});