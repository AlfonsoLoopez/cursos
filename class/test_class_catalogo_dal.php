<?php
    include("class_catalogo_curso_dal.php");
    $obj_curso = new catalogo_curso_dal;
    $resultado = $obj_curso->datos_por_id(4);
    if($resultado==null){
        echo "no se encontro registro";
    }  
    else{
        echo '<pre>';
        print_r($resultado);
        echo '</pre>';
    }

    $resultado2 = $obj_curso->obtener_lista_cursos();
    if($resultado2==null){
        echo "no se encontraron registro";
    }
    else{
        echo '<pre>';
        print_r($resultado2);
        echo '</pre>';
    }

    /*insertao*/
    $objins = new catalogo_curso(null, "PHP", null);
    $result_ins=$obj_curso->inserta_curso($objins);
    if($result_ins==1){
        echo "curso insertado correctamente.";
    }
    else{
        echo "no se inserto curso, vuela intenta 100 vece.";
    }
    
    /*actualizao*/
    $objupd = new catalogo_curso(2, "c++", null);
    $result_upd=$obj_curso->actualizar_curso($objupd);
    if($result_upd==1){
        echo "curso actualizado correctamente.";
    }
    else{
        echo "no se actualizo curso, vuela intenta 200 vece.";
    }

    
    /*actualizao*/
    $result_dld=$obj_curso->borrar_curso(2);
    if($result_dld==1){
        echo "curso borradp correctamente.";
    }
    else{
        echo "no se borro curso, vuela intenta 200 vece.";
    }
?>