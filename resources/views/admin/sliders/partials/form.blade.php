<div class="form-group col-sm-12">
{!! Form::label('image_desktop','Selecciona una imagen para desktop:',['class'=>'mt-3']) !!} <strong>(1920 x 1080px)</strong><code>*</code>
<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image_desktop',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
</div>
<div id="holder1" style="margin-top:15px;max-height:100px;">
@if (Route::currentRouteName()=="sliders.edit")
      <img src="{{ $slider->image_desktop }}" alt="" style="height:5rem">
  @endif
</div>
</div>

<div class="form-group col-sm-12">
  {!! Form::label('image_mobile','Selecciona una imagen para mobile:',['class'=>'mt-3']) !!} <strong>(400 x 720px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('image_mobile',null,['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="sliders.edit")
        <img src="{{ $slider->image_mobile }}" alt="" style="height:5rem">
    @endif
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('title1', 'Título 1:') }}
  {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('title2', 'Título 2:') }}
  {{ Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('button_name', 'Nombre del botón:') }}
  {{ Form::text('button_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del botón']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('button_link', 'Link del botón:') }}
  {{ Form::text('button_link', null, ['class' => 'form-control', 'placeholder' => 'Link del botón']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

@section('script')

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