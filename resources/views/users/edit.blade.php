@extends('layouts.app', ['page' => __('manage_user'), 'pageSlug' => 'manage_user'])
@section('content')
<div class="col-lg-6 col-md-6 col-sm-12 width">
    <div class="address">
        <h3>Create</h3>
        <form method="post" action='{{route('update_user',$users)}}'>
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <input class="contactus" value="{{$users->name}}" placeholder="Title" type="text" name="title">
                </div>
                <div class="col-sm-12">
                    <input class="contactus" value="{{$users->email}}" placeholder="Genra" type="text" name="description">
                </div>
                <div class="col-sm-12">
                    <textarea class="textarea" placeholder="Description" type="text" name="descrdiption"></textarea>
                </div>
                <div class="col-sm-12">
                    <input type="submit" class="send" name="submit"/>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
