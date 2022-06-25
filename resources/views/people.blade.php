@extends('layouts.app')
 
@section('title', 'People')

@section('content')
<div class="container">
    <h1 class="text-3xl">People</h1>
    <ul>
        @foreach($people as $person)
            <li>
                <p>
                    {{$person->name}}
                </p>
            </li>
        @endforeach
    </ul>
</div>
@endsection('content')