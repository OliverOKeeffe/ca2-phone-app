@extends('layouts.admin')

@section('content')
<h3><strong>Create Phone</strong></h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<!-- Creating the text boxes to add data to to create phones -->
<!-- <form action="{{ route('admin.phones.store') }}" method="post">     -->
<form enctype="multipart/form-data" action="{{ route('admin.phones.store') }}" method="post">
    @csrf
    <div>
        <label for="">Model Name</label>
        <input type="text" name="model_name" id="model_name" value="{{  old('model_name') }}"/>
        @if($errors->has('model_name'))
        <span>{{ $errors->first('model_name') }}</span>
        @endif
    </div>
    <div>
        <label for="">Year</label>
        <input type="text" name="year" id="year" value="{{  old('year') }}"/>
        @if($errors->has('year'))
        <span>{{ $errors->first('year') }}</span>
        @endif
    </div>
    <div>
        <label for="">Battery Life</label>
        <input type="text" name="battery_life" id="battery_life" value="{{  old('battery_life') }}"/>
        @if($errors->has('battery_life'))
        <span>{{ $errors->first('battery_life') }}</span>
        @endif
    </div>
    <div>
        <label for="">Height</label>
        <input type="text" name="height" id="height" value="{{  old('height') }}"/>
        @if($errors->has('height'))
        <span>{{ $errors->first('height') }}</span>
        @endif
    </div>
    <div>
        <label for="">Weight</label>
        <input type="text" name="weight" id="weight" value="{{  old('weight') }}"/>
        @if($errors->has('weight'))
        <span>{{ $errors->first('weight') }}</span>
        @endif
    </div>

    <div class="form-group">
         <label for="brand">Brand</label>
          <select name="brand_id">
       @foreach($brands as $brand)
         <option {{ old('brand_id') == $brand->id ? "selected" : "" }} value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
        </select>
    </div>


   <div class="form-group">
    <label for="retailers"> <strong> Retailers</strong> <br> </label>
     @foreach($retailers as $retailer)
      <input id="{{$retailer->id}}" type="checkbox"  value="{{$retailer->id}}" name="retailers[]">
     <label for="{{$retailer->id}}">{{$retailer->name}}</label>
         @endforeach
     </div>

     <input
        type="file"
        name="phone_image"
        placeholder="Phone Image"
        class="w-full mt-6"
        field="phone_image"
        >
   

    <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Create</button>
    <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><a href="{{ route('admin.phones.index') }}">Back</a></button>
</form>
@endsection



