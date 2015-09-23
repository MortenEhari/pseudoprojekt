<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    </head>
    <body>

    <!-- Tere maailm alert -->
    <button onclick="TereMaailmButton()">
        Tere maailm
    </button>

    <!-- Tere maailm link -->

    <script>
            function TereMaailmButton() {
                alert("Tere maailm");
            }
    </script>

    <script type="text/javascript">
    function TereMaailmKHKee() {
    var answer = confirm ("Tere maailm.")
    if (answer)
    window.location="http://www.khk.ee";
    }
    </script>

    <a href="javascript:TereMaailmKHKee();">Tere maailm</a>

    <!-- Jääme siia tag -->
    <a href="#" onClick="alert('Jääme siia')">Jääme siia</a>
    <br>
    <br>

   <!-- kassi koera pildi vahetus script -->
   <!-- <img id="catdog" onclick="vahetus()" src="images/cat.png" width="200" height="200">
    <script type="text/javascript">
        function vahetus() {
            var image = document.getElementById('catdog');
            if (image.src.match("dog")) {
                image.src = "images/cat.png";
            } else {
                image.src = "images/dog.jpg";
            }
        }
    </script> -->

    <!-- jQuery kass/koera pilt -->

    <img id="src" src="images/cat.png" width="200" height="200" />

    <script>
    $("img[src='images/cat.png']").click(function () {
    $(this).attr("src","images/dog.jpg")
    })
    </script>
    </body>
</html>