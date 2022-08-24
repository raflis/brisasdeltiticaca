<div class="form-group col-sm-3">
  {{ Form::label('no_read', 'Categoría:') }} <code>*</code>
  {{ Form::text('no_read', $category->name, ['class' => 'form-control', 'readonly']) }}
  {{ Form::hidden('category_id', $category->id) }}
  
</div>

<div class="form-group col-sm-3">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('event_date', 'Fecha de evento:') }} <code>*</code>
  {{ Form::date('event_date', null, ['class' => 'form-control', 'placeholder' => 'Fecha de evento', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('description', 'Detalle:') }} <code>*</code>
  {{ Form::textarea('description', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Detalle', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {!! Form::label('banner1','Banner superior:',['class'=>'mt-3']) !!} <strong>(1920 x 405px)</strong><code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('banner1',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="one_events.edit")
        <img src="{{ $event->banner1 }}" alt="" style="height:3rem">
    @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('banner2','Banner inferior:',['class'=>'mt-3']) !!} <strong>(1920 x 405px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('banner2',null,['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="one_events.edit")
        <img src="{{ $event->banner2 }}" alt="" style="height:3rem">
    @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('image1','Imagen evento:',['class'=>'mt-3']) !!} <strong>(1230 x 1280px)</strong><code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
      <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
      <i class="far fa-image"></i> Elegir
      </a>
    </span>
    {!! Form::text('image1',null,['class'=>'form-control','id'=>'thumbnail3', 'required']) !!}
  </div>
  <div id="holder3" style="margin-top:15px;max-height:100px;">
    @if (Route::currentRouteName()=="one_events.edit")
      <img src="{{ $event->image1 }}" alt="" style="height:5rem">
    @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('image2','Imagen destacada:',['class'=>'mt-3']) !!} <strong>(490 x 696px)</strong><code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
      <a id="lfm4" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary text-white">
      <i class="far fa-image"></i> Elegir
      </a>
    </span>
    {!! Form::text('image2',null,['class'=>'form-control','id'=>'thumbnail4', 'required']) !!}
  </div>
  <div id="holder4" style="margin-top:15px;max-height:100px;">
    @if (Route::currentRouteName()=="one_events.edit")
      <img src="{{ $event->image2 }}" alt="" style="height:5rem">
    @endif
  </div>
</div>

<div class="form-group col-md-4">
  {{ Form::label('featured', '¿Destacado?:') }} <code>*</code>
  {{ Form::select('featured', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('link', 'Link Joinnus:') }} <code>*</code>
  {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Link de Joinnus', 'required']) }}
</div>

<div class="col-md-4"></div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
    <div class="card-header py-3 card-into">
      <h6 class="m-0 font-weight-bold text-primary float-left">Imágenes:</h6>
      <p class="btn btn-success m-0 btn-icon-split float-right añadir">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text text-white">Añadir</span>
      </p>
    </div>
    <div class="texto row px-3">
      @if (Route::currentRouteName()=="one_events.create")
        <div class="card-body col-md-4 pt-1">
          {!! Form::label('images','Selecciona una imagen:',['class'=>'mt-1']) !!} <small><strong>(559 x 366 px)</strong></small><code>*</code>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm_images0" data-input="thumbnail_images0" data-preview="holder_images0" class="btn btn-primary text-white">
                  <i class="far fa-image"></i> Elegir
                  </a>
              </span>
              {!! Form::text('images[0][image]',null,['class'=>'form-control','id'=>'thumbnail_images0', 'required']) !!}
          </div>
          <div id="holder_images0" style="margin-top:15px;max-height:100px;">
          </div>
          {!! Form::label('images','Orden:',['class'=>'mt-1']) !!} <code>*</code>
          {!! Form::text('images[0][order]',null,['class'=>'form-control','required']) !!}
          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
        </div>
      @endif

      @if (Route::currentRouteName()=="one_events.edit")
        @foreach ($event->images as $item)
        @php $var_col = (count($event->images)>1)?'col-md-4':'col-md-4'; @endphp
        <div class="card-body {{ $var_col }} pt-1">
          @if ($loop->index >= 1)
          <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
            <i class="fas fa-trash"></i>
          </a>
          @endif
          {!! Form::label('images','Selecciona una imagen:',['class'=>'mt-1']) !!} <small><strong>(559 x 366px)</strong></small> <code>*</code>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm_images{{ $loop->iteration }}" data-input="thumbnail_images{{ $loop->iteration }}" data-preview="holder_images{{ $loop->iteration }}" class="btn btn-primary text-white">
                  <i class="far fa-image"></i> Elegir
                  </a>
              </span>
              {!! Form::text('images['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_images'.$loop->iteration,'required']) !!}
          </div>
          <div id="holder_images{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
              <img src="{{ $item['image'] }}" alt="" style="height:5rem">
          </div>
          {!! Form::label('images','Orden:',['class'=>'mt-1']) !!} <code>*</code>
          {!! Form::number('images['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
        </div>
        @endforeach
      @endif
    </div>
  </div>
</div>

@section('script')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
  $(document).ready(function(){
      $("#name, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text);
          }
      });
  });
</script>

<script>
	$(document).ready(function(){
		 
		@if (Route::currentRouteName()=="one_events.edit")
      var i={{ count($event->images)+1 }};
    @else
      var i=1;
    @endif

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="card-body col-md-4 pt-1">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="images" class="mt-1">Selecciona una imagen:</label> <small><strong>(559 x 366px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_images'+i+'" data-input="thumbnail_images'+i+'" data-preview="holder_images'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_images'+i+'" name="images['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_images'+i+'" style="margin-top:15px;max-height:100px;"></div>' +

								'<label for="images" class="mt-1">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="images['+i+'][order]" type="number" required>' +
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div>' +
            '<\script>$(\'#lfm_images'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto').append(template);
			i++;
		});
	
		$(document).on('click','.eliminar',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});
	});
</script>

<script>
  (function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

  this.on('click', function(e) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
    var target_input = $('#' + $(this).data('input'));
    var target_preview = $('#' + $(this).data('preview'));
    window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1100,height=600');
    window.SetUrl = function (items) {
      var file_path = items.map(function (item) {
        return item.url;
      }).join(',');

      // set the value of the desired input to image url
      target_input.val('').val(file_path).trigger('change');

      // clear previous preview
      target_preview.html('');

      // set or change the preview image src
      items.forEach(function (item) {
        target_preview.append(
          $('<img>').css('height', '5rem').attr('src', item.thumb_url)
        );
      });

      // trigger change event
      target_preview.trigger('change');
    };
    return false;
  });
}

})(jQuery);

</script>
<script>
  $('#lfm1').filemanager('image', {prefix: route_prefix});
  $('#lfm2').filemanager('image', {prefix: route_prefix});
  $('#lfm3').filemanager('image', {prefix: route_prefix});
  $('#lfm4').filemanager('image', {prefix: route_prefix});
  $('#lfm_images0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="one_events.edit")
  @foreach ($event->images as $item)
  $('#lfm_images{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif
  // $('#lfm').filemanager('file', {prefix: route_prefix});
</script>

<script>
  var lfm = function(id, type, options) {
    let button = document.getElementById(id);

    button.addEventListener('click', function () {
      var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
      var target_input = document.getElementById(button.getAttribute('data-input'));
      var target_preview = document.getElementById(button.getAttribute('data-preview'));

      window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
      window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
          return item.url;
        }).join(',');

        // set the value of the desired input to image url
        target_input.value = file_path;
        target_input.dispatchEvent(new Event('change'));

        // clear previous preview
        target_preview.innerHtml = '';

        // set or change the preview image src
        items.forEach(function (item) {
          let img = document.createElement('img')
          img.setAttribute('style', 'height: 5rem')
          img.setAttribute('src', item.thumb_url)
          target_preview.appendChild(img);
        });

        // trigger change event
        target_preview.dispatchEvent(new Event('change'));
      };
    });
  };

  //lfm('lfm2', 'file', {prefix: route_prefix});
</script>
@endsection