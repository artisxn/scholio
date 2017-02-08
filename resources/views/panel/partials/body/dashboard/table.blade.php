        <div class="row">

    <div class="col-lg-12">

        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-uppercase">
                    All Registered Schools
                </h3>
                <div class="portlet-widgets">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet2" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>School id</th>
                                    <th></th>
                                    <th>School Name</th>
                                    <th>Type</th>
                                    <th>Type id</th>
                                    <th>Login email</th>
                                    <th>Login password</th>
                                    <th>Date Registered</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data['schools'] as $school)
                                <tr>
                                    <td>{{ $school->id }}</td>
                                    <td><img style="height: 35px;" src="/images/schools/{{ $school->logo }}"> </td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->type->name }}</td>
                                    <td>{{ $school->type->id }}</td>
                                    <td>{{ $school->email }}</td>
                                    <td>123456</td>
                                    <td>{{ $school->created_at }}</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
