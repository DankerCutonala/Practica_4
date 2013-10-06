<!DOCTYPE html>
<html>
 <head>
  <title>Paises y ciudades</title>
  <h1>10 Paises con 5 ciudades cada uno</h1>
  <link rel="stylesheet" href="color.css" type="text/css"/>
 </head>

 <body>
  
  <section>
   <?php
    $Pais=array();
	$Pais["Africa"]=array("Angola Luanda","Argelia Argel","Camerun","Costa de marfil","Labia Tripolia");
	$Pais["Argentina"]=array("Cordoba","Santa fe","La plata","San Juan","San tiago del Estero");
	$Pais["America"]=array("Bolivia la paz","Argentina Buenos aires","Costa rica san jose","Cuba la habana","Nicaragua Managua");
	$Pais["Europa"]=array("Bulgaria Sofia","Belgica Bruselas","Estonia Tallin","Finlandia Helsinki","Islandia Reikiavik");
	$Pais["Uruguay"]=array("Rivera","Las piedras","Melo","Rocha","Trinidad");
	
	$Pais["Brasil"]=array(" Campina Grande"," Campinas"," Ipatinga","Goiânia","Nuevo Hamburgo");
	$Pais["Ecuador"]=array("quito","Guayaquil","Cuenca","Ambato","Babahoyo");
	
	$Pais["Grecia"]=array("Alonissos","Andros","Corf&uacute","Atenas","Delos");
	$Pais["Hungria"]=array("Budapest","Debrecen","Sopron","Kaposvár","Eger");
	$Pais["Rep&uacuteblica Checa"]=array("Praga","Ostrava","Hradec Kr&aacutelov&eacute","Zlín","Most");
	
	
	
	foreach($Pais as $nombre=>$ciudades)
	{

	 echo "<dl><ul>";
	 echo "<dt><li><h3>".$nombre."</h3></li></dt>";
	 
	 foreach($Pais[$nombre] as $ciudad)
	 {
	   echo "<dd><li>".$ciudad."</li></dd>";
	 }
	 echo "</ul></dl>";
	}
	
   ?>
  </section>
  
 </body>
</html>