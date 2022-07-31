@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Test') }}</div>
                <div class="card-body">
                   <div id="test" style="min-height: 24px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection