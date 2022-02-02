
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class="px-0"><table class="table table-bordered">
            <thead >
                <tr class="">
                    <th scope="col">Ancien index :<?php echo $oldindex;?></th>
                    <th scope="col">Nouvel index :<?php echo $newindex;?></th>
                    <th scope="col">Consommation :<?php echo $kwh;?></th>
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
        <h6 class="text-secondary small ">TRANCHE 1</h6>
        <h6 class="text-secondary small pt-1">TRANCHE 2</h6>
        <h6 class="py-2 ">REDEVANCE FIXE ELECTRICITE</h6>
        <h6 class="pb-1">TAXES POUR LE COMPTE DE L’ETAT</h6>
        <h6 class="text-secondary small pt-1">TOTAL TVA</h6>
        <h6 class="text-secondary small pt-2 ">TIMBRE</h6>
        <h6 class="pt-1">SOUS-TOTAL</h6><br><br>
        <h6>TOTAL ÉLECTRICITÉ</h6>
        </div>
    </div>
<br>

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
        </thead> <tbody class="border-white"><tr>
            <td><?php echo $kwh;?></td>
            <td></td>
            <td></td>
            <td class="pt-3">14%</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="pt-0">14%</td>
            <td></td>
        </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> </td> </tr>
        <tr><td> </td><td> </td><td> </td><td> </td> <td> 0,45</td> </tr>
        </tr>
    </tbody>
</table>
</div>

    <!-- col3 -->
    <div class="col pt-5 mt-3 text-end">


        <h6>إستھلاك الكھرباء</h6>
        <h6 class="text-secondary small pt-1">1الشطر</h6>
        <h6 class="text-secondary small pt-1">2الشطر</h6>
        <h6 class="py-2">إثاوة ثابتة الكھرباء</h6>
        <h6 class="pb-1"> الرسوم المؤداة لفائدة الدولة </h6>
        <h6 class="text-secondary small pt-1">مجموع ض.ق.م</h6>
        <h6 class="text-secondary small pt-2">الطابع</h6>
        <h6 class="bt-1">المجموع الجزئي</h6><br><br>
        <h6>
            مجموع الكھرباء</h6>
        </div>
              </div>
            </div>
        </section>
        </main>

    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>