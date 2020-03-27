@extends('Backend.layouts.app')

@section('style')
      <style>
            .menutool-list{
                  display: flex;
                  width: 100%;
                  background-color: rgba(0, 0, 0, 0.03);
                  padding: 20px;
                  margin: 0;
                  list-style: none;
            }
            .menutool-item{
                  display: inline-flex;
                  width: 200px;
                  padding: 0px;
                  margin-right: 20px;
            }
            .menutool-link{
                  display: flex;
                  width: 100%;
                  font-size: 20px;
                  background-color: rgba(0,0,0,0.1);
                  padding: 25px 20px;
                  border-radius: 4px;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
            }
            .menutool-link:hover{
                background-color: rgba(0,0,0,0.15);
                border-radius: 4px;
                box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            }
            .menutool-icon{
                  display: block;
                  width: 100%;
                  text-align: center;
            }
            .menutool-icon i.ax{
                  font-size: 50px;
            }
            .menutool-text{
                  display: block;
                  width: 100%;
                  text-align: center;
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
                  <div class="card">
                        <div class="card-header"><i class="ax ax-newspaper mr-2"></i>Articles</div>
                        <div class="card-body">
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
                                          <a href="{{ route('source.index') }}" class="menutool-link">
                                                <div class="menutool-icon">
                                                      <i class="ax ax-pen-nib"></i>
                                                </div>
                                                <div class="menutool-text">Sources</div>
                                          </a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection