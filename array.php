<?php
   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few <br>");
   
   $a['asd'] =10;
   
   $a['asd'] =30;
   $a['asod'] =40;
   $a['g'] =50;
   $a['asdp'] =10;
   $found=array();
   
   $k=array("a"=>1,"b"=>34,"c"=>54,"d"=>333,"e"=>555,"f"=>666,'g'=>77,"jj"=>8);
   
   foreach($k as  $d=>$va)
   {
       if(array_key_exists($d,$a)){	
           
      // print_r($d);
      
       $a[$d]=$va;
       }
             
   }
   
   print_r($a);
   