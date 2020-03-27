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
                        <div class="card-header"><i class="ax ax-edit mr-2"></i>Show article</div>
                        <div class="card-body">
                              <h4 class="mt-0">Basic</h4>
                        
                              <div class="row border-top pt-4">
                                    <div class="col-7 mb-2">
                                          <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="title" id="title" value="{{ $item->title }}" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="alias" class="col-sm-2 col-form-label">Alias</label>
                                                <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="alias" id="alias" value="{{ $item->alias }}" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="category_id" id="category_id" value="{{ $item->category_id }}" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="tag_id" class="col-sm-2 col-form-label">Tags</label>
                                                <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="tags_id" id="tags_id" value="{{ $item->tag_id }}" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="author_id" class="col-sm-2 col-form-label">Author</label>
                                                <div class="col-sm-4">
                                                      <input type="text" class="form-control" name="author_id" id="author_id" value="{{ $item->author_id }}" readonly>
                                                </div>
                                                <label for="source_id" class="col-sm-2 col-form-label">Source</label>
                                                <div class="col-sm-4">
                                                      <input type="text" class="form-control" name="source_id" id="source_id" value="{{ $item->source_id }}" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="introtext" class="col-sm-2 col-form-label">Introtext</label>
                                                <div class="col-sm-10">
                                                      <textarea name="introtext" id="introtext" cols="30" rows="5" readonly>{{ $item->introtext }}</textarea>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="fulltext" class="col-sm-2 col-form-label">Fulltext</label>
                                                <div class="col-sm-10">
                                                      <textarea name="fulltext" id="fulltext" cols="30" rows="15" readonly>{{ $item->fulltext }}</textarea>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-5 mb-4">
                                          <div class="form-group row">
                                                <label for="published" class="col-sm-3 col-form-label">Published</label>
                                                <div class="col-sm-3">
                                                      <div class="group-radio">
                                                            <label class="on">
                                                            <input type="radio" name="published" id="published" value='1' readonly checked>
                                                            <span>Yes</span>
                                                            </label>
                                                            <label class="off">
                                                            <input type="radio" name="published" id="published" value='0' readonly>
                                                            <span>No</span>
                                                            </label>
                                                      </div>
                                                </div>
                                                <label for="features" class="col-sm-3 col-form-label">Features</label>
                                                <div class="col-sm-3">
                                                      <div class="group-radio">
                                                            <label class="on">
                                                                  <input type="radio" name="features" id="features" value='1' readonly>
                                                                  <span>Yes</span>
                                                            </label>
                                                            <label class="off">
                                                                  <input type="radio" name="features" id="features" value='0' readonly checked>
                                                                  <span>No</span>
                                                            </label>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="order" class="col-sm-3 col-form-label">Ordering</label>
                                                <div class="col-sm-9">
                                                      <input type="text" class="form-control" name="order" id="order" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="access" class="col-sm-3 col-form-label">Access</label>
                                                <div class="col-sm-9">
                                                      <input type="text" class="form-control" name="access" id="access" readonly>
                                                </div>
                                          </div>
                                          <h4 class="w-100 border-bottom pl-3 mb-4 pb-2">Publishing</h4>
                                          <div class="form-group row">
                                                <label for="created_at" class="col-sm-3 col-form-label">Creation date</label>
                                                <div class="col-sm-9 icon">
                                                      <input type="datetime-local" class="form-control" name="created_at" id="created_at" readonly>
                                                      <i class="ax ax-calendar-alt"></i>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="publish_up" class="col-sm-3 col-form-label">Start publishing</label>
                                                <div class="col-sm-9 icon">
                                                      <input type="datetime-local" class="form-control" name="publish_up" id="publish_up" readonly>
                                                      <i class="ax ax-calendar-alt"></i>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="publish_down" class="col-sm-3 col-form-label">End publishing</label>
                                                <div class="col-sm-9 icon">
                                                      <input type="datetime-local" class="form-control" name="publish_down" id="publish_down" readonly>
                                                      <i class="ax ax-calendar-alt"></i>
                                                </div>
                                          </div>
                                          <h4 class="w-100 border-bottom pl-3 mb-4 pb-2">Metadata</h4>
                                          <div class="form-group row">
                                                <label for="meta-description" class="col-sm-3 col-form-label">Meta description</label>
                                                <div class="col-sm-9">
                                                      <textarea name="meta-description" id="meta-description" cols="30" rows="2" readonly></textarea>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="meta_key" class="col-sm-3 col-form-label">Meta keyword</label>
                                                <div class="col-sm-9">
                                                      <input type="text" class="form-control" name="meta_key" id="meta_key" readonly>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="meta_author" class="col-sm-3 col-form-label">Meta author</label>
                                                <div class="col-sm-9">
                                                      <input type="text" class="form-control" name="meta_author" id="meta_author" readonly>
                                                </div>
                                          </div>
                                    </div>
                                    <h4 class="w-100 border-bottom pl-3 mb-4 pb-2">Images, video and audio</h4>
                                    <div class="col-12">
                                          <div class="row">
                                                <div class="col-6">
                                                      <div class="form-group row">
                                                            <label for="imageintro" class="col-sm-2 col-form-label">Image Intro</label>
                                                            <div class="col-sm-10">
                                                                  <div class="group-radio">
                                                                        <label class="on">
                                                                              <input type="radio" name="imageintro" value='1' readonly>
                                                                              <span>Yes</span>
                                                                        </label>
                                                                        <label class="off">
                                                                              <input type="radio" name="imageintro" value='0' readonly checked>
                                                                              <span>No</span>
                                                                        </label>
                                                                  </div>
                                                            </div>
            
                                                            <label for="imageintro_title" class="col-sm-2 col-form-label">Title</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imageintro_title" id="imageintro_title" readonly>
                                                            </div>
                                                            <label for="imageintro_img" class="col-sm-2 col-form-label">File images</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <div class="input-file">
                                                                        <span class="input-file-text" data-js-label>Select a file</span>
                                                                        <input type="file" class="form-control" name="imageintro_img" id="imageintro_img" readonly>
                                                                  </div>
                                                            </div>
                                                            <label for="imageintro_caption" class="col-sm-2 col-form-label">Caption</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imageintro_caption" id="imageintro_caption" readonly>
                                                            </div>
                                                            <label for="imageintro_credits" class="col-sm-2 col-form-label">Credits</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imageintro_credits" id="imageintro_credits" readonly>
                                                            </div>
                                                      </div>
                                                      <hr>
                                                      <div class="form-group row">
                                                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                                                            <div class="col-sm-10">
                                                                  <div class="group-radio">
                                                                        <label class="on">
                                                                              <input type="radio" name="image" value='1' readonly>
                                                                              <span>Yes</span>
                                                                        </label>
                                                                        <label class="off">
                                                                              <input type="radio" name="image" value='0' readonly checked>
                                                                              <span>No</span>
                                                                        </label>
                                                                  </div>
                                                            </div>
            
                                                            <label for="image_img" class="col-sm-2 col-form-label">File images</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <div class="input-file">
                                                                        <span class="input-file-text" data-js-label>Select a file</span>
                                                                        <input type="file" class="form-control" name="image_img" id="image_img" readonly>
                                                                  </div>
                                                            </div>
                                                            <label for="image_caption" class="col-sm-2 col-form-label">Caption</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="image_caption" id="image_caption" readonly>
                                                            </div>
                                                            <label for="image_credits" class="col-sm-2 col-form-label">Credits</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="image_credits" id="image_credits" readonly>
                                                            </div>
                                                      </div>
                                                      <hr>
                                                      <div class="form-group row">
                                                            <label for="imagegallery" class="col-sm-2 col-form-label">Image gallery</label>
                                                            <div class="col-sm-10">
                                                                  <div class="group-radio">
                                                                        <label class="on">
                                                                              <input type="radio" name="imagegallery" value='1' readonly>
                                                                              <span>Yes</span>
                                                                        </label>
                                                                        <label class="off">
                                                                              <input type="radio" name="imagegallery" value='0' readonly checked>
                                                                              <span>No</span>
                                                                        </label>
                                                                  </div>
                                                            </div>
            
                                                            <label for="imagegallery_img" class="col-sm-2 col-form-label">Name images</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imagegallery_img" id="imagegallery_img" placeholder="Separate the names of the images with a comma." readonly>
                                                            </div>
                                                            <label for="imagegallery_caption" class="col-sm-2 col-form-label">Caption</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imagegallery_caption" id="imagegallery_caption" readonly>
                                                            </div>
                                                            <label for="imagegallery_credits" class="col-sm-2 col-form-label">Credits</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="imagegallery_credits" id="imagegallery_credits" readonly>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-6">
                                                      <div class="form-group row">
                                                            <label for="video" class="col-sm-2 col-form-label">Video</label>
                                                            <div class="col-sm-10">
                                                                  <div class="group-radio">
                                                                        <label class="on">
                                                                              <input type="radio" name="video" value='1' readonly>
                                                                              <span>Yes</span>
                                                                        </label>
                                                                        <label class="off">
                                                                              <input type="radio" name="video" value='0' readonly checked>
                                                                              <span>No</span>
                                                                        </label>
                                                                  </div>
                                                            </div>
            
                                                            <label for="video_vid" class="col-sm-2 col-form-label">Name video</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="video_vid" id="video_vid" placeholder="Copy and paste the code video" readonly>
                                                            </div>
                                                            <label for="video_caption" class="col-sm-2 col-form-label">Caption</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="video_caption" id="video_caption" readonly>
                                                            </div>
                                                            <label for="video_credits" class="col-sm-2 col-form-label">Credits</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="video_credits" id="video_credits" readonly>
                                                            </div>
                                                      </div>
                                                      <hr>
                                                      <div class="form-group row">
                                                            <label for="audio" class="col-sm-2 col-form-label">Audio</label>
                                                            <div class="col-sm-10">
                                                                  <div class="group-radio">
                                                                        <label class="on">
                                                                              <input type="radio" name="audio" value='1' readonly>
                                                                              <span>Yes</span>
                                                                        </label>
                                                                        <label class="off">
                                                                              <input type="radio" name="audio" value='0' readonly checked>
                                                                              <span>No</span>
                                                                        </label>
                                                                  </div>
                                                            </div>
            
                                                            <label for="audio_aud" class="col-sm-2 col-form-label">Name Audio</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="audio_aud" id="audio_aud" placeholder="Copy and paste the code video" readonly>
                                                            </div>
                                                            <label for="audio_caption" class="col-sm-2 col-form-label">Caption</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="audio_caption" id="audio_caption" readonly>
                                                            </div>
                                                            <label for="audio_credits" class="col-sm-2 col-form-label">Credits</label>
                                                            <div class="col-sm-10 mb-2">
                                                                  <input type="text" class="form-control" name="audio_credits" id="audio_credits" readonly>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="col-12 border-top">
                                                <div class="float-right mt-4">
                                                      <a href="{{ route('item.index') }}" class="btn btn-light">Go back</a>
                                                </div>
                                          </div> 

                                    </div>
                              </div>
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