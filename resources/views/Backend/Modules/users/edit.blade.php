@extends('Backend.layouts.app')

@section('style')
      <style>
            .card-header{
                font-size: 20px;
                font-weight: 700;
            }
      </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                  <div class="card-header"><i class="ax ax-users mr-2"></i>Edit User {{ $user->name }}</div>
                  <div class="card-body">
                        <form action="{{ route('users.update', $user) }}" method="POST">

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label for="roles" class="col-md-3 col-form-label text-md-right">Roles</label>
                                <div class="col-md-9">
                                    @foreach ($roles as $role )
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" id="roles" value="{{ $role->id }}"
                                            @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                            <label>{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 border-top">
                                <div class="float-right mt-4">
                                    <a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>
                                    <button type="submit" class="btn btn-success  float-right ml-2">Update</button>
                                </div>
                            </div> 
                        </form>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
