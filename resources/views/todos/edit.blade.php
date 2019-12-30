@extends('layouts.app')
@section('content')
    <h3 class="text-center">Edit Request</h3>
    <form action="{{route('todos.update',$todo->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title"> Title</label>
            <input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') ? : $todo->title }}" placeholder="Enter Title">
            @if($errors->has('title')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('title')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> NTID</label>
            <input type="text" name="ntid" id="ntid" class="form-control {{ $errors->has('ntid') ? 'is-invalid' : '' }}" value="{{ old('ntid') ? : $todo->ntid }}" placeholder="Enter NTID">
            @if($errors->has('ntid')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('ntid')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="title"> OS</label>
            <input type="text" name="os" id="os" class="form-control {{ $errors->has('os') ? 'is-invalid' : '' }}" value="{{ old('os') ? : $todo->os }}" placeholder="Enter OS">
            @if($errors->has('os')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('os')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> Quantity</label>
            <input type="text" name="quantity" id="quantity" class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" value="{{ old('quantity') ? : $todo->quantity }}" placeholder="Enter quantity">
            @if($errors->has('quantity')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('quantity')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> Duration</label>
            <input type="text" name="duration" id="duration" class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" value="{{ old('duration') ? : $todo->duration }}" placeholder="Enter Duration">
            @if($errors->has('duration')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('duration')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="body"> Description</label>
            <textarea name="body" id="body" rows="4" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" placeholder="Enter Description">{{ old('body') ? : $todo->body }}</textarea>
            @if($errors->has('body')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('body')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        @if (auth()->user()->type=='admin')
        <div class="form-group">
            <label for="status"> Status</label>
            <select class="form-control" name="status">
                @foreach(["todo", "in progress","completed"] AS $status)    
                    <option value="{{ $status }}" {{ old("status", $todo->status) == $status ? "selected" : "" }}>{{ $status }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="comments"> Comments</label>
            <textarea name="comments" id="comments" rows="4" class="form-control {{ $errors->has('comments') ? 'is-invalid' : '' }}" placeholder="Enter comments">{{ old('comments') ? : $todo->comments }}</textarea>
            @if($errors->has('comments')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('comments')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        @else 
            <!-- @if ($todo->status!='todo')
                <div>Status: {{$todo->status }}</div>
            @endif
            @if ($todo->comments!='')
             <div>Comments: {{$todo->comments }}</div>
            @endif -->
        @endif
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection