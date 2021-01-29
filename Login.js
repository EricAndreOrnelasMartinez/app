
const form = document.getElementById('Form')
const h3 = document.getElementById('res')

form.addEventListener('submit', function(e){
    e.preventDefault();
    
    let datos = new FormData(form);

    fetch('PHP/Login.php',{
        method: 'POST',
        body: datos
    })
    
    .then(res => res.json())
    .then(data => {
        let aux = data;
        if(aux === '1'){
            window.location.assign('Inicio/');
        }else{
            h3.innerHTML = 'Usuario o contraseña incorrectos'
            h3.className = 'ok'
        }
    })
})