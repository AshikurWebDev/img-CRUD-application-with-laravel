<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        /* img{
            background: grey;
            height: 250px;
            width: 100%;
            border: 1px solid grey;
            margin-top: 20px;
            box-shadow: 0 8px 6px -6px black;
        } */
    </style>
</head>
<body>
    @yield('content')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function (){
            $('img').lazyload();
        });

        function previewFile(input)
        {
            let file = $("input[type=file]").get(0).files[0];
            if(file)
            {
                let reader = new FileReader();
                reader.onload= function(){
                    $('#previewImg').attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
        //  function UpdatepreviewFile(input)
        // {
        //     let file = $("input[type=file]").get(0).files[0];
        //     if(file)
        //     {
        //         let reader = new FileReader();
        //         reader.onload= function(){
        //             $('#update_previewImg').attr("src", reader.result);
        //         }

        //         reader.readAsDataURL(file);
        //     }
        // }
    </script>
     <script src="https://cdn.tiny.cloud/1/xsp2hmlje8c8t2e9661sate17nftmvtnhia4u8os1s08r6pc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    </body>
</html>