@extends('layouts.app')
@section('content')

<div class='container'>
   <H2 class="text-center">Записи</H2> 
   <a href="/addtasks"><button type="button" class="btn btn-primary">Создать запись</button></a>

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
                    @foreach ($data as $task)
                      <tr>
                       
                        <td>{{ $task->user_id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description}}</td>
                        <td><a href="{{route('message',$task->user_id)}}"><button type="button" class="btn btn-primary">Редактировать</button></a></td>
                      </tr>
                     
                    @endforeach
                    </tbody>
                  </table>
 </div>
@endsection