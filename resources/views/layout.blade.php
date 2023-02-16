<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TREE-NATION GAMES</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </head>
    <body>
        <div class="col d-flex justify-content-center my-5">
            <h1>Tree-Nation Games</h1>
        </div>

        @yield('content')

        <script src="{{ mix('js/app.js') }}"></script>

    </body>

    <script type="text/javascript">

        function deleteGame(gameId) {
            $.ajax({
                url: './delete/' + gameId,
                type: "GET",
                success: function (data) {
                    $('#boxGame'+ data).remove();
                }
            });
        }

        function loadView(gameId) {
            $.ajax({
                url: './' + gameId,
                type: "GET",
                success: function (data) {
                    $('#listView').hide();
                    $('#detailView').html(data).show();
                }
            });
        }

        function loadList() {
            $('#listView').show();
            $('#detailView').empty().hide();
        }
    </script>
</html>
