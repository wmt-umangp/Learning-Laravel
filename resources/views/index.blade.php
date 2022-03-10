<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retreiving Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-10"><h2 class="text-center mb-5">Displaying data</h2></div>
            <div class="col-2"><a class="btn btn-success" href="{{URL::to('insert/')}}">Add New</a></div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Qualifications</th>
                    <th colspan='2'>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cruds as $crud =>$col)

                    <tr>
                        <td>{{++$crud}}</td>
                        <td>{{$col->fname}}</td>
                        <td>{{$col->lname}}</td>
                        <td>{{$col->gender}}</td>
                        <td>{{$col->qualifications}}</td>
                        <td><form action="{{ route('user.update', $col->id)}}" method="GET">
                            @csrf
                            <button class="btn btn-primary" type="submit">Edit</button>
                          </form>  </td>
                        <td><a href="{{URL::to('destroycontroller/'.$col->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
