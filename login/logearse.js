document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});
  
function validarFormulario(evento) {
    evento.preventDefault();
    var user = document.getElementById('user').value;
    if(user.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }   
    if (user.length > 20) {
      alert('El usuario no puede contener más de 20 caracteres');
      return;
    }
    var ps = document.getElementById('ps').value;
    if (ps.length > 20) {
      alert('La contraseña no puede superar los 20 caracteres');
      return;
    }
    if (ps.length < 1) {
      alert('Tiene que ingresar alguna contraseña');
      return;
    }
    this.submit();
  }