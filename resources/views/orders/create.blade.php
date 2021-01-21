@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="client_id">إسم العميل</label>
                        <select class="custom-select" name="client_id">
                            <option selected>اختر العميل</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="flight_to">مكان الرحلة</label>
                        <input type="text" class="form-control" name="flight_to">
                    </div>
                    <div class="form-group">
                        <label for="total_price">تكلفة الرحلة</label>
                        <input type="number" class="form-control" name="total_price">
                    </div>
                    <div class="form-group">
                        <label for="paid">المقدم</label>
                        <input type="number" class="form-control" name="paid">
                    </div>
                    <div class="form-group">
                        <label for="invoice">فاتورة</label>
                        <input type="file" class="form-control" name="invoice">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">إضافة</button>
                </form>
            </div>
        </div>
    </div>
@endsection
