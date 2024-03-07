@extends('layout')
<div id="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <span class="closeButton">&times;</span>
      <p class="brand-title"><a href="">Post your Feed</a></p>

      <div class="side-links">
        <ul>
          <li><a class="active" href="ppp">Home</a></li>
          <li><a href="create">Create Posts</a></li>
          <li><a href="ppp">Posts</a></li>
          <li><a href="frnd">Friend List</a></li>          
        </ul>
      </div>
      <!-- sidebar footer -->
      <footer class="sidebar-footer">
        <small>Post your creations</small>
      </footer>
    </div>
<main class="container">
      <h2 class="header-title">All Posts</h2>
      <section class="cards-blog">
      <div class="card-blog-content">
      <p>
      @foreach($posts as $post)
            <h2>Title:  {{$post->title}}</h2><br>
            <!-- <h4>id:  {{$post->id}}</h4><br> -->
            <h2>Contents:   {{$post->body}}</h2><br>
            <h5>Posted by {{$post->user->name}}</h5><br>
            <h6>Posted on {{$post->created_at}}</h6><br>
            <div class="likes">
            <a href="like">
            <button class="button">LIKE!</button></a>
            <div class="counter">{{$count}}</div>
            <div class="unlikes">
            <a href="dis">
            <button class="button">UNLIKE!</button></a>
            </div>
            <br><br><br>
      @endforeach 
      </p>
      </div>
</main>    