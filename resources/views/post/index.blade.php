
@extends('layouts.app')
@section('content')

<ul>
    @foreach($model as $models)
        <li> 
            {{$models->title}}
        </li>
    @endforeach
</ul>
@endsection