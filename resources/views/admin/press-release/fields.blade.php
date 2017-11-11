
<div class="form-group col-md-12">
    <label>Judul Press Release <sup>*</sup></label>
    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul press release')) }}
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Konten <sup>*</sup></label>
    {{ Form::textarea('content', null, array('class' => 'tinymce')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>



@section('page-style')
    <script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'template paste textcolor colorpicker textpattern imagetools codesample toc help emoticons hr'
            ],
            toolbar1: 'newdocument | print preview searchreplace | undo redo | image | bullist numlist outdent indent |   visualblocks help',
            toolbar2: 'styleselect | fontselect | fontsizeselect | bold italic underline  | alignleft aligncenter alignright alignjustify | forecolor backcolor | removeformat',
            image_advtab: true,
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                // trigger file upload form
                if (type == 'image') $('#formUpload input').click();
            },
            default_link_target: "_blank"
        });
    </script>
@endsection