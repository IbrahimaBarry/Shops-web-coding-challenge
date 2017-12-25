@extends('layouts.app')

@section('content')
<nearby-shops :shops="{{ $shops }}"></nearby-shops>
@endsection
