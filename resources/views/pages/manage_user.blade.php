@extends('layouts.app', ['page' => __('manage_user'), 'pageSlug' => 'manage_user'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="get" action="{{Route('create_user')}}" autocomplete="off">
            <div class="card-body">
                    @csrf
                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('الاسم') }}</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label>{{ __('البريد الالكتروني') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('كلمة السر') }}</label>

                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('كلمة السر ') }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('تأكيد كلمة السر ') }}">
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-fill btn-primary"></input>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        الاسم
                      </th>
                      <th>
                        البريد الالكتروني
                      </th>
                      <th>
                        تاريخ الانشاء
                      </th>
                      <th class="text-center">
                        اخر تعديل
                      </th>
                      <th>

                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)


                    <tr>
                      <td>
                        {{$user->name}}
                      </td>
                      <td>
                        {{$user->email}}
                      </td>
                      <td>
                        {{$user->created_at}}
                      </td>
                      <td class="text-center">
                        {{$user->updated_at}}
                      </td>
                      <td class="text-center">
                        <a href="{{route('edit', $user)}}"><button type="button" class="btn btn-primary btn-sm">تعديل</button></a>
                        <form style="display: inline-block" action="{{route('destroy',$user)}}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger btn-sm">حذف</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
