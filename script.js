document.getElementById('loginForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if(email && password) {
        alert('Login Successful');
        // Here, you would typically send the credentials to the backend for validation
    } else {
        alert('Please fill in all fields');
    }
});

document.getElementById('registerForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if(name && email && password) {
        alert('Registration Successful');
        // Here, you would typically send the data to the backend for saving
    } else {
        alert('Please fill in all fields');
    }
});
