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
                                            <th>Type</th>
                                            <!-- <th>Address</th> -->
                                            <th>City</th>
                                            <!-- <th>Phone</th> -->
                                            <!-- <th>Website</th> -->
                                            <!-- <th>Approved</th> -->
                                            <!-- <th>Reports</th> -->
                                            <th>PageViews</th>
                                            <th>PageClicks</th>
                                            <th>StudyClicks</th>
                                            <th>Created At</th>
                                            <th>Delete from Algolia</th>
                                            <th>Delete From Scholio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(App\Models\School::all() as $school)
                                        <tr>
                                            <td>{{ $school->id }}</td>
                                            @if($school->approved)
                                            <td style="color:green">{{ $school->admin->name }}</td>
                                            @else
                                            <td style="color:red">{{ $school->admin->name }}</td>
                                            @endif
                                            <td>{{ $school->admin->email }}</td>
                                            <td>{{ $school->type->name }}</td>
                                            <!-- <td>{{ $school->address }}</td> -->
                                            <td>{{ $school->city }}</td>
                                            <!-- <td>{{ $school->phone }}</td> -->
                                            <!-- <td>{{ $school->website }}</td> -->
                                            <!-- <td>{{ $school->approved }}</td> -->
                                            <!-- <td>{{ count($school->admin->report) }}</td> -->
                                            <td>{{ Counter::show('school-profile', $school->id) }}</td>
                                            <td>{{ App\Models\SchoolLinks::where('school_id', $school->id)->first()->count ?? 0 }}</td>
                                            <?php
                                            $countAll = 0;
                                            ?>
                                            @foreach(App\Models\StudyLinks::where('school_id',$school->id)->get() as $link)
                                                <?php $countAll += $link->count; ?>
                                            @endforeach
                                            <td>{{ $countAll }}</td>
                                            <td>{{ Carbon\Carbon::parse($school->created_at)->format('d-m-Y') }}</td>
                                            <td><form method="POST" action="/school/deleteAlgolia/{{$school->id}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn sc-btn btn-danger">
                                                    <i class="fa fa-trash"></i> Algolia</button>
                                            </form></td>
                                            <td><form method="POST" action="/school/deleteScholio/{{$school->id}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn sc-btn btn-danger">
                                                    <i class="fa fa-trash"></i> DELETE</button>
                                            </form></td>
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