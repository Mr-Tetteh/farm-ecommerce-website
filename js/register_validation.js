var firstname_input = document.getElementById('firstname');
var lastname_input = document.getElementById('lastname');
var email_input = document.getElementById('email');
var contact_input = document.getElementById('contact');
var password_input = document.getElementById('password');
var confirm_password_input = document.getElementById('confirm-password');
var role_input = document.getElementById('role');

var register_form = document.getElementById('registerForm');

// Regex Patterns:
const regex_patterns = {
    name: /^[a-zA-Z]{2,}(?:[-\s][a-zA-Z]+)*$/,
    email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    contact: /^\+233\d{9}$/,
    password: /^(?=.*[A-Z].*[A-Z])(?=.*[a-z].*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>/?]).{8,}$/
}

var password_strength = document.getElementById('password-strength');
var confirm_password_strength = document.getElementById('confirm-password-strength');
var password_match_error = document.getElementById('password-match-error');

var firstname_valid = validateFirstname(firstname_input);
var lastname_valid = validateLastname(lastname_input);
var email_valid = validateEmail(email_input);
var contact_valid = validateContact(contact_input);
var password_valid = validatePassword(password_input);
var confirm_password_valid = validateConfirmPassword(password_input, confirm_password_input);
var role_valid = validateRole(role_input);

// Functions:
function validateFirstname(name) {
    if (regex_patterns.name.test(name.value)) {
        firstname_input.style.border = '1px solid green';
        firstname_valid = true;
    } else {
        firstname_input.style.border = '1px solid red';
        firstname_valid = false;
    }
}

function validateLastname(name) {
    if (regex_patterns.name.test(name.value)) {
        lastname_input.style.border = '1px solid green';
        lastname_valid = true;
    } else {
        lastname_input.style.border = '1px solid red';
        lastname_valid = false;
    }
}

function validateEmail(email) {
    if (regex_patterns.email.test(email.value)) {
        email_input.style.border = '1px solid green';
        email_valid = true;
    } else {
        email_input.style.border = '1px solid red';
        email_valid = false;
    }
}

function validateContact(contact) {
    if (regex_patterns.contact.test(contact.value)) {
        contact_input.style.border = '1px solid green';
        contact_valid = true;
    } else {
        contact_input.style.border = '1px solid red';
        contact_valid = false;
    }
}

function validatePassword(password) {
    password_match_error.style.display = 'none';

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

function validateConfirmPassword(password, confirm_password) {
    password_match_error.style.display = 'none';

    if (regex_patterns.password.test(password.value) && regex_patterns.password.test(confirm_password.value)) {
        confirm_password_input.style.border = '1px solid green';
        confirm_password_strength.style.display = 'none';
        confirm_password_valid = true;
    } else {
        confirm_password_input.style.border = '1px solid red';
        confirm_password_strength.style.display = 'block';
        confirm_password_valid = false;
    }
}

function validateRole(role) {
    if (role.value == 'admin' || role.value == 'farmer' || role.value == 'consumer') {
        role_input.style.border = '1px solid green';
        role_valid = true;
    } else {
        role_input.style.border = '1px solid red';
        role_valid = false;
    }
}

function handleInvalidInputs() {
    if (!firstname_valid) {
        firstname_input.style.border = '1px solid red';
    }

    if (!lastname_valid) {
        lastname_input.style.border = '1px solid red';
    }

    if (!email_valid) {
        email_input.style.border = '1px solid red';
    }

    if (!contact_valid) {
        contact_input.style.border = '1px solid red';
    }

    if (!password_valid) {
        password_input.style.border = '1px solid red';
    }

    if (!confirm_password_valid) {
        confirm_password_input.style.border = '1px solid red';
    }

    if (!role_valid) {
        role_input.style.border = '1px solid red';
    }
}

// Event Listeners:

// event listener for validating firstname field
firstname_input.addEventListener('keyup', () => {
    validateFirstname(firstname_input);
});

// event listener for validating lastname field
lastname_input.addEventListener('keyup', () => {
    validateLastname(lastname_input);
});

// event listener for validating email field
email_input.addEventListener('keyup', () => {
    validateEmail(email_input);
});

// event listener for validating contact field
contact_input.addEventListener('keyup', () => {
    validateContact(contact_input);
});

// event listener for validating password field
password_input.addEventListener('keyup', () => {
    validatePassword(password_input);
});

// event listener for validating confirm password field
confirm_password_input.addEventListener('keyup', () => {
    validateConfirmPassword(password_input, confirm_password_input);
});

// event listener for validating role field
role_input.addEventListener('click', () => {
    validateRole(role_input);
});

// event listener for register form submit event
register_form.addEventListener('submit', (event) => {
    // prevent form submission
   //event.preventDefault();

    // check if the inputs are valid
    if (firstname_valid && lastname_valid && email_valid && contact_valid
        && password_valid && confirm_password_valid && role_valid) {

        if (password_input.value == confirm_password_input.value) {
            // submit the form
            register_form.submit();
            
        } else {
            //alert("alert mismagch!");
            password_match_error.style.display = 'block';
        }
    } else {
       // alert("alert misma")   ;
        handleInvalidInputs();
    }
});