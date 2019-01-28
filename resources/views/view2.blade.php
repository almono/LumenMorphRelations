@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-12 col-sm-8 text-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('morph1') }}" style="color: white;">Tag morphs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('morph2') }}">Comment morphs</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop