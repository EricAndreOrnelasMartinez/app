
const form = document.getElementById('Form')
const h3 = document.getElementById('res')
let show = ''

form.addEventListener('submit', function(e){
    e.preventDefault();
    
    let datos = new FormData(form);

    fetch('backend.php',{
        method: 'POST',
        body: datos
    })
    
    .then(res => res.json())
    .then(data => {
        h3.innerHTML = data;
        h3.className = 'ok';
    })
})