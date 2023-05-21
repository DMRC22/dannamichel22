<?php 
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){

                $correo = $_POST["correo"];
                $password = $_POST["passwd"];
                if(empty ($correo) and empty($password)){
                    header("Location:" .Conectar::ruta()."index.php?m=2");
                    exit();
                }else{                          
                    $sql = "SELECT * FROM usuarios WHERE correo=? and password=? and estado=1";
                    $stmt = $conectar ->prepare($sql);
                    $stmt ->bindValue(1,$correo);
                    $stmt ->bindValue(2,$password);
                    $stmt ->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["apellidos"]=$resultado["apellidos"];
                        $_SESSION["correo"]=$resultado["correo"];
                        header("Location:" .Conectar::ruta()."views/inicio.php");
                        exit();                        

                    }else{
                        header("Location:" .Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }

            }  

        }
        public function curso_usuario($usu_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT
            curso_usuario.cursu_id, 
            cursos.cur_id, 
            cursos.curso, 
            cursos.descripcion,
            cursos.fecha_ini,
            cursos.fecha_fin,
            usuarios.usu_id,  
            usuarios.nombre,
            usuarios.ape_paterno, 
            usuarios.ape_materno,
            instructor.uinst_id,
            instructor.nombrei, 
            instructor.ape_maternoi,
            instructor.ape_paternoi,
            instructor.correo                  
            FROM curso_usuario INNER JOIN 
           cursos ON curso_usuario.cursu_id = cursos.cur_id INNER JOIN
           usuarios ON curso_usuario.id_usuario = usuarios.usu_id INNER JOIN
           instructor ON cursos.profesor = instructor.uinst_id
           WHERE 
           curso_usuario.id_usuario = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado = $sql -> fetchAll();
        
        }

        public function usuario_x_id($usu_id){ 
            $conectar=parent::Conexion(); 
            parent::set_names();
            $sql="SELECT * FROM usuarios WHERE estado=1 AND usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_usuario_perfil ($usu_id, $nombre, $ape_materno, $ape_paterno, $password, $sexo) {
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    nombre = ?,
                    ape_materno = ?,
                    ape_paterno = ?,
                    password = ?,
                    sexo = ?,
                WHERE
                    usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue (2,$ape_materno);
            $sql->bindValue (3,$ape_paterno);
            $sql->bindValue(4,$password);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$usu_id);
            
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
            
    }
    
?>
