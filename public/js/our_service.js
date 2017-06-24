
function imagePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="' + e.target.result + '" class="image" width="200" height="150" />');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('#file').change(function () {
    imagePreview(this);
})

add = 0;
$(document).ready(function () {

    $('.render-html').click( function (e) {
        e.preventDefault();
        var table_html =  $(this).attr('data-table');
        addRenderHtml(add, table_html);
    });
});

function addRenderHtml(add, table_html) {

    if(table_html == 'feature') {
        var html =  featureHtml(add);
    } else {
        var html =  pricingHtml(add);
    }

    $('#' + table_html + ' tbody').append(html);

    add++;
}

function pricingHtml(add) {
    pricing_html  = '<tr id="pricing-row' + add + '">';
    pricing_html += '  <td class="text-right"><input type="hidden" name="pricing_id[]"></td>';
    pricing_html += '  <td class="text-right"><input type="text" name="pricing_title[]" value="" placeholder="Title" class="form-control" /></td>';
    pricing_html += '  <td class="text-right"><input type="text" name="price[]" value="" placeholder="Price" class="form-control" /></td>';
    pricing_html += '  <td class="text-left"><button type="button" onclick="$(\'#pricing-row' + add + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-remove"></i></button></td>';
    pricing_html += '</tr>';

    return pricing_html;
}

function featureHtml(add) {
    feature_html  = '<tr id="feature-row' + add + '">';
    feature_html += '  <td class="text-right"><input type="hidden" name="feature_id[]"></td>';
    feature_html += '  <td class="text-right"><input type="text" name="feature_title[]" value="" placeholder="Title" class="form-control" /></td>';
    feature_html += '  <td class="text-left"><button type="button" onclick="$(\'#feature-row' + add + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-remove"></i></button></td>';
    feature_html += '</tr>';

    return feature_html;
}

$('.remove-row').click( function (e) {
    e.preventDefault();
    var data_table = $(this).attr('data-table');
    var data_id = $(this).attr('data-id');

    $('#' + data_table + '-' + data_id).remove();

});


$('table tbody').sortable({
    helper: fixWidthHelper
}).disableSelection();

function fixWidthHelper(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
}
