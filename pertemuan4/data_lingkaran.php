<?php
 require_once 'class_lingkaran.php';

   echo "Nilai PHI" . Lingkaran::PHI;

   $lingkar1 = new lingkaran(7);
   $lingkar2 = new lingkaran(68);

   echo '<br>Luas Lingkaran 1 = ' .$lingkar1->getLuas() . ' cm';
   echo '<br>Keliling Lingkaran 1 = ' .$lingkar1->getKel() . ' cm';

   echo '<br>Luas Lingkaran 2 = ' .$lingkar2->getLuas() . ' cm';
   echo '<br>Keliling Lingkaran 2 = ' .$lingkar2->getKel() . ' cm';

   


?>