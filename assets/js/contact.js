let button = document.getElementById('btn5');
let modal = document.getElementById('modal');

button.addEventListener('click', function() {
    modal.classList.toggle('show'); 
    button.scrollTop = button.scrollHeight;   
});





