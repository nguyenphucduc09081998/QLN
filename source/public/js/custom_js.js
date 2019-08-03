$( document ).ready(function() {
	
	
	$('#mathang_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			1000:{
				items:1
			}
		}
	})
	
	
	
	$('#hp .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 4
			}
		}
	});
	
	
	$('#loaimathang_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 1
			}
		}
	});

	$('#search_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 1
			}
		}
	});

	//ajax for addtocart
	
	$('.add_to_cart_btn').click(function(){
		$(this).prop("disabled");
		$.ajax({
			url     : '/AddToCart',
			method  : 'post',
			data    : {
				'idMatHang'  : $(this).val(),
				'_token': $('meta[name="csrf-token"]').attr('content')
			},
			dataType: 'json',
			success : function(response){
				var total_cart_items = $('#total_cart_items').text();
				console.log(total_cart_items);
				if(total_cart_items ==""){
					total_cart_items = 0;
				}
				else{
					total_cart_items = parseInt( $('#total_cart_items').text() );
				}
				total_cart_items += 1;
				$('#total_cart_items').text(total_cart_items);
				alert("Thêm mặt hàng thành công");
				$(this).prop("disabled");
			}
		});
		
		
	});
	$('.add_to_cart_btn_with_quantity').click(function(){
		$(this).prop("disabled");
		$.ajax({
			url     : '/AddToCart',
			method  : 'post',
			data    : {
				'idMatHang'  : $(this).val(),
				'SoLuong' : $("#soluong").val(),
				'_token': $('meta[name="csrf-token"]').attr('content')
			},
			dataType: 'json',
			success : function(response){
				var total_cart_items = $('#total_cart_items').text();
				console.log(total_cart_items);
				if(total_cart_items ==""){
					total_cart_items = 0;
				}
				else{
					total_cart_items = parseInt( $('#total_cart_items').text() );
				}
				total_cart_items += parseInt($("#soluong").val());
				$('#total_cart_items').text(total_cart_items);
				alert("Thêm mặt hàng thành công");
				$(this).prop("disabled");
			}
		});
		
		
	});

	$('.quanly .datatable').DataTable();
});