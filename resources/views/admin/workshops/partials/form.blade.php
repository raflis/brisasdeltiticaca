<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image','Selecciona una imagen:',['class'=>'']) !!} <strong>(420 x 600px)</strong> <code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="workshops.edit")
        <img src="{{ $workshop->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('button_name', 'Nombre del botón:') }}
  {{ Form::text('button_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del botón']) }}
</div>

<div class="form-group col-sm-4">
  {!! Form::label('button_link', 'Selecciona un archivo (PDF):',['class'=>'']) !!}
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('button_link',null,['class' => 'form-control', 'id' => 'thumbnail2', 'required']) !!}
  </div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('description', 'Descripción:') }} <code>*</code>
  {{ Form::textarea('description', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Descripción', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title1', 'Título 1:') }} <code>*</code>
  {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title2', 'Título 2:') }} <code>*</code>
  {{ Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title3', 'Título 3:') }} <code>*</code>
  {{ Form::text('title3', null, ['class' => 'form-control', 'placeholder' => 'Título 3', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('description1', 'Descripción 1:') }} <code>*</code>
  {{ Form::textarea('description1', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Descripción 1', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('description2', 'Descripción 2:') }} <code>*</code>
  {{ Form::textarea('description2', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Descripción 2', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('description3', 'Descripción 3:') }} <code>*</code>
  {{ Form::textarea('description3', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Descripción 3', 'required']) }}
</div>


<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
    <div class="card-header py-3 card-into">
      <h6 class="m-0 font-weight-bold text-primary float-left">Imágenes:</h6>
      <p class="btn btn-success btn-icon-split float-right añadir">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text text-white">Añadir</span>
      </p>
    </div>
    <div class="texto row px-3">
      @if (Route::currentRouteName()=="workshops.create")
      {{-- <div class="card-body col-md-6">
        {!! Form::label('images', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(963 x 323px)</strong></small> <code>*</code>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm_workshop0" data-input="images0" data-preview="holder_workshop0" class="btn btn-primary text-white">
                <i class="far fa-image"></i> Elegir
                </a>
            </span>
            {!! Form::text('images[0][image]', null, ['class' => 'form-control', 'id' => 'images0', 'required']) !!}
        </div>
        <div id="holder_workshop0" style="margin-top:15px;max-height:100px;">
        </div>

        {!! Form::label('images', 'Orden:', ['class' => '']) !!} <code>*</code>
        {!! Form::number('images[0][order]', null, ['class' => 'form-control', 'required']) !!}
        <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
      </div> --}}
      @endif

      @if (Route::currentRouteName()=="workshops.edit")
      @foreach ($workshop->images as $item)
      <div class="card-body col-md-6">
        @if ($loop->index >= 0)
        <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
          <i class="fas fa-trash"></i>
        </a>
        @endif
        {!! Form::label('images','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(963 x 450px)</strong></small> <code>*</code>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm_workshop{{ $loop->iteration }}" data-input="images{{ $loop->iteration }}" data-preview="holder_workshop{{ $loop->iteration }}" class="btn btn-primary text-white">
                <i class="far fa-image"></i> Elegir
                </a>
            </span>
            {!! Form::text('images['.$loop->iteration.'][image]', $item['image'], ['class' => 'form-control', 'id' => 'images'.$loop->iteration, 'required']) !!}
        </div>
        <div id="holder_workshop{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
            <img src="{{ $item['image'] }}" alt="" style="height:5rem">
        </div>
        {!! Form::label('images','Orden:',['class'=>'']) !!} <code>*</code>
        {!! Form::number('images['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
        <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>






@section('script')

<script>
	$(document).ready(function(){

    @if (Route::currentRouteName()=="workshops.edit")
      var i={{ count($workshop->images)+1 }};
    @else
      var i=1;
    @endif

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-6"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="images" class="">Selecciona una imagen:</label> <small><strong>(963 x 450px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_workshop'+i+'" data-input="images'+i+'" data-preview="holder_workshop'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="images'+i+'" name="images['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_workshop'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
								'<label for="images" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="images['+i+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_workshop'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
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
  $('#lfm2').filemanager('file', {prefix: route_prefix});

  $('#lfm_workshop0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="workshops.edit")
  @foreach ($workshop->images as $item)
  $('#lfm_workshop{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif

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