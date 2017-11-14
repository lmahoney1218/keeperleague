@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Leagues</div>

                <div class="panel-body">
                    <p><a href="/leagues/create">Create a new League</a></p>
                    <p><a href="/leagues/join">Join an existing League</a></p>
                </div>

                <div class="panel-body">
                    <ul>
                        @foreach ($leagues as $league)
                            <li>
                                <a href="/leagues/{{ $league->id }}">{{ $league->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
