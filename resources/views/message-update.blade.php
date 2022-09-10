@extends('layouts.app')
@section('content')

<div class='container'>
   <H2 class="text-center">Редактировать запись</H2> 

   <form method="post" action="{{route('message-update-submit', $data->user_id)}}">
   @csrf
        <div class="row mt-5 ">
                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                        <div class="col-md-6">
                             <input id="title" type="text" value="{{$data->title}}" class="form-control" name="title"  >
                        </div>
            </div>
            <div class="row mt-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description"   cols="70" rows="2">{{$data->description}}</textarea>
                    </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-8 offset-md-4">
                 <button type="submit" class="btn btn-primary">
                               {{ __('Редактировать') }}
                 </button> 
                 </div>
            </div>
   </form>
 </div>
@endsection