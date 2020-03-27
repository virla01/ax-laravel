@section('style')

@endsection

<div class="row">
      <div class="navTabContent">
            <ul class="tabs navTabList" data-tabgroup="first-tab-group">
                  <li class="navTabItem"><a href="#home" class="navTabLink active"><i class="fa fa-home navTabIcon"></i>Basic</a></li>
                  <li class="navTabItem"><a href="#file" class="navTabLink"><i class="fa fa-file navTabIcon"></i>File</a></li>
                  <li class="navTabItem"><a href="#publi" class="navTabLink"><i class="fa fa-info-circle navTabIcon"></i>Publishing & metadata</a></li>
            </ul>

            {{ Form::hidden('user_id', auth()->user()->id) }}
            <section id="first-tab-group" class="tabgroup">

                  <div class="tabSeccion" id="home">
                        <div class="col-12">
                              <div class="form-group row">
                                    {{ Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('alias', 'Alias', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::text('alias', null, ['class' => 'form-control', 'id' => 'alias']) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('category_id', 'Category', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'id' => 'category_id']) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('tag_id', 'Tags', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::text('tags_id', $tags, null, ['class' => 'form-control', 'id' => 'tags_id']) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('author_id', 'Author', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-4">
                                          <div class="col-sm-12 px-0">
                                                {{ Form::select('author_id', $authors, null, ['class' => 'form-control', 'id' => 'author_id']) }}
                                          </div>
                                    </div>
                                    {{ Form::label('source_id', 'Source', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-4">
                                          <div class="col-sm-12 px-0">
                                                {{ Form::select('source_id', $sources, null, ['class' => 'form-control', 'id' => 'source_id']) }}
                                          </div>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('published', 'Published', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-3">
                                          <div class="group-radio">
                                                <label class="on">
                                                      {{ Form::radio('published', '1', true, ['id' => 'published']) }}
                                                      <span>Yes</span>
                                                </label>
                                                <label class="off">
                                                      {{ Form::radio('published', '0', false, ['id' => 'published']) }}
                                                      <input type="radio" name="published" id="published" value='0'>
                                                      <span>No</span>
                                                </label>
                                          </div>
                                    </div>
                        
                                    {{ Form::label('features', 'Features', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-3">
                                          <div class="group-radio">
                                                <label class="on">
                                                      {{ Form::radio('features', '1', false, ['id' => 'features']) }}
                                                      <span>Yes</span>
                                                </label>
                                                <label class="off">
                                                      {{ Form::radio('features', '0', true, ['id' => 'features']) }}
                                                      <span>No</span>
                                                </label>
                                          </div>
                                    </div>
                              </div>

                              <div class="form-group row">
                                    {{ Form::label('introtext', 'Introtext', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::textarea('introtext', null, ['class' => 'form-control', 'id' => 'introtext', 'cols' => '30', 'rows' => '3' ]) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('fulltext', 'Fulltext', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                          {{ Form::textarea('fulltext', null, ['class' => 'form-control', 'id' => 'fulltext', 'cols' => '30', 'rows' => '30' ]) }}
                                    </div>
                              </div>
                        </div>

                        <div class="row mx-0 justify-content-end border-top">
                              <div class="mt-4">
                                    <a href="{{ route('item.index') }}" class="btn btn-light">Cancel</a>
                                    {{ Form::submit('Save', ['class' => 'btn btn-success float-right ml-2"']) }}
                              </div>
                        </div> 
                  </div>

                  <div id="file" class="tabSeccion">
                        <div class="row mx-0">
                              <div class="col-6">
                                    <div class="form-group row">
                                          {{ Form::label('imageintro', 'Image Intro', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9">
                                                <div class="group-radio">
                                                      <label class="on">
                                                            {{ Form::radio('imageintro', '1', false, ['id' => 'imageintro']) }}
                                                            <span>Yes</span>
                                                      </label>
                                                      <label class="off">
                                                            {{ Form::radio('imageintro', '0', true, ['id' => 'imageintro']) }}
                                                            <span>No</span>
                                                      </label>
                                                </div>
                                          </div>
                  
                                          {{ Form::label('imageintro_title', 'Title', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imageintro_title', null, ['class' => 'form-control', 'id' => 'imageintro_title']) }}
                                          </div>
                  
                                          {{ Form::label('imageintro_img', 'File images', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                <div class="input-file">
                                                      <span class="input-file-text" data-js-label>Select a file</span>
                                                      {{ Form::file('imageintro_img', null, ['class' => 'form-control', 'id' => 'imageintro_img']) }}
                                                </div>
                                          </div>
                  
                                          {{ Form::label('imageintro_caption', 'Captions', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imageintro_caption', null, ['class' => 'form-control', 'id' => 'imageintro_caption']) }}
                                          </div>
                  
                                          {{ Form::label('imageintro_credits', 'Credits', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imageintro_credits', null, ['class' => 'form-control', 'id' => 'imageintro_credits']) }}
                                          </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                          {{ Form::label('image', 'Image', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9">
                                                <div class="group-radio">
                                                      <label class="on">
                                                            {{ Form::radio('image', '1', false, ['id' => 'image']) }}
                                                            <span>Yes</span>
                                                      </label>
                                                      <label class="off">
                                                            {{ Form::radio('image', '0', true, ['id' => 'image']) }}
                                                            <span>No</span>
                                                      </label>
                                                </div>
                                          </div>
                  
                                          {{ Form::label('image_img', 'File images', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::file('image_img', null, ['class' => 'form-control', 'id' => 'image_img']) }}
                                                @if ($item->image_img)
                                                    <img src="{{ $item->image_img }}" alt="{{ $item->image_img }}" width="200" class="mt-2">
                                                @endif
                                          </div>
                  
                                          {{ Form::label('image_caption', 'Captions', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('image_caption', null, ['class' => 'form-control', 'id' => 'image_caption']) }}
                                          </div>
                  
                                          {{ Form::label('image_credits', 'Credits', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('image_credits', null, ['class' => 'form-control', 'id' => 'image_credits']) }}
                                          </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                          {{ Form::label('imagegallery', 'Image gallery', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9">
                                                <div class="group-radio">
                                                      <label class="on">
                                                            {{ Form::radio('imagegallery', '1', false, ['id' => 'imagegallery']) }}
                                                            <span>Yes</span>
                                                      </label>
                                                      <label class="off">
                                                            {{ Form::radio('imagegallery', '0', true, ['id' => 'imagegallery']) }}
                                                            <span>No</span>
                                                      </label>
                                                </div>
                                          </div>
                  
                                          {{ Form::label('imagegallery_img', 'Name images', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imagegallery_img', null, ['class' => 'form-control', 'id' => 'imagegallery_img', 'placeholder' => 'Separate the names of the images with a comma.']) }}
                                          </div>
                  
                                          {{ Form::label('imagegallery_caption', 'Captions', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imagegallery_caption', null, ['class' => 'form-control', 'id' => 'imagegallery_caption']) }}
                                          </div>
                  
                                          {{ Form::label('imagegallery_credits', 'Credits', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('imagegallery_credits', null, ['class' => 'form-control', 'id' => 'imagegallery_credits']) }}
                                          </div>
                                    </div>
                              </div>
                  
                              <div class="col-6">
                                    <div class="form-group row">
                  
                                          {{ Form::label('video', 'Video', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9">
                                                <div class="group-radio">
                                                      <label class="on">
                                                            {{ Form::radio('video', '1', false, ['id' => 'video']) }}
                                                            <span>Yes</span>
                                                      </label>
                                                      <label class="off">
                                                            {{ Form::radio('video', '0', true, ['id' => 'video']) }}
                                                            <span>No</span>
                                                      </label>
                                                </div>
                                          </div>
                  
                                          {{ Form::label('video_vid', 'File video', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('video_vid', null, ['class' => 'form-control', 'id' => 'video_vid', 'placeholder' => 'Copy and paste the code video.']) }}
                                          </div>
                  
                                          {{ Form::label('video_caption', 'Captions', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('video_caption', null, ['class' => 'form-control', 'id' => 'video_caption']) }}
                                          </div>
                  
                                          {{ Form::label('video_credits', 'Credits', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('video_credits', null, ['class' => 'form-control', 'id' => 'video_credits']) }}
                                          </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                          {{ Form::label('audio', 'Audio', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9">
                                                <div class="group-radio">
                                                      <label class="on">
                                                            {{ Form::radio('audio', '1', false, ['id' => 'audio']) }}
                                                            <span>Yes</span>
                                                      </label>
                                                      <label class="off">
                                                            {{ Form::radio('audio', '0', true, ['id' => 'audio']) }}
                                                            <span>No</span>
                                                      </label>
                                                </div>
                                          </div>
                  
                                          {{ Form::label('audio_aud', 'File Audio', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('audio_aud', null, ['class' => 'form-control', 'id' => 'audio_aud', 'placeholder' => 'Copy and paste the code audio.']) }}
                                          </div>
                  
                                          {{ Form::label('audio_caption', 'Captions', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('audio_caption', null, ['class' => 'form-control', 'id' => 'audio_caption']) }}
                                          </div>
                  
                                          {{ Form::label('audio_credits', 'Credits', ['class' => 'col-sm-3 col-form-label']) }}
                                          <div class="col-sm-9 mb-2">
                                                {{ Form::text('audio_credits', null, ['class' => 'form-control', 'id' => 'audio_credits']) }}
                                          </div>
                                    </div>
                              </div>
                        </div>

                  </div>

                  <div id="publi" class="tabSeccion">
                        <div class="col-12">
                              {{-- <div class="form-group row">
                                    {{ Form::label('order', 'Ordering', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9">
                                          {{ Form::select('order', null, ['class' => 'form-control', 'id' => 'order']) }}
                                    </div>
                              </div> --}}
                              <div class="form-group row">
                                    {{ Form::label('access', 'Access', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9">
                                          {{ Form::select('access', [
                                                '0'  => 'Guest',
                                                '1'  => 'User',
                                                '2'  => 'Subscribe',
                                                '3'  => 'Contributor',
                                                '4'  => 'Author',
                                                '5'  => 'Editor',
                                                '6'  => 'Admin',
                                                '7'  => 'SuperAdmin',
                                          ], ['class' => 'form-control', 'id' => 'access']) }}
                                    </div>
                              </div>
                              <h5 class="w-100 border-bottom mb-4 py-2" style="color: rgba(192, 10, 39,0.5)">Publishing</h5>
                              <div class="form-group row">
                                    {{ Form::label('created_at', 'Creation date', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9 icon">
                                          {{ Form::datetime('created_at', null, ['class' => 'form-control', 'id' => 'created_at']) }}
                                          <i class="ax ax-calendar-alt"></i>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('publish_up', 'Start publishing', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9 icon">
                                          {{ Form::datetime('publish_up', null, ['class' => 'form-control', 'id' => 'publish_up']) }}
                                          <i class="ax ax-calendar-alt"></i>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('publish_down', 'End publishing', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9 icon">
                                          {{ Form::datetime('publish_down', null, ['class' => 'form-control', 'id' => 'publish_down']) }}
                                          <i class="ax ax-calendar-alt"></i>
                                    </div>
                              </div>
                              <h5 class="w-100 border-bottom mb-4 py-2" style="color: rgba(192, 10, 39,0.5)">Metadata</h5>
                              <div class="form-group row">
                                    {{ Form::label('meta_decription', 'Meta description', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9">
                                          {{ Form::textarea('meta_decription', null, ['class' => 'form-control', 'id' => 'meta_decription', 'cols' => '30', 'rows' => '2' ]) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('meta_key', 'Meta keyword', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9">
                                          {{ Form::text('meta_key', null, ['class' => 'form-control', 'id' => 'meta_key']) }}
                                    </div>
                              </div>
                              <div class="form-group row">
                                    {{ Form::label('meta_author', 'Meta author', ['class' => 'col-sm-3 col-form-label']) }}
                                    <div class="col-sm-9">
                                          {{ Form::text('meta_author', null, ['class' => 'form-control', 'id' => 'meta_author']) }}
                                    </div>
                              </div>
                        </div>
                  </div>

            </section>
      </div>                                                      
</div>


@section('script')

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="{{ asset('vendor/stringToSlug/jquery.stringtoslug.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js" integrity="sha256-PWkRo2jN9HjK7WOLmKkZ2vwm8Z1PKGfneqk5LN1UMmE=" crossorigin="anonymous"></script>
      <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('vendor/Tab/tab.js') }}"></script>
      <script>
            $(document).ready(function(){
                  $("#title, #alias").stringToSlug({
                        callback: function(text){
                              $("#alias").val(text);
                        }
                  });
            });
            CKEDITOR.replace( 'fulltext' );

      </script>
@endsection