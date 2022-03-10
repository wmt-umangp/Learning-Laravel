<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="{{route('user.edit',$crud->id)}}">
            @method('PATCH')
            @csrf

            <h2 class="mb-4">Edit Data</h2>
            <div class="mb-4">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="fname" value="{{$crud->fname}}" />
            </div>
            <div class="mb-4">
                <label for="first_name">Last Name:</label>
                <input type="text" class="form-control" name="lname" value="{{$crud->lname}}" />
            </div>
            <div class="mb-4">
                <label for="gender" class="me-3">Gender:</label>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male"  {{ ($crud->gender=="Male")? "checked" : "" }}>
                    <label class="form-check-label" for="gender1">
                        Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female" {{ ($crud->gender=="Female")? "checked" : "" }}>
                    <label class="form-check-label" for="gender2">
                        Female
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender3" value="Other" {{ ($crud->gender=="Other")? "checked" : "" }}>
                    <label class="form-check-label" for="gender3">
                        Other
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="qualifications">Qualifications:</label>
                <input type="text" class="form-control" name="qualifications" value="{{$crud->qualifications}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
