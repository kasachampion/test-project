<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AddTaskController extends Controller
{
    public function submit(Request $add){
        $data=new Blog();
        $data['title'] = $add->input('title');
        $data['description'] = $add->input('description');
        $data->save();
    
      
        return redirect()->route('all-message')->with('message', 'Вы успешно добавили запись!');
    }
    public function index(){
        $data = DB::select('select * from blogs' );
         return view('main', compact('data'));
    }
    public function message($user_id){
        $data=new Blog();
         return view('one-message', ['data'=>$data->find($user_id)]);
    }
    public function messageUpdate($user_id){
        $data=new Blog();
         return view('message-update', ['data'=>$data->find($user_id)]);
    }

    public function messageUpdateSubmit($user_id,Request $add){
        $data=Blog::find($user_id);
        $data['title'] = $add->input('title');
        $data['description'] = $add->input('description');
        $data->save();
    
      
        return redirect()->route('message',$user_id)->with('success', 'Вы успешно обновили запись!');
    }
    public function messageDelete($user_id){
        Blog::find($user_id)->delete();
        
        return redirect()->route('all-message')->with('success', 'Вы успешно удалили запись!');
    }
}
