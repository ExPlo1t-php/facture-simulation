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
                    <td>Ancien index: <?php echo ' '.$oldindex;?></td> 
                   <td>Nouvelle index:<?php echo ' '.$newindex;?></td>
                   <td>Consommation:<?php echo ' '.$kwh.' Kwh';?></td>
                </tr>
            </thead>
        </table></div>

        <section class="">
            
            <div class="container">
              <div class="row">
                <div class="col">

        <!-- col1 -->
        <div class="pt-5 mt-3">
            <h6>CONSOMMATION ELECTRICITE</h6>
           <h6 class="text-secondary small pt-1 fst-italic "><?php echo $tranche1;?></h6>
          <?php if($tranche == 'TRANCHE2')
          {echo '<h6 class="text-secondary small pt-1 fst-italic ">'. $tranche .'</h6>';}?>
        <!-- <td class="text-secondary small pt-1">TRANCHE 2</td> -->
        <h6 class="pt-3 mt-3">REDEVANCE FIXE ELECTRICITE</h6>
        <h6 class="pb-1">TAXES POUR LE COMPTE DE L’ETAT</h6>
        <h6 class="text-secondary small pt-3 fst-italic">TOTAL TVA</h6>
        <h6 class="text-secondary small pt-3 fst-italic ">TIMBRE</h6>
        <h6 class="pt-1">SOUS-TOTAL</h6><br><br>
        <h6>TOTAL ÉLECTRICITÉ</h6>
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
         <tbody class="border-white pt-5">
             <?php
             if($tranche == 'TRANCHE2'){
                 //progressive
                 //tranche 1
                echo "<tr>";
                echo "<td class='pt-4'> 100 </td>";
                echo "<td class='pt-4'>". $P_U1.'</td>';
                echo "<td class='pt-4'>".number_format($montantht1 , 2, ',', ' ').'</td>';
                echo "<td class='pt-4'>" .$tva * 100 .'%</td>';
                echo "<td class='pt-4'>".number_format($montantht1 * $tva , 2, ',', ' ').'</td>';
                echo '</tr>';
                
                //tranche 2
                echo '<tr>';
                echo '<td>'.$kwh -100 .'</td>';
                echo '<td>'.$P_U.'</td>';
               echo '<td>'.number_format(($kwh - 100) * $P_U, 2, ',', ' ').'</td>';
                echo '<td>' .$tva * 100 .'%</td>';
                echo '<td>'.number_format($montantht2 * $tva, 2, ',', ' ').'</td>';
                echo '</tr>';
                 
            }else{
                 echo '<tr>';
                 echo '<td>'.$kwh.'</td>';
                 echo '<td>'.$P_U.'</td>';
                 echo '<td>'.number_format($montantht, 2, ',', ' ').'</td>';
                 echo '<td>' .$tva * 100 .'%</td>';
                 echo '<td>'.number_format($mttaxes, 2, ',', ' ').'</td>';
                 echo '</tr>';
             }
         ?>
        <tr>
            <td></td>
            <td></td>
            <td class="pt-3"><?php echo $redevance;?></td>
            <td class="pt-3"><?php echo $tva * 100;?>%</td>
            <?php
            if($tranche == 'TRANCHE2'){

                echo '<td class="pt-3">'. number_format($redevancetx, 2, ',', ' ').'</td>';
            }else{
                echo '<td>'.number_format($redevancetx, 2, ',', ' ') .'</td>';
            }
            ?>
        </tr>
        <?php 
            if($tranche == 'TRANCHE2'){
                $txtot = ($montantht1 * $tva)+($montantht2 * $tva) + $redevancetx;
                echo '<tr><td> </td><td> </td><td> </td><td> </td> <td class="pt-5">' .number_format($txtot, 2, ',', ' '). '</td> </tr>';
            }else{
                echo '<tr><td> </td><td> </td><td> </td><td> </td> <td>' .number_format($txtot, 2, ',', ' '). '</td> </tr>';

            }
        ?>
        <tr><td> </td><td> </td><td> </td><td> </td> <td class="pt-2"> <?php echo $timbre;?></td> </tr>
        <?php 
            if($tranche == 'TRANCHE2'){
                $txtot = ($montantht1 * $tva)+($montantht2 * $tva) + $redevancetx;
                $stot1 = $txtot + $timbre;
                $stot2 = $redevance + $montantht2 + $montantht1;
                $tot = $stot2 + $stot1;
               echo '<tr><td> </td> <td></td> <td class="pt-0">' .number_format($stot2, 2, ',', ' ').'</td> <td></td> <td class="pt-0"> '. number_format($stot1, 2, ',', ' ').'</td> </tr>';
               echo '<tr><td> </td><td> </td><td class="pt-5">'.number_format($tot, 2, ',', ' ') .' </td><td> </td> <td> </td> </tr>';
            }else{
                echo '<tr><td> </td><td> </td><td> </td><td> </td> <td>' .number_format($txtot, 2, ',', ' '). '</td> </tr>';
                echo '<tr><td> </td><td> </td><td>'.number_format($tot, 2, ',', ' ') .' </td><td> </td> <td> </td> </tr>';

            }
        ?>
       
    </tr>
    </tbody>
</table>
</div>

    <!-- col3 -->
    <div class="col pt-5 mt-3 text-end">


    <h6>إستھلاك الكھرباء</h6>
       <?php
       $trancheAr = '';
       if($tranche == 'TRANCHE2'){
           $trancheAr = '1الشطر';
           echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';
           $trancheAr = '2الشطر';
          echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';

       }else{
           if($tranche == 'TRANCHE3'){
            $trancheAr = '3الشطر';
            echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';
           }elseif($tranche == 'TRANCHE4'){
            $trancheAr = '4الشطر';
            echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';
           }elseif($tranche == 'TRANCHE5'){
            $trancheAr = '5الشطر';
            echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';
           }else{
            $trancheAr = '6الشطر';
            echo '<h6 class="text-secondary small pt-1">'.$trancheAr.'</h6>';
           }
        }
       ?>
        <!-- <h6 class="text-secondary small pt-1">2الشطر</h6> -->
        <h6 class="pt-3 mt-3">إثاوة ثابتة الكھرباء</h6>
        <h6 class="pb-1"> الرسوم المؤداة لفائدة الدولة </h6>
        <h6 class="text-secondary small pt-3">مجموع ض.ق.م</h6>
        <h6 class="text-secondary small pt-3">الطابع</h6>
        <h6 class="bt-1">المجموع الجزئي</h6><br><br>
        <h6 class="pt-1">
            مجموع الكھرباء</h6>
        </div>
              </div>
            </div>
        </section>
        <div>
         <button type="submit" class="btn btn-dark m-3 text-center" id="btn"  onclick="Print_page()">Print</button>
             </div>
    </body>
    <script>

        function Print_page(){
            const btn = document.getElementById("btn");
            btn.style.display = "none";//className = 'btn+';   
            window.print();
             btn.style.display = "block";
             btn.style.width = "100px";
        }</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

