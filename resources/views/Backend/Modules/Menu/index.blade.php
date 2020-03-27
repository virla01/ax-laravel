@extends('Backend.layouts.app')

@section('style')
      <style>
            .menutool-list{
                  display: flex;
                  width: calc(100% + 20px);
                  height: 100vh;
                  background-color: rgba(0, 0, 0, 0.03);
                  padding: 10px;
                  margin: -24px 0 0 -15px;
                  list-style: none;
                  flex-direction: column;
            }
            .menutool-item{
                  display: block;
                  width: 100%;
                  padding: 3px 0;
                  margin-bottom: 10px;
            }
            .menutool-link.active{
                background-color: rgba(0,0,0,0.1);
                border-radius: 4px
            }
            .menutool-link{
                  display: block;
                  width: 100%;
                  padding: 3px 12px;
            }
            .menutool-link:hover{
                background-color: rgba(0,0,0,0.15);
                border-radius: 4px
            }
            .menutool-icon{
                  display: inline-block;
                  width: 20px;
                  margin-right: 7px;
            }
            .menutool-icon i.ax{}
            .menutool-text{
                  display: inline-block;
                  /* width: calc(100% - 20px); */
            }
            .card-header{
                font-size: 20px;
                font-weight: 700;
            }
            .table thead{
                background-color: rgba(0,0,0,0.01);
            }
            .table thead th{
                font-weight: 600;
            }
      </style>
@endsection

@section('content')
<div class="container-fluid">
      <div class="row">
            <div class="col-12">
                  <nav class="nav-bar mb-4"><a href="{{ route('menu.create') }}" class="btn btn-info">Crear Menu</a></nav>
                  <div class="card">
                        <div class="card-header"><i class="ax ax-bars mr-2"></i>Menu</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Parent</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Enabled</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <th scope="row">{{ $menu->id}}</th>
                                            <td><i class="ax ax-{{ $menu->icon }} mr-2"></i>{{ $menu->name }}</td>
                                            <td>{{ $menu->url }}</td>
                                            <td>{{ $menu->parent }}</td>
                                            <td>{{ $menu->order }}</td>
                                            <td>
                                                @if ($menu->enabled)
                                                    <span class="badge badge-info">Enabled</span>
                                                @else
                                                <span class="badge badge-danger">Disabled</span>
                                                @endif
                                            </td>
                                            <td>{{ $menu->client }}</td>
                                            <td>
                                                <a href="{{ route('menu.edit', $menu->slug) }}" class="btn btn-success float-left mr-2">Edit</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
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

@endsection