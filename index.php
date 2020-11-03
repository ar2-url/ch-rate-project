<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;
  echo $riel + $kyat + $krones + $lek;

  $riel_to_usd = 0.00026;
  $kyat_to_usd = 0.00066;
  $krones_to_usd = 0.11;
  $lek_to_usd = 0.009;

  $am_usd_in_riel = $riel * $riel_to_usd;
  $am_usd_in_kyat = $kyat * $kyat_to_usd;
  $am_usd_in_krones = $krones * $krones_to_usd;
  $am_usd_in_lek = $lek * $lek_to_usd;

  echo "\nIn $riel riel we exchanged $am_usd_in_riel USD";
  echo "\nIn $kyat kyat we exchanged $am_usd_in_kyat USD";
  echo "\nIn $krones krones we exchanged $am_usd_in_krones USD";
  echo "\nIn $lek lek we exchanged $am_usd_in_lek USD";
