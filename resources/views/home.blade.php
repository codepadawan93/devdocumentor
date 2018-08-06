@extends('app')
@section('content')
<h1>{{$s===""?"Home":"Search"}}</h1>
<section>
    <div class="row">
    @if($projects->count() === 0)
    <div class="col-md-12">No projects found. Go build some!</div>
    @endif
    @foreach ($projects as $project)
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" data-src="{{$project->image ?? '[{}]'}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$project->name ?? ''}}</h5>
                <p class="card-text">{{str_limit($project->subtitle ?? '')}}</p>
                <a href="{{url($project->slug)}}" class="btn btn-outline-dark">Go to documentation</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
@endsection