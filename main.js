// бургер меню
$(".burger").click(function(){
    $("body").toggleClass("menu");
    if ($("body").hasClass("menu")){
        $('.header_info_line').animate({
            "right":"0"
        }, 500);
        $('body').animate({
            "right":"30vw"
        }, 500);
    }else{
        $('.header_info_line').animate({
            "right":"-30vw"
        }, 500);
        $('body').animate({
            "right":"0"
        }, 500);
    }
});

function menu(point){
    $('.header_info_line').animate({
        "right":"-30vw"
    }, 500);
    $('body').animate({
        "right":"0"
    }, 500);
    $("body").removeClass("menu"); // чтобы после перехода не нажимать два раза на меню
    if (point == "services"){
        $("html, body").animate({
            scrollTop: $(".pre_block_title").offset().top
        }, 1000);
    }else if (point == "about"){
        $("html, body").animate({
            scrollTop: $(".info_about_us").offset().top
        }, 1000);
    }else if (point == "contacts"){
        $("html, body").animate({
            scrollTop: $(".footer").offset().top
        }, 1000);
    }else if (point == "comments"){
        $("html, body").animate({
            scrollTop: $(".reviews").offset().top
        }, 1000);
    }
}

$(".header").find(".services").click(function(){
    menu("services");
});
$(".header").find(".about").click(function(){
    menu("about");
});
$(".header").find(".contacts").click(function(){
    menu("contacts");
});
$(".header").find(".comments").click(function(){
    menu("comments");
});

//слайдер простой
// $(".header_box_next").click(function(){
//     if ($(".header").hasClass("top1")){
//         $(".header").removeClass("top1");
//         $(".header").addClass("top2");
//     }else if ($(".header").hasClass("top2")){
//         $(".header").removeClass("top2");
//         $(".header").addClass("top3");
//     }else if ($(".header").hasClass("top3")){
//         $(".header").removeClass("top3");
//         $(".header").addClass("top1");
//     }
// });

// $(".header_box_previous").click(function(){
//     if ($(".header").hasClass("top1")){
//         $(".header").removeClass("top1");
//         $(".header").addClass("top3");
//     }else if ($(".header").hasClass("top3")){
//         $(".header").removeClass("top3");
//         $(".header").addClass("top2");
//     }else if ($(".header").hasClass("top2")){
//         $(".header").removeClass("top2");
//         $(".header").addClass("top1");
//     }
// });

//слайдер
let tape =  $('.header').find('.window_tape');
let slide = tape.find('div');
tape.css('width', 100 * slide.length + '%');
nowIndex = 0;

$(".header_box_next").click(function(){
    if (nowIndex >= slide.length-3){
        nowIndex++;
        tape.animate({
            left: -100 * (nowIndex+1) + "%"
        }, 500, function(){
            nowIndex = 0;
            tape.css('left', -100 * (nowIndex+1) + '%');
        });
    }else{
        nowIndex++;
        tape.animate({
            left: -100 * (nowIndex+1) + "%"
        }, 500);
    }
    console.log(nowIndex)
});

$(".header_box_previous").click(function(){
    if (nowIndex <= 0){
        nowIndex--;
        tape.animate({
            left: -100 * (nowIndex+1) + "%"
        }, 500, function(){
            nowIndex = 2;
            tape.css('left', -100 * (nowIndex+1) + '%');
        });
    }else{
        nowIndex--;
        tape.animate({
            left: -100 * (nowIndex+1) + "%"
        }, 500);
    }
    console.log(nowIndex)
});


// setInterval(function(){
//     $(".header_box_next").click();
// }, 2000);

//валидация формы
$("form").submit(function(e){
    // e.preventDefault();

    let fioVal = $(this).find("[name='fio']").val();
    let emailVal = $(this).find("[name='email']").val();
    let telVal = $(this).find("[name='phone']").val();
    let errorElement = $(this).find(".error_message");

    if (fioVal == "" || emailVal == "" || telVal == ""){
        let errorMessage = "Вы заполнили не все поля";
        if (fioVal == ""){
            $(this).find("[name='fio']").css("border-color", "red");
        }else{
            $(this).find("[name='fio']").css("border-color", "#fbaf3f");
        }
        if (emailVal == ""){
            $(this).find("[name='email']").css("border-color", "red");
        }else{
            $(this).find("[name='email']").css("border-color", "#fbaf3f");
        }
        if (telVal == ""){
            $(this).find("[name='phone']").css("border-color", "red");
        }else{
            $(this).find("[name='phone']").css("border-color", "#fbaf3f");
        }
        errorElement.html(errorMessage);
        errorElement.slideDown();
    }else{
        $(this).find("[name='fio']").css("border-color", "#fbaf3f");
        $(this).find("[name='email']").css("border-color", "#fbaf3f");
        $(this).find("[name='phone']").css("border-color", "#fbaf3f");
        errorElement.slideUp();
        $("form").submit();
    }
    return false;
});

//#fbaf3f;