@extends('layouts.app')
@section('content')
    <h3 class="text-center">Create Request</h3>
    <form action="{{route('todos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title"> Title</label>
            <input type="text" name="title" id="title" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title')}}" placeholder="Enter Title">
            @if($errors->has('title')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('title')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> NTID</label>
            <input type="text" name="ntid" id="ntid" class="form-control {{$errors->has('ntid') ? 'is-invalid' : '' }}" value="{{old('ntid')}}" placeholder="Enter NTID">
            @if($errors->has('title')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('ntid')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> OS</label>
            <input type="text" name="os" id="os" class="form-control {{$errors->has('ntid') ? 'is-invalid' : '' }}" value="{{old('os')}}" placeholder="Enter OS">
            @if($errors->has('os')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('os')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title"> Quantity</label>
            <input type="text" name="quantity" id="quantity" class="form-control {{$errors->has('quantity') ? 'is-invalid' : '' }}" value="{{old('quantity')}}" placeholder="Enter Quantity">
            @if($errors->has('quantity')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('quantity')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="title"> Duration</label>
            <input type="text" name="duration" id="duration" class="form-control {{$errors->has('duration') ? 'is-invalid' : '' }}" value="{{old('duration')}}" placeholder="Enter Duration">
            @if($errors->has('duration')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('duration')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="body"> Description</label>
            <textarea name="body" id="body" rows="4" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" placeholder="Enter Description">{{old('body')}}</textarea>
            @if($errors->has('body')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('body')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection