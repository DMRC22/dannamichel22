<?php

   require_once("../config/conexion.php"); 
   require_once("../models/Usuario.php");
   $usuario = new Usuario();

   switch($_GET["opc"]){
    case "listar_cursos":
        $datos=$usuario->curso_usuario($_POST["usu_id"]);
        $data=Array();
        foreach($datos as $row){
            $sub_array = array();
            //columnas de las tablas a mostrar segun select del modelo
            $sub_array[] = $row["curso"];
            $sub_array[] = $row["fecha_ini"];
            $sub_array[] = $row["fecha_fin"];
            $sub_array[] = $row["nombrei"]." ".$row["ape_paternoi"];
            //$sub_array[] = $row["nombrei"]." ".$row["ape_paternoi"];
            $sub_array[] = '<button type="button" class="btn btn-outline-primary btn-icon">Certificado</button>';
            $data[] = $sub_array;
        }
      
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);
        break;


        case "mostrar":
            $datos = $usuario->usuario_x_id($_POST["usu_id"]); 
            if(is_array($datos)==true and count($datos)<>0) {
                foreach ($datos as $row) {
                    $output ["usu_id"] = $row["usu_id"];
                    $output ["nombre"] = $row["nombre"];
                    $output ["ape_materno"] = $row["ape_materno"];
                    $output ["ape_paterno"] = $row["ape_paterno"];
                    $output ["correo"] = $row["correo"];
                    $output ["password"] = $row["password"];
                    $output ["sexo"] = $row["sexo"]; 
                }
                echo json_encode($output);
            }
            break;

            case "update_perfil":
                $usuario->update_usuario_perfil(
                $_POST["usu_id"],
                $_POST["nombre1"],
                $_POST["ape_materno1"],
                $_POST["ape_paterno1"],
                $_POST["password1"],
                $_POST["sexo1"]);
            break;
    }

?>