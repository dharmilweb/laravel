<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

</head>
<body>
    
    <div class="container">

        <div class="row">
        <h1 class="text-center text-danger bg-warning my-5"> Image Curd Operation </h1>
        
            <div class="col-md-12 mx-auto">

                <div class="row">

                    <div class="col-md-12 mx-auto">
                    
                        
                        <a href="/DatabaseForm" class="btn btn-primary my-2"> Add User </a>
                        <table class="table table-stripped table-bordered">
                            <thead class="thead-light">
                            
                        <!--  name	email	address	Job	gender	contry	language	date	image -->
                                <tr class="text-center">
                                    <th scope="col"> col </th>
                                    <th scope="col"> id </th>
                                    <th scope="col"> name </th>
                                    <th scope="col"> email </th>
                                    <th scope="col"> job </th>
                                    <th scope="col"> gender </th>
                                    <th scope="col"> contry </th>
                                    <th scope="col"> language </th>
                                    <th scope="col"> date </th>
                                    <th scope="col"> image </th>
                                    <th scope="col" colspan="2"> Operation </th>
                                </tr>
                            </thead>
                            <body>
                                @foreach($DBUser as $User)
                                <tr>
                                    <th scope="row">1</th>
                                    <td> {{ $User->id }} </td>
                                    <td> {{ $User->name }} </td>
                                    <td> {{ $User->email }} </td>
                                    <td> {{ $User->Job }} </td>
                                    <td> {{ $User->gender }} </td>
                                    <td> {{ $User->contry }} </td>
                                    <td> {{ $User->language }} </td>
                                    <td> {{ $User->date }} </td>
                                    <td> <img src="{{ asset( 'Uploads/DBUserPhoto/' .$User->image) }}" width="100px" heigth="100px" alt="Image"> </td>
                                    <td> <a href="/Update_Form/{{$User->id}}" class="btn btn-primary"> Update </a> </td>
                                    <td> <a href="/DeletePage/{{$User->id}}" class="btn btn-warning"> Delete </a> </td>
                                </tr>
                                @endforeach

                            </body>
                        </table>
                    
                    </div>    
                
                </div>
                    
            </div>

        </div>
    
    </div>

</body>
</html>