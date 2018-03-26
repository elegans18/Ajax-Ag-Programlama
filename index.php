<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">

    <title>index1</title>
    <link rel="stylesheet" type="text/css" href="CSS/Main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#adi').keyup(function (e) {

                if (e.which == 16) // ignore shift key
                    return;

                // var form_data= $("#form1").serialize();

                var form_data = {
                    //ogrenciNo: $('#ogrenciID').val(),
                    adi: $('#adi').val()
                    //soyadi: $('#soyadi').val()
                };

                $.ajax({
                    url: "Ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    success: function (gelenVeri) { //alert(msg);
                        $('#ortaForm').empty();
                        $.each(gelenVeri, function (i, ders) {
                            $('#ortaForm')
                                .append(i + '..' + ders.ders_kodu + '--')
                                .append(ders.ders_adi + '<hr>')
                        });


                        //$("#ortaForm").html(msg);
                        //$('#listele2').html(msg).fadeIn("slow");//.fadeOut("slow");
                    },
                    error: function () {
                        alert("Hata meydana geldi. Lütfen tekrar deneyiniz !!!");
                    }
                });

                return false;

            });



        });
    </script>

</head>

<body>

    <p>Adı:
        <input type="text" id="adi" name="adi" />
        <br /> </p>

    <div id="ortaForm" style="margin-left: 200px;height: 200px">
        <ul>
            <li>Sıra No Ders Kodu Ders Adı</li>
        </ul>
    </div>

    <div id="listele2" style="display: none;margin-left: 300px"></div>

</body>

</html>