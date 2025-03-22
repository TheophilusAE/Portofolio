@extends('layouts.app')

@section('title', 'Personal Website')

@section('container')
<div class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">
    <div id="header">
        <div class="container">
            <nav>
                <img src="{{ asset('images/20250120_040706160_iOS.jpg') }}" class="img-fluid">
            </nav>
            <div class="header">
                <h1>Hi, I'm <span>Theophilus Alexander Elvan</span> <br>from Indonesia</h1>
                <p>Undergraduate Computer Science</p>
                <p>Phone: +62 812-3456-7890</p>
                <p>Im a Computer Science Undergraduate Student that currently learning Full Stack Development at Binus University At Malang</p>
            </div>
        </div>
    </div>
</div>

@endsection
