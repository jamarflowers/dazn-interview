<?php

   $page_name = "STRUCTS AND INTERFACES";     

?>
<?php include("inc/header.php"); ?>
<div class="headbar">
   <?php echo $page_name ?>
</div>    
      <div id="window">
          <article>
              <p>
              <div class="title">Decleration Of a Structs</div>
              <div class="content">
                  A struct is a type which contains named fields. 
                  For example we could represent a Circle like this:
                  <div class='center'>
                    <kbd>
                    <br>
                      type Circle struct { <br>
                      x float64 <br>
                      y float64 <br>
                      r float64 
                      }<br>
                    </kbd>
                    </div>
    
              </div>
              </p>              
          </article>
          <article>
              <p>
              <div class="title">Initialization</div>
              <div class="content">
                   var C Circle
                  <br>
                   C := new(Circle) 
              </div>
                        
          </article>
             <article>
              <p>
              <div class="title">accessing a struct</div>
              <div class="content"></div>
                        
          </article>
          
      </div>    
</div>    
<?php include("inc/footer.php"); ?>z