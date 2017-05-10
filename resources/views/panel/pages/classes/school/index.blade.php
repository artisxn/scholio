@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
<div class="container">
<div>
    <h3>Η ΤΑΞΗ:</h3>
     <div style="color: green;">{{ $lecture->title }}</div>
</div>
<div>
    <h3>Ο ΚΑΘΗΓΗΤΗΣ:</h3>
     <div style="color: brown;">{{ $lecture->teacher->name }}</div>
</div>
<div>
    <h3>ΟΙ ΜΑΘΗΤΕΣ:</h3>
    @foreach($lecture->student as $student)
    <div class="row">
        <div class="col-sm-3" style="color: red;">
            {{ $student->user->name }}
            @foreach($student->badge as $badge)
                <img src="/{{ $badge->icon }}" width="15%">
            @endforeach
        </div>
{{--         <div class="col-sm-9">
        <form action="/panel/users/teacher/class/badge/{{ $student->id }}" method="POST">
        {{ csrf_field() }}
            <select name="badge">
                @foreach($badges as $badge)
                    @if($student->badge->contains($badge))
                        <option disabled>{{ $badge->name }}</option>
                    @else
                        <option value="{{$badge->id}}">{{ $badge->name }}</option>
                    @endif
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Αποθηκευση Εμβλήματος</button>
        </form>
        </div>
    </div> --}}

    @endforeach
</div>

<br>
<div>
    <h3>ΣΕ ΠΤΥΧΙΑ:</h3>
    @foreach($lecture->study as $study)
        <div style="color: blue;">{{ $study->name }}</div>
    @endforeach
</div>
<br>
<div>
    <h3>ΗΜ. ΑΡΧΗΣ ΜΑΘΗΜΑΤΟΣ:</h3>
    <div>{{ $lecture->start_date }}</div>
</div>

<div>
    <h3>ΗΜ. ΤΕΛΟΥΣ ΜΑΘΗΜΑΤΟΣ:</h3>
    <div>{{ $lecture->end_date }}</div>
</div>
</div>
@endsection
