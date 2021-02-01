
const form = document.getElementById('user')

form.addEventListener('submit', e =>{
    e.preventDefault()
    let info = new FormData(form)
    let pass1 = document.querySelector('.pwd1').value;
    let pass2 = document.querySelector('.pwd2').value;
    if(!(info.get('name') === '' || info.get('last') === '' || info.get('mail') === '' || info.get('pass1') === '' || info.get('pass2') === '')){
    if(pass1 === pass2){
        fetch('../PHP/signup.php', {
        method: 'POST',
        body: info
    })    
    .then(res => res.json())
    .then(data =>{
        let aux = data
        if(aux === '1'){
            document.querySelector('.res').innerHTML = 'registrado!!'
            document.querySelector('.pwd1').value = '';
            document.querySelector('.pwd2').value = '';
            document.querySelector('.nm').value = '';
            document.querySelector('.lt').value = '';
            document.querySelector('.ml').value = '';
        }else{
            document.querySelector('.res').innerHTML = 'Correo existente'
        }
    })
}else{
    document.querySelector('.res').innerHTML = 'La contraseña no es la misma'
}
}else{
    document.querySelector('.res').innerHTML= 'Llenar todos los campos'
}
})