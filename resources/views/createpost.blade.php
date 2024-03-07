@extends('layout')
    <a href="back">Back</a>
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Create New Post!</h1>
            @include('includes.flash-message')
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <label for="title"><span>Title</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" />
                    @error('title')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Body-->
                    <label for="body"><span>Body</span></label>
                    <textarea id="body" name="body">{{ old('body') }}</textarea>
                    @error('body')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                    @enderror
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>

        </section>
    </main>
