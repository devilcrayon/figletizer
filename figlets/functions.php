<? 
   function find_fonts(&$font_array)
   {
      $font_count = 0;
      $dir_list = array ("/home/devilcrayon/devilcrayon.com/figlets/figlet_fonts");
      foreach ($dir_list as $current_dir)
      {
         // DUBUG:  echo "Current dir: ".$current_dir."<br>";
         $dir = dir($current_dir);

         while ($file =$dir->read())
         {
            $font = explode(".", $file);
            if ($font[1] == "flf")
            {
               $font_array[$font_count] = $file;
               $font_count++;
            }
         }
      }
      sort ($font_array);
      return $font_count;
   }

   function build_figlet($font, $justify, $width, $input)
   {
      $command = "figlet -d /home/devilcrayon/devilcrayon.com/figlets/figlet_fonts -f";
      //echo "Command: ".$command."<br>";

      $command = $command." ".$font;
      //echo "Command: ".$command."<br>";
      if (isset($justify))
      {
         $command=$command." -".$justify;
      }

      $command = $command." -w".$width;

      //echo "Command: ".$command."<br>";

      $command = $command." ".escapeshellarg($input) ;

      $file = explode(".", $font);
      echo "$file[0]";
      echo "<pre>";
      passthru("$command");
      echo "</pre>";
   }
   
?>
