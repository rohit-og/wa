@extends('layouts.app', ['class' => 'main-content-has-bg'])

@section('content')
@include('layouts.headers.guest')
<div class="container lw-guest-page-container-block pb-2 lw-terms-and-conditions-page">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="card shadow border-0 mt-5">
                <h1 class="card-header text-center">
                   <?= $page['title'] ?>
                </h1>
                <div class="card-body px-lg-5 py-lg-5 p lw-ws-pre-line">
                        <h3><?= $page['content'] ?></h3> 
                </div>
            </div>
        </div>
    </div>
</div>



@endsection