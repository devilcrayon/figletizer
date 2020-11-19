<html>
<head>
   <title>FIGletizer</title>
</head>
<body>
   <pre>
     _____ ___ ____ _      _   
    |  ___|_ _/ ___| | ___| |_ 
    | |_   | | |  _| |/ _ \ __|
    |  _|  | | |_| | |  __/ |_ 
    |_|   |___\____|_|\___|\__|</pre>
   <br/>
   <hr/>
   <br/>
   <form method="post" action="figlet.php">
      Text:<br/>
      <input type="text" name="input" size=30  value="FIGlet"/>
      <input type="submit" value="FIGletize!"/><br/>
      Background: 
      <input type="text" name="bg_color" size="7" value="FFFFFF"/>
      Text Color: 
      <input type="text" name="fg_color" size="7" value="000000"/>
      
      <?
         include("functions.php");
         $font_count = find_fonts($font_array);
      ?>   
      <br/>Shift or Ctrl-click to select multiple fonts:<br>
      <select multiple name="usr_font[]" size=10>
      <?
         foreach ($font_array as $file)
         {
            $font = explode(".", $file);
            $fontname = $font[0];
            echo"<option value=".$file.">".$fontname;
            
         }
      ?>
      </select> 
      <br/>
      <?
      echo $font_count." fonts installed.<br>";
      ?>
      Use all fonts: 
      <input type="checkbox" name="allfonts" value="1"/>
      <br/>
<!--      Justification Controls: 
      <input type="radio" name="justify" value="l"/>left  
      <input type="radio" name="justify" value="c"/>center  
      <input type="radio" name="justify" value="r"/>right  
      <br/>
-->
      Screen width:
      <input type="text" size=3 maxlength=3 value="78" name="width"/>
   </form>
   <br/>
   <hr/>
   <br/>
</body>
</html>
