<?php
    include('class_catalogo_curso.php');
    include('class_db.php');

    class catalogo_curso_dal extends class_db{
        function __construction(){
            parent::__construction();
        }

        function __destruct(){
            parent::__destruct();
        }

        function datos_por_id($id){
            $id=$this->db_conn->real_escape_string($id);//ayuda a prevenir el sql inyection
            $sql = "select * from catalogo_curso where ID_CURSO='$id'";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn, $this->db_query) 
            or die (mysql_error($this->db_conn));

            $total_cursos = mysqli_num_rows($result);
            $obj_det = null;

            if($total_cursos==1){
                $renglon=mysqli_fetch_assoc($result);
                $obj_det = new catalogo_curso(
                    $renglon["ID_CURSO"],
                    $renglon["NOMBRE_CURSO"],
                    $renglon["FECHA_ALTA"],
                );
            }
            return $obj_det;
        }

        function obtener_lista_cursos(){
            $sql = "select *  from catalogo_curso";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query)
            or die(mysqli_error($this->db_conn));

            $total_cursos=mysqli_num_rows($rs);
            $obj_det=null;

            if($total_cursos>0){
                $i = 0;
                while($renglon = mysqli_fetch_assoc($rs)){
                    $obj_det=new catalogo_curso(
                        $renglon["ID_CURSO"],
                        $renglon["NOMBRE_CURSO"],
                        $renglon["FECHA_ALTA"],
                    );

                    $i++;
                    $lista[$i]=$obj_det;
                    unset($obj_det);
                }
                return $lista;
            }
        }

        function inserta_curso($obj){
            $fecha = date('Y-m-d');
            $sql="INSERT INTO catalogo_curso(";
            $sql.="'NOMBRE_CURSO',";
            $sql.="'FECHA_ALTA')";
            $sql.="VALUES(";
            $sql.="'".$obj->getNOMBRE_CURSO()."',";
            $sql.="'".$fecha."'";
            $sql.=");";


            $this->db_conn->set_charset('utf8');
            $this->set_sql($sql);
            mysqli_query($this->db_conn, $this->db_query) or 
            die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $insertado = 1;
            }
            else{
                $insertado = 0;
            }
            unset($obj);
            return $insertado;
        }

        function actualizar_curso($obj){
            $sql="UPDATE catalgo_curso SET ";
            $sql.="NOMBRE_CURSO="."'".$obj->getNOMBRE_CURSO()."'";
            $sql.=" WHERE ID_CURSO="."'".obj->getID_CURSO()."';";

            $this->set_sql($sql);
            $this->db_conn->set_charset('utf8');
            mysqli_query($this->db_conn, $this->db_query) 
            or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $actualizao = 1;
            }
            else{
                $actualizao = 0;
            }
            unset($obj);
            return $actualizao;
        }

        function borrar_curso($id){
            $id=$this->db_conn->real_escape_string($id);
            $sql="DELETE FROM catalogo_curso WHERE ID_CURSO = '$id'";

            
            $this->set_sql($sql);
            mysqli_query($this->db_conn, $this->db_query)
            or die(mysqli_error($this->db_conn));
            if(mysqli_affected_rows($this->db_conn)==1){
                $borrao = 1;
            }
            else{
                $borrao = 0;
            }
            unset($obj);
            return $borrao;
        }
    }
?>