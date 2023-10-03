@extends('backend.layout')

@section('dashboard')
active
@endsection
@section('title')
Dashboard
@endsection

@section('content')

<h5 class="mb-2 mt-4">Visitors Information</h5>
<div class="row">

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_u }}</h3>

                <p>Uniq Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_t }}</h3>

                <p>Total Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-clock"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_d }}</h3>

                <p>Today Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
</div>

<h5 class="mb-2 mt-4">Data Information</h5>

<div class="row">

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>0</h3>

                <p>Total Products</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-notes-medical"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

</div>

@endsection
