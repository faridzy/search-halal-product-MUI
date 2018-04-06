@extends('layout.main')
@section('title', 'Dashboard')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
            </ol>
        </div>
        <div class="col-lg-2"></div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                       <h2>Halaman Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection