<!doctype html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Practice 1</title>
        <link rel="stylesheet" href="style1.css">

    </head>
    
    <body>
        
        <div class="container">
            
            <div class="left">
                
                <div class="lock"></div>
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                
            </div>
        
            <div class="right">
            
                <p class="titleright">Register</p>
            
                <form action="form2.php" method="post">
                
                    <div class="inptop">
                        
                        <input class="inp" title="Username" type="text" required autocomplete="off" maxlength="15" id="username" name="username" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="username">Username</label>
                        
                    </div>
                        
                    <div class="inptop">
                            
                        <input class="inp" title="Password" type="password" required maxlength="20" id="password1" name="password1" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="password1">Password</label>
                            
                    </div>
    
                    <div class="inptop">
                        
                        <input class="inp" title="Retype password" type="password" required maxlength="20" id="password2" name="password2" oninvalid="this.setCustomValidity('Fill this blank!')" oninput="this.setCustomValidity('')"/>
                        <span class="formspan"></span>
                        <label class="lbl" for="password2">Retype password</label>
                        
                    </div>
                        
                    <input class="btn" type="submit" value="Next"/>
                
                </form> 
            
            </div>
            
        </div>
        
    </body>

</html>