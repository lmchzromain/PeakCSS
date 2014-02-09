<?php require 'header.php'?>
    <div id="contact_us">
        <div class="content">            
            <?php
                
                $regex_name = '/^[a-zA-Z_-\s][^0-9(\)!]{2,13}$/i';                
                $regex_mail = "/[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z](?:[a-z]*[a-z])?\.)+(?:[A-Z]{2}|com|org|net|fr)/"; 
                $regex_why = "/^[a-zA-Z0-9-!]+$/i";                
                
                
                // Vérification des champs non vide 
                if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['why']) && !empty($_POST['message_area'])){
                    // Vérification des regex sur les champs en question
                    if(preg_match($regex_name, $_POST['name']) && preg_match($regex_mail, $_POST['mail']) && preg_match($regex_why, $_POST['why'])){
                        //Préparation de l'envoie du mail
                        if(isset($_POST['send'])){                            
                            // Préparation de l'en-tête du mail reçu
                            $to = "lemoine.simon.perso@gmail.com";
//                            $to = "mathieu.dou@gmail.com";
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
						header('location:contact.php');
                	} 
                }else{
                        header('location:contact.php');
                    
                }    
            ?>    
                
        </div>
    </div>
    
<?php require 'footer.php'?>