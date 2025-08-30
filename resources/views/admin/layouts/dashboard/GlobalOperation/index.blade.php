@extends('admin.layouts.dashboard.app')
@section('content')
    {{-- @php
        $defaultImage = asset('assets/images/no-img-avatar.png');
        $logoPath = $Logo && $Logo->logo && file_exists(public_path($Logo->logo)) ? asset($Logo->logo) : $defaultImage;
    @endphp --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            Featured Image
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand SlideToolHeader"></a>
                        </div>
                    </div>
                    <div class="cm-content-body  publish-content form excerpt">
                        <div class="card-body">
                            <div class="avatar-upload d-flex align-items-center">
                                <form action="{{ route('admin.globalOperationStore') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!---error-->
                                    {{-- @if ($errors->has('logo'))
                                        <div class="text-danger mt-2">
                                            {{ $errors->first('logo') }}
                                        </div>
                                    @endif --}}
                                    <!--Success-->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="" class="form-label">Country Name</label>
                                        <input type="text" class="form-control" name="country_name">
                                    </div>
                                    <div class=" position-relative ">
                                        <div class="avatar-preview">
                                            <div id="imagePreview" @endphp style="background-image: url('');">
                                            </div>
                                        </div>
                                        <div class="change-btn d-flex align-items-center flex-wrap">
                                            <input type="file" class="form-control d-none" id="imageUpload"
                                                accept=".png, .jpg, .jpeg" name="image">
                                            <label for="imageUpload" class="btn btn-primary ms-0">Select Image</label>
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
        <div class="row">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-light">Lists</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            @forelse($globalOperation as $key=>$global)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $global->country_name }}</td>
                            <td>
                                @if (isset($global->image) && file_exists(public_path($global->image)))
                                    <img src="{{ asset($global->image) }}" style="height: 200px;width:200px;"
                                        class="img-fluid" alt="">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.globalOpearationDelete', $global->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        @endforelse
                        </tr>
                    </table>
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
