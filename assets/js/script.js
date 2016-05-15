$(document).ready(function () {

    if (window.matchMedia('(min-width: 768px)').matches) {
        $("#botao_menu").html('<a id="menu-toggle" class="btn btn-default" style="margin: 10px"><i class="fa fa-bars"></i></a>');
    }

    if (window.matchMedia('(max-width: 768px)').matches) {
        $(".toggle-btn").trigger('click');
    }

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#BtnEditar").click(function () {
        var id = $("select").val();

        if (id == '') {
            alert("Escolha uma opção.");
            return;
        }

        $("form").attr('action', '?modo=form&id=' + id);
    });

});
