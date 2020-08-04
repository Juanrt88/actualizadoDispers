$(document).ready(function () {

    $('.item-carrito').each(function (indice, elemento) {
        //En cada elemento p escribimos el texto
        $(elemento).attr('id', 'item_' + indice);
    });

    // elimina un producto
    $('.btn-elimina-producto').click(function () { 
        // alert($(this).parent().attr('id'));
        $("#"+$(this).parent().attr('id')).remove();
    });

    //vacia el carrito
    $('#btn-vaciar-carrito').click(function () {
        $('.item-carrito').remove();
      });

    //aumentar o siminuir cantidad
    $('.restar-cantidad').click(function(){
        var id_item=$(this).parents('.item-carrito').attr('id');
        var elemento=$('#'+id_item).find('.cantidad-producto');
        var n=parseInt(elemento.text());
        n--;
        if (n <= 0) {
            n = 1;
        }
        $(elemento).text(n.toString());
    });

    $('.sumar-cantidad').click(function(){
        var id_item=$(this).parents('.item-carrito').attr('id');
        var elemento=$('#'+id_item).find('.cantidad-producto');
        var n=parseInt(elemento.text())
        n++;
        if (n >= 50) {
            n = n-1;
        }
        $(elemento).text(n.toString());
    });

});
