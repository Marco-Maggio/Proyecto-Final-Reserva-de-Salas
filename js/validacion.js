inputs = document.querySelectorAll('input');
formulario = document.getElementById('formulario');

formulario.addEventListener('submit', function (e) {
    e.preventDefault(); 

    let datos = new FormData(formulario);

    fetch('./php/validacion.php', {
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            if (data === 'success') {
               inputs.classList.add('active');
                
            } else if (data === 'unsuccess-mail') {
              
            }else {
              

            }
        })
})