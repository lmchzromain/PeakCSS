<?php require 'header.php'?>
    <div id="contact_us">
        <div class="content">            
            <?php
                
                $mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
                $regex = "/^[a-z]+([ \-']?[a-z]+[ \-']?[a-z]+[ \-']?)[a-z]+$/i";
                $regex_2 ="/^[A-Za-z0-9 .'?!,@$#\-_]/";
                
                
                // Vérification des champs non vide 
                if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['why']) && !empty($_POST['message_area'])){
                    // Vérification des regex sur les champs en question
                    if(preg_match($mail, $_POST['mail']) && preg_match($regex, $_POST['name']) && preg_match($regex, $_POST['why'])  && preg_match($regex_2, $_POST['message_area'])){
                        //Préparation de l'envoie du mail
                        if(isset($_POST['send'])){
                            
                            // Préparation de l'en-tête du mail reçu
                            $to = "mathieu.dou@gmail.com";
                            $sujet = 'PeakCSS contact form ';
                            $message = 'From : '.$_POST['mail']."\r\n";
                
                            // On récupère la valeur de chaque champs et on le stock dans une variable                    
                            $message .= "Name : ".$_POST['name']."\r\n";
                            $message .= "Why : ".$_POST['why']."\r\n";
                            $message .= "Message : ".stripcslashes($_POST['message_area'])."\r\n";
                
                            // Condition sur la fonction mail() de php
                            if (mail($to,$sujet,$message)){
                                //Le mail a été expédié
                                echo '<div class="summary_01">
                                        <p> Message bien remis au destinataire ! </p>
                                      </div>'; 
                            } else {
                                //Le mail n'a pas été envoyé
                                echo '<div class="summary_01">
                                        <p> An error occured when submitting the form by email  
                                            <a href=\'contact.php\'>Try again !</a> </p>
                                      </div>';   
                            }                
                        }
                        
                        // Récapitulatif du mail
                        echo '<div class="summary">
                                  <p> Your personal information </p></br></br>
                                  <p> Your name : '.$_POST['name'].'</p>
                                  <p> Your mail : '.$_POST['mail'].'</p>
                                  <p> The subject : '.$_POST['why'].'</p>
                                  <p> Your message : '.$_POST['message_area'].'</p>
                              </div>'; 
                    }else{
                    echo "<script>alert(\"Un problème à été détecté, veuillez activer le javascript de votre naviguateur\")</script>"; 
                } 
                }else{
                    echo "<script>alert(\"Un problème à été détecté, veuillez activer le javascript de votre naviguateur\")</script>"; 
                }    
            ?>    
                
        </div>
    </div>
    
<?php require 'footer.php'?>