@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <h3 class="text-light">Contact Lists</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            @forelse($contactLists as $key=>$contactsLists)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $contactsLists->name }}</td>
                                    <td>{{ $contactsLists->email }}</td>
                                    <td>{{ $contactsLists->message }}</td>

                                    <td>
                                        <a href="{{ route('admin.contactListDelete', $contactsLists->id) }}"
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
