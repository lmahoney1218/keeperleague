@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Edit League</div>

                <div class="panel-body">
                    <form action="/leagues/{{ $league->id }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">League Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $league->name }}">
                        </div>
                        <div class="form-group">
                            <label for="join_key">Join Key</label>
                            <input type="password" name="join_key" id="join_key" class="form-control" value="{{ $league->join_key }}">
                        </div>
                        <div class="form-group">
                            <label for="member_count">Member Count</label>
                            <input type="number" name="member_count" id="member_count" class="form-control" value="{{ $league->member_count }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-primary">Update League</button>
                        </div>
                    </form>
                </div>

                <div class="panel-heading">Remove League Members</div>

                <div class="panel-body">
                    <ul>
                        @foreach ($league->users as $player)
                            @if($user->id != $player->id)
                        <li>

                            {{ $player->name  }}

                            <form action="/leagues/{{ $league->id }}/leave" method="post">
                                <input type="hidden" name="player_id" value="{{$player->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-primary">Remove</button>
                            </form>

                        </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
