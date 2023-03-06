window.addEventListener("load", inicio);

function inicio() {
    var usuario = document.getElementById("usuario");
    usuario.style.border = "solid 1px red";
    var contra = document.getElementById("contra");
    contra.style.border = "solid 1px red";
    var descripcion = document.getElementById("descripcion");
    descripcion.style.border = "solid 1px red";
    var botonAceptar = document.getElementById("crear");
    
    var validarCampos = /^\w{1}/;

    usuario.addEventListener("keyup", validarOk);
    contra.addEventListener("keyup", validarOk);
    descripcion.addEventListener("keyup", validarOk);

    function validacionNombre() {
        if (validarCampos.test(usuario.value)) {
            usuario.style.border = "1px solid green";
            return true;
        } else {
            usuario.style.border = "1px solid red";
            return false;
        }

    }

    function validacionContra() {
        if (validarCampos.test(contra.value)) {
            contra.style.border = "1px solid green";
            return true;
        } else {
            contra.style.border = "1px solid red";
            return false;
        }
    }

    function validacionDesc() {
        if (validarCampos.test(descripcion.value)) {
            descripcion.style.border = "1px solid green";
            return true;
        } else {
            descripcion.style.border = "1px solid red";
            return false;
        }
    }

  

}