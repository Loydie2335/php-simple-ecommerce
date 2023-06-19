var my_handlers = {

    fill_provinces: function () {

        var region_code = $(this).val();
        $('#province').ph_locations('fetch_list', [{ "region_code": region_code }]);


    },

    fill_cities: function () {

        var province_code = $(this).val();
        $('#city_municipality').ph_locations('fetch_list', [{ "province_code": province_code }]);
    },


    fill_barangays: function () {

        var city_code = $(this).val();
        $('#barangay').ph_locations('fetch_list', [{ "city_code": city_code }]);
    }
};

$(function () {
    $('#region').on('change', my_handlers.fill_provinces);
    $('#province').on('change', my_handlers.fill_cities);
    $('#city_municipality').on('change', my_handlers.fill_barangays);

    $('#region').ph_locations({ 'location_type': 'regions' });
    $('#province').ph_locations({ 'location_type': 'provinces' });
    $('#city_municipality').ph_locations({ 'location_type': 'cities' });
    $('#barangay').ph_locations({ 'location_type': 'barangays' });

    $('#province').ph_locations('fetch_list');
});

$('#province').change(function(){
    $('#prov_val').val($('#province option:selected').text());
});

$('#city_municipality').change(function(){
    $('#cit_val').val($('#city_municipality option:selected').text());
});

$('#barangay').change(function(){
    $('#bar_val').val($('#barangay option:selected').text());
});






