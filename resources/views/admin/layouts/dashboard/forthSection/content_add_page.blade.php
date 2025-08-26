@extends('admin.layouts.dashboard.app')
@section('content')
    @push('link')
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
        <style>
            /* ✅ Image preview styling */
            #imagePreview,
            .service-img {
                width: 100%;
                height: 200px;
                background-position: center;
                background-size: cover;
                border: 1px solid #ddd;
                border-radius: 8px;
            }
        </style>
    @endpush

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">

                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>{{ $ourServices->title }}</h3>
                        <button type="button" id="addSection" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg"></i> Add
                        </button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.serviceBasedFeaturePost') }}" id="serviceForm" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $ourServices->id }}">
                            <div id="contentArea">
                                <!-- Dynamic fields will be appended here -->
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($FeaturesOfServices as $features)
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Feature</h3>
                        </div>
                        <form action="{{ route('admin.featuresEdit') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" value="{{ $features->id }}" name="id">

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title"
                                        value="{{ old('title', [], 'feature_' . $features->id) ?: $features->title }}"
                                        class="form-control @error('title', 'feature_' . $features->id) is-invalid @enderror">

                                    @error('title', 'feature_' . $features->id)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" class="form-control @error('content', 'feature_' . $features->id) is-invalid @enderror">{{ old('content', [], 'feature_' . $features->id) ?: $features->content }}</textarea>

                                    @error('content', 'feature_' . $features->id)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                        </form>
                        <a href="{{ route('admin.featuresDelete', $features->id) }}"
                            class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>

        </div>
    </div>
@empty
    <p>No features found.</p>
    @endforelse
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
        <script>
            $(document).ready(function() {
                let sectionCount = 0;

                // Add new section
                $("#addSection").click(function() {
                    sectionCount++;
                    let section = `
            <div class="card border p-3 mb-3 position-relative section-block">
                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 removeSection ">
                    Delete
                </button>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="sections[${sectionCount}][title]" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="sections[${sectionCount}][content]" class="form-control" rows="3" placeholder="Enter content" required></textarea>
                </div>
            </div>
        `;
                    $("#contentArea").append(section);
                });

                // Remove section
                $(document).on("click", ".removeSection", function() {
                    $(this).closest(".section-block").remove();
                });
            });
        </script>
    @endpush
@endsection
