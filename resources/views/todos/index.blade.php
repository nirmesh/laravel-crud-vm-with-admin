@extends('layouts.app')
@section('content')
    <h2 class="text-center">My VM Requests</h2>
    <ul class="list-group py-3 mb-3">
        @forelse($todos as $todo)
            <h6><b>REQ-{{$todo->id}}</b></h6>
            <li class="list-group-item my-2">
                <h5 class="float-left">{{$todo->title}}</h5>
                <p class="float-right">Created by: {{$todo->user->name}}</p>
                <div class="clearfix"></div>
                <p>{{str_limit($todo->body,20)}}</p>
                <small class="float-right">{{$todo->created_at->diffForHumans()}}</small>
                <a href="{{route('todos.show',$todo->id)}}">Read More</a>
            </li>
        @empty
            <h4 class="text-center">No request Found!</h4>
        @endforelse
    </ul>

@endsection