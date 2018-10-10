$(function(){
	$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('proc_pesq_user-adm.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}
	});
});

function excluir_arquivo(id_arquivo){
    $.ajax({
        url:"excluir.php",
        type:"post",
        data:"metodo=EXCLUIR_ARQUIVO&id_arquivo="+id_arquivo,
        beforeSend:function(){

        },
        success: function(){


                alert("arquivo deletado");
                location.reload();

        }
    })
}