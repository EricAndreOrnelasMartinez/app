
const form = document.getElementById('Form')

form.addEventListener('submit', function(e){
    e.preventDefault();
    
    let datos = new FormData(form);

    fetch('Login.php',{
        method: 'GET',
        body: datos
    })
    
    .then(res => res.json())
    .then(data => {
        h3.innerHTML = data;
        h3.className = 'ok';
    })
})