<!doctype html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Practice 1</title>
        <link rel="stylesheet" href="style2.css">

    </head>
    
    <body>
        
        <div class="container">
            
            <div class="left">
                
                <p class="titleright">Info</p>
            
                <form action="form3.php" method="post">
                    
                    <?php
                    
                        foreach($_POST as $name => $value) {
                            echo '<input type="hidden" name="' . $name . '" value="' . $value . '"/>';
                        }
                        
                    ?>
                
                    <div class="inptop">
                        
                        <input class="inp" title="Name" type="text" required autocomplete="off" maxlength="15" id="name" name="name" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="username">Name</label>
                        
                    </div>
                        
                    <div class="inptop">
                            
                        <input class="inp" title="Surname" type="text" required maxlength="30" autocomplete="off" id="surname" name="surname" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="password1">Surname</label>
                            
                    </div>
    
                    <div class="inptop">
                        
                        <input class="inp" title="E-mail" type="text" required maxlength="30" autocomplete="off" id="email" name="email" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="password2">E-mail</label>
                        
                    </div>
                        
                    <input class="btn" type="submit" value="Next"/>
                
                </form> 
                
            </div>
        
            <div class="right">
            
                <div class="user"></div>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
            
            </div>
            
        </div>
        
    </body>

</html>
