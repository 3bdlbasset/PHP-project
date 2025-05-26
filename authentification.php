<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="AuthController.php" id="inscription" method="post">
    <div class="form-group">
      <label for="">Numero etudiant : </label>
      <input type="text" name="num" id="">
    </div>
    <div class="form-group">
      <label for="">email : </label>
      <input type="text" name="email" id="">
    </div>
    <div class="form-group">
      <label for="">nom : </label>
      <input type="text" name="name" id="">
    </div>
    <div class="form-group">
      <label for="">Password : </label>
      <input type="password" name="pwd" id="">
    </div>
    <div class="form-group">
      <label for="">filiere : </label>
      <input type="text" name="filiere" id="">
    </div>
    <div class="form-group">
      <label for="">photo : </label>
      <input type="file" name="filiere" id="">
    </div>
    <div class="form-submit">
      <input type="submit" value="Insciption" id="">
      <a href="javascript:void(0)" onclick="toggle(`login`)">deja un compte ? login</a>

    </div>
  </form>

  <form action="AuthController.php" id="login" method="post">

    <div class="form-group">
      <label for="">email : </label>
      <input type="text" name="email" id="">
    </div>

    <div class="form-group">
      <label for="">Password : </label>
      <input type="password" name="pwd" id="">
    </div>


    <div class="form-submit">
      <input type="submit" value="connexion" id="">
      <a href="javascript:void(0)" onclick="toggle(`inscription`)">Pas de compte ? Inscrir</a>
    </div>
  </form>

  <script>
    let form_login = document.getElementById('login')
    let form_inscription = document.getElementById('inscription')
    form_login.classList.add("show")
    form_inscription.classList.add("hide")

    function toggle(type) {
      if (type == "login") {
        form_login.classList = ''
        form_inscription.classList = ''
        form_login.classList.add("show")
        form_inscription.classList.add("hide")


      } else {
        form_login.classList = ''
        form_inscription.classList = ''
        form_login.classList.add("hide")
        form_inscription.classList.add("show")

      }
    }
  </script>
</body>

</html>