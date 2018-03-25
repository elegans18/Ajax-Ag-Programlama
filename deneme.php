<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Ağ Programlama Ödevi</title>

      <script>
      $(document).ready(function()
      {
        $("#menu").hide();
        $('.tikla').click(function()
       {
          $("#menu").show();//.show()
       });

      });

      </script>


  </head>
  <body>



  <div class="col-sm-12">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Ders Programı</th>
    </tr>
  </thead>
  </div>

    <div class="col-sm-12">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sıra Numarası</th>
      <th scope="col">Ders Kodu</th>
      <th scope="col">Ders Adı</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">0</th>
      <td>BSM 103</td>
      <td>Programlamaya Giriş</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>BSM 201</td>
      <td>Elektrik Devre Temelleri</td>
    </tr>
    <tr>
      <th class="tikla" scope="row" id = "tikla">2</th>
      <td class="tikla">BSM 205</td>
      <td class="tikla">Web Programlama</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>BSM 309</td>
      <td>İşletim Sistemleri</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>BSM 458</td>
      <td>Ağ Programlama</td>
    </tr>
  </tbody>
  </table>
    </div>

    <div id = "menu">
      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Dersin Kodu :</span>
      </div>
      <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Dersin Adı :</span>
      </div>
      <input type="text" class="form-control" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Dersin İçeriği :</span>
      </div>
      <input type="text" class="form-control" aria-describedby="basic-addon1">
      </div>
      
      <div>
      <button type="button" class="btn btn-primary">XML Göster</button>
      <button type="button" class="btn btn-primary">JSON Göster</button>
      </div>

      <div class="input-group">
      <div class="input-group-prepend">
      <span class="input-group-text">Kodlanmış Veri</span>
      </div>
      <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>