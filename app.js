
const form = document.getElementById('Form')
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
        document.write("<h3>" + data + "</h3>")
    })
})