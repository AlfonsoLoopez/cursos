var pattern=/^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
var namePattern = /^[a-zA-Z]{3,}?$/;
var telPattern = /^(\d{10,13})?$/;
var correoPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

function validar_aspirante(){
    var js_rfc = document.getElementById("f_rfc").value.trim(); //Obteniendo RFC
    var js_nombre = document.getElementById("f_nombre").value.trim(); //Obteniendo nombre
    var js_paterno = document.getElementById("f_paterno").value.trim(); //Obteniendo paterno
    var js_materno = document.getElementById("f_materno").value.trim(); //Obteniendo materno
    var js_empresa = document.getElementById("f_empresa").value.trim(); //Obteniendo empresa
    var js_telefono = document.getElementById("f_telefono").value.trim(); //Obteniendo telefono
    var js_email = document.getElementById("f_email").value.trim(); //Obteniendo email
    var js_curso = document.getElementById("f_curso").value.trim(); //Obteniendo curso
    //Validaciones
    Validacion(js_curso, namePattern, "CURSO");//Validando el CURSO
    Validacion(js_email, correoPattern, "CORREO");//Validando el CORREO
    Validacion(js_telefono, telPattern, "TELEFONO");//Validando el TELEFONO
    Validacion(js_empresa, namePattern, "EMPRESA");//Validando el EMPRESA
    Validacion(js_materno, namePattern, "MATERNO");//Validando el MATERNO
    Validacion(js_paterno, namePattern, "PATERNO");//Validando el PATERNO
    Validacion(js_nombre, namePattern, "NOMBRE");//Validando el NOMBRE 
    Validacion(js_rfc, pattern, "RFC");//Validando el RFC
    return false;
    
    //var nacimiento = js_rfc.substing(4,6) +"/" +js_rfc.substing(6,8) +"/" +js_rfc.substing(8,10) +"/";
    //alert("Su edad es: "+nacimiento)
}

function Validacion(valor, patt, nombre="hola"){
    if(valor.length == 0){
        //Error el dato no puede ir vacio
        Swal.fire({
            type:'Error',
            title: 'Error en '+nombre,
            text:'Error el '+nombre +' no puede estar vacio'
        });
        return false;
    }
    else if(!patt.test(valor)){
        //Error el dato no cumple con las reglas
        Swal.fire({
            type:'Error',
            title: 'Error en '+nombre,
            text:'Error el ' +nombre +' es incorrecto',
            footer:'El formato debe ser: '+patt
        });
        return false;
    }
    else{
        return true;
    }
}