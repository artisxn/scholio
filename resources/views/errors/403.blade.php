@extends('errors.layouts.main')

@section('content')
    <div class="text-error">
    <span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">3</span>
    </div>
    <h2>ΑΠΑΓΟΡΕΥΕΤΑΙ Η ΕΙΣΟΔΟΣ</h2><br>
    <p class="text-muted">Δεν έχετε την αδεια να εισέλθετε σε αυτη την σελίδα!</p>
    <br>
    <a class="btn btn-default waves-effect waves-light" href="{{ url()->previous() }}"> Επιστροφή </a>
@endsection
