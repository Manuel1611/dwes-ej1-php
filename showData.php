<!doctype html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Practice 1</title>
        <link rel="stylesheet" href="style4.css">
        
    </head>
    
    <body>
        
        <div class="container">
            
            <p class="title">Summary</p>
            
            <div class="req">
                
                <div class="bfr">Your <span class="spanSubtitle">username</span> is <?php echo $_POST['username']?></div>
                
                <hr>
                
                <div class="bfr">Your <span class="spanSubtitle">password</span> is <?php echo $_POST['password1']?></div>
                
                <hr>
                
                <div class="bfr">Your <span class="spanSubtitle">retyped password</span> is <?php echo $_POST['password2'];
                    if($_POST['password1'] === $_POST['password2']) {
                        echo ' (same)';
                    } else {
                        echo ' (not the same)';
                    }
                    ?>
                </div>
                
                <hr>
                
                <div class="bfr">Your <span class="spanSubtitle">real name</span> is <?php echo $_POST['name']?></div>
                
                <hr>
                
                <div class="bfr">Your <span class="spanSubtitle">surname</span> is <?php echo $_POST['surname']?></div>
                
                <hr>
                
                <div class="bfr">Your <span class="spanSubtitle">e-mail</span> is <?php echo $_POST['email']?></div>
                
            </div>
            
            <div class="noreq">
                
                <?php
                    $requiredFields = 6;
                    if(count($_POST) > $requiredFields) {
                        $hobbiesArray = [];
                        $aux = 0;
                        foreach($_POST as $name => $value) {
                            if($aux < $requiredFields) {
                                $delete = '' . $name . '';
                                unset($_POST[$delete]);
                                $aux++;
                            }
                        }
                        foreach($_POST as $name => $value) {
                            array_push($hobbiesArray, $name);
                        }
                        $hobbies = implode(', ', $hobbiesArray);
                ?>
                <div class="bfr">
                    <?php
                        if(count($hobbiesArray) == 1) {
                            echo 'Your <span class="spanSubtitle">hobby</span> is ' . $hobbies;
                        } else {
                            echo 'Your <span class="spanSubtitle">hobbies</span> are ' . $hobbies;
                        }
                    ?>
                </div>
                <?php
                    }
                ?>
                
            </div>
            
        </div>
        
    </body>
    
</html>