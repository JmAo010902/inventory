@extends('include.master')


@section('title','OptiLock | Dashboard')


@section('page-title','Dashboard')


@section('content')
            <info-box></info-box>

@endsection


@push('script')

<script type="text/javascript" src="{{ url('public/js/dashboard.js') }}"></script>

@endpush