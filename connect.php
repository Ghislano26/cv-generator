<?php
        try {
            $conn = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'cv' );
            
        } catch (Exception $e) {
    
            die('Erreur : '.$e->getMessage());
        }


        $name = strip_tags($_POST['name']);
        $mail = strip_tags($_POST['mail']);  
        $telephone = strip_tags($_POST['phone']);  
        $ville = strip_tags($_POST['ville']);    
        $vue = strip_tags($_POST['photo']); 
    

        $prep = "INSERT INTO profil (name, mail, telephone, ville, vue) VALUES ('$name', '$mail', '$telephone' '$ville', '$vue')";
        $exution = mysqli_query($conn, $prep);
?>