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
                        <div class="card-header"><i class="ax ax-bars mr-2"></i>Edit Menu {{ $menu->name }}</div>
                        <div class="card-body">
                              <h4 class="mt-4">Basic</h4>
                              <form action="{{ route('menu.update',$menu->id) }}" class="w-100" method="POST">
                                    <div class="row border-top pt-4">
                                          @csrf
                                          @method('PUT')
                                          <div class="col-7 mb-2">
                                                <div class="form-group row">
                                                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="name" id="name" value="{{ $menu->name }}">
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="slug" class="col-sm-2 col-form-label">Alias</label>
                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="slug" id="slug" value="{{ $menu->slug }}" disabled>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="url" class="col-sm-2 col-form-label">Url</label>
                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="url" id="url" value="{{ $menu->url }}">
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="icon" id="icon" value="{{ $menu->icon }}" placeholder="solo el home sin el fa">
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                      <div class="col-sm-10">
                                                            <textarea name="description" name="description" id="description" cols="30" rows="2">{{ $menu->description }}</textarea>
                                                      </div>
                                                </div>
                                          </div>
                                          
                                          <div class="col-5 mb-4">
                                                <div class="form-group row">
                                                      <label for="parent" class="col-sm-3 col-form-label">Parent</label>
                                                      <div class="col-sm-9">
                                                            <select id="parent" name="parent" class="form-control">
                                                                  <option value="Select parent">Select parent</option>
                                                                  <option value="0"
                                                                  @if ($menu->parent === 0)
                                                                        selected
                                                                  @endif
                                                                  >0</option>
                                                                  <option value="1"
                                                                  @if ($menu->parent === 1)
                                                                        selected
                                                                  @endif
                                                                  >1</option>
                                                                  <option value="2"
                                                                  @if ($menu->parent === 2)
                                                                        selected
                                                                  @endif
                                                                  >2</option>
                                                                  <option value="3"
                                                                  @if ($menu->parent === 3)
                                                                        selected
                                                                  @endif
                                                                  >3</option>
                                                                  <option value="4"
                                                                  @if ($menu->parent === 4)
                                                                        selected
                                                                  @endif
                                                                  >4</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="order" class="col-sm-3 col-form-label">Ordering</label>
                                                      <div class="col-sm-9">
                                                            <select id="order" name="order" class="form-control">
                                                                  <option value="Select Orderin">Select Orderin</option>
                                                                  <option value="0" 
                                                                  @if ($menu->order === 0)
                                                                  selected
                                                                  @endif
                                                                  >0</option>
                                                                  <option value="1"
                                                                  @if ($menu->order === 1)
                                                                        selected
                                                                  @endif
                                                                  >1</option>
                                                                  <option value="2"
                                                                  @if ($menu->order === 2)
                                                                        selected
                                                                  @endif
                                                                  >2</option>
                                                                  <option value="3"
                                                                  @if ($menu->order === 3)
                                                                        selected
                                                                  @endif
                                                                  >3</option>
                                                                  <option value="4"
                                                                  @if ($menu->order === 4)
                                                                        selected
                                                                  @endif
                                                                  >4</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="enabled" class="col-sm-3 col-form-label">Status</label>
                                                      <div class="col-sm-9">
                                                            <div class="group-radio">
                                                                  <label class="on">
                                                                  <input type="radio" name="enabled" value='1' 
                                                                  @if ( $menu->enabled === 1 ) checked @endif
                                                                  >
                                                                  <span>Si</span>
                                                                  </label>
                                                                  <label class="off">
                                                                  <input type="radio" name="enabled" value='0' 
                                                                  @if ( $menu->enabled === 0 ) checked @endif
                                                                  >
                                                                  <span>No</span>
                                                                  </label>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="access" class="col-sm-3 col-form-label">Access</label>
                                                      <div class="col-sm-9">
                                                            <select name="access" id="access" class="form-control">
                                                                  <option value="guest"
                                                                  @if ($menu->access === 'guest')
                                                                        selected
                                                                  @endif
                                                                  >Guest</option>
                                                                  <option value="user"
                                                                  @if ($menu->access === 'user')
                                                                        selected
                                                                  @endif
                                                                  >User</option>
                                                                  <option value="subscribe"
                                                                  @if ($menu->access === 'subscribe')
                                                                        selected
                                                                  @endif
                                                                  >Subscribe</option>
                                                                  <option value="contributor"
                                                                  @if ($menu->access === 'contributor')
                                                                        selected
                                                                  @endif
                                                                  >Contributor</option>
                                                                  <option value="author"
                                                                  @if ($menu->access === 'author')
                                                                        selected
                                                                  @endif
                                                                  >Author</option>
                                                                  <option value="editor"
                                                                  @if ($menu->access === 'editor')
                                                                        selected
                                                                  @endif
                                                                  >Editor</option>
                                                                  <option value="admin"
                                                                  @if ($menu->access === 'admin')
                                                                        selected
                                                                  @endif
                                                                  >Admin</option>
                                                                  <option value="SuperAdmin"
                                                                  @if ($menu->access === 'SuperAdmin')
                                                                        selected
                                                                  @endif
                                                                  >Super Admin</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="client" class="col-sm-3 col-form-label">Client</label>
                                                      <div class="col-sm-9">
                                                            <div class="group-radio">
                                                                  <label class="on">
                                                                        <input type="radio" name="client" value='site'
                                                                        @if ( $menu->client === 'site' ) checked @endif
                                                                        >
                                                                        <span>Site</span>
                                                                  </label>
                                                                  <label class="off">
                                                                        <input type="radio" name="client" value='admin' 
                                                                        @if ( $menu->client === 'admin' ) checked @endif
                                                                        >
                                                                        <span>Admin</span>
                                                                  </label>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <h4 class="w-100 border-bottom pl-3 mb-4 pb-2">Metadata</h4>
                                          <div class="col-12">
                                                <div class="form-group row">
                                                      <label for="meta_description" class="col-sm-2 col-form-label">Meta description</label>
                                                      <div class="col-sm-5">
                                                            <textarea name="meta_description" name="meta_description" id="meta_description" cols="30" rows="2">{{ $menu->meta_description }}</textarea>
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="meta_keyword" class="col-sm-2 col-form-label">Meta keyword</label>
                                                      <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="meta_key" id="meta_key" value="{{ $menu->meta_key }}">
                                                      </div>
                                                </div>
                                                <div class="form-group row">
                                                      <label for="meta_author" class="col-sm-2 col-form-label">Meta author</label>
                                                      <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="meta_author" id="meta_author" value="{{ $menu->meta_author }}">
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-12 border-top">
                                                <div class="float-right mt-4">
                                                      <a href="{{ route('menu.index') }}" class="btn btn-light">Cancel</a>
                                                      <input type="submit" value="Save" class="btn btn-success float-right ml-2">
                                                </div>
                                          </div> 
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection

@section('script')
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="{{ asset('js/vendor/jquery.slugit.js') }}" defer></script>
      <script>
            $(function(){
            $('#name').slugIt();
            });
      </script>
@endsection