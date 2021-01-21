@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('clients.update',$client->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name">إسم العميل</label>
                        <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">رقم العميل</label>
                        <input type="text" class="form-control" name="phone" value="{{ $client->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="address">عنوان العميل</label>
                        <input type="text" class="form-control" name="address" value="{{ $client->address }}">
                    </div>
                    <div class="form-group">
                        <label for="email">إيميل العميل</label>
                        <input type="email" class="form-control" name="email" value="{{ $client->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary">حـفـظ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
