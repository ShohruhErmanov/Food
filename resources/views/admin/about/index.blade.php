@extends('layouts.admin')
@section('content')
    @if (session('seccess'))
        <div class="col-12 col-md-6 col-lg-12">
            <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('seccess') }}
                </div>
            </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>About Table</h4>
            <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Experience</th>
                            <th>Chefs</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $about->experience }}</td>
                                <td>{{ $about->chefs }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
