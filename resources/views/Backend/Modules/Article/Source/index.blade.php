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
            <div class="col-2">
                  <ul class="menutool-list">
                        <li class="menutool-item">
                              <a href="{{ route('item.index') }}" class="menutool-link">
                                    <div class="menutool-icon">
                                          <i class="ax ax-edit"></i>
                                    </div>
                                    <div class="menutool-text">Article</div>
                              </a>
                        </li>
                        <li class="menutool-item">
                              <a href="{{ route('category.index') }}" class="menutool-link">
                                    <div class="menutool-icon">
                                          <i class="ax ax-ballot"></i>
                                    </div>
                                    <div class="menutool-text">Categories</div>
                              </a>
                        </li>
                        <li class="menutool-item">
                              <a href="{{ route('tag.index') }}" class="menutool-link">
                                    <div class="menutool-icon">
                                          <i class="ax ax-tags"></i>
                                    </div>
                                    <div class="menutool-text">Tags</div>
                              </a>
                        </li>
                        <li class="menutool-item">
                              <a href="{{ route('author.index') }}" class="menutool-link">
                                    <div class="menutool-icon">
                                          <i class="ax ax-user-edit"></i>
                                    </div>
                                    <div class="menutool-text">Authors</div>
                              </a>
                        </li>
                        <li class="menutool-item">
                              <a href="{{ route('source.index') }}" class="menutool-link active">
                                    <div class="menutool-icon">
                                          <i class="ax ax-pen-nib"></i>
                                    </div>
                                    <div class="menutool-text">Sources</div>
                              </a>
                        </li>
                  </ul>
            </div>
            <div class="col-10">
                  <nav class="nav-bar mb-4"><a href="{{ route('source.create') }}" class="btn btn-info">Create source</a></nav>
                  <div class="card">
                        <div class="card-header"><i class="ax ax-pen-nib mr-2"></i>List source</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sources as $source)
                                        <tr>
                                            <th width="30">{{ $source->id }}</th>
                                            <td><a href="{{ $source->id }}">{{ $source->name }}</a></td>
                                            <td>
                                                @if ($source->images)
                                                      <i class="ax ax-image" style="color: var(--success)"></i>
                                                @else
                                                      <i class="ax ax-square" style="color: var(--cyan)"></i>
                                                @endif
                                            </td>
                                            <td width="136">
                                                <a href="{{ route('source.show', $source->id) }}" class="btn transparent trans-info circle float-left mr-2"><i class="ax ax-eye"></i></a>
                                                <a href="{{ route('source.edit', $source->id) }}" class="btn transparent trans-success circle float-left mr-2"><i class="ax ax-edit"></i></a>
                                                {!! Form::open(['route' => ['source.destroy', $source->id], 'method' => 'DELETE']) !!}
                                                      <button type="submit" class="btn transparent trans-danger circle"><i class="ax ax-trash"></i></button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $sources->render() }}
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection