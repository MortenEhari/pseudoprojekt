<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <button onclick="TereMaailmButton()">
        Tere maailm
    </button>

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
    <a href="#" onClick="alert('Jääme siia')">Jääme siia</a>
    </body>
</html>