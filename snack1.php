<?php
$gare = [
  [
    'squadraCasa' => 'milan',
    'squadraOspite' => 'juve',
    'puntiCasa' => '2',
    'puntiOspiti' => '1'

  ],
  [
    'squadraCasa' => 'inter',
    'squadraOspite' => 'lazio',
    'puntiCasa' => '2',
    'puntiOspiti' => '3'

  ],
  [
    'squadraCasa' => 'roma',
    'squadraOspite' => 'napoli',
    'puntiCasa' => '2',
    'puntiOspiti' => '0'

  ],
  [
    'squadraCasa' => 'cagliari',
    'squadraOspite' => 'catania',
    'puntiCasa' => '0',
    'puntiOspiti' => '3'

  ],

];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
      <?php for($i = 0; $i < count($gare); $i++){ ?>
      <li>
        <h3>Nome squadra Casa: <?php echo $gare[$i]['squadraCasa']; ?></h3>
        <h3>Nome squadra Ospite: <?php echo $gare[$i]['squadraOspite']; ?></h3>
        <p>Risultato:<?php echo $gare[$i]['puntiCasa']."-".$gare[$i]['puntiOspiti'];?></p>
        <p>Riepilogo:<?php echo $gare[$i]['squadraCasa'].' - '.$gare[$i]['squadraOspite'].' | '.$gare[$i]['puntiCasa'].' - '.$gare[$i]['puntiOspiti'];  ?></p>

      </li>
    <?php } ?>
    </ul>

  </body>
</html>
