@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Section Section Cards</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.secondSectionCardsInsert') }}" method="POST">
                            @csrf

                            {{-- Title Field --}}
                            <div class="mb-3">
                                {{-- {{ $content }} --}}
                                <label class="form-label">Title</label>
                                {{-- <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $content->title ?? '') }}"> --}}
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="">

                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Content Field --}}
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                {{-- <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $content->content ?? '') }}</textarea> --}}
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10"></textarea>

                                @error('content')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            @forelse($secondSection as $contentsWithTitle)
                <div class="col-lg-4">
                    <div class="card ">

                        <form action="{{ route('admin.sectondSecUpdate') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $contentsWithTitle->id }}">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $contentsWithTitle->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Content</label>
                                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $contentsWithTitle->content }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                        </form>
                        <a href="{{ route('admin.sectondSecdelete', $contentsWithTitle->id) }}"
                            class="btn btn-sm btn-danger">Delete</a>
                    </div>



                </div>

        </div>
    </div>
@empty
    @endforelse

    </div>
    </div>
@endsection
