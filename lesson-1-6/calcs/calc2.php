<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 2: Калькулятор AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<nav>
    <a href="/">Главная</a>
    <a href="/calc1.php">Задание 1: Калькулятор-Select</a>
</nav>
<section>
    <h3>Задание 2: Калькулятор AJAX</h3>
    <input type="text" id="val1" value="">
    <input type="text" id="val2" value="">
    <button class='action' value="add"> + </button>
    <button class='action' value="sub"> - </button>
    <button class='action' value="mlt"> * </button>
    <button class='action' value="div"> / </button>
    <input type="text" id="val3" value="" readonly>
</section>
<script>
    $(document).ready(function (){
        $(".action").on('click', function(){
            var operand1 = $("#val1").val()
            var operand2 = $("#val2").val()
            var opermeth = this.value

            $.ajax({
                url: "math.php",
                type: "POST",
                dataType : "json",
                data:{
                    operand1: operand1,
                    operand2: operand2,
                    opermeth: opermeth
                },
                error: function() {alert("Что-то пошло не так...");},
                success: function(answer){
                    $('#val3').val(answer.result);
                }

            })
        });

    });
</script>
</body>
</html>
