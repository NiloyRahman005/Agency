@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">Social Link</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.socialLinkPost') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Link Lists</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                            @forelse($socialLink as $key=>$socials)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $socials->name }}</td>
                                    <td>{{ $socials->link }}</td>
                                    <td>
                                        <a href="{{ route('admin.SocialLinkDelete', $socials->id) }}"
                                            class="btn btn-danger">Delete</a>
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
    </div>
    @push('script')
    @endpush
@endsection
