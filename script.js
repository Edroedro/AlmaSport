let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {


    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');

}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}


const quantityInputs = document.querySelectorAll('.cart-page input[type="number"]');
    
// Aggiungiamo un gestore di eventi per ogni input
quantityInputs.forEach(input => {
    input.addEventListener('change', updateCart);
});

// Funzione per aggiornare il carrello quando cambia la quantità
function updateCart() {
    let totalPrice = 0;
    // Selezioniamo tutti i prezzi totali dei prodotti nel carrello
    const totalPrices = document.querySelectorAll('.cart-page table tr td:nth-child(3)');
    
    // Calcoliamo il nuovo prezzo totale sommando i prezzi totali di ogni prodotto
    totalPrices.forEach(price => {
        totalPrice += parseFloat(price.textContent.replace('€', ''));
    });

    // Selezioniamo il prezzo totale nel carrello
    const totalPriceElement = document.querySelector('.cart-page .total-price table tr:nth-child(3) td:last-child');
    
    // Aggiorniamo il prezzo totale nel carrello
    totalPriceElement.textContent = totalPrice.toFixed(2) + '€';
}

// Gestione della rimozione di un elemento dal carrello
const removeLinks = document.querySelectorAll('.cart-page a');
removeLinks.forEach(link => {
    link.addEventListener('click', removeItem);
});

function removeItem(event) {
    event.preventDefault(); // Evita il comportamento predefinito del link

    const row = event.target.closest('tr'); // Trova il genitore più vicino di tipo <tr>
    row.remove(); // Rimuovi la riga dal DOM

    updateCart(); // Aggiorna il carrello
}





