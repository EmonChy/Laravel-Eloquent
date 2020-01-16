@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <h2>Tag - {{ $tag->name }}</h2>
                
                 @foreach ($tag->post as $post)
                    <div class="card card-body mt-2">
                    <h3>{{ $post->title }} in <small><mark>{{ $tag->name }}</mark></small></h3>
                    <div>
                        {{ $post->description }}
                    </div>
                    </div>
                @endforeach

               
                </div>
        </div>
    </div>
</div>
@endsection
