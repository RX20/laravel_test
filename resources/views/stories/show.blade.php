@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$story->title}}
                
                <a href="{{route('stories.index')}}" class="float-right">Back</a>
                </div>


                <div class="card-body">
                   <p>{{$story->name}}</p>
                   <p>{{$story->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
