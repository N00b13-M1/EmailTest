<h1>User Form</h1>

<form action="hello" method="post">
    {{method_field('put')}}
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submit">Log in</button>
</form>

@if (1 > 10)
    <p>More than 10</p>
{{-- @elseif (5 == 10)
    <p>The values are equal<p> --}}
@else
<p>Less than 10</p>
@endif

{{-- //unless - False --}}

@unless (empty($test))
    <h2>Name is VOL LESS!</h2>
@endunless

{{-- //if - true --}}
@if (empty($test))
    <h2>Name is LEEG IF!</h2>
@else
    <h2>Name is VOL IF!</h2>
@endif

{{-- //empty - true --}}
@empty($test)
    <h2>Leeg</h2>
@endempty

{{-- check if variable been7k set - true --}}
@isset($test)
    <h2>Variable in orde</h2>
@endisset

@for($i = 0; $i <= 10; $i++)
    <p>Test {{ $i }}</p>
@endfor

//Iterates over a table
@foreach ($test as $item)
   <p> {{  $item }} </p>
@endforeach

@forelse ($test as $item)
    <p>{{  $item}}</p>
@empty
    <p>Leeg</p>
@endforelse

{{ $i =0 }}
@while ($i < 10)
    <p>{{ $i }}</p>
{{ $i++ }}
@endwhile

