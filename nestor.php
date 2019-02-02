   <html>
      <head>
        <meta charset="utf-8" />
          <title></title>
          <style type="text/css">
        body{
				background-image: url(60B.jpg)        	
        	}  
        	h1{
            color: white;       		
        		}
        	table{
            color: white;
            font-size: 25px     		
        		}	
        	
 
</style>
      </head>
    <body>
    
    <?php
error_reporting(E_ALL);
ini_set('display_errors','1');

    ?>
    <br><br><br>
      <h1><center><b>Estudiantes Registrados</b></center></h1>
      <br><br><br><br><br>
       <table align="center" border="1" cellspacing="0" cellpadding="1">
         <tr> 
          <th>Cedula
          <th>Nombre
          <th>Apellido
          <th>Edad
         </tr> 
     <?php
       require("conex.php");
       $idcone=conexion();
       $sql="select * from jejox";
       $registro=mysqli_query($idcone,$sql);
         while($fila=mysqli_fetch_array($registro)) { 
           echo"<tr>";
             echo"<td align='center'>" . $fila['cedula'];
             echo"<td align='center'>". $fila['nombre'];
             echo"<td align='center'>". $fila['apellido'];
             echo"<td align='center'>". $fila['edad'];
           echo"</tr>";
         }
         echo"</table>";
          mysqli_free_result($registro);
          mysqli_close($idcone);           
     
     
     
     
     ?>    
          



   </body>
  </html>