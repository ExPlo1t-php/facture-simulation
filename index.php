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

<body>
    <main>
        <div class="cn ">
            <div class="logo">
                <img href="#" src="assets/images/logo-removebg-preview.png">
            </div>
            <div class="main d-flex flex-column justify-content-center " >
                <form name="form" action="" method="$_GET">
                    
                    <input type="text" class="form-control" name="oldindex" id="oldindex" placeholder="s'il vous plait entrer la ancienne index"> <br>
                    <input type="text" class="form-control" name="newindex" id="newindex" placeholder="s'il vous plait entrer la nouvelle index"> <br>
                    <select name="caliber" class="form-control" id="caliber">
                        <option value="choisir un calibre" disabled>choisir un calibre</option>
                        <option value="5-10">5-10</option>
                        <option value="15-20">15-20</option>
                        <option value="3>0">>30</option>
                    </select>
                    <button type="button" class="d-flex justify-content-center btn btn-dark">calculer</button>
                </form>
            </div>
        </div>
        <div class="px-0"><table class="table table-bordered">
            <thead >
                <tr class="">
                    <th scope="col">Ancien index :</th>
                    <th scope="col">Nouvel index :</th>
                    <th scope="col">Consommation :</th>
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
        </thead> <tbody class="border-white"><tr>
            <td></td>
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
    </tbody></table></div>

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
    
    <!-- <?php
            if(array_key_exists('button', $_POST)) {
                facture();
            }
    echo "\nhello world";
    $oldindex=$_GET['oldindex'];
    $newindex=$_GET['newindex'];
    $caliber=$_GET['caliber'];
function facture(){
    global $caliber, $newindex, $oldindex;
    echo '<h3>'.$oldindex.'</h3>';
    echo '<h3>'.$newindex.'</h3>';
    echo '<h3>'.$caliber.'</h3>';
    echo "<script>console.log(1231231231231);</script>"
}

    ?> -->

      <!-- Newsletter
      <section class="bg-primary text-light p-5">
        <div class="container">
          <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
  
            <div class="input-group news-input">
              <input type="text" class="form-control" placeholder="Enter Email" />
              <button class="btn btn-dark btn-lg" type="button">Submit</button>
            </div>
          </div>
        </div>
      </section>
   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</body>

</html>