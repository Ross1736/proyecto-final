<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

   $para    = 'bryan1736b@gmail.com';
   $subject = "Archivos adjuntos";

   $from = stripslashes($_POST['emailCliente']);

   $mime_boundary="==Multipart_Boundary_x".md5(mt_Rand())."x";

   $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";

   $message="CINEMUNDO\n";
   $message .= "Nombre: ".$_POST["nombrecompleto"]."\nMensaje :".$_POST["mensaje"];

   $message = "Este es un mensaje de varias partes en formato MIME .\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";

foreach($_FILES['archivo']['tmp_name'] as $key => $tmp_name){
      $tmp_name   = $_FILES['archivo']['tmp_name'][$key];
      $type       = $_FILES['archivo']['type'][$key];
      $name       = $_FILES['archivo']['name'][$key];
      $size       = $_FILES['archivo']['size'][$key];

      if (file_exists($tmp_name)){
         if(is_uploaded_file($tmp_name)){
            
            $file = fopen($tmp_name,'rb');
            $data = fread($file,filesize($tmp_name));
            fclose($file);

            $data = chunk_split(base64_encode($data));
         }

         
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }

   $message.="--{$mime_boundary}--\n";
   
   if (mail($para, $subject, $message, $headers)){
      echo '
         <script>
            alert("Se envio el correo");
            window.location = "../inicio.php";
         </script>
      ';
   } else {
      echo '
      <script>
         alert("No se pudo enviar el correo");
         window.location = "../contacto.php";
      </script>
      ';
   }
}
?>