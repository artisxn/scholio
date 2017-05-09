@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
<div>
    <h3>Η ΤΑΞΗ ΜΟΥ:</h3>
     <div style="color: green;">{{ $lecture->title }}</div>
</div>
<br>
<div>
    <h3>ΟΙ ΣΥΜΑΘΗΤΕΣ ΜΟΥ:</h3>
    @foreach($lecture->student as $student)
        @if($student->id == auth()->user()->info->id)
            <div style="color: #888;">{{ $student->user->name }}</div>
        @else
            <div style="color: red;">{{ $student->user->name }}</div>
        @endif
    @endforeach
</div>

<br>
{{-- <div>
    ΣΕ ΠΤΥΧΙΑ:<br>
    @foreach($lecture->study as $study)
        <div style="color: blue;">{{ $study->name }}</div>
    @endforeach
</div> --}}
<br>
<div>
    <h3>ΗΜ. ΑΡΧΗΣ ΜΑΘΗΜΑΤΟΣ:</h3>
    <div>{{ $lecture->start_date }}</div>
</div>

<div>
    <h3>ΗΜ. ΤΕΛΟΥΣ ΜΑΘΗΜΑΤΟΣ:</h3>
    <div>{{ $lecture->end_date }}</div>
</div>

@endsection
