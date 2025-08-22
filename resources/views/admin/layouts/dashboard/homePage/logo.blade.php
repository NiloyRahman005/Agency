@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            Featured Image
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body  publish-content form excerpt">
                        <div class="card-body">
                            <div class="avatar-upload d-flex align-items-center">
                                <div class=" position-relative ">
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url(public/assets/images/no-img-avatar.png);">
                                        </div>
                                    </div>
                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                        <input type="file" class="form-control d-none" id="imageUpload"
                                            accept=".png, .jpg, .jpeg">
                                        <label for="imageUpload" class="btn btn-primary ms-0">Select Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
