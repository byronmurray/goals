@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Goals</div>

                <div class="panel-body">
                    these are your goals

                     <ul>
                        @foreach ($goals as $goal)
                            <a href="#"><li>{{ $goal->title }}</li></a>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
