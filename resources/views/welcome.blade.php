
{{-- demo of include directive --}}
{{-- @include('about'); --}}

<h1>Welcome Page</h1>
<a href="/login">Login</a>
{{-- <h1>The current unix timestamp is @{{time()}}</h1> --}}
<br><br>

{{-- demo for if else in blade template --}}
@if ($name == 1)
    sum is equal to 1<br>
@elseif ($name > 10)
    sum is greater than 10<br>
@else
    sum is less than 10<br>
@endif

{{-- demo for isset and empty method --}}
{{-- @isset($name)
    name is not null
@endisset

@empty($name)
    name is null
@endempty --}}


{{-- demo of php directive --}}
{{-- @php
    $count=1;
    echo "hello world!!$count";
@endphp --}}


@auth
    user is authenticated <br>
@endauth

@guest
    user is guest <br>
@endguest

@production
    system is in production environment <br>
@endproduction
    system is not in production environment <br>
