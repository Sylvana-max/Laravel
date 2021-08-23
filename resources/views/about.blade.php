{{-- @if (5 == 10)
    <p> 5 is lower that 10 </p>
@elseif(5 > 10)
    <p> 5 is greater than 10 </p>
@else
    <p> all conditions are false </p>
@endif

@unless (empty($name))
   <h1> Name isn't empty! </h1> 
@endunless

@empty($name)
    <h1> Name is empty </h1>
@endempty

@isset($name)
    <h2>True<h2>
@endisset --}}

{{-- @switch($name)
    @case('Ma!')
        <h1>Yay!</h1>
        @break
    @case('Papa')
        <h1>Yo!</h1>
        @break
    @default
        <h2>No match</h2>
@endswitch --}}

{{-- @for($i = 0; $i <= 10; $i++)
    <p>The number is: {{ $i }}</p>
@endfor --}}

{{-- @foreach ($names as $item)
    <h2>The name is {{ $item }} </h2>
@endforeach --}}

{{-- @forelse ($names as $item)
    <h2>The name is {{ $item }} </h2>
@empty
    <h2>There are no names!</h2>
@endforelse --}}

{{ $i = 0 }}
@while ($i < 10)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile