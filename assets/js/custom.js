$(function() {
    //sidebar tab show/hide
    $('#collapse-tab a:first').tab('show');

    //For using tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //For Store single.html
    /*$('.navigate-images').mouseover('.li-img',function(){
        var li = $(this).closest("li");
        var src = li.find('a').attr('id');
        alert(src);
        $('.top-img').attr('src', src);
    });*/
    $('.li-img').hover(function(){
        var src = $(this).attr('src');
        $('.top-img').attr('src', src);
    });

    //Create account on proceed checkout page
    $('.password-box').hide();
    $('.create-account-chkbox').click(function(){
      if(this.checked){
        $('.password-box').show();
      }
      else{
        $('.password-box').hide();
      }
    });
    //Create account on proceed checkout page
    $('.payment-chkbox').click(function(){
      if(this.checked){
        $('.payment-cheque').show();
        $('.payment-card').hide();
      }
      else{
        $('.payment-cheque').hide();
      }
    });
    //check payment on proceed checkout page
    $('.payment-card').hide();
    $('.payment-card-chkbox').click(function(){
      if(this.checked){
        $('.payment-card').show();
        $('.payment-cheque').hide();
      }
      else{
        $('.payment-card').hide();
      }
    });

});
