@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">sec-sub-title</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.contentPost') }}" method="POST">
                            @csrf

                            {{-- Title Field --}}
                            <div class="mb-3">
                                {{-- {{ $content }} --}}
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $content->title ?? '') }}">

                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Content Field --}}
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $content->content ?? '') }}</textarea>

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
    </div>
@endsection
