@extends('layouts.admin')
@section('content')

<div class="col-12 col-md-6 col-lg-12">

    <div class="card">
      <div class="card-header d-felx justify-content-between">
        <h4>Team Show Table</h4>
        <a href="{{ route('admin.team.index') }}" class="btn btn-primary">Back</a>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Job</th>
              <th scope="col">Image</th>
              <th scope="col">Facebook</th>
              <th scope="col">Telegram</th>
              <th scope="col">Instagram</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ $team->id }}</th>
              <td>{{ $team->name }}</td>
              <td>{{ $team->job }}</td>
              <td>
                <img src="/images/team/{{ $team->image }}" alt="" width="100">
              </td>
              <td>{{ $team->facebook }}</td>
              <td>{{ $team->telegram }}</td>
              <td>{{ $team->instagram }}</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection
