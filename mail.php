<?php require 'header.php'?>
    <div id="contact_us">
        <div class="content">            
            <?php
                
                if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['why']) && !empty($_POST['message_area'])){
                    //Préparation de l'nenvoie du mail
                    if(isset($_POST['send'])){
                        
                        // Préparation de l'en-tête du mail reçu
                        $to = "mathieu.dou@gmail.com";
                        $info = 'PeakCSS contact form ';
                        $header = 'From : '.$_POST['mail'];
            
                        // On récupère la valeur de chaque champs et on le stock dans une variable                    
                        $message = "Name : ".$_POST['name']."\r\n";
                        $message .= "Why : ".$_POST['why']."\r\n";
                        $message .= "Requête : ".stripcslashes($_POST['message_area'])."\r\n";
            
                        // Condition sur la fonction mail() de php
                        if (mail($to,$info,$header,$message)){
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
                }    
            ?>    
                
        </div>
    </div>
    
<?php require 'footer.php'?>