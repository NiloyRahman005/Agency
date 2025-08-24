@extends('admin.layouts.dashboard.app')
@section('content')
    @php
        $defaultImage = asset('assets/images/no-img-avatar.png');
        $bannerPath =
            $banner && $banner->banner && file_exists(public_path($banner->banner))
                ? asset($banner->banner)
                : $defaultImage;
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            Banner Image
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand SlideToolHeader"></a>
                        </div>
                    </div>
                    <div class="cm-content-body  publish-content form excerpt">
                        <div class="card-body">
                            <div class="avatar-upload d-flex align-items-center">
                                <form action="{{ route('admin.bannerPost') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!---error-->
                                    @if ($errors->has('banner'))
                                        <div class="text-danger mt-2">
                                            {{ $errors->first('banner') }}
                                        </div>
                                    @endif
                                    <!--Success-->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class=" position-relative ">
                                        <div class="avatar-preview">
                                            <div id="imagePreview" @endphp
                                                style="background-image: url('{{ $bannerPath }}');">

                                            </div>
                                        </div>
                                        <div class="change-btn d-flex align-items-center flex-wrap">
                                            <input type="file" class="form-control d-none" id="imageUpload"
                                                accept=".png, .jpg, .jpeg" name="banner">
                                            <label for="imageUpload" class="btn btn-primary ms-0">Banner Image</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                            $('#imagePreview').hide();
                            $('#imagePreview').fadeIn(650);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imageUpload").on('change', function() {
                    readURL(this);
                });

                $('.remove-img').on('click', function() {
                    var imageUrl = "/assets/images/no-img-avatar.png"; // Use correct asset URL
                    $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
                });
            });
        </script>
    @endpush
@endsection
