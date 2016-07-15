<?
if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")) 
{
	$nombre_archivo = $_FILES['userfile']['name'];
	move_uploades_file($_FILES['userfile']['tmp_name'], "../Imagenes/Concrebombas_files/".$nombre_archivo);
	?>
    <script>
	opener.document.form1.strImagen.value="<?php echo $nombre_archivo; ?>";
	self.close();
    </script>
<?    
}
else
?>
<form action="questionImage.php" method="post" enctype="multipart/form-data" id="form1" >

  <p>
    <input name="userfile" type="file">
    
  </p>
  <p>
    <input type="submit" name="button" id="button" value="subir imagen">
    <input type="hidden" name="enviado" value="form1" />
  </p>
</form>