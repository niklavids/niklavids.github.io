<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Niklavids github page!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            body {
            background-image:url("bg.gif");
            background-size:cover;
            
            }
            nav{
                background-color: aquamarine;
                font-size:30px;
                color:red;
            }
            nav :visited{
              color:green;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        // Create an array to store the links
        $links = array();
      
        // Get a list of directories in the current directory
        $dirs = glob('*', GLOB_ONLYDIR);
      
        // Iterate over the directories
        foreach ($dirs as $dir) {
          // Check if the directory contains an index.html file
          $indexPath = "$dir/index.html";
          if (is_file($indexPath)) {
            // If the index.html file exists, add a link to it in the navigation bar
            $links[] = "<a href=\"$indexPath\">$dir</a>";
          }
        }
      
        // Output the navigation bar with the links to the index.html files
        echo "<nav>" . implode("\n", $links) . "</nav>";
      ?>
        <h1>Hello world. This is my new GitHub site.</h1>
    </body>
</html>