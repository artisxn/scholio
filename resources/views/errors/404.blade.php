@extends('errors.layouts.main')

@section('content')
    <div class="text-error">
    <span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">4</span>
    </div>
    <h2>Η ΣΕΛΙΔΑ ΔΕΝ ΒΡΕΘΗΚΕ</h2><br>
    <br>
    <a class="btn btn-default waves-effect waves-light" href="{{ url()->previous() }}"> Επιστροφή </a>
@endsection
