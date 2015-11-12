<!DOCTYPE html>
<html>
  <head>
      <title>Abacaxi</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.css" type="text/css" /> 
          
      
  </head>
  <body>
      <? php
        foreach($usuarios as $u){
            echo "<h1>" . $u->nome . "</h1>";
            
        }
        // echo $outravar
      ?>
  </body>
</html>

