<?php
         try {
            $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'foodup' );
            
        } catch (Exception $e) {
    
            die('Erreur : '.$e->getMessage());
        }
    


        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['mail']);  
        $telephone = strip_tags($_POST['phone']);  
        $ville = strip_tags($_POST['ville']);    
        $photo = $_POST['photo']; 
        $education = strip_tags($_POST['education']);
        $skill = $_POST['skill'];
        $postal = $_POST['postal'];
    

        $preparation = "INSERT INTO chiefs (name, email, telephone, ville, photo) VALUES ('$name', '$email', '$telephone', '$ville', '$photo')";
        $exution = mysqli_query($connexion, $preparation);

        try {
            $connexion =  new PDO('mysql:host=localhost;dbname=foodup', 'root', '');

    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }

        $reponse = $connexion->query('SELECT photo FROM chiefs');

        $donnees = $reponse->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecharger votre CV</title>
    <script>
        function Print() {
            window.print();
        }
    </script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@300 & family= Roboto:wght@300 & display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montaga&display=swap');

:root{
    --gradient-head:  linear-gradient(95.7deg, #340738 0.64%, #000233 101%);
    --Font: 'Roboto', sans-serif;
    --font: "Montaga", serif;
    --gradient-first: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(38,13,130,0.9641106442577031) 86%);
    --gradient-second: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,38,121,0.6195728291316527) 87%, rgba(0,212,255,1) 100%);
    --gradient-third: linear-gradient(45deg, hsla(9, 58%, 47%, 1) 0%, hsla(3, 42%, 39%, 1) 0%, hsla(215, 100%, 15%, 1) 100%);;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
}
.gradient-head{
    background: var(--gradient-head);
}
html{
    margin: 0;
    padding: 0;
    border: none;
    box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    width: 100vw;
    height: 100vh;
}
.font{
    font-family: var(--font);
}
</style>





<body class="">
    
    
<div class="flex-1 gradient-head">
        <input type="button" value="Telecharger le CV" class="gradient-head w-[10rem] h-[3rem] rounded transition-all text-white hover:scale-[1.1]" onclick="Print()"></input>
</div>


    <section class="flex w-sreen bg-red-500 h-[180vh]">

   





    <div class="flex justify-center flex-[5] bg-gray-200 pt-[2rem]">
        <!-- Corps du cv -->
            <div class="w-[60%] h-[90%] bg-black">

                <div class="flex w-full h-[20%] bg-red-500">
              
                        <div class="flex items-center justify-center flex-1 bg-gray-300">
                                
                            
                        <img src='assets/photo/<?php echo $photo ?>'  alt="" class="h-[80%] w-[65%] rounded-[50%]">
                            
                               
                        </div>
                        <div class="flex-[2] gradient-head p-[2rem] flex justify-start items-center text-white">
                               <h1 class="font-bold font text-[2rem]"><?php echo $name ?></h1> 
                        </div>
 
                </div>

                   

                <div class="w-full h-[4%] bg-[#4C4C4C] flex justify-center items-center">
                    <h1 class="text-white">Motivé, dynamique et curieux</h1>
                </div>


                <div class="w-full h-[85%] bg-[#DADADA] flex">
                    
                        <div class="flex flex-col flex-1 bg-green-300">
                            
                                <div class="w-full bg-[#210536] p-[1rem] flex flex-col gap-[1rem] text-white">

                                        <div>
                                            <img src="modele\contact.png" alt="" class="w-[90%]">
                                       </div>
                                    
                                       <div>
                                            <span class="flex items-center font-bold"><img src="assets\img\phonetel.png" alt="" class="w-[15%] h-[15%]"><h1>Telephone :</h1></span>
                                            <h1 class="font border-orange-500 border-b-[.2rem] pb-[.1rem]"><?php echo $telephone ?></h1>
                                       </div>

                                       <div>
                                            <span class="flex items-center font-bold"><img src="assets\img\mail.png" alt="" class="w-[15%] h-[15%]">E-mail :</span>
                                            <h1 class="border-orange-500 border-b-[.2rem] pb-[.1rem] font"><?php echo $email ?></h1>
                                       </div>

                                       <div>
                                            <span class="flex items-center font-bold"><img src="assets\img\address.png" alt="" class="w-[15%] h-[15%]">Adresse :</span>
                                            <h1 class="border-orange-500 border-b-[.2rem] pb-[.1rem] font"><?php echo $ville ?> , Cameroun</h1>
                                       </div>

                                       <div>
                                            <span class="flex items-center font-bold"><img src="assets\img\postal.png" alt="" class="w-[15%] h-[15%]">Code Postal</span>
                                            <h1 class="border-orange-500 border-b-[.2rem] pb-[.1rem] font"><?php echo $postal ?></h1>
                                       </div>
                                    
                                </div>

                                <div class="w-full bg-[#210536] p-[1rem] text-white">
                                    <h1 class="font-bold"><img src="modele\competences.png" alt="" class="w-[90%]"></h1>
                                    <hr class="mt-[1rem] h-[.2rem] w-full bg-gray-700 border-none">

                                    <ol class="mt-[1rem] font">
                                        <?php
                                            if(isset($_POST['choix'])){
                                                foreach($_POST['choix'] as $valeur){
                                                    echo '<li>'.$valeur.'</li><br>';
                                                }
                                            }
                                                
                                        ?>
                                    </ol>

                                    
                                </div>

                                <div class="w-full h-full bg-[#210536] p-[1rem] text-white">
                                    <h1 class="font-bold"><img src="modele\langues.png" alt="" class="w-[90%]"></h1>
                                    <hr class="mt-[1rem] h-[.2rem] w-full bg-gray-700 border-none">

                                    <ol class="mt-[1rem] font">
                                        <li>Français</li>
                                        <li>Anglais</li>
                                    </ol>
                                </div>           
                        </div>

                        <div class="flex-[2.2] bg-white">



                            <div class="w-full bg-white p-[1rem]">
                                <h1 class="font-bold"> <img src="modele\skills.png" alt="" class="w-[30%]"></h1>
                                <hr class="mt-[0.5rem] h-[.2rem] w-full bg-gray-700 border-none">

                                <ol class="mt-[1rem] font">
                                    <?php
                                        echo $skill;
                                    ?>
                                </ol>

                                
                            </div>
                            
                            <div class="w-full bg-white p-[1rem]">
                                <h1 class="font-bold"><img src="modele\diplome.png" alt="" class="w-[30%] h-[10%]"></h1>
                                <hr class="mt-[1rem] h-[.2rem] w-full bg-gray-700 border-none">

                                <ol class="mt-[1rem] font">
                                    <li class="font-bold text-[1.2rem] font"><?php echo $education ?></li>
                                    
                                </ol>


                                       <div>
                                            <img src="assets\img\education.png" alt="">
                                       </div>     


                            </div>

                        
                            






                            
                            
                        </div>





                    
                </div>



                
            </div>






        
    </div>







</section>

    










<script src="js/tailwind.js"></script>
<script src="js/index.js"></script>
</body>
</html>

        



























