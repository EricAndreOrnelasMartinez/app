

const form = document.getElementById('form')
const contact = document.getElementById('new')
const h3 = document.getElementById('in')

let datos = new FormData();

fetch('../../PHP/añadir.php', {
    method: 'POST',
    body: datos
})

.then(res => res.json())
.then(data =>{
    let aux = data;
    if(aux === '0'){
        window.location.assign('../../');
    }
})

contact.addEventListener('submit', e =>{
    e.preventDefault();
    let contactF = new FormData(contact);
    if(!(contactF.get('name') === '' || contactF.get('last') === ''|| contactF.get('Mail')  === ''|| contactF.get('phone') === '')){
    fetch('../../PHP/añadir.php',{
        method: 'POST',
        body: contactF
    })

    .then(res => res.json())
    .then(data =>{
        let aux = data;
        if(aux === '1'){
            h3.innerHTML = "Registrado";
            document.querySelector('.n').value = '';
            document.querySelector('.a').value = '';
            document.querySelector('.m').value = '';
            document.querySelector('.t').value = '';

        }else{
            h3.innerHTML = "500: algo salió mal";
        }
    })
}else{
    h3.innerHTML = "Llenar todos los campos"
    h3.className = "ok"
}
})