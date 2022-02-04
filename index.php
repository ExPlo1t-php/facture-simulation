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
                <form action="script.php" method="post">
                    
                    <input type="text" class="form-control" name="oldindex" id="oldindex" placeholder="s'il vous plait entrer la ancienne index"> <br>
                    <input type="text" class="form-control" name="newindex" id="newindex" placeholder="s'il vous plait entrer la nouvelle index"> <br>
                    <select name="caliber" class="form-control" id="caliber">
                        <option value="choisir un calibre" disabled>choisir un calibre</option>
                        <option value="22.65">5-10</option>
                        <option value="37.05">15-20</option>
                        <option value="46.20">>30</option>
                    </select>
                    <button type="submit" class="d-flex justify-content-center btn btn-dark">calculer</button>
                    
                </form>
            </div>
        </div>
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>