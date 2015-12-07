<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
$form = Tb::form(['type' => Tb::FORM_TYPE_HORIZONTAL, 'id' => 'form_agenda', 'leftRow' => 3, 'rightRow' => 9]);
echo $form->textField('id', '', ['type' => 'hidden']);
echo $form->textFieldRow('job_date', 'Job Date', ['placeholder' => 'Enter Job Date', 'id' => 'job_date']);
echo $form->dropDownListRow('Client', 'client_id', 0, [lang('select_client')],
    ['id' => 'client_id', 'onchange' => 'change_client()']);
echo $form->dropDownListRow('Company (Bill to)', 'bill_to', 0, ['Select Bill To (Company)'], ['id' => 'bill_to']);
echo $form->dropDownListRow('Company (Price)', 'price_cat', 0, ['Select Price Category'],
    ['onchange' => 'change_price_cat()', 'id' => 'price_cat']);
echo $form->dropDownListRow('Document / Process', 'price_id', 0, ['Select Document / Process'],
    ['id' => 'price_id', 'onchange' => 'change_doc()']);
echo $form->textFieldRow('process', '', ['placeholder' => 'Enter Document / Process', 'id' => 'process']);
echo $form->dropDownListRow('Priority', 'priority', 0, ['Select Priority'],
    ['id' => 'priority', 'onchange' => 'get_price()']);
echo $form->dropDownListRow('Area', 'area', '', $area, []);
echo $form->textFieldRow('qty', '', ['placeholder' => 'Enter Quantity', 'id' => 'qty']);
echo $form->textFieldRow('unit_price', '', ['placeholder' => 'Enter Unit Price', 'id' => 'unit_price']);
echo $form->textFieldRow('complete_date', 'Date Completion', ['id' => 'complete_date']);
$form->end();

?>

<script type="text/javascript">
    $(document).ready(function () {
        var dt_price_cat = <?=$dt_price_cat;?>;
        var dt_client_person = <?=$dt_client_person;?>;
        var dt_client_company = <?=$dt_client_company;?>;
        $('#price_cat').select2({data: dt_price_cat});
        $('#client_id').select2({data: dt_client_person});
        $('#bill_to').select2({data: dt_client_company});
        change_client();
    });

    function change_price_cat() {
        var id = $("#price_cat").val();
        $.ajax({
            url: "<?=site_url('admin/agenda/dt_process_by_catid')?>",
            data: {"id": id},
            type: "POST",
            datatype: "JSON",
            cache: false,
            success: function (res) {
                console.log(res);
                console.log(JSON.parse(res));
                $("#price_id").empty();
                $('#price_id').select2({cache: false, data: JSON.parse(res)});
            }
        });
    }

    function change_client() {
        var txt = $('#client_id option:selected').text();
        if ($('#client_id').val() != 0) {
            $('#desc').val(txt);
        }
    }

    function change_doc() {
        var cat_id = $("#price_cat").val();
        var price_id = $('#price_id').val();
        var txt = $('#price_id option:selected').text();
        $('#process').val(txt);
        $('unit_price').val('');
        $.ajax({
            url: "<?=site_url('admin/agenda/dt_priority_by_catid')?>",
            data: {"cat_id": cat_id},
            type: "POST",
            datatype: "JSON",
            cache: false,
            success: function (res) {
                $("#priority").empty();
                $('#priority').select2({cache: false, data: JSON.parse(res)});
            }
        });
    }

    function get_price() {
        var price_id = $('#price_id').val();
        var priority = $('#priority').val();
        console.log(price_id + '----' + priority);
    }

    function json2array(json) {
        var result = [];
        $.each(json, function (key, value) {
            result[key] = value;
        });
        return result;
    }
</script>