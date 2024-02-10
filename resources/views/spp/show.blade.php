@extends('template.master')

@section('h1')
SPP
@endsection
@section('content')
    <div> 
        <h1>GENRE</h1>
    <h3>Id:  {{$sppsShow->id_spps}}</h3>
    <h3>Tahun: {{$sppsShow->tahun}}</h3>
    <h3>Nominal: {{$sppsShow->nominal}}</h3>
    </div>

@endsection