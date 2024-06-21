@extends('layouts.admin')
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Video Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Video</label>
                        <input required name="video" type="file" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
