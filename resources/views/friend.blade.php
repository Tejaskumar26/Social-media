@extends('layout')
<br>
<h1>Friends </h1><br>
@foreach($friends as $value)
<h3>{{$value->name}}</h3><br>
@endforeach
<br><br>
<!-- <h1><a href="suggestion">Suggestions</a></h1><br><br> -->
<a href="back">Back</a>