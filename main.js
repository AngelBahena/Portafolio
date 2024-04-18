const btnToggle = document.querySelector('.toggle-btn'); //Barra lateral

btnToggle.addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('active');
});