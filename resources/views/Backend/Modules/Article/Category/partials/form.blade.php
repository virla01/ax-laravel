<div class="card-body">
      <div class="form-group row">
            {{ Form::label('name', 'Name', ['class' => 'col-2 col-form-label']) }}
            <div class="col-10">
                  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
      </div>
      <div class="form-group row">
            {{ Form::label('slug', 'Slug', ['class' => 'col-2 col-form-label']) }}
            <div class="col-10">
                  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
            </div>
      </div>
      <div class="form-group row">
            {{ Form::label('description', 'Description', ['class' => 'col-2 col-form-label']) }}
            <div class="col-10">
                  {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'cols' => '30', 'rows' => '2']) }}
            </div>
      </div>
      <div class="form-group row">
            {{ Form::label('images', 'Images', ['class' => 'col-2 col-form-label']) }}
            <div class="col-10">
                  {{ Form::file('images', null, ['class' => 'form-control', 'id' => 'images']) }}
            </div>
      </div>
</div>
<div class="col-12 border-top">
      <div class="float-right mt-4">
            <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
            {{ Form::submit('Save',['class' => 'btn btn-success float-right ml-2']) }}
      </div>
</div>

@section('script')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="{{ asset('vendor/stringToSlug/jquery.stringtoslug.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js" integrity="sha256-PWkRo2jN9HjK7WOLmKkZ2vwm8Z1PKGfneqk5LN1UMmE=" crossorigin="anonymous"></script>
      <script>
            $(document).ready(function(){
                  $("#name, #slug").stringToSlug({
                        callback: function(text){
                              $("#slug").val(text);
                        }
                  });
            });
      </script>
@endsection