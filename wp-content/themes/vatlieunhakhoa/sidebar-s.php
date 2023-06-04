<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vatlieunhakhoa
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<aside class="col-right sidebar col-sm-2 wow bounceInRight animated hidden-xs hidden-sm animated" style="visibility: visible;">
		
		<div class="danh-muc-blog">
			<div class="color-blog">
				<h3 class="title-blog">Sản Phẩm</h3>
			</div>
			<div class="index-column-blog row-service">
			<ul class="links">
			<?php
				$taxonomy     = 'product_cat';
				$orderby      = 'name';  
				$show_count   = 0;      // 1 for yes, 0 for no
				$pad_counts   = 0;      // 1 for yes, 0 for no
				$hierarchical = 1;      // 1 for yes, 0 for no  
				$title        = '';  
				$empty        = 0;

				$args = array(
						'taxonomy'     => $taxonomy,
						'orderby'      => $orderby,
						'show_count'   => $show_count,
						'pad_counts'   => $pad_counts,
						'hierarchical' => $hierarchical,
						'title_li'     => $title,
						'hide_empty'   => $empty
				);
				$all_categories = get_categories( $args );
				foreach ($all_categories as $cat) {
					if($cat->category_parent == 0) {
						$category_id = $cat->term_id;       
						echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';

						$args2 = array(
								'taxonomy'     => $taxonomy,
								'child_of'     => 0,
								'parent'       => $category_id,
								'orderby'      => $orderby,
								'show_count'   => $show_count,
								'pad_counts'   => $pad_counts,
								'hierarchical' => $hierarchical,
								'title_li'     => $title,
								'hide_empty'   => $empty
						);
						$sub_cats = get_categories( $args2 );
						if($sub_cats) {
							foreach($sub_cats as $sub_category) {
								echo  '<li><a>'.$sub_category->name.'</a></li>' ;
							}   
						}
					}       
				}
				?>
				
					<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha" title="Vật liệu nha khoa">Vật liệu nha khoa</a></li>
					<li><a href="https://www.vatlieunhakhoathanglong.com/thiet-bi-nha-khoa" title="Thiết bị nha khoa">Thiết bị nha khoa</a></li>
					<li><a href="https://www.vatlieunhakhoathanglong.com/vat-tu-dung-cu-nha-khoa" title="Vật tư, dụng cụ nha khoa">Vật tư, dụng cụ nha khoa</a></li>
				</ul>
			</div>
		</div>
		<div class="danh-muc-blog">
			<div class="color-blog">
				<h3 class="title-blog-2">Khuyến Mãi</h3>
			</div>
			<div class="index-column-blog row-service">
				<div class="item list-item-home">
					<div class="product-image"> <a href="https://www.vatlieunhakhoathanglong.com/cement-gan-perma-cem-dmg" title="CEMENT GẮN PERMA CEM- DMG">
							<img class="small-image" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/cement-gan-permacem-2-0-dmg.jpg" alt="CEMENT GẮN PERMA CEM- DMG"> </a>
					</div>
					<div class="product-shop">
						<h2 class="product-name"><a href="https://www.vatlieunhakhoathanglong.com/cement-gan-perma-cem-dmg" title="CEMENT GẮN PERMA CEM- DMG">CEMENT GẮN PERMA CEM- DMG</a></h2>
						<div class="price-box">
							<span class="regular-price">
								<span class="price">1.490.000₫</span>
							</span>
						</div>
						<div class="desc std">
							<p> <a class="link-learn" href="https://www.vatlieunhakhoathanglong.com/cement-gan-perma-cem-dmg">Xem thêm</a> </p>
						</div>
						<div class="actions">
							<form action="https://www.vatlieunhakhoathanglong.com/cart/add" method="post" class="variants" id="product-actions-6002757" style="float: left;" enctype="multipart/form-data">
								<input type="hidden" name="variantId" value="9560652">
								<button class="button btn-cart add_to_cart" title="Cho vào giỏ hàng"><span>Mua hàng</span></button>
							</form>
							<div class="eye-product"><a href="https://www.vatlieunhakhoathanglong.com/cement-gan-perma-cem-dmg" title="CEMENT GẮN PERMA CEM- DMG"><img class="eye-img" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a></div>
						</div>
					</div>
				</div>
				<div class="item list-item-home">
					<div class="product-image"> <a href="https://www.vatlieunhakhoathanglong.com/may-micromotor-50000v-p" title="MÁY MICROMOTOR 50000V/p">
							<img class="small-image" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/may-mini-moto-5000.jpg" alt="MÁY MICROMOTOR 50000V/p"> </a>
					</div>
					<div class="product-shop">
						<h2 class="product-name"><a href="https://www.vatlieunhakhoathanglong.com/may-micromotor-50000v-p" title="MÁY MICROMOTOR 50000V/p">MÁY MICROMOTOR 50000V/p</a></h2>
						<div class="price-box">
							<span class="regular-price">
								<a href="https://www.vatlieunhakhoathanglong.com/lien-he"><span class="price">Liên hệ</span></a>
							</span>
						</div>
						<div class="desc std">
							<p> <a class="link-learn" href="https://www.vatlieunhakhoathanglong.com/may-micromotor-50000v-p">Xem thêm</a> </p>
						</div>
						<div class="actions">
							<form action="https://www.vatlieunhakhoathanglong.com/cart/add" method="post" class="variants" id="product-actions-5978704" style="float: left;" enctype="multipart/form-data">
								<input type="hidden" name="variantId" value="9527442">
								<button class="button btn-cart add_to_cart" title="Cho vào giỏ hàng"><span>Mua hàng</span></button>
							</form>
							<div class="eye-product"><a href="https://www.vatlieunhakhoathanglong.com/may-micromotor-50000v-p" title="MÁY MICROMOTOR 50000V/p"><img class="eye-img" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a></div>
						</div>
					</div>
				</div>
				<div class="item list-item-home">
					<div class="product-image"> <a href="https://www.vatlieunhakhoathanglong.com/may-lam-sap-labo-2017" title="MÁY LÀM SÁP LABO 2017">
							<img class="small-image" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/may-lam-sap.jpg" alt="MÁY LÀM SÁP LABO 2017"> </a>
					</div>
					<div class="product-shop">
						<h2 class="product-name"><a href="https://www.vatlieunhakhoathanglong.com/may-lam-sap-labo-2017" title="MÁY LÀM SÁP LABO 2017">MÁY LÀM SÁP LABO 2017</a></h2>
						<div class="price-box">
							<span class="regular-price">
								<a href="https://www.vatlieunhakhoathanglong.com/lien-he"><span class="price">Liên hệ</span></a>
							</span>
						</div>
						<div class="desc std">
							<p> <a class="link-learn" href="https://www.vatlieunhakhoathanglong.com/may-lam-sap-labo-2017">Xem thêm</a> </p>
						</div>
						<div class="actions">
							<form action="https://www.vatlieunhakhoathanglong.com/cart/add" method="post" class="variants" id="product-actions-5978701" style="float: left;" enctype="multipart/form-data">
								<input type="hidden" name="variantId" value="9527439">
								<button class="button btn-cart add_to_cart" title="Cho vào giỏ hàng"><span>Mua hàng</span></button>
							</form>
							<div class="eye-product"><a href="https://www.vatlieunhakhoathanglong.com/may-lam-sap-labo-2017" title="MÁY LÀM SÁP LABO 2017"><img class="eye-img" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a></div>
						</div>
					</div>
				</div>
				<div class="item list-item-home">
					<div class="product-image"> <a href="https://www.vatlieunhakhoathanglong.com/may-ep-mang-chinh-nha" title="MÁY ÉP MÁNG CHỈNH NHA">
							<img class="small-image" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/may-ep-mang-chinh-nha.jpg" alt="MÁY ÉP MÁNG CHỈNH NHA"> </a>
					</div>
					<div class="product-shop">
						<h2 class="product-name"><a href="https://www.vatlieunhakhoathanglong.com/may-ep-mang-chinh-nha" title="MÁY ÉP MÁNG CHỈNH NHA">MÁY ÉP MÁNG CHỈNH NHA</a></h2>
						<div class="price-box">
							<span class="regular-price">
								<a href="https://www.vatlieunhakhoathanglong.com/lien-he"><span class="price">Liên hệ</span></a>
							</span>
						</div>
						<div class="desc std">
							<p> . <a class="link-learn" href="https://www.vatlieunhakhoathanglong.com/may-ep-mang-chinh-nha">Xem thêm</a> </p>
						</div>
						<div class="actions">
							<form action="https://www.vatlieunhakhoathanglong.com/cart/add" method="post" class="variants" id="product-actions-5962494" style="float: left;" enctype="multipart/form-data">
								<input type="hidden" name="variantId" value="9504327">
								<button class="button btn-cart add_to_cart" title="Cho vào giỏ hàng"><span>Mua hàng</span></button>
							</form>
							<div class="eye-product"><a href="https://www.vatlieunhakhoathanglong.com/may-ep-mang-chinh-nha" title="MÁY ÉP MÁNG CHỈNH NHA"><img class="eye-img" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="danh-muc-blog-3">
			<div class="color-blog">
				<h3 class="title-blog-3">Bài viết khác</h3>
			</div>
			<div class="index-column-blog row-service">
				<ul class="posts-list unstyled clearfix">
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/6-luu-y-de-danh-rang-dung-cach"><?php the_title(); ?></a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/giai-phap-tay-trang-rang-tai-phong-kham-chi-trong-45-phut">GIẢI PHÁP TẨY TRẮNG RĂNG TẠI PHÒNG KHÁM. CHỈ TRONG...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/nhung-meo-chon-kinh-lup-nha-khoa-chat-luong-phu-hop">NHỮNG MẸO CHỌN KÍNH LÚP NHA KHOA CHẤT LƯỢNG, PHÙ...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/5-li-do-vi-sao-ban-nen-mua-may-quet-phim-phosphor-fussen">5 LÍ DO VÌ SAO BẠN NÊN MUA MÁY QUÉT...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/may-quet-phim-phosphor-fussen-may-chuan-doan-hinh-anh-nha-khoa">MÁY QUÉT PHIM PHOSPHOR FUSSEN- MÁY CHUẨN ĐOÁN HÌNH ẢNH...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/3-buoc-de-su-dung-bang-so-mau-rang-vita-3d-vita-3d-master">3 BƯỚC ĐỂ SỬ DỤNG BẢNG SO MÀU RĂNG VITA...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/huong-dan-phan-biet-mui-khoan-mani-hang-chinh-hang-va-hang-nhai-mani">HƯỚNG DẪN PHÂN BIỆT MŨI KHOAN MANI HÀNG CHÍNH HÃNG...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/mua-thiet-bi-nha-khoa-o-dau-vat-lieu-nha-khoa-thang-long">MUA THIẾT BỊ NHA KHOA Ở ĐÂU ?- Vật liệu...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/chuong-trinh-khuyen-mai-thang-5">CHƯƠNG TRÌNH KHUYẾN MÃI THÁNG 5</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/vat-lieu-nha-khoa-thang-long-thong-bao-lich-nghi-le-30-4-va-1-5">VẬT LIỆU NHA KHOA THĂNG LONG thông báo lịch nghỉ...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/chuong-trinh-khuyen-mai-doi-may-cat-gutta-cu-nhan-ngay-may-cat-gutta-coxo">Chương trình khuyến mại" Đổi máy cắt gutta cũ ,...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/mot-so-phuong-phap-dieu-tri-cho-rang-nhay-cam">Một số phương pháp điều trị cho răng nhạy cảm</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/cac-he-thong-mac-cai-su-dung-trong-chinh-nha">Các hệ thống mắc cài sử dụng trong chỉnh nha</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/su-that-tac-dung-khu-khuan-cua-tia-cuc-tim-tia-uv">Sự thật tác dụng khử khuẩn của tia cực tím(tia...</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
					<li>
						<article class="blog_entry-2 clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
							<div class="entry-content-2">
								<header class="blog_entry-header-2 clearfix">
									<div class="blog_entry-header-inner-2">
										<h3 class="blog_entry-title-2"> <a rel="bookmark" href="https://www.vatlieunhakhoathanglong.com/lam-trang-rang-hieu-qua-nhu-the-nao">Làm trắng răng hiệu quả như thế nào?</a> </h3>
									</div>
									<!--blog_entry-header-inner-->
								</header>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
		<div role="complementary" class="widget_wrapper13" id="secondary">
			<div class="popular-posts widget widget__sidebar" id="recent-posts-4">
				<!-- Banner Ad Block -->
			</div>
			<div id="bw-statistics" class="bw-statistics"></div>
		</div>
	</aside>

