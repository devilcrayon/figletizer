<html>
<head>
   <title>FIGletized!</title>
</head>
<?
   $bg_color = $_REQUEST['bg_color'];
   $fg_color = $_REQUEST['fg_color'];
?>
<body bgcolor="#<? echo $bg_color; ?>" text="#<? echo $fg_color; ?>">
<pre>
  _______ ___ _______ __       __   __                __ __ 
 |   _   |   |   _   |  .-----|  |_|__.-----.-----.--|  |  |
 |.  1___|.  |.  |___|  |  -__|   _|  |-- __|  -__|  _  |__|
 |.  __) |.  |.  |   |__|_____|____|__|_____|_____|_____|__|
 |:  |   |:  |:  1   |                                      
 |::.|   |::.|::.. . |                                      
 `---'   `---`-------'                              
</pre>
<hr>
<br>
<?
   include("functions.php");
   $usr_font = $_REQUEST['usr_font'];
   $allfonts = $_REQUEST['allfonts'];
   $justify = $_REQUEST['justify'];
   $width = $_REQUEST['width'];
   $input = $_REQUEST['input'];

   if ( !isset($usr_font) && !$allfonts )
   {
      echo "<h1>ERROR: No font selected!</h1><br>";
      echo "</body></html>";
      exit;
   }
   
   if ($allfonts)
      $font_count = find_fonts($usr_font);
    
   foreach($usr_font as $font)
      build_figlet($font, $justify, $width, $input);
?>

</body>
</html>
