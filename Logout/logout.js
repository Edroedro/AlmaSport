document.getElementById('logoutButton').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'flex';
});

document.getElementById('cancelLogout').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});

document.getElementById('confirmLogout').addEventListener('click', function() {
    alert('Logout eseguito!'); // Sostituisci con la logica reale di logout
    document.getElementById('popup').style.display = 'none';
});