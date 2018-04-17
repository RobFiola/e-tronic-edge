var openned=false;
$(document).ready(function(){
    $('.buttons').hover(function(){ 
      if(!openned){
        $('.opinion').addClass('open');
      	openned=true;
      }
    });
    $("input[name='rating']").click(function(){
      if(this.value<4){

        $('.feedback').addClass('show');
      }
        else{
            $('.opinion').removeClass('open'); 
         
        }
    });
  $('#close').click(function(){
   $('.opinion').removeClass('open'); 
    $('.feedback').removeClass('show');
  });
  
  $('#feedback-btn').click(function(e){
   e.preventDefault(); 
    $('.opinion').removeClass('open'); 
    $('.feedback').removeClass('show'); 
  });
});
