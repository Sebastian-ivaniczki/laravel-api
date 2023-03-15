@extends('layouts.app')

@section('title', $project->title)

@section('content')

    <header>
        <h1 class="my-5 text-center">{{ $project->title }}</h1>
    </header>

    <div class="clearfix">
        @if ($project->image)
            <img class="float-start me-3 post-img" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->slug }}">
        @endif
        <p>{{ $project->content }}</p>
        <p>technologie:

            @forelse ($project->technologies as $item)
                <span>{{ $item->label }}</span>
            @empty
                -
            @endforelse
        </p>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-secondary me-2" href="{{ route('admin.projects.index') }}">Back</a>
        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
