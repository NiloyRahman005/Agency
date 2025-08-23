@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-light">Upload Video</h5>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Expand</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.videoStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Error Message --}}
                            @if ($errors->has('video'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('video') }}
                                </div>
                            @endif

                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- Video Preview --}}
                            {{-- Video Preview --}}
                            <div class="mb-4 text-center">
                                <video id="videoPreview" width="100%" height="300" controls class="border rounded"
                                    style="{{ isset($video) ? '' : 'display: none;' }}">
                                    <source src="{{ isset($video) ? asset($video->video) : '' }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            {{-- File Upload and Buttons --}}
                            <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                                <input type="file" class="form-control d-none" id="videoUpload" accept="video/mp4"
                                    name="video">
                                <label for="videoUpload" class="btn btn-outline-primary">Select Video</label>
                                <button type="button" class="btn btn-outline-danger remove-video">Remove Video</button>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                function previewVideo(input) {
                    if (input.files && input.files[0]) {
                        const file = input.files[0];
                        if (file.type.startsWith('video/')) {
                            const videoURL = URL.createObjectURL(file);
                            $('#videoPreview').show();
                            $('#videoPreview source').attr('src', videoURL);
                            $('#videoPreview')[0].load();
                        } else {
                            alert('Please upload a valid video file.');
                        }
                    }
                }

                $("#videoUpload").on('change', function() {
                    previewVideo(this);
                });

                $('.remove-video').on('click', function() {
                    $('#videoPreview source').attr('src', '');
                    $('#videoPreview')[0].load();
                    $('#videoPreview').hide();
                    $('#videoUpload').val('');
                });
            });
        </script>
    @endpush
@endsection
