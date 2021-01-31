
const form = document.getElementById('form')

form.addEventListener('submit', e =>{
    e.preventDefault();
    info = new FormData(form);
    fetch('../../PHP/edit.php',{
        method: 'POST',
        body: info
    })
    .then(res => res.json())
    .then(data => {
        
    })
});