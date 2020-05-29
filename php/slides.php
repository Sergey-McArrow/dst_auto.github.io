  <div class="slideshow">
   <div class="slides">
    <?php $a = 1;
   foreach (glob("img/ontheway/*.jpg") as $Picture)
    {
	 $a = $a + 1;
    echo "<label><input name=slide type=radio id=s".$a;
	if($a == 2)echo " checked"; 
	echo "><img class='slide' src='".$Picture."'></label>";
    };
   ?>
   </div>
   <div class="labels"><?php $b = 1;
   foreach (glob("images/*.jpg") as $Picture)
    {
	 $b = $b + 1;
    echo "<label for='s".$b."'><img class='label' src='".$Picture."'></label>";
    };
   ?></div>
  </div>
  <script>
   var idArray = [<?php $i=1; while($i <= $b){echo '"s'.$i.'"'; $i++};?>];
   var i = 0;
   setInterval(function(){
   document.getElementById(idArray[i]).click();
   i = (i+1)%idArray.length;
   }, 10000);
  </script>