 @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <h2 class="text-center mb-5">Displaying data</h2>
            </div>
            <div class="col-2">
                <a class="btn btn-success" href="{{URL::to('insert/')}}">Add New</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
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
                                <td>
                                    <form action="{{ route('user.update', $col->id)}}" method="GET">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td><a href="{{URL::to('destroycontroller/'.$col->id) }}"
                                        class="btn btn-danger">Delete</a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    @endsection


