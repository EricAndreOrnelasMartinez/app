const container = document.getElementById('container')
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

fetch('../PHP/contacts.php',{
    method: 'POST'
})

.then(res => res.json())
.then(data => {
    let output = '';
    console.log(data);
    for(let i in data){
        output += `<div class="con">
        <p>Nombre: ${data[i].Nombre}</p><br>
        <p>Apeido: ${data[i].Apeido}</p><br>
        <p>Mail: ${data[i].Mail}</p><br>
        <p>Telefono: ${data[i].Telefono}</p><br>
        <a href="../PHP/deletec.php"><button type="button">Eliminar</button></a>
        </div>`
    }
    container.innerHTML = output;
})
