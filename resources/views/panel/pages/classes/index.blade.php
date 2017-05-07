@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
<div>
    Η ΤΑΞΗ: <div style="color: green;">{{ $lecture->title }}</div>
</div>
<br>
<div>
    ΟΙ ΜΑΘΗΤΕΣ:<br>
    @foreach($lecture->student as $student)
        <div style="color: red;">{{ $student->user->name }}</div>
    @endforeach
</div>

<br>
<div>
    ΣΕ ΠΤΥΧΙΑ:<br>
    @foreach($lecture->study as $study)
        <div style="color: blue;">{{ $study->name }}</div>
    @endforeach
</div>
<br>
<div>
    ΗΜ. ΑΡΧΗΣ ΜΑΘΗΜΑΤΟΣ:
    <div>{{ $lecture->start_date }}</div>
</div>

<div>
    ΗΜ. ΤΕΛΟΥΣ ΜΑΘΗΜΑΤΟΣ:
    <div>{{ $lecture->end_date }}</div>
</div>

@endsection
