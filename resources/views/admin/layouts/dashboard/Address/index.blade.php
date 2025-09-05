@extends('admin.layouts.dashboard.app')

@section('content')
    @push('link')
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Add Company Address</h3>
                        <a href="{{ route('admin.clearAddress') }}" class="btn btn-sm btn-danger">Clear Content</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.companyAddressPost') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Add Address</label>
                                <textarea class="summernote" name="address">
                                    @if (isset($address->address))
{!! $address->address !!}
@endif
                                </textarea>
                                @error('content')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <!-- Summernote JS -->
        <script src="{{ asset('admin/public/assets/vendor/summernote/js/summernote.min.js') }}"></script>

        <!-- Bootstrap Tags Input JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <script>
            $(document).ready(function() {
                // Image preview
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

                // Summernote init
                $('.summernote').summernote({
                    height: 300,
                    placeholder: "Write your blog content here..."
                });
            });
        </script>
    @endpush
@endsection
