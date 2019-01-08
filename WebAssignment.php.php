<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#result").toggleClass("result");

            //Addition
            $("#add").click(function() {
                var a = $("#cal1").val();
                var b = $("#cal2").val();
                $("#result").html(+a + +b);

            });

            //Subtraction
            $("#sub").click(function() {
                var a = $("#cal1").val();
                var b = $("#cal2").val();
                $("#result").html(+a - +b);
            });

            //Multiplication
            $("#mul").click(function() {
                var a = $("#cal1").val();
                var b = $("#cal2").val();
                $("#result").html(+a * +b);
            });

            //Division
            $("#div").click(function() {
                var a = $("#cal1").val();
                var b = $("#cal2").val();
                $("#result").html(+a / +b);

            });

        });
    </script>
    <style>
        .result {
            font-size: xx-large;
            color: blue;
        }
    </style>
</head>

<body>


    <div class="container" style="    margin-top: 67px;
    border: 1px solid; background-color: red;">
    <div style="padding-left: 27px">
      <h1> Calculater</h1>
        Enter Number :
        <input type="number" id="cal1"><br><br> Enter Number :
        <input type="number" id="cal2"><br><br>


        <button type="button" id="add"> Add </button>
        <button type="button" id="sub"> Sub </button>
        <button type="button" id="mul"> Mul </button>
        <button type="button" id="div"> Div</button><br><br><br> Result is:
        <p id="result"></p>

    </div>
    </div>
</body>

</html>