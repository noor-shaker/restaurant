<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>

    {{-- ajax --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <input type="text" id="name" class="form-control " name="name" placeholder="Search">
        <br>
        <div id="result"></div>
    </div>

    <script>
        $(document).ready(function() {
            $("#name").on('keyup', function() {
                var search = $("#name").val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('search') }}",
                    data: {
                        "name": search
                    },
                    success: function(data) {
                        $("#result").html(data);
                    },
                    error: function(error) {
                        $("#result").text(error.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>
