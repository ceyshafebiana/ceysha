@extends('layouts.master')
@section('tittle','user')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit User</h3>
                            <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        value="{{ $user->name }}"
                                        id="name"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ $user->email }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="pasword"
                                        value="{{ $user->password }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                   
                                </div>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection