
const form = document.getElementById('form')
const h3 = document.getElementById('res')

form.addEventListener('submit', e =>{
    e.preventDefault();
    info = new FormData(form);
    fetch('../../PHP/edit.php',{
        method: 'POST',
        body: info
    })
    .then(res => res.json())
    .then(data => {
        let aux = data
        if(aux === '1'){
            h3.innerHTML = 'Completado!'
            h3.className = 'ok';
        }else{
            h3.innerHTML = '500: algo salió mal'
        }
    })
});