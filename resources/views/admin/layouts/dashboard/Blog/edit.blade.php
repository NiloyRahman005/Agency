@extends('admin.layouts.dashboard.app')

@section('content')
    @push('link')
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

        <style>
            /* New image preview styling */
            .image-preview-container {
                width: 100%;
                height: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid #ddd;
                border-radius: 8px;
                overflow: hidden;
            }

            .image-preview-container img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
                /* This is the key change */
            }

            /* Tags Input Styling */
            .bootstrap-tagsinput {
                width: 100%;
                min-height: 40px;
            }

            .bootstrap-tagsinput .tag {
                margin-right: 2px;
                color: white;
                background-color: #0d6efd;
                padding: 3px 8px;
                border-radius: 4px;
            }
        </style>
    @endpush

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">
                            {{ isset($blog) ? 'Update Blog Post' : 'Add Blog Post' }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blogEditPost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blog->id }}">

                            {{-- Blog Title --}}
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $blog->title ?? '') }}">
                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            {{-- Blog Content --}}
                            <div class="mb-3">
                                <label class="form-label">Content</label>

                                <textarea required class="summernote" name="content">{!! $blog->content !!}</textarea>
                                @error('content')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            {{-- Featured / OG Image --}}
                            <div class="mb-3">
                                <label class="form-label">Featured / OG Image</label>
                                <div class="position-relative">
                                    <div class="image-preview-container mb-2">
                                        <img id="imagePreview" src="{{ isset($blog->image) ? asset($blog->image) : '' }}"
                                            alt="Featured Image Preview"
                                            style="display: {{ isset($blog->image) ? 'block' : 'none' }};">
                                    </div>
                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                        <input type="file" class="form-control d-none" id="imageUpload"
                                            accept=".png, .jpg, .jpeg" name="image">
                                        <label for="imageUpload" class="btn btn-primary ms-0">Select Image</label>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            {{-- Meta Title --}}
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title"
                                    value="{{ old('meta_title', $blog->meta_title ?? '') }}"
                                    placeholder="Meta title for SEO & Facebook">
                            </div>

                            {{-- Meta Description --}}
                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>

                                <textarea name="meta_description" class="form-control" rows="3" placeholder="Meta description for SEO & Facebook">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>

                            </div>

                            {{-- Meta Keywords as tags input --}}
                            <div class="mb-3">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords"
                                    value="{{ old('meta_keywords', $blog->meta_keywords ?? '') }}" data-role="tagsinput"
                                    placeholder="Add keywords and press Enter">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($blog) ? 'Update Blog' : 'Submit Blog' }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('admin/public/assets/vendor/summernote/js/summernote.min.js') }}"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


        <script>
            $(document).ready(function() {
                // Image preview
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').attr('src', e.target.result).show();
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imageUpload").on('change', function() {
                    readURL(this);
                });

                // Summernote init
                $('.summernote').summernote({
                    height: 300,
                    placeholder: "Write your blog content here..."
                });
            });
        </script>
    @endpush
@endsection
