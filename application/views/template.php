<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Customers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <?php echo $script;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0;">
    <script src="/assets/js/bootstrap.min.js"></script>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
 </head>
    <body>
        <div id="wrap">
            <div class="push"></div>
               <div class="container"> 
                 <header>
                  <h1><a href="<?php echo URL::site();?>">Kohana+Bootstrap</a></h1>
                </header>                
               <div>
                <ul class="nav nav-tabs">
                 <li><a href="<?php echo URL::site();?>">Add</a></li>
                 <li><a href="<?php echo URL::site('view/update'); ?>">Update</a></li>
                 <li><a href="<?php echo URL::site('view/delete'); ?>">Delete</a></li>
                </ul>
              </div>
              <div class="container"> 
                <div id="table"><?php echo $table;?></div>
                <hr>
               <div><?php echo $content;?></div>        
            </div>
            <footer>
     <div class="text-center">
         <p> Copyright &copy; <a href="#"></a> All Rights Reserved
          Design by berezovets.d</p>
       </div>
   </footer>
        </div>
    </body>
</html>
