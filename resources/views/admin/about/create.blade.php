@extends('layouts.admin')
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>About Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.about.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Experience</label>
                        <input required name="experience" type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Chefs</label>
                        <input required name="chefs" type="number" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
