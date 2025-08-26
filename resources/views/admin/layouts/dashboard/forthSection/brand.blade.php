@extends('admin.layouts.dashboard.app')
@section('content')
    @push('link')
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Brand Section</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.brandPost') }}" method="POST">
                            @csrf
                            @error('brand_name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            {{-- Title Field --}}
                            <div class="mb-3">
                                {{-- {{ $content }} --}}
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="brand_name">

                                @error('title')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>


                    </div>



                    {{-- Submit Button --}}
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($brands as $brand)
                <div class="col-3 mb-3"> <!-- 3 cards per row -->
                    <div class="card h-100">
                        <form action="{{ route('admin.brandEdit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $brand->id }}">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" name="brand_name"
                                        value="{{ $brand->brand_name }}">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                                    <a href="{{ route('admin.brandDelete', $brand->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @empty
                <p>No services found</p>
            @endforelse
        </div>

    </div>
    </div>
    @push('script')
        <script src="{{ asset('admin/public/assets/vendor/summernote/js/summernote.min.js') }}"></script>
        <script src="{{ asset('admin/public/assets/js/plugins-init/summernote-init.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 300, // Editor height
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather',
                        'Open Sans', 'Tahoma', 'Times New Roman', 'Verdana'
                    ],
                    fontNamesIgnoreCheck: ['Merriweather', 'Open Sans'], // custom fonts
                    toolbar: [
                        // customize toolbar
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['fontsize', 'fontname', 'color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            });
        </script>
        
    @endpush
@endsection
