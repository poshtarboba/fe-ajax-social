$(function() {

	$('.new').on('click',function(){
		$('form').slideToggle();
	});

	$('form').on('submit',function(e){
		e.preventDefault();
		var img = $('[name="img"]').val(),
				text = $('[name="text"]').val();
		if((!img)||(!text)){
			alert('Все поля должны быть заполнены!');
			return false;
		}
		newAjax(img, text);
	});

	$('.get').on('click',function(e){
		e.preventDefault();
		getAjax();
	});

	$('body').on('click','.like',function(e){
		e.preventDefault();
		likeAjax(e);
		$(this).toggleClass('active');
	}).on('mouseenter','.like',function(e){
		likeAjax(e);
	});

	$(window).on('scroll',function(){
		//if(...){
			getAjax();
		//}
	});


	/* ******************************** */

	function newAjax(img, text){

	}

	function getAjax(){

	}

	function likeAjax(e){

	}

});
