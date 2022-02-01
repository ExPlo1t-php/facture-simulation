<?php
function facture($oldindex, $newindex){
    $oldindex=$_POST['oldindex'];
    $newindex=$_POST['newindex'];
    $kwh= $newindex - $oldindex;
    $tranche='';
    $P_U=0;
    $timbre = 0.45; 
    $montantht = 0;
    $tva= 0.14;
    $mttaxes = $montantht * $tva;

            if($kwh <= 150){
                if($kwh > 0 && $kwh <= 100){
                    $tranche = 'TRANCHE1';
                    $P_U = 0.794;
                    echo $tranche;
                }elseif($kwh>100){
                    $tranche = 'TRANCHE2';
                    $P_U = 0.883;
                    echo $tranche;
                }

            }elseif($kwh >150){
                if($kwh>150 && $kwh<= 120){
                    $tranche = 'TRANCHE3';
                    $P_U = 0.9451;
                    echo $tranche;
                }elseif($kwh>210 && $kwh <= 310){
                    $tranche = 'TRANCHE4';
                    $P_U = 1.0489;
                    echo $tranche;
                }elseif($kwh>310 && $kwh<=510){
                    $tranche = 'TRANCHE5';
                    $P_U = 1.2915;
                    echo $tranche;
                }elseif($kwh>510){
                    $tranche = 'TRANCHE6';
                    $P_U = 1.4975;
                    echo $tranche;
                }
            }
            
        
    }

    


