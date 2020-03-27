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
            .icon{
                  position: relative;
            }
            .icon>i.ax{
                  position: absolute;
                  top: 9px;
                  right: 72px;
            }
            .input-file::after {content: "Upload file"}

            /*--------------------*/
            .navTabContent {
                  width: 100%;
                  margin: 0 1.25rem 1.25rem 1.25rem;
                  }
                  .tabs.navTabList{
                        display: block;
                        width: 100%;
                        height: 65px;
                        background-color: rgba(0,0,0,0.02);
                        border: 1px solid rgba(0,0,0,0.2);
                        border-radius: 4px 4px 0 0;
                        padding: 0;
                        margin: 0;
                        list-style: none;
                        }
                        .navTabItem{
                              display: inline-flex;
                              width: auto;
                              margin-left: -4px;
                              border-right: 1px solid rgba(0,0,0,0.2);
                              position: relative;
                              }
                              .navTabItem:first-child{
                                    margin-left: 0;
                              }
                              .navTabItem .navTabLink{
                                    color: rgba(0,0,0,0.7);
                                    font-weight: 500;
                                    padding: 20px 30px;
                                    }
                                    .navTabIcon{
                                          margin-right: 10px;
                                    }
                              .navTabItem .navTabLink.active{
                                    background-color: rgba(0,0,0,0.1);
                                    box-shadow: 0 0 4px rgba(0,0,0,0.2);
                              }
                              .navTabItem .navTabLink.active:before{
                                    content: '';
                                    width: 0;
                                    height: 0;
                                    border-left: 15px solid transparent;
                                    border-right: 15px solid transparent;
                                    border-bottom: 12px solid #fff;
                                    position: absolute;
                                    bottom: -4px;
                                    left: 40%;
                              } 

            .tabgroup .tabSeccion {
                  width: 100%;
                  padding: 1.25rem;
                  border: 1px solid rgba(0,0,0,0.2);
                  border-top-color: transparent;
                  border-radius: 0 0 4px 4px;
            }
            .clearfix:after {
                  content: "";
                  display: table;
                  clear: both;
            }
      </style>
@endsection

@section('content')
<div class="container-fluid">
      <div class="row">
            <div class="col-2">
                  <ul class="menutool-list">
                        <li class="menutool-item">
                              <a href="{{ route('item.index') }}" class="menutool-link active">
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
            <div class="col-10">
                  <div class="card">
                        <div class="card-header"><i class="ax ax-edit mr-2"></i>Edit article</div>
                        <div class="card-body">
                              
                              {!! Form::model($item,['route' => ['item.update', $item->id], 'method' => 'PUT', 'files' => true]) !!}

                                          @csrf
                                          @include('Backend.Modules.Article.Item.partials.form')

                              {!! Form::close() !!}

                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection
