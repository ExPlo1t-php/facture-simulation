<?php
    $oldindex=$_POST['oldindex'];
    $newindex=$_POST['newindex'];
    $redevance = filter_input(INPUT_POST, 'caliber', FILTER_SANITIZE_STRING);
    $kwh= $newindex - $oldindex;
    $tranche='';
    $P_U=0;
    $timbre = 0.45;
    $montantht = 0;
    $tva= 0.14;
    echo '<script>console.log('.$redevance.');</script>';
    
    if($kwh <= 150){
        if($kwh > 0 && $kwh <= 100){
            $tranche = 'TRANCHE1';
            $P_U = 0.794;
            echo '<script>console.log('.$P_U.');</script>';
        }else{
            $tranche = 'TRANCHE2';
            $P_U = 0.883;
            echo '<script>console.log('.$P_U.');</script>';
        }
        
    }else{
        if($kwh<= 210){
            $tranche = 'TRANCHE3';
            $P_U = 0.9451;
            echo '<script>console.log('.$P_U.');</script>';     
        }elseif($kwh <= 310){
            $tranche = 'TRANCHE4';
            $P_U = 1.0489;
            echo '<script>console.log('.$P_U.');</script>';
        }elseif($kwh<=510){
            $tranche = 'TRANCHE5';
            $P_U = 1.2915;
            echo '<script>console.log('.$P_U.');</script>';
        }elseif($kwh>510){
            $tranche = 'TRANCHE6';
            $P_U = 1.4975;
            echo '<script>console.log('.$P_U.');</script>';
        }
    }
    $montantht = $kwh * $P_U;
    $mttaxes = $montantht * $tva;
    $redevancetx = $redevance * $tva;
    $txtot = $redevancetx + $mttaxes;
    $redevancetx + $montantht;
    $stot1 = $txtot + $timbre;
    $stot2 = $redevance + $montantht;
    
    $tranche1 = 'TRANCHE1';
    $P_U1 = 0.794;
    $montantht1 = 100 * $P_U1;
    $tot = $stot1 + $stot2;
    $montantht2 = ($kwh - 100) * $P_U;
    
    
    
    ?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- main CSS -->
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoliDao</title>
</head>

        <div class="px-0">
            <table class="table table-bordered">
            <thead >
                <tr class="">
                    <th scope="col"><td>Ancien index:</td> <td><?php echo ' '.$oldindex;?></td></th>
                    <th scope="col"><td>Nouvelle index:</td> <td><?php echo ' '.$newindex;?></td></th>
                    <th scope="col"><td>Consommation:</td> <td><?php echo ' '.$kwh.' Kwh';?></td></th>
                </tr>
            </thead>
        </table></div>

        <section class="">
            
            <div class="container">
              <div class="row">
                <div class="col">

        <!-- col1 -->
        <div class="pt-5 mt-3">
          CONSOMMATION ELECTRICITE<br>
          <tr> <td class="text-secondary small "><?php echo $tranche;?></td></tr><br>
          <?php if($tranche == 'TRANCHE2'){echo '<tr> <td class="text-secondary small ">'. $tranche1 .'</td></tr><br>';}?>
        <!-- <td class="text-secondary small pt-1">TRANCHE 2</td> -->
        <tr> <td class="py-2 ">REDEVANCE FIXE ELECTRICITE</td></tr><br>
        <tr>  <td class="pb-1">TAXES POUR LE COMPTE DE L’ETAT</td></tr><br>
        <tr> <td class="text-secondary small pt-1">TOTAL TVA</td></tr><br>
        <tr> <td class="text-secondary small pt-2 ">TIMBRE</td></tr><br>
        <tr> <td class="pt-1">SOUS-TOTAL</td></tr><br>
        <tr> <td>TOTAL ÉLECTRICITÉ</td></tr><br>
    </div></div><br>

    <!-- col2 -->
  

    <div class="col-6"><table  class="table text-center border-white ">
        <thead class="">
          <tr>
            <th scope="col">مفوتر<br>Facturé</th>
            <th scope="col">س.و<br>P.U</th>
            <th scope="col">المبلغ د.إ.ر<br>Montant HT</th>
            <th scope="col">ض.ق.م<br>Taux TVA</th>
                <th>مبلغ الرسوم<br>Montant Taxes</th>
          </tr>
        </thead>
         <tbody class="border-white">
             <?php
             if($tranche == 'TRANCHE2'){
                 //progressive
                 //tranche 1
                echo '<tr>';
                echo '<td>'. 100 .'</td>';
                echo '<td>'. $P_U1.'</td>';
               echo '<td>'.number_format($montantht1 , 2, ',', ' ').'</td>';
                echo '<td class="pt-3">' .$tva * 100 .'%</td>';
                echo '<td>'.number_format($montantht1 * $tva , 2, ',', ' ').'</td>';
                echo '</tr>';
                
                //tranche 2
                echo '<tr>';
                echo '<td>'.$kwh -100 .'</td>';
                echo '<td>'.$P_U.'</td>';
               echo '<td>'.number_format(($kwh - 100) * $P_U, 2, ',', ' ').'</td>';
                echo '<td class="pt-3">' .$tva * 100 .'%</td>';
                echo '<td>'.number_format($montantht2 * $tva, 2, ',', ' ').'</td>';
                echo '</tr>';
                 
            }else{
                echo '<tr>';
                 echo '<td>'.$kwh.'</td>';
                 echo '<td>'.$P_U.'</td>';
                echo '<td>'.number_format($montantht, 2, ',', ' ').'</td>';
                 echo '<td class="pt-3">' .$tva * 100 .'</td>';
                 echo '<td>'.number_format($mttaxes, 2, ',', ' ').'</td>';
                 echo '</tr>';
             }
         ?>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $redevance;?></td>
            <td class="pt-0"><?php echo $tva * 100;?>%</td>
            <?php
            if($tranche == 'TRANCHE2'){

                echo '<td>'.($montantht2 * $tva)+ ($redevancetx) + ($montantht1 * $tva ).'</td>';
            }else{
                echo '<td>'.$redevancetx .'</td>';
            }
            ?>
        </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> <?php echo number_format($txtot, 2, ',', ' ');?></td> </tr>
        <!-- <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr> -->
        <tr><td> </td><td> </td><td> </td><td> </td> <td> <?php echo $timbre;?></td> </tr>
        <tr><td> </td> <td></td> <td><?php echo number_format($stot2, 2, ',', ' ');?></td> <td></td> <td> <?php echo number_format($stot1, 2, ',', ' ');?></td> </tr>
        <tr><td> </td><td> </td><td><?php echo number_format($tot, 2, ',', ' ');?> </td><td> </td> <td> </td> </tr>
    </tr>
    </tbody>
</table>
</div>

    <!-- col3 -->
    <div class="col pt-5 mt-3 text-end">


       <tr> <td>إستھلاك الكھرباء</td></tr><br>
       <tr> <td class="text-secondary small pt-1">1الشطر</td></tr><br>
        <!-- <td class="text-secondary small pt-1">2الشطر</td> -->
        <tr> <td class="py-2">إثاوة ثابتة الكھرباء</td></tr><br>
        <tr> <td class="pb-1"> الرسوم المؤداة لفائدة الدولة </td></tr><br>
        <tr> <td class="text-secondary small pt-1">مجموع ض.ق.م</td></tr><br>
        <tr> <td class="text-secondary small pt-2">الطابع</td></tr><br>
        <tr> <td class="bt-1">المجموع الجزئي</td></tr><br>
        <tr> <td>
            مجموع الكھرباء</td>
        </div>
              </div>
            </div>
        </section>
    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

