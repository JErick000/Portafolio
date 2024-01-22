<?php 

//crear una clase conexion
    class Conexion{
        //atributos
        private $usuario="root";
        private $password="";
        private $servidor="localhost";
        private $base="universidad";

        //métodos para conectar
        public function conectar(){
            //Código a evaluar para las posibles errores que pueda existir try catch
            try{
                //conexion usando PDO
                $con=new PDO("mysql:host=$this->servidor;dbname=$this->base;",$this->usuario,$this->password);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            RETURN $con;
            }
            catch (Exception $e){
                echo "Se encontró un error: ".$e->getMessage();
            }
        
        }

        //Metodo para listar brand
        public function DepartamentoList(){
            $arr_filas=null;
            $cn=$this->conectar();
            $sql="select * from departamento";
            $rs=$cn->prepare($sql);
            $rs->execute();

            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<th>ID</th><th>NOMBRE</th></tr>";

            $i=1; //contador
            while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$arr_filas["id"]."</td>".
                     "<td>".$arr_filas["nombre"]."</td>".
                     "</tr>";
                $i++;     
            }
            echo "</table>";
            $cn=null;
        }
        //***********************************************************
        //Metodo para listar producto
        public function PersonaList(){
            $arr_filas=null;
            $cn=$this->conectar();
            $sql="select * from persona";
            $rs=$cn->prepare($sql);
            $rs->execute();

            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<th>ID</th><th>NIF</th><th>NOMBRE</th><th>APELLIDO1</th><th>APELLIDO2</th><th>CIUDAD</th><th>DIRECCIÓN</th><th>TELEFONO</th><th>FECHANACIMIENTO/th><th>SEXO</th><th>TIPO</th></tr>";

            $i=1; //contador
            while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$arr_filas["id"]."</td>".
                     "<td>".$arr_filas["nif"]."</td>".
                     "<td>".$arr_filas["nombre"]."</td>".
                     "<td>".$arr_filas["apellido1"]."</td>".
                     "<td>".$arr_filas["apellido2"]."</td>".
                     "<td>".$arr_filas["ciudad"]."</td>".
                     "<td>".$arr_filas["direccion"]."</td>".
                     "<td>".$arr_filas["telefono"]."</td>".
                     "<td>".$arr_filas["fecha_nacimiento"]."</td>".
                     "<td>".$arr_filas["sexo"]."</td>".
                     "<td>".$arr_filas["tipo"]."</td>".
                     "</tr>";
                $i++;     
            }
            echo "</table>";
            $cn=null;
        }
        //***********************************************************
        //Metodo para listar tienda
        public function GradoList(){
            $arr_filas=null;
            $cn=$this->conectar();
            $sql="select * from grado";
            $rs=$cn->prepare($sql);
            $rs->execute();

            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<th>ID</th><th>Nombre</th></tr>";

            $i=1; //contador
            while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$arr_filas["id"]."</td>".
                     "<td>".$arr_filas["nombre"]."</td>".
                     "</tr>";
                $i++;     
            }
            echo "</table>";
            $cn=null;
        }
        public function ProfesorList(){
            $arr_filas=null;
            $cn=$this->conectar();
            $sql="select * from profesor";
            $rs=$cn->prepare($sql);
            $rs->execute();

            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<th>IDprofesor</th><th>IDdepartamento</th></tr>";

            $i=1; //contador
            while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$arr_filas["id_profesor"]."</td>".
                     "<td>".$arr_filas["id_departamento"]."</td>".          
                     "</tr>";
                $i++;     
            }
            echo "</table>";
            $cn=null;
        }
        

    }
?>