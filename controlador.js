function creaPersona() {
    // Obtener los valores del formulario
    const nombre = document.getElementById('nombre').value;
    const apellidos = document.getElementById('apellidos').value;
    const profesion = document.getElementById('profesiones').value;
    const genero = document.querySelector('input[name="genero"]:checked') ? document.querySelector('input[name="genero"]:checked').value : '';
    const correo = document.getElementById('correo').value;
    const notificaciones = document.getElementById('notificaciones').checked ? 1 : 0;

    // Crear un objeto FormData para enviar los datos como formulario
    const formData = new FormData();
    formData.append('cmd', 'inserta_Persona'); // Agregar la variable cmd
    formData.append('nombre', nombre);
    formData.append('apellidos', apellidos);
    formData.append('profesion', profesion);
    formData.append('genero', genero);
    formData.append('correo', correo);
    formData.append('notificaciones', notificaciones);

    // Enviar los datos usando fetch como formulario URL-encoded
    fetch('command.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Persona creada correctamente');
            limpiarFormulario();
        } else {
            alert('Error al crear la persona');
        }
    })
    .catch(error => {
        console.error('hay un Error:', error);
        alert('Error al crear la persona');
    });
}

limpiarFormulario = ()=>{
    nombre.value="";
    apellidos.value = "";
    profesiones.selectedIndex = 0;
    document.querySelector('input[name="genero"]:checked').checked = false;
    correo.value="";
    notificaciones.checked = false;
}