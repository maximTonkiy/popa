$(function () {
    let phumber = 0;
    //операция открытия ьлока трейлера
    $("#trailer").change(function () {
       if ($(this).is(':checked'))
           $('.trailer').addClass('active');
       else {
           $("[name=tnumber]").val('');
           $('.trailer').removeClass('active');
       }
    });

    //Создание полей ввода для пассажиров
    $("#addPassenger").click(function () {
        let input = `<div class="newPassenger" data-idPassanger="${pnumber}">
                <input type="text" name="passengers[]" placeholder="ФИО пассажира">
                <div class="deletePassenger" data-id="${pnumber}">-</div></div>`;
        $(".passengers").append(input);
        phumber++;
    });

    $("body").on("click",".deletePassenger", function () {
        let id = $(this).data("id");
        $("[data-idPassenger="+id+"]").remove();
    })
});