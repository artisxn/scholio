@extends('panel.layouts.main') 

@section('styles')
<style>

</style>
@endsection 

@section('content') 

    <table class="table table-striped">
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
    <!-- @foreach($interests as $interest)
    <br>
        STUDENT NAME: {{ $interest->name }} <br>
        STUDENT TEL: {{ $interest->tel }} <br>
        STUDENT EMAIL: {{ $interest->email }} <br>
        STUDENT STUDY: {{ App\Models\Study::find($interest->study_id)->name }} <br>
        __________________________________________
    <br>
    @endforeach -->
@endsection