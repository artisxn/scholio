@extends('panel.layouts.main')

@section('content')
    @foreach($admissions as $admission)
       <a href="https://scholio.dev/scholarship/{{ $admission->scholarship_id }}" target="_blank">
       <?php $ass =  $admission->scholarship->study ?>
        <div>{{ $admission->scholarship->school->type->name}}</div>
        <div>{{ $admission->scholarship->school->admin->name }}</div>
        <div>{{ $ass->name ?? 'ΠΟΛΛΑΠΛΗ' }}</div>
        <div>{{ $ass->section[0]->name ?? 'POLLAPLI' }}</div>
        <div>{{ $ass->section[0]->level->name ?? $admission->scholarship->multipleStudies[0]->section[0]->level->name }}</div>
       </a>
       <hr>
    @endforeach
@endsection