document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registro").addEventListener('submit', validarRegistro); 
});
  
function validarRegistro(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('nombre').value;
    if(nombre.length == 0) {
      alert('Ingrese algún nombre');
      return;
    }   
    if(nombre.length > 100) {
        alert('El nombre es demasiado largo');
        return;
    }
    var ap = document.getElementById('ap').value;
    if(ap.length == 0) {
        alert('Ingrese algún apellido');
        return;
    }   
    if(ap.length > 100) {
        alert('El apellido es demasiado largo');
        return;
    }
    var am = document.getElementById('am').value;
    if(am.length == 0) {
        alert('Ingrese algún apellido');
        return;
    }   
    if(am.length > 100) {
        alert('El apellido es demasiado largo');
        return;
    }
    var user = document.getElementById('user').value;
    if(user.length == 0) {
       alert('No has escrito nada en el usuario');
       return;
    }   
    if (user.length > 20) {
        alert('El usuario no puede contener más de 20 caracteres');
        return;
    }
    var email = document.getElementById('email').value;
    if (email.length > 100) {
      alert('Correo demasiado largo');
      return;
    }
    var ps = document.getElementById('ps').value;
    if (ps.length > 40) {
      alert('contraseña demasiado larga demasiado largo');
      return;
    }
    if (ps.length == 0) {
        alert("Tienes que ingresar una contraseña");
        return;
    }
    this.submit();
}