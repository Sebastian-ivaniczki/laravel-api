@extends('layouts.app')

@section('title', 'projects')

@section('content')
    <header class="d-flex justify-content-between my-5">
        <h1>Projects</h1>
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Crate</a>
    </header>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Created</th>
                <th scope="col">Modified</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td class="align-middle"><span>{{ $project->type ? $project->type->label : '-' }}</span></td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-small btn-primary"
                            href="{{ route('admin.projects.show', $project->id) }}">details</a>
                        <a class="btn btn-small btn btn-warning mx-2"
                            href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                            class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Ther are no projects</td>
                </tr>
            @endforelse


        </tbody>
    </table>
@endsection

@section('scripts')
    @vite('resources/js/dele-confirm.js')
@endsection
