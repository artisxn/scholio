s
@extends('errors.layouts.main')

@section('content')
    >
            <!-- Your text -->
            <h1 class="hand">Oops! Error 401 Authorization Required</h1>
            <div class="big-content" style="margin-top: 30px;">
                <!-- Main squares for the content logo in the background -->
                <div class="list-square">
                    <span class="square"></span>
                    <span class="square"></span>
                    <span class="square"></span>
                </div>

                <!-- Main lines for the content logo in the background -->
                <div class="list-line">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <!-- The animated searching tool -->
                <i class="fa fa-key"  aria-hidden="true"></i>
            </div>
            <p>Δεν έχετε πρόσβαση σε αυτή την σελίδα! Απαιτείται είσοδος με κωδικό.</p>

@endsection


