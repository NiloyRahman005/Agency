@extends('admin.layouts.dashboard.app')
@section('content')
    @push('link')
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
        <style>
            /* ✅ Image preview styling */
            #imagePreview,
            .service-img {
                width: 100%;
                height: 300px;
                background-position: center;
                background-size: cover;
                border: 1px solid #ddd;
                border-radius: 8px;
            }
        </style>
    @endpush

    <div class="container-fluid">
        <div class="row">

            {{-- ✅ Create or Update Task Story --}}
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Add / Update Task Story</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.taskStoryPost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" value="{{ $taskStory->designation ?? '' }}" name="designation"
                                    class="form-control">
                            </div>

                            {{-- Content --}}

                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" cols="30" rows="5">{{ old('content', $taskStory->content ?? '') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Image Upload --}}
                            <div class="mb-3">
                                <div class="position-relative">
                                    <div class="avatar-preview mb-2">
                                        <div id="imagePreview"
                                            style="background-image: url('{{ isset($taskStory->image) ? asset($taskStory->image) : '' }}');">
                                        </div>
                                    </div>
                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                        <input type="file"
                                            class="form-control d-none @error('image') is-invalid @enderror"
                                            id="imageUpload" accept=".png, .jpg, .jpeg" name="image">
                                        <label for="imageUpload" class="btn btn-sm btn-danger ms-0">Select Image</label>
                                    </div>
                                    @error('image')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            {{-- ✅ Show Existing Task Story --}}
            <div class="col-6">
                @if ($taskStory)
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3 class="text-light">Current Task Story</h3>
                        </div>
                        <div class="card-body">
                            {{-- ✅ Show image only if set and file exists --}}
                            @if ($taskStory->image && file_exists(public_path($taskStory->image)))
                                <img src="{{ asset($taskStory->image) }}" class="service-img mb-3" alt="Task Story Image">
                            @else
                                <p class="text-muted text-center">No image uploaded</p>
                            @endif

                            {{-- ✅ Show designation in bold --}}
                            @if (!empty($taskStory->designation))
                                <h3 class="fw-bold text-center">{{ $taskStory->designation }}</h3>
                            @endif

                            {{-- ✅ Show content only if not null --}}
                            @if (!empty($taskStory->content))
                                <p>{{ $taskStory->content }}</p>
                            @else
                                <p class="text-muted">No content added yet</p>
                            @endif
                        </div>
                    </div>
                @else
                    <p>No task story found.</p>
                @endif
            </div>


        </div>
    </div>

    @push('script')
        <script src="{{ asset('admin/public/assets/vendor/summernote/js/summernote.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                // ✅ Preview for new service upload
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                            $('#imagePreview').hide().fadeIn(650);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imageUpload").on('change', function() {
                    readURL(this);
                });
            });
        </script>
    @endpush
@endsection
