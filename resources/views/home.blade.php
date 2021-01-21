@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="justify-content-center align-items-center text-center">
                        <div>
                            <a href="{{ route('clients.index') }}" type="button" class="btn btn-primary col-md-4">العملاء</a>
                            <a href="{{ route('orders.index') }}" type="button" class="btn btn-secondary col-md-4">الرحلات</a>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-dark col-md-4">طلبات جديدة</button>
                            <button type="button" class="btn btn-success col-md-4">التأشيرات</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
