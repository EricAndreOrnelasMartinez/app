
const form = document.getElementById('form')
const title = document.getElementById('hello')
let datos = new FormData();

fetch('../PHP/inicio.php',{
    method: 'POST',
    body : datos
})

.then(res => res.json())
.then(data => {
    let smt = "Hola " + data + "!!" ;
    let aux = data;
    if(aux === '0'){
        window.location.assign('../')
    }else{
        title.innerHTML = smt;
    }
})