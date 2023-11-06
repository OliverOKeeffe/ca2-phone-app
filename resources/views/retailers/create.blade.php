@extends('layouts.myApp')

@section('content')
<h3>Create Retailer</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('retailers.store') }}" method="post">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{  old('name') }}"/>
        @if($errors->has('name'))
        <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">founded</label>
        <input type="text" name="founded" id="founded" value="{{  old('founded') }}"/>
        @if($errors->has('founded'))
        <span>{{ $errors->first('founded') }}</span>
        @endif
    </div>
    <div>
        <label for="">num_location</label>
        <input type="text" name="num_locations" id="num_locations" value="{{  old('num_locations') }}"/>
        @if($errors->has('num_locations'))
        <span>{{ $errors->first('num_locations') }}</span>
        @endif
    </div>
    <button type="submit">Create</button>
</form>
@endsection