@extends('panel.layouts.main')

@section('styles')
<style>
    .inactive{
        background-color: #aaa;
    }
    .active{
        background-color: #fff;
    }
</style>
@endsection

@section('content')
    <div>ΥΠΟΛΟΙΠΟ ΑΙΤΗΣΕΩΝ : {{ auth()->user()->info->admissions_limit }}</div>
    <div>ΠΛΗΘΟΣ ΑΙΤΗΣΕΩΝ : {{ count($admissions) }}</div>
    @foreach($admissions as $admission)
    <?php $as =  $admission->scholarship ?>
    <div class="{{ $as->active ? 'active' : 'inactive' }}">
       <a href="https://scholio.dev/scholarship/{{ $admission->scholarship_id }}" target="_blank">
        <div> <img src="/panel/assets/images/steps/{{ $as->financial->icon }}" height="30px"> </div>
        <div>{{ $as->financial->plan }} {{ $as->financial_amount}}{{$as->financial->metric }}</div>

        <div>{{ $admission->scholarship->school->type->name}}</div>
        <div>{{ $admission->scholarship->school->admin->name }}</div>
        <div>{{ $as->study->name ?? 'ΠΟΛΛΑΠΛΗ study' }}</div>
        <div>{{ $as->study->section[0]->name ?? 'POLLAPLI section' }} <img src="{{ $as->study->section[0]->icon ?? '/panel/assets/images/steps/studies.png' }}" height="30px"></div>
        <div>{{ $as->criteria->name }} - <img src="{{ $as->criteria->icon }}" height="30px"></div>
        <div>{{ $as->study->section[0]->level->name ?? $admission->scholarship->multipleStudies[0]->section[0]->level->name }}</div>
        <div>Αιτουντες: {{ $as->usersLength() }}</div>
        @if($as->active)
        <?php 
            if(request()->cookie('lang') && request()->cookie('lang') == 'el'){
                Carbon\Carbon::setLocale('el');
            }
        $end = Carbon\Carbon::createFromFormat('Y-m-d', $admission->scholarship->end_at);
        $endDiff = ($end->diff(new Carbon\Carbon())->days < 1) ? 'today' : $end->diffForHumans(new Carbon\Carbon());
        ?>
        <div>ΛΗΞΗ: {{$endDiff}}</div>
        @else
        <div>ΕΛΗΞΕ</div>
        <div> {{ $as->winner->contains(auth()->user()->id) ? 'ΝΙΚΗΣΕΣ' : 'ΕΧΑΣΕΣ' }}</div>
        @endif
       </a>

       
    </div>
    <hr>
    @endforeach
@endsection