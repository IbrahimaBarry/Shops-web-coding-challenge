@extends('layouts.app')

@section('content')
<nearby-shops :data="{{ $shops }}"></nearby-shops>
@endsection
