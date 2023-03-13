<!DOCTYPE html>
<html>
<head>
        <?php include "../inclusiones/meta_tags.php"?>
        <title>Registro de aspirantes </title>
        <?php include "../inclusiones/css_y_favicon.php"?>
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-12">
                                <?php include_once "../inclusiones/menu_horizontal_superior.php" ?>
                        </div>
                </div>
        </div>

    <div class="container">    
        <h1>Registrarse para uno o más cursos</h1>
        <p>Puede seleccionar 1 o más cursos, es requisito el RFC</p>
        <form name="formulario" id="formulario" action="../actions/inserta_aspirante.php" method="post" onsubmit="return validar_aspirante();">
                <div id="row">
                        <div class="col-25">
                                <label>RFC:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="13" class="mayusculas" type="text" name="f_rfc" id="f_rfc" value="" placeholder="Ingrese su RFC">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Nombre:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_nombre" id="f_nombre" value="" placeholder="Ingrese su Nombre">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Paterno:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_paterno" id="f_paterno" value="" placeholder="Ingrese su Apellido Paterno ">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Materno:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_materno" id="f_materno" value="" placeholder="Ingrese su Apellido Materno ">    
                        </div>
                </div>

 
                <div id="row">
                        <div class="col-25">
                                <label>Empresa:</label>
                        </div>
                        <div class="col-75">    
                                <select name="f_empresa" id="f_empresa">
                                    <option value="">Seleccione</option>
                                    <option value="tredicom">TREDICOM</option>
                                    <option value="evotec">EVOTEK</option>
                                </select>    
                        </div>
                </div>                                                                

                <div id="row">
                        <div class="col-25">
                                <label>Teléfono:</label>
                        </div>
                        <div class="col-75">    
                                <input  maxlength="10" type="tel" name="f_telefono" id="f_telefono" value="" placeholder="Ingrese su teléfono personal">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>E-mail:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="100" type="email" name="f_email" id="f_email" value="" placeholder="Ingrese su correo electrónico personal">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Curso:</label>
                        </div>
                        <div class="col-75">    
                                <select name="f_curso" id="f_curso">
                                    <option value="">Seleccione</option>
                                    <option value="python">PYTHON</option>
                                    <option value="react">REACT</option>
                                    <option value="css">CSS</option>
                                </select>    
                        </div>
                </div>                

                <div id="row2">
                            <input class="boton_menu" type="submit" name="add" value="Registrar">
                </div>                
        </form>
    </div><!--CONTENEDOR-->
        <?php include "../inclusiones/js_incluidos.php"?>
</body>
</html>