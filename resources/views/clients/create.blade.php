@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">إسم العميل</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">رقم العميل</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">عنوان العميل</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="email">إيميل العميل</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">إضافة</button>
                </form>
            </div>
        </div>
    </div>
@endsection
