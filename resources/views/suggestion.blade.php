@extends('layout')<br>
<h1>Suggestions</a></h1><br><br>
@foreach($users as $user)
<h4>{{$user->name}}</h4><br>
<h5><a href="add">Add Friend</a></h5><br><br>
@endforeach