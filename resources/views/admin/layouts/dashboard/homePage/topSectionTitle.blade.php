@extends('admin.layouts.dashboard.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3>sec-sub-title</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.secSubTitlePost') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                @if ($errors->has('section_sub_title'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('section_sub_title') }}
                                    </div>
                                @endif

                                <label for="" class="form-label">Section Sub Title</label>
                                <input type="text" class="form-control" name="section_sub_title"
                                    value="{{ $sectionSubTitle ? $sectionSubTitle->sec_sub_title : ' ' }}">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3>sec-title</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.secTitlePost') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                {{-- @if ($errors->any())
                                    <div class="text-danger mt-2">
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif --}}
                                @if ($errors->has('section_title'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('section_title') }}
                                    </div>
                                @endif

                                <label for="" class="form-label">Section Title</label>
                                <input type="text" class="form-control" name="section_title"
                                    value="{{ $SectionTitle ? $SectionTitle->sec_title : ' ' }}">
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
@endsection
