@extends('layouts.app')
@section('content')

<div class='container'>
   <H2 class="text-center">Добавить запись</H2> 

   <form method="post" action="/addtasks-submit">
   @csrf
        <div class="row mt-5 ">
                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                        <div class="col-md-6">
                         <input id="title" type="title" class="form-control " name="title"  autofocus>
                        </div>
            </div>
            <div class="row mt-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                    <Div class="col-md-6">
                        <textarea name="description" id="description" cols="70" rows="2"></textarea>
                    </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-8 offset-md-4">
                 <button type="submit" class="btn btn-primary">
                               {{ __('Отправить') }}
                 </button> 
                 </div>
            </div>
   </form>
 </div>
@endsection