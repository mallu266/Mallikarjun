@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Falabella Coding Challenge-PHP- Bangalore</h1></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h2 class="text-justify">Write a program that prints all the numbers from 1 to 100. However, for
                        multiples of 3, instead of the number, print <strong>"Linio"</strong>. For multiples of 5 print
                        <strong>"IT"</strong>. For numbers which are multiples of both 3 and 5, print <strong>"Linianos"</strong>.</h2>
                    <h3 class="text-danger">But here's the catch: you can use only one `if`. No multiple branches, ternary
                        operators or `else`.</h3>
                    <a class="btn btn-success btn-block" href="{{url('home')}}" role="button">Click here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
