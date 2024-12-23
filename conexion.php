<?php
            $servername = 'db';
            $username = 'root';
            $password = 'rootpassword';
            $db ='Gestionplayers';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password,$db);
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie';
        ?>