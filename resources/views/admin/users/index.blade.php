@extends('layouts.admin')

@section('content')
    <div class="card mb-4 w-75 m-auto">
        <div class="card-header">Пользователи</div>
        <div class="card-body">
            @foreach($users as $user)
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center flex-shrink-0 me-3">
                    <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" alt=""></div>
                    <div class="d-flex flex-column fw-bold">
                        <a class="text-dark line-height-normal mb-1" href="#!">Идентификатор пользователя: {{$user->id}}</a>
                        <a class="text-dark line-height-normal mb-1" href="#!">Имя пользователя: {{$user->name}}</a>
                        <a class="text-dark line-height-normal mb-1" href="#!">Права: {{$user->RoleTitle}}</a>
                        <div class="small text-muted line-height-normal">Дата регистрации: {{$user->created_at}}</div>
                    </div>
                </div>
                <div class="dropdown no-caret">
                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople1" style="">
                        <a class="dropdown-item" href="#!">Просмотр</a>
                        <a class="dropdown-item" href="#!">Изменить</a>
                        <a class="dropdown-item" href="#!">Удалить</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
