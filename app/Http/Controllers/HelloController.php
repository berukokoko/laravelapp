<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

use App\Http\Requests\HelloRequest;

use Illuminate\Support\Facades\DB;
use App\Person;
use Validator;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
//   public function index(Request $request)
// {
//     $items = DB::table('people') ->orderBy('age','asc')->get();
//     return view('hello.index',['items'=>$items,]);
// }

public function getAuth(Request $request){
  $param = ['message'=>'ログインしてください'];
  return view('hello.auth',$param);
}


public function postAuth(Request $request){
  $email = $request->email;
  $password = $request->password;
  if(Auth::attempt(['email'=>$email,'password'=>$password])){
      $msg ='ログインしました。(' . Auth::User()->name . ')';
  }else{
      $msg ='ログインに失敗しました。';
  }
  return view('hello.auth',['message'=>$msg]);
}






public function index(Request $request){
  $user = Auth::user();
  $sort = $request->sort;
  $items = Person::orderBy($sort,'asc')
  ->simplePaginate(5);
  $param = ['items' => $items,'sort'=> $sort,'user' => $user];
  return view('hello.index',$param);
}

  public function post(Request $request)
{
  $items = DB::select('select * from people');
  return view('hello.index',['items'=>$items,]);
}

public function add(Request $request)
{
  return view('hello.add');
}

public function create(Request $request)
{
  $param = [
    'name' => $request->name,
    'mail' => $request->mail,
    'age' => $request->age,
  ];
  DB::table('people')->insert($param);
  return redirect('/hello');
}

public function edit(Request $request)
{
  $item = DB::table('people')
  ->where('id',$request->id)->first();
  return view('hello.edit',['from' => $item]);
}

public function update(Request $request)
{
  $param =[
    'name' =>$request ->name,
    'mail' =>$request ->mail,
    'age' =>$request ->age,
  ];
  DB::table('people')
  ->where('id',$request->id)
  ->update($param);
  return redirect('/hello');
}

public function del(Request $request)
{
  $item = DB::table('people')
  ->where('id',$request ->id)->first();
  return view('hello.del',['from' => $item]);
}

public function remove(Request $request)
{
  DB::table('people')
  ->where('id',$request ->id)->delete();
  return redirect('/hello');
}

public function show(Request $request)
{
  $page = $request ->page;
  $items = DB::table('people')
  ->offset($page * 3)
  ->limit(3)
  ->get();
  return view('hello.show',['items' => $items]);
}

};
