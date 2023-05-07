<div class="row mb-3">
    <div class="col-12 col-sm-4">
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
    <div class="col-12 col-sm-4">
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
    <?php
        // ...

            function field_required($required) {
                if($required == "required") {
                    return '<span class="text-danger">*</span>';
                }
                return '';
            }

        // ...
    ?>
<div class="col-12 col-sm-4">
    <div class="form-group">
        <?php
        $field_name = 'price';
        $field_lable = label_case($field_name);
        $field_placeholder = $field_lable;
        $required = "";
        $value = isset($package) ? 'Rp ' . number_format($package->price, 0, ',', '.') : 'Rp 0';

        ?>
        {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
        {{ html()->text($field_name, $value)->placeholder($field_placeholder)->class('form-control')->attributes(['onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57', 'oninput' => "formatCurrency(this)", 'data-type' => 'currency']) }}
    </div>
</div>

<script>
function formatCurrency(input) {
    // Mengambil nilai dari input
    var value = input.value;

    // Menghapus karakter selain angka
    value = value.replace(/\D/g, "");

    // Menambahkan titik sebagai separator ribuan
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

    // Menambahkan simbol koma sebagai separator desimal
    value = value.replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,");

    // Mengubah nilai input dengan format IDR
    input.value = "Rp " + value;

    // Konversi nilai ke float sebelum disimpan
    var float_value = parseFloat(value.replace(/\./g, '').replace(',', '.')); // Menghapus titik sebagai separator ribuan dan mengubah koma sebagai separator desimal menjadi titik

    // Set nilai float ke dalam input hidden
    var hidden_input = document.getElementById('hidden_' + input.name); // Mendapatkan element input hidden berdasarkan nama input
    hidden_input.value = float_value; // Set nilai float ke dalam input hidden

    // Set nilai format rupiah ke dalam input asli
    var rupiah_value = "Rp " + value;
    input.setAttribute("data-value", float_value); // Menyimpan nilai float ke dalam atribut data-value
    input.value = rupiah_value; // Set nilai format rupiah ke dalam input asli
}

// Fungsi untuk mengubah format input kembali ke format rupiah ketika kehilangan fokus
function formatToRupiah(input) {
    // Mendapatkan nilai float dari atribut data-value
    var float_value = input.getAttribute("data-value");
    if (float_value === null) {
        float_value = 0;
    }

    // Mengubah nilai float ke format rupiah
    var rupiah_value = float_value.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }).replace(/\s/g, '');

    // Set nilai format rupiah ke dalam input asli
    input.value = rupiah_value;
}
</script>

<input type="hidden" name="price" id="hidden_price" value="{{ isset($package) ? $package->price : 0 }}">


    

</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'short_description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'long_description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

