@extends('layouts.app')

@section('content')
<pre>
    @foreach($shops as $shop)
        {{ $shop->shops }}
    @endforeach
</pre>
@endsection
