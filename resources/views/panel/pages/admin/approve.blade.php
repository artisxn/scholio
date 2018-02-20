@extends('panel.layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title">
                            <b>Schools Table</b>
                        </h4>
                        <p class="text-muted font-13">
                            Bla Bla
                        </p>
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Reports</th>
                                            <th>Created At</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(App\Models\School::where('approved', 0)->get() as $school)
                                        <tr>
                                            <td>{{ $school->id }}</td>
                                            <td><a href="/public/profile/{{ $school->admin->id }}" target="_blank">{{ $school->admin->name }}</a></td>
                                            <td>{{ $school->admin->email }}</td>
                                            <td>{{ count($school->admin->report) }}</td>
                                            <td>{{ Carbon\Carbon::parse($school->created_at)->format('d-m-Y') }}</td>
                                            <td>
                                                <form method="POST" action="/school/approve/{{$school->id}}">
                                                     {{ csrf_field() }}
                                                    <button type="submit" class="btn sc-btn btn-success">
                                                        <i class="fa fa-check"></i> Approve</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST" action="/school/disapprove/{{$school->id}}">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn sc-btn btn-danger">
                                                        <i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection