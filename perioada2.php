<?php

$result = <<<EOD
<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="perioada.css" type="text/css"/>
      </head>

   <table class="tabel"  border="1" cellpadding="7" width="35%">
             <tr>
                  <th>Tipul camerei</th>
                  <th>Pachet 5 nopti</th>
         
             </tr>
                 <tr>
                    <td>Camera Single</td>
                
                    <td>280 Euro</td>
    
                   
                </tr>
                 <tr>
                     <td>Camera Dubla Twin</td>
                     <td>295 Euro</td>
             
                  
                 </tr>
               <tr>
                    <td>Junior Suite</td>
                    <td>315 Euro</td>
  
               </tr>
               <tr>
                   <td>Apartament</td>
                    <td>375 Euro</td>
             
               </tr>
        </table> 
</html>
EOD;

echo $result;  
?>