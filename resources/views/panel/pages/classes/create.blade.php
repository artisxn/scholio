@extends('panel.layouts.main')
{{-- {{ header("Content-Type: text/plain") }} --}}
@section('styles')

@endsection

@section('content')
<form action="/panel/users/teacher/class/create" method="POST">
{{ csrf_field() }}
    <div>
        Τίτλος: <input type="text" name="title">
    </div>

    <div>
        Ώρες ανά εβδομάδα: <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="hpw">
    </div>

    <div>
        Πτυχίο:
        <select name="studies[]" multiple>
          @foreach($studies as $study)
            <option value="{{ $study->id }}">{{ $study->name }}</option>
          @endforeach
        </select>
    </div>

    <div>
    Μαθητές:
        <select name="students[]" multiple>
          @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
          @endforeach
        </select>
    </div>

    <div>
        Start Date: <input type="date" name="start_date">
    </div>

    <div>
        End Date: <input type="date" name="end_date">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
