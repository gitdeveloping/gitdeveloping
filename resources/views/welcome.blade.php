@extends('layouts.default')

@section('content')
    <div class="flex flex-column p-4">
        <h1 class="font-weight-light">Your gateway to better development.</h1>
        <button class="btn-lg rounded">Sign Up</button>
    </div>
    <section class="p-5 section-grey">
        <div class="container">
            <h3>How It Works</h3>
            <div class="row">
                <div class="col">
                    <p>We're dedicated to providing a community led home for development skills.</p>
                    <p>Whether you're completely new to coding, or a seasoned veteran, we look to challenge and improve
                        your capability.</p>
                    <p>Just sign up, and access the wide variety of resources to learn something new, or keep you on
                        your toes.</p>
                    <button class="btn-lg rounded">Sign Up</button>
                </div>
                <div class="col">
                    <img src="https://via.placeholder.com/500x200" alt="image here">
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container">
            <h3>Features</h3>
            <div class="row text-center pt-2">
                <div class="col">
                    <img class="mx-auto d-block" src="https://via.placeholder.com/150x150" alt="">
                    <h5 class="m-1">Video Tutorials</h5>
                    <p>Tutorials to help learn and build on the fundamentals of programming.</p>
                </div>
                <div class="col">
                    <img class="mx-auto d-block" src="https://via.placeholder.com/150x150" alt="">
                    <h5 class="m-1">Interactive Problem Solving</h5>
                    <p>Mathematical/Logical problems complete with efficiency and size testing.</p>
                </div>
                <div class="col">
                    <img class="mx-auto d-block" src="https://via.placeholder.com/150x150" alt="">
                    <h5 class="m-1">Enterprise Training</h5>
                    <p>Track employee completion and progess with our enterprise plans.</p>
                </div>
            </div>
        </div>
    </section>
@endsection('content')