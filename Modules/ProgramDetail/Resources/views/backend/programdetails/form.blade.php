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
            $field_name = 'package_id';
            $field_label = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $program_categories = \Modules\Package\Models\Package::pluck('name', 'id'); // mengambil data programcategories
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }} 
            @if ($required)
                <span class="text-danger">*</span>
            @endif
            {{ html()->select($field_name, $program_categories)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}    
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

