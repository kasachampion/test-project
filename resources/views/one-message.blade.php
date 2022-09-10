@extends('layouts.app')
@section('content')

<div class='container'>
   <H2 class="text-center">Редактировать или удалить</H2> 


   <table class="table mt-5 text-center">
                    <thead>
                      <tr>              
                        <td scope="col"><b>User_id</b></td>
                        <td scope="col"><b>Title</b></td>
                        <td scope="col"><b>Description</b></td>
                        <td scope="col"><b></b></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>     
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->description}}</td>
                        <td><a href="{{route('message-update',$data->user_id)}}"><button type="button" class="btn btn-primary">Редактировать</button></a></td>
                        <td><a href="{{route('message-delete',$data->user_id)}}"><button type="button" class="btn btn-danger">Удалить</button></a></td>
                      
                      </tr>
                    </tbody>
                  </table>
 </div>
@endsection