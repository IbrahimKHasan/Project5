@extends('layouts.app', ['page' => __('manage_user'), 'pageSlug' => 'manage_user'])
@section('content')
<div class="col-lg-6 col-md-6 col-sm-12 width">
    <div class="address">
        <h3>Update</h3>
        <form method="post" action='{{route('update_user',$user)}}'>
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <input class="contactus" value="{{$user->name}}" placeholder="Title" type="text" name="title">
                </div>
                <div class="col-sm-12">
                    <input class="contactus" value="{{$user->email}}" placeholder="Genra" type="text" name="description">
                </div>

                <div class="col-sm-12">
                    <input type="submit" class="send" name="submit"/>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
