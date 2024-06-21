@extends('layouts.admin')
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Service Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.service.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Icons</label>
                        <input required name="icons" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <input required name="text" type="text" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
