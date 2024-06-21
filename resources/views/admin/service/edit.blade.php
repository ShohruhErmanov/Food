@extends('layouts.admin')
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Service Edit Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.service.update', $service->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" type="text" value="{{ $service->title }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Icons</label>
                        <input required name="icons" type="text" value="{{ $service->icons }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Text</label>
                        <input required name="text" type="text" value="{{ $service->text }}" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
