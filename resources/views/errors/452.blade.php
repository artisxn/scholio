@extends('errors.layouts.main')

@section('content')

            <!-- Your text -->
            <h1 class="hand">There is no user with this username</h1>
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
                <i class="fa fa-search"  aria-hidden="true"></i>
            </div>
            <p>Δεν υπαρχει χρήστης με αυτό το username.</p>

@endsection
