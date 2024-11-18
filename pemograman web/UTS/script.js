function validateLogin() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === '22552011247' && password === '1234567890') {
        alert('Login berhasil!');
        window.location.href = 'dashboard.html';
        return false;
    } else {
        alert('Username atau Password salah!');
        return false;
    }
}
