@extends('layouts.helloapp')

@section('title','Delete')

@section('menuber')
  @parent
  削除ページ
@endsection

@section('content')
<table>
<form action ="/hello/del" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$from->id}}">
<tr><th>name:</th><td><input type="text" name="name" value="{{$from->name}}"></td></tr>
<tr><th>mail:</th><td><input type="text" name="mail" value="{{$from->mail}}"></td></tr>
<tr><th>age:</th><td><input type="text" name="age" value="{{$from->age}}"></td></tr>
<tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
