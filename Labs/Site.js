let flag = true;

$(".courses_button").click(function(){
    $('.courses_list').toggleClass("_active");
    if (flag){
        $('div.nav-link').toggleClass('nav-link nav-link2');
    }else{
        $('div.nav-link2').toggleClass('nav-link2 nav-link');
    }
    flag = !flag;
});