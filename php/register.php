<?php
    include 'conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios(email, pass) VALUES ('$email','$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo'
            <script>
                alert("usuario registrado");
                window.location = "../index.php"
            </script>
        ';
    } else {
        echo'
            <script>
                alert("usuario no registrado");
                window.location = "../index.php";
            </>
        ';
    }

    mysqli_close($conexion);
?>