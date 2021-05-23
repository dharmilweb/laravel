<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
            
    <div class="container">

        <div class="row">

            <div class="col-md-6 mx-auto">
            
                <h1> This is First File Upload Form </h1>

                <form action="Datas" method="post" class="my-3" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="My_File"><br><br>
                    <div class="row">
                        <button  class="btn btn-primary col-md-4 mx-auto"> Submit </button>
                    </div>
                </form>


            </div>
        
        </div>    
    
    </div>

</body>
</html>