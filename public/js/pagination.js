$(function() {
    step1();
});

function step1() {
    var perPage = 10;
    $.post(URL +'index/step1')
    .done(function(result){
        var data = $.parseJSON(result);
        step2(perPage, data[0].total_row);

    });
    return false;
}

function step2(perPage, totalRow) {
    var currentPage = $('.table-pager').attr('data-page');
    var startPage = (parseInt(currentPage) * parseInt(perPage)) - parseInt(perPage);
    var endPage = Math.ceil(totalRow / perPage);
    step3(endPage);

    $.post(URL + 'index/step2', { 'startPage': startPage, 'perPage': perPage})
    .done(function(result){
        var data = $.parseJSON(result);
        var table = '';

        $.each(data, function(i,x) {
            table +=
                `
                    <tr>
                        <td>${x.id}</td>
                        <td>${x.first_name}</td>
                        <td>${x.last_name}</td>
                        <td>${x.email}</td>
                        <td>${x.birthdate}</td>
                    </tr>
                `;
        });
        $('.data-body').html(table);

    });
    return false;
    
}

function step3(endPage) {
    var option = "";
    var i;

    for(i = 1; i <= endPage; i++) {
        option += `<option value="${i}">${i}</option>`;
    }
    $('select#pages').html(option);
    step4();

}

function step4() {
    $('select#pages').change(function(){
        var toPage = $(this).val();
        $('.table-pager').attr('data-page', toPage);
        var perPage = 10;
        var currentPage = toPage;
        var startPage = (parseInt(currentPage) * parseInt(perPage)) - parseInt(perPage);
        history.pushState('', '', URL + 'index/pagination?page=' + toPage);

       $.post(URL + 'index/step2', { 'startPage': startPage, 'perPage': perPage})
        .done(function(result){
            var data = $.parseJSON(result);
            var table = '';

            $.each(data, function(i,x) {
                table +=
                    `
                        <tr>
                            <td>${x.id}</td>
                            <td>${x.first_name}</td>
                            <td>${x.last_name}</td>
                            <td>${x.email}</td>
                            <td>${x.birthdate}</td>
                        </tr>
                    `;
            });
            $('.data-body').html(table);

        });
        return false;
       
    });
}