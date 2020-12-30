
let formulario = document.getElementById('formulario');

formulario.addEventListener('submit', e => {
    e.preventDefault();
    //alert('it works!!!');
    let data = new FormData(formulario)
    console.log(data.get('user'));
    console.log(data.get('pass'));

    fetch('post.php', {
        method: 'POST',
        body: data
    })

        .then(res => res.json())
        .then(datos => {
            console.log(datos)
        })
});