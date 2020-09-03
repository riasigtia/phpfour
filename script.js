let base_url = "http://localhost:8080/menu/menu.php";
$("document").ready(function(){
    $("#order").click(function(){
        var get = $("#text").val();
        getitem(get);
    });              
});
    function getitem(id) {
    let url = base_url + "?req=menu_data&id="+ id;
    $.get(url,function(data,success){
        $("table").css("display", "block");
        $(".name").html(data.name);
        $(".des").html(data.description);
        $(".small").html(data.price_small);
        $(".large").html(data.price_large);
    });
}