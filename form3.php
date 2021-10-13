<!doctype html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Practice 1</title>
        <link rel="stylesheet" href="style3.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        
    </head>
    
    <body>
        
        <div class="wrapper">
            
            <div class="title">Choose your hobbies</div>

            <form action="showData.php" method="post">
                
                <?php
                    
                    foreach($_POST as $name => $value) {
                        echo '<input type="hidden" name="' . $name . '" value="' . $value . '"/>';
                    }
                        
                ?>
                
                <div class="container">
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="sports" class="checkbox">
                        <div class="option_inner sports">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-volleyball-ball fa-2x"></i></div>
                            <div class="name">Sports</div>
                        </div>
                      
                    </label>
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="games" class="checkbox">
                        <div class="option_inner games">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-dice-five fa-2x"></i></div>
                            <div class="name">Games</div>
                        </div>
                      
                    </label>
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="books" class="checkbox">
                        <div class="option_inner books">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-book fa-2x"></i></div>
                            <div class="name">Books</div>
                        </div>
                      
                    </label>
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="series" class="checkbox">
                        <div class="option_inner series">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-tv fa-2x"></i></div>
                            <div class="name">Series</div>
                        </div>
                      
                    </label>
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="music" class="checkbox">
                        <div class="option_inner music">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-music fa-2x"></i></div>
                            <div class="name">Music</div>
                        </div>
                      
                    </label>
                    
                    <label class="option_item">
                        
                        <input type="checkbox" name="sleep" class="checkbox">
                        <div class="option_inner sleep">
                            <div class="tickmark"></div>
                            <div class="icon"><i class="fas fa-bed fa-2x"></i></div>
                            <div class="name">Sleep</div>
                        </div>
                      
                    </label>
                    
                    <div class="btndiv">
                        
                        <input class="btn" type="submit" value="Send"/>
                         
                    </div>
                    
                </div>
            
            </form>

        </div>
        
    </body>

</html>