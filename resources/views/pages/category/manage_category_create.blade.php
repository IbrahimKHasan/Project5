@extends('layouts.arabic.master')
@section('title','الأصناف - إضافة')
@section('content')
<div class="content text-right">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title text-right">إاضافة صنف</h5>
                </div>
                <form method="post" action="{{ route('admin.manage_categories.store') }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @include('alerts.success')
                            <div class="form-group">
                                <label>الصنف</label>
                                <input type="text" name="category_name" class="form-control" placeholder="الصنف">
                            </div>
                                <label>الصورة</label>
                                <input type="file" name="category_image" class="form-control" >
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">إضافة</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
