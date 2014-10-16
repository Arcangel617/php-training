<html>
    <head>
        <style>
            .container{
                position: absolute; /* or absolute */
                top: 50%;
                left: 50%;
            }
            .ciudad{
                display: none
            }
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body class="container">
        <select class="provincia">
            <?php foreach ($provincias as $prov): ?>
                <option><?php echo $prov->getname() ?></option>
            <?php endforeach; ?>
        </select>
        <select class="ciudad">

        </select>
        <script>
            $(".provincia").change(function () {
                $(".ciudad").show();
                //$(".ciudad").append('<option>dadadad</option>');
                //alert($(".provincia").val());

                //});
                $.ajax({
                    url: 'cities.php',
                    data: {'provincia': $(".provincia").val()},
                    type: 'GET',
                    success: function (data) {
                        $('body').append($('<p></p>').text(data));
                    }
                });

            });
        </script>
    </body>
</html>

