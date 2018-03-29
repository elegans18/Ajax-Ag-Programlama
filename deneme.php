<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <title>Ağ Programlama Ödevi</title>

  <script>
    $(document).ready(function () {
      $("#menu").hide();
      $("#text2").hide();  
      $("#text1").hide();  
      /*$('.tikla').click(function () {
        $("#menu").show(); //.show()
      });*/

      $( ".tikla" ).click(function() {
        $( this ).toggleClass( $("#menu").toggle() );
      });
      
      $(".tikla").hover(function() {
        $(".tikla").css("cursor","pointer");
      });
      
      $( ".tikla" ).click(function() {
        $.getJSON("http://localhost/Ajax.php",function(data){
          $.each(data, function (key,item){
            if(item.sira_no==2)
            {
              document.getElementById("ders_kod").value = item.ders_kodu;
              document.getElementById("ders_ad").value = item.ders_adi;
              document.getElementById("ders_icerik").value = item.dersicerik;
            }         
          });          
        });
      });

      $("#xml1").click(function(){
        $.ajax({
          url:"Ajax1.php",
          type: 'POST',
          dataType:'xml',
          data : 'deneme',
          success: function(data)
          {
            console.log(data);
            var de=new XMLSerializer().serializeToString(data);
            $("#text1").text(de);
          }
        });
        $("#text1").show();  
        $("#text2").hide();         
      });
      $("#json1").click(function(){
        $.ajax({
          url:"Ajax.php",
          type: 'POST',
          dataType:'json',
          data : 'deneme',
          success: function(data)
          {
            console.log(data);  
            var de = JSON.stringify(data);          
            $("#text2").text(de);
          }
        });
        $("#text2").show();  
        $("#text1").hide();  
      });

      $('#ders_ad,#ders_kod, #ders_icerik').keyup(function yenikayit() {

          var form_data =
          {
            ders_kod: $('#ders_kod').val(),
            ders_ad: $('#ders_ad').val(),
            ders_icerik: $('#ders_icerik').val()
          };

          $.ajax({
              url: "Ajax2.php",
              type: 'POST',
              //dataType: 'json',
              data: form_data,
              success: function(msg){
                console.log("Basarili");
              }
          });
      });

  });
  </script>


</head>

<body>

  <div class="col-sm-12">
    <table class="table table-sm">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ders Programı</th>
        </tr>
      </thead>
  </div>

  <div class="col-sm-12">
    <table class="table table-sm">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Sıra Numarası</th>
          <th class="tikla" scope="col">Ders Kodu</th>
          <th scope="col">Ders Adı</th>
        </tr>
      </thead>
      <tbody id = "veri">
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
          <th class="tikla" scope="row" id="tikla">2</th>
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

  <div id="menu" class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Dersin Kodu :</span>
          </div>
          <input id="ders_kod" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Dersin Adı :</span>
          </div>
          <input id="ders_ad" type="text" class="form-control" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Dersin İçeriği :</span>
          </div>
          <input id="ders_icerik" type="text" class="form-control" aria-describedby="basic-addon1">
        </div>

        <button id="xml1" type="button" class="btn btn-outline-primary">XML Göster</button>
        <button id="json1" type="button" class="btn btn-outline-primary">JSON Göster</button>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Kodlanmış Veri</span>
          </div>
          <textarea rows="5" id="text1" class="form-control" aria-label="With textarea"></textarea>
          <textarea rows="5" id="text2" class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>