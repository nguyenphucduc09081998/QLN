@extends('master')
	@section('content')
	<div id="mathang_contain" class="container">
		<div class="section1 row">
			<div class = "mathang_imgs col-md-6">
				<div class="owl-carousel owl-theme">
					<div class="main_img item">
						<img src="/upload/$_20.JPG">
					</div>
					<div class="main_img item">
						<img src="/upload/$_20.JPG">
					</div>
					<div class="main_img item">
						<img src="/upload/$_20.JPG">
					</div>
					<div class="main_img item">
						<img src="/upload/$_20.JPG">
					</div>
					<div class="main_img item">
						<img src="/upload/$_20.JPG">
					</div>
				</div>
			</div>
			<div class = "mathang_desc col-md-6">
				<div class="title">
					<h1>Tên Mặt Hàng 1<h1>
				</div>
				<div class="xuatxu">
					<label>Xuất xứ:</label> <span>Việt Nam</span>
				</div>
				<div class="description">
				
					<p>
					<label>Mô tả:</label> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Ut ac rutrum libero. Morbi et auctor ante. Nunc vitae nisl sed 
					justo semper auctor sed in lectus. Cras vulputate lorem eu urna 
					fringilla sollicitudin. Nunc blandit nibh eget felis tempor 
					tincidunt. Pellentesque pharetra ex vitae nisi aliquam tempor. 
					In viverra sed ante eget finibus. Cras rutrum non augue id lacinia. 
					Quisque suscipit, erat quis fringilla facilisis, eros metus vulputate nisl, 
					non aliquam purus dolor non urna. Etiam id viverra massa. 
					Nullam maximus sapien mauris, eget scelerisque justo condimentum sit amet. 
					Suspendisse nec consectetur est, sed sagittis justo.</p>
				</div>
				<div class="price">
					<h2>20 000 vnđ</h2>
				</div>
				<div class="add_to_card form-group">
					<label class="">Số lượng:</label> 
					<input class="soluong form-control" type="number" name="soluong" max="99" min="1"/>
					<button class="btn addToCartBtn" id="addToCart">Thêm vào giỏ</button>
				</div>
			</div>
		</div>
		
		
		<div class="section2">
			<div class="container">
				<div class="danhgia">
					<h3>Đánh giá</h3>
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 1</b><a/></br>
							<a class="comment-content">Mặt hàng này rất đẹp và bền</a>
						</div>
					</div>
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 2</b><a/></br>
							<a class="comment-content">Đoán xem</a>
						</div>
					</div>
					
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 3</b><a/></br>
							<a class="comment-content">Mặt hàng này rất đẹp và bền</a>
						</div>
					</div>
					
				</div>
					
				<div class="cauhoi">
					<h3 class="ask-header">Câu hỏi</h3>
					<div>
						<textarea class="form-control ask-field" row="5" cols="50" placeholder="Đặt câu hỏi?"></textarea>
						<button class="btn btn-ask" type="button"><b>Gửi câu hỏi</b> </button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
