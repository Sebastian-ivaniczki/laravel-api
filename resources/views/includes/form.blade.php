{{-- Form --}}

@if ($project->exists)
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
@endif


@csrf
{{-- form content --}}

<div class="row mt-5">
    <div class="col-6">
        <div class="mb-3">

            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                name="title" required value="{{ old('title', $project->title) }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">

            <label for="image" class="form-label">Project image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                name="image" class="form-label"value="{{ old('image', $project->image) }}">
        </div>
    </div>

    <div class="offset-4 col-4 d-flex flex-column">
        <label class="text-start mb-2" for="type_id">Type</label>
        <select class="form-control mb-3" name="type_id" id="type_id">
            <option value="">No type</option>
            @foreach ($types as $type)
                <option @if (old('type_id', $project->type?->id) == $type->id) selected @endif value="{{ $type->id }}">
                    {{ $type->label }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-12">
        <div class="mb-3">
            <label for="content" class="form-label">Project description</label>
            <textarea class="form-control" name="content" id="content" rows="10" required>{{ old('content', $project->content) }}</textarea>
        </div>
    </div>
</div>

<hr>
<div class="d-flex justify-content-between">
    <div>
        @foreach ($technologies as $technology)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="teck-{{ $technology->id }}"
                    value="{{ $technology->id }}" name="technologie[]" @if (in_array($technology->id, old('technologie', $technologies_project))) checked @endif>
                <label class="form-check-label" for="teck-{{ $technology->id }}">{{ $technology->label }}</label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-success">Salva</button>
</div>
</form>
