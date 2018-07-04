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
                                            <th>Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(App\Models\AlgoliaSchool::all() as $school)
                                        <tr>
                                            <td>{{ $school->id }}</td>
                                            <td><a target="_blank">{{ $school->name }}</a></td>
                                            <td>
                                                <form method="POST" action="/school/ranking/{{$school->id}}">
                                                    {{ csrf_field() }}
                                                    <input type="number" name="ranking" value="{{ $school->scholioranking }}">
                                                   <button type="submit" class="btn sc-btn btn-success">
                                                       <i class="fa fa-check"></i> Save</button>
                                               </form>
                                            </td>
                                            <td>
                                                
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