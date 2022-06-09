<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/stl.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>connection</title>
</head>

<body>
    <div class="logo">
        <a href="#">
            <img src="assets/img/2.png" class="rounded mx-auto d-block" heigth=10px width=10%>
    </div>
    </header>

    <div class="login-sqare">
        <h1 class="text-center">Connection</h1>
        <br>
        <form class="sign-form" action="connect.php" method="POST">

        <?php
      if(isset($_GET['message'])) {
        if($_GET['message'] == "success") {
        echo"votre inscription a bien été prise en compte";
        }

          if($_GET['message'] == "error") {
          echo"<div class=titre>Le mail rentré n'existe pas</div>";
          }
      }
    
      ?>

            <div class="mail">
                <input class="input" type="email" name="email" placeholder="Email" required autocomplete="off" />
            </div>
            <div class="passeword">
                <input class="input" type="password" name="password" placeholder="password" required
                    autocomplete="off" />
            </div>
            <div class="submit"><input type="submit" class="button">Connection</button></div>
        </form>
        <div class="check-div">
            <label class="container">
                <span class="remember-text"> Se souvenir de moi </span>
                <input type="checkbox" checked="checked" />
                <span class="checkmark"></span>
            </label>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
</body>

</html>