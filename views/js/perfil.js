var usu_id = $('#usu_idx').val();

$(document).ready(function() {
    $.post("/Proyectodanna/controller/usuario.php?opc=mostrar", { usu_id : usu_id }, function (data) {
        data= JSON.parse(data);
        $('#nombre').val(data.nombre);
        $('#ape_materno').val(data.ape_materno);
        $('#ape_paterno').val(data.ape_paterno);
        $('#correo').val(data.correo);
        $('#password').val(data.password);
        $('#sexo').val(data.sexo).trigger("change");
    });
});

$(document).on("click","#btnactualizar", function(){
    $.post("/Proyectodanna//controller/usuario.php?op=update_perfil", {
        usu_id : usu_id,
        nombre :$('#nombre').val(),
        ape_materno : $('#ape_materno').val(),
        ape_paterno : $('#ape_paterno').val(),
        password : $('#password').val(),
        sexo :$('#sexo').val()
        }, function (data) {
    });

 });