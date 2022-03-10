<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="{{route('user.store')}}">
            @csrf
            <h2 class="mb-4">Insert Data</h2>
            <div class="mb-4">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="fname" />
            </div>
            <div class="mb-4">
                <label for="first_name">Last Name:</label>
                <input type="text" class="form-control" name="lname" />
            </div>
            <div class="mb-4">
                <label for="gender" class="me-3">Gender:</label>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male">
                    <label class="form-check-label" for="gender1">
                        Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
                    <label class="form-check-label" for="gender2">
                        Female
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender3" value="Other">
                    <label class="form-check-label" for="gender3">
                        Other
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="qualifications">Qualifications:</label>
                <input type="text" class="form-control" name="qualifications" />
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>

</html>
