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
            {{-- ✅ Create New Service --}}
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Add Service</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.postContent') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Title Field --}}
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Image Upload --}}
                            <div class="mb-3">
                                <div class="position-relative">
                                    <div class="avatar-preview mb-2">
                                        <div id="imagePreview" style="background-image: url('');"></div>
                                    </div>
                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                        <input type="file" class="form-control d-none" id="imageUpload"
                                            accept=".png, .jpg, .jpeg" name="image">
                                        <label for="imageUpload" class="btn btn-primary ms-0">Select Image</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            {{-- ✅ Existing Services --}}
            <div class="col-12 mt-4">
                <div class="row">
                    @forelse($ourServices as $service)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <img src="{{ asset('service/' . basename($service->image)) }}"
                                    class="card-img-top service-img" alt="{{ $service->title }}">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $service->title }}</h5>

                                    {{-- Edit Form --}}
                                    <form action="{{ route('admin.postContentUpdate') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $service->id }}">

                                        <div class="mb-2">
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $service->title }}">
                                        </div>
                                        <div class="mb-2">
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                        <a href="{{ route('admin.postContentdelete', $service->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this service?')"
                                            class="btn btn-sm btn-danger">Delete</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('admin.serviceContentAdd', $service->id) }}">Content Add</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No services found</p>
                    @endforelse
                </div>
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
