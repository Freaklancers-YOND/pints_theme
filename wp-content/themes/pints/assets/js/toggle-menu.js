	$(function(){
    $(".toggler").on("click", function(){
        $(this)
        .toggleClass("expander expanded")
        .parent().next().slideToggle();
    });
});
