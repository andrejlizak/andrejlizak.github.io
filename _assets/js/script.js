
//side bar toggle
(function($){

    //plus mínus ikonky
    var findClass = $('.side-bar');

    findClass.find('.li-level-0').next().hide();
    findClass.find('.li-level-0').on('click', function(event){
        event.preventDefault();
        $(this).next().toggle();
        $(this).find('.fa-plus, .fa-minus').toggleClass('fa-plus').toggleClass('fa-minus');
        
    })

    findClass.find('.level-1').next().hide();
    findClass.find('.level-1').on('click', function(event){
        event.preventDefault();
        $(this).next().toggle();
        $(this).find('.fa-plus, .fa-minus').toggleClass('fa-plus').toggleClass('fa-minus');
        
        
    })

    //zmiznutie správy prihlásenia-odhlásenia
    $('.success-message').delay(3200).fadeOut('fast');
    
    
})(jQuery);


//nákuoný košík
(function($){

    //vypísanie množstva v košíku v hlavičke pri tlačidle košíka
    function load_item_qty(){

    
        $.ajax({
            url: '_inc/cart.inc.php',
            method: 'get',
            data: {cartQty:'cart_item'},
            success:function(response){
                $('#cart-item').html(response);
            }
    
    
        })
    
        }
    load_item_qty();

    //pridanie produktov do košíka
    $('.add-btn').click(function(e){
        e.preventDefault();
        var $form = $(this).closest('.hidden-form');
        var pid = $form.find('.pid').val();
        var pname = $form.find('.pname').val();
        var pmade = $form.find('.pmade').val();
        var pprice = $form.find('.pprice').val();
        var pimage = $form.find('.pimage').val();
        var puid = $form.find('.puid').val();

        $.ajax({
            url: '_inc/cart.inc.php',
            method: 'post',
            data: {pid:pid, pname:pname, pmade:pmade, pprice:pprice, pimage:pimage, puid:puid},
            success:function(response){
                $('#message').html(response);
                load_item_qty();
            }
    })
})

        $('.pqty').on('change', function(){
            var $tr = $(this).closest('tr');
            var pid = $tr.find('.pid').val();
            var pqty = $tr.find('.pqty').val();
            var pprice = $tr.find('.pprice').val();
            var uid = $tr.find('.uid').val();
            

            location.reload(true);
            $.ajax({
                url: '_inc/cart.inc.php',
                method: 'post',
                cache: false,
                data: {pid:pid, pqty:pqty, pprice:pprice, uid:uid},
                success: function(response){
                    console.log(response);
                }
            })
        })

        //sumár objednávky
        $('.place_order').click(function(e){
            e.preventDefault();
            var $form = $(this).closest('.chck-form');
            var total = $form.find('.total').val();
            var items = $form.find('.items').val();
            var oname = $form.find('input[name="oname"]').val();
            var omail = $form.find('input[name="omail"]').val();
            var otel = $form.find('input[name="otel"]').val();
            var oadd1 = $form.find('input[name="oaddress1"]').val();
            var oadd2 = $form.find('input[name="oaddress2"]').val();
            var payment = $form.find('.payment').val();
            
    
            $.ajax({
                url: '_inc/checkout.inc.php',
                method: 'post',
        
                data: {total:total, items:items, oname:oname, omail:omail, otel:otel, oadd1:oadd1, oadd2:oadd2, payment:payment},
                success: function(){
                    window.location='checkout.php?order=placed';
                }
            })
    
    })
        
        

})(jQuery);