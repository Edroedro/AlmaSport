document.addEventListener('DOMContentLoaded', function() {
    const checkBtn = document.getElementById('check');
    const navLinks = document.querySelector('nav ul');
    const corsiBtn = document.querySelector('.corsibtn');
    const dropdown = document.querySelector('nav ul li ul');
    const corsiCheckbox = document.getElementById('corsi');
    const moreBtn = document.getElementById('more');
    const barradownLinks = document.querySelector('.barradown ul');
    const morebtnBtn = document.querySelector('.morebtn');
    const barradown = document.querySelector('.barradown ul li ul');
    const moreCheckbox = document.getElementById('more');
    
    checkBtn.addEventListener('change', function() {
        if (checkBtn.checked) {
            navLinks.style.left = '0';
        } else {
            navLinks.style.left = '-100%';
            corsiCheckbox.checked = false;
            dropdown.style.display = 'none';
        }/*
        if (moreBtn.checked) {
            barradownLinks.style.left = '0';
        } else {
            barradownLinks.style.left = '-100%';
            moreCheckbox.checked = false;
            barradown.style.display = 'none';
        }*/
    });

    corsiBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
            corsiCheckbox.checked = false;
        } else {
            dropdown.style.display = 'block';
            corsiCheckbox.checked = true;
        }/*
        if (barradown.style.display === 'block') {
            barradown.style.display = 'none';
            moreCheckbox.checked = false;
        } else {
            barradown.style.display = 'block';
            moreCheckbox.checked = true;
        }*/
    });
});
/*
document.addEventListener('DOMContentLoaded', function() {
    const moreBtn = document.getElementById('more');
    const barradownLinks = document.querySelector('.barradown ul');
    const morebtnBtn = document.querySelector('.morebtn');
    const barradown = document.querySelector('.barradown ul li ul');
    const moreCheckbox = document.getElementById('more');
    
    checkBtn.addEventListener('change', function() {
        if (moreBtn.checked) {
            barradownLinks.style.left = '0';
        } else {
            barradownLinks.style.left = '-100%';
            moreCheckbox.checked = false;
            barradown.style.display = 'none';
        }
    });

    corsiBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (barradown.style.display === 'block') {
            barradown.style.display = 'none';
            moreCheckbox.checked = false;
        } else {
            barradown.style.display = 'block';
            moreCheckbox.checked = true;
        }
    });
});*/

