<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="">Home</a>
                    @else
                        <a href="">Login</a>
                        {{-- <a href="">Register</a> --}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="m-b-md">
                    <form method="post">

                        <div class="form-gorup">
                            <label for="personalnumber">Personal Number</label>
                            <input type="number" id="personalnumber" name="personalnumber" class="form-control" value="199012247590">

                            <input type="submit" class="btn btn-success" name="psubmit" id="psubmit" value="Submit">
                        </div>

                    </form>
                </div>

                <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

                <script>
                    $(document).ready(function() {

                        $(document).on('click', "#psubmit", function(event) {
                            event.preventDefault();
                            /* Act on the event */
                            personalnumber = $("#personalnumber").val();

                            if (personalnumber != "") {
                                //alert(personalnumber);
                                $.ajax({
                                    url: "",
                                    type: 'GET',
                                    data: {personalnumber: personalnumber},
                                })
                                .done(function(data,xhs) {
                                    console.log(data);
                                })
                                .fail(function(data) {
                                    console.log("error");
                                })


                            }
                        });
                    });
                </script>
            </div>
        </div>
    </body>
</html>

