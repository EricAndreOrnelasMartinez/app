const form2 = document.getElementById('contacts')
const form = document.getElementById('form')
const h3 = document.getElementById('hello')
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
        h3.innerHTML = smt;
    }
})

form2.addEventListener('submit', e =>{
    e.preventDefault();
    let form2 = new FormData(form2);
})
