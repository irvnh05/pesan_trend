
@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
<style>
    .note-editor.note-frame :after {
        display: none;
    }

    .note-editor .note-toolbar .note-dropdown-menu,
    .note-popover .popover-content .note-dropdown-menu {
        min-width: 180px;
    }
</style>
@endpush
<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'start_date';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            $required = "required";
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} <span class="text-danger">*</span>
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->required($required) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'end_date';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            $required = "required";
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} <span class="text-danger">*</span>
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->required($required) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'start_time';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            $required = "required";
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} @if($required) <span class="text-danger">*</span> @endif
            {{ html()->time($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'end_time';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            $required = "required";
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} @if($required) <span class="text-danger">*</span> @endif
            {{ html()->time($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>



<div class="row mb-3">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'program_id';
            $field_label = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $program_categories = \Modules\Program\Models\Program::pluck('name', 'id'); // mengambil data programcategories
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} 
            @if ($required)
                <span class="text-danger">*</span>
            @endif
            {{ html()->select($field_name, $program_categories)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'quota';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

{{-- <div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'featured_video';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }}
            
            <div id="video-inputs">
                @if(isset($model) && $model->featured_video)
                    @foreach(explode(',', $model->featured_video) as $url)
                        <div class="input-group mb-3">
                            {{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->value($url)->attribute('required', true) }}
                            <button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>
                        </div>
                    @endforeach
                @else
                    <div class="input-group mb-3">
                        {{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->attribute('required', true) }}
                        <button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>
                    </div>
                @endif
            </div>
            
            <div class="text-end mt-3">
                <button class="btn btn-primary add-video" type="button"><i class="fa fa-plus"></i> Add More</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'featured_video';
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }}
            
            <div id="video-inputs">
                @php
                    use Modules\MainEvent\Models\MainEvent;
                    $model = MainEvent::find(1);
                @endphp
                @if(isset($model) && isset($model->$field_name))
                    @php
                        $videos = json_decode($model->$field_name);
                        if (!is_array($videos)) {
                            $videos = [$videos];
                        }
                    @endphp
                    @foreach($videos as $video)
                        <div class="input-group mb-3">
                            {{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->value($video)->attribute('required', true) }}
                            <button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>
                        </div>
                    @endforeach
                @else
                x
                    <div class="input-group mb-3">
                        {{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->attribute('required', true) }}
                        <button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>
                    </div>
                @endif
            </div>
            
            <div class="text-end mt-3">
                <button class="btn btn-primary add-video" type="button"><i class="fa fa-plus"></i> Add More</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        // Tambah input video
        $('.add-video').click(function () {
            var inputGroup = $('<div class="input-group mb-3">' +
                '{{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->attribute('required', true) }}' +
                '<button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>' +
                '</div>');

            $('#video-inputs').append(inputGroup);
        });

        // Hapus input video
        $(document).on('click', '.remove-video', function () {
            $(this).parent().remove();
        });
    });

    // Ambil semua nilai input video dan gabungkan dalam array
    function getVideoValues() {
        var videoInputs = [];
        $('#video-inputs').find('input[name="featured_video[]"]').each(function () {
            var value = $(this).val();
            if (value) {
                videoInputs.push(value);
            }
        });
        return videoInputs;
    }

    // Set nilai input video dengan format yang sesuai
    function setVideoValues(values) {
        $('#video-inputs').empty();
        if (values.length > 0) {
            for (var i = 0; i < values.length; i++) {
                var inputGroup = $('<div class="input-group mb-3">' +
                    '{{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->attribute('required', true) }}' +
                    '<button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>' +
                    '</div>');
                inputGroup.find('input[name="featured_video[]"]').val(values[i]);
                $('#video-inputs').append(inputGroup);
            }
        } else {
            var inputGroup = $('<div class="input-group mb-3">' +
                '{{ html()->text($field_name . '[]')->placeholder($field_placeholder)->class('form-control')->attribute('required', true) }}' +
                '<button class="btn btn-primary remove-video" type="button"><i class="fa fa-minus"></i></button>' +
                '</div>');
            $('#video-inputs').append(inputGroup);
        }
    }
</script>


<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'featured_image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image" data-input="{{$field_name}}"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push ('after-scripts')

<script type="module" src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script type="module">
    $('#button-image').filemanager('image');
</script>

<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script type="module">
    const FMButton = function(context) {
        const ui = $.summernote.ui;
        const button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'File Manager',
            click: function() {
                window.open('/file-manager/summernote', 'fm', 'width=1000,height=800');
            }
        });
        return button.render();
    };

    $('#description').summernote({
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['fontname', 'fontsize', 'bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'fm', 'video']],
            ['view', ['codeview', 'undo', 'redo', 'help']],
        ],
        buttons: {
            fm: FMButton
        }
    });
</script>

@endpush