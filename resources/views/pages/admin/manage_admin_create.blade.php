<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('black') }}/img/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="{{ asset('black') }}/css/theme.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title" style="display:block; text-align: right;">تعديل المشرف</h5>
                    </div>
                    <form method="post" action="{{ route('admin.manage_admins.store') }}">
                        <div class="card-body">
                            @csrf
                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('admin_name') ? ' has-danger' : '' }}">
                                <label style="display:block; text-align: right;">الإسم</label>
                                <input type="text" name="admin_name"
                                    class="form-control{{ $errors->has('admin_name') ? ' is-invalid' : '' }}"
                                    placeholder="الإسم">
                                @include('alerts.feedback', ['field' => 'admin_name'])
                            </div>

                            <div class="form-group{{ $errors->has('admin_email') ? ' has-danger' : '' }}">
                                <label style="display:block; text-align: right;">البريد الإلتروني</label>
                                <input type="email" name="admin_email"
                                    class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}"
                                    placeholder="البريد الإلتروني">
                                {{-- @include('alerts.feedback', ['field' => 'admin_email']) --}}
                            </div>
                            <div class="form-group{{ $errors->has('admin_password') ? ' has-danger' : '' }}">
                                <label style="display:block; text-align: right;">كلمة السر</label>
                                <input type="password" name="admin_password"
                                    class="form-control{{ $errors->has('admin_password') ? ' is-invalid' : '' }}"
                                    placeholder="كلمة السر" value="">
                                {{-- @include('alerts.feedback', ['field' => 'admin_password']) --}}
                            </div>
                            <div class="form-group{{ $errors->has('admin_role') ? ' has-danger' : '' }}">
                                <label style="display:block; text-align: right;">المشرف</label>
                                <select style="padding: 10px; background-color:rgb(39,41,61); color:#fff; width:100%;"
                                    name="admin_role" id="">
                                    <option value="0">مشرف</option>
                                    <option value="1">مشرف خارق</option>
                                </select>
                                {{-- @include('alerts.feedback', ['field' => 'admin_role']) --}}
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">إضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
