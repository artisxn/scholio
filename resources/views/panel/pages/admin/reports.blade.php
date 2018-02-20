@extends('panel.layouts.main') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reports</div>

                <div class="panel-body">

                        <div class="form-row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>School</th>
                                        <th>Info</th>
                                        <th>Delete Report</th>
                                        <th>Delete All Reports from school</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Models\Report::all()->sortBy('user_id') as $report)
                                    <tr>
                                        <td><a href="/public/profile/{{$report->user->id}}" target="_blank">{{ $report->user->name }}</a></td>
                                        <td>
                                            @if($report->info != 'Profile')
                                            <a href="/scholarship/{{ (int) $report->info  }}" target="_blank">
                                                Scholarship
                                            </a>
                                            @else
                                             {{ $report->info}}
                                            @endif
                                            
                                        </td>
                                        <td>
                                            <form method="POST" action="/report/delete/{{ $report->id }}">
                                                 {{ csrf_field() }}
                                                <button type="submit" class="btn sc-btn btn-danger">
                                                    <i class="fa fa-trash"></i> Report</button>
                                            </form>
                                        </td>

                                        <td>
                                            <form method="POST" action="/report/delete/all/{{ $report->user->id }}">
                                                 {{ csrf_field() }}
                                                <button type="submit" class="btn sc-btn btn-danger">
                                                    <i class="fa fa-trash"></i> School All Reports</button>
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
@endsection