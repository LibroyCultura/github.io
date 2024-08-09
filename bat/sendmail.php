<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Informes PDF</title>
</head>


<?php

$dni = $_POST['dni'];
$horaactual = $_POST['horaactual'];

    $fileName = $dni . ".pdf";
    $archivo = 'http://ees2.orgfree.com/informes/informes2021/'.$fileName ;

 
        $downloadfilename = $downloadfilename !== null ? $downloadfilename : basename($archivo);
        header('Content-Description: File Transfer');

        header('Content-Disposition: attachment; filename=' . $downloadfilename);
        header('Content-Type: application/octet-stream');
    /*    ob_clean();*/
  /*      flush();*/
       readfile($archivo);
       /*exit;*/
  /*  }*/
 


?>
<body>
</body>
</html>