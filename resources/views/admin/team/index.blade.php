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
            <h4>Team Table</h4>
            <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Name</th>
                            <th>Jobs</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->job }}</td>
                                <td>
                                    <img src="/images/team/{{ $team->image }}" alt="" width="100">
                                </td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.team.show', $team->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST">
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
