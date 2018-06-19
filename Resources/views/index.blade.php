@extends('test::layouts.master')

@section('content')
    <h1>Testing Modules</h1>

    <p>
        This view is loaded from module: {!! config('test.name') !!}
    </p>
@stop
