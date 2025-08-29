@extends('admin.layouts.dashboard.app')

@section('content')
    @push('link')
        <!-- Summernote CSS -->
        <link href="{{ asset('admin/public/assets/vendor/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Tags Input CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    @endpush

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Blog Lists</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            @forelse($blog as $key=>$blogs)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $blogs->title }}</td>
                                    <td>
                                        {{-- <a href="{{ route('admin.blogEdit', $blogs->id) }}" class="btn btn-primary"> Edit
                                        </a> --}}
                                        <a href="{{ route('admin.blogsEdit', $blogs->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('script')
    @endpush
@endsection
