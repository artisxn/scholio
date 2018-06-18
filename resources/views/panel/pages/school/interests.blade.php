@extends('panel.layouts.main') 

@section('styles')
<style>
    .main-title{text-align: center; margin: 20px auto; color: #008da5}
    .title-container{ padding-top: 5px; display: block; width: 99%; text-align: center; margin: 20px auto; height: 80px; background: #e8e8e8; border: 1px solid #ccc; border-radius: 10px;}
    .main-table{margin-top: 30px;}

    @media (max-width:475px){
        .title-container{ height: 110px;}
    }


</style>
@endsection 

@section('content')

    <div class="title-container">
        <h3 class="main-title"> Αιτήσεις μαθητών για νέες υποτροφίες</h3>
    </div>


    <table class="table table-striped main-table">
        <thead>
            <tr>
                    <th>Όνομα Μαθητή</th>
                    <th>Email Μαθητή</th>
                    <th>Τηλέφωνο Μαθητή</th>
                    <th>Ενδιαφέρον</th>
            </tr>
        <tbody>
        
            @foreach($interests as $interest)
            <tr>
                <td>{{ $interest->name }}</td>
                <td>{{ $interest->email }}</td>
                <td>{{ $interest->tel }}</td>
                <td>{{ App\Models\Study::find($interest->study_id)->name }}</td>
            </tr>
        
            @endforeach
        </tbody>
    </table>

@endsection