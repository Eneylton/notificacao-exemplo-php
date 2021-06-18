<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações</title>
<script src="sweetalert2/sweetalert2.all.min.js"></script>
</head>
<body>


<?php
function alerta($icon, $title, $msn){
echo "<script type='text/javascript'>
Swal.fire({
  type:'type',  
  icon: '$icon',
  title: '$title',
  text: '$msn'
 
}) 
</script>";

}

alerta("success","Sucesso","Produto cadastrado com sucesso...");
?>



</body>
</html>