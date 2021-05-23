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
        <h3 class="text-center text-light bg-warning mt-3"> User Form </h3>
            <div class="col-md-4 mx-auto my-3">
                <form action="/Insert_User" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" name="F_UserName" class="form-control" placeholder="Your Username">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                        <input type="email" class="form-control" name="F_Email" placeholder="Your Email id:">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
                        <input type="text" name="F_Add" class="form-control" placeholder="Your Address: ">
                    </div>

                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-university" aria-hidden="true"></i> </span>
                        <input type="text" name="F_Job" class="form-control" name="" placeholder="Your Field Job Name :">
                    </div>

                    <div class="form-group my-3">
                        <label for=""> Gender : </label>
                        <input type="radio" name="F_Gen" id="gen_male" value="Male" class="inline-form">
                        <label for="gen_male"> Male</label>

                        <input type="radio" name="F_Gen" id="gen_female" value="Female" class="inline-form">
                        <label for="gen_female"> Female </label>
                    </div>

                    <div class="form-group my-3">
                        <select name="F_Contry" id="" class="form-select"> Contry 
                            <option value="India"> India </option>
                            <option value="America"> America </option>
                            <option value="Bali"> Bali </option>
                            <option value="Canada"> Canada </option>
                            <option value="Dubai"> Dubai </option>
                        </select>
                    </div>
                    
                    <div class="form-group my-3">
                        <label for=""> Language : </label>
                        <input type="checkbox" class="inline-form-group" id="asd_guj" name="F_Check[]" value="Gujarati">
                        <label for="asd_guj"> Gujarati </label>

                        <input type="checkbox" class="inline-form-group" id="asd_hindi" name="F_Check[]" value="Hindi">
                        <label for="asd_hindi"> Hindi </label>

                        <input type="checkbox" class="inline-form-group" id="asd_eng" name="F_Check[]" value="English">
                        <label for="asd_eng"> English </label>
                    </div>

                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-calendar-o" aria-hidden="true"></i> </span>
                        <input type="date" name="F_Date" class="form-control">
                    </div>
                    
                    <div class="input-group my-3">
                        <input type="file" name="F_File" class="form-control" id="f_myfiles">
                        <label for="f_myfiles" class="input-group-text"> Upload </label>
                    </div>

                    <div class="row">
                        <button class="btn btn-warning col-md-4 mx-auto"> Submit </button>
                        <a href="Display_UserForm" class="btn btn-warning col-md-4 mx-auto"> Display Users </a>
                    </div>

                </form>

            </div>

        </div>
    
    </div>

</body>
</html>