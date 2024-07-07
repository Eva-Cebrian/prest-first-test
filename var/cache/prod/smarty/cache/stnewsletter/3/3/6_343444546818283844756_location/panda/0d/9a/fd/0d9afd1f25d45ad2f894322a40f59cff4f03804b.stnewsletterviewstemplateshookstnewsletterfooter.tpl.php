<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stnewsletterviewstemplateshookstnewsletterfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b05f042_51817189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3171cf815947ef8833155ae4d6c64c1288ea6cca' => 
    array (
      0 => 'module:stnewsletterviewstemplateshookstnewsletterfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_668ab42b05f042_51817189 (Smarty_Internal_Template $_smarty_tpl) {
?>	<!-- MODULE st stnewsletter -->
    		<section id="st_news_letter_1" class="st_news_letter_1  footer_block block  col-lg-3 ">
		        		<div class="title_block">
                <div class="title_block_inner">Hoja informativa</div>
                <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div></div>
						<div class="footer_block_content   text-1 text-md-2 ">
				<div class="st_news_letter_box">
                <div class="alert alert-danger hidden"></div>
                <div class="alert alert-success hidden"></div>
                <div class="news_letter_0 ">
            	<div class="st_news_letter_content style_content flex_child_md "><p class="m-b-1">Sign up today for free and be the first to get notified on our new updates, discounts and special Offers.</p></div>            	            	<form action="http://localhost:8000/index.php?fc=module&amp;module=stnewsletter&amp;controller=ajax" method="post" class="st_news_letter_form flex_child">
                                        
					<div class="st_news_letter_form_inner">
						<div class="input-group round_item js-parent-focus input-group-with-border" >
							<input class="form-control st_news_letter_input js-child-focus" type="text" name="email" value="" placeholder="Tu correo electrónico" />
			                <span class="input-group-btn">
			                	<button type="submit" name="submitStNewsletter" class="btn btn-less-padding st_news_letter_submit link_color">
				                    <i class="fto-mail-alt"></i>
				                </button>
			                </span>
						</div>
					</div>
					<input type="hidden" name="action" value="0" />
                    <input type="hidden" name="submitNewsletter" value="1" />
				</form>
				                </div>
				</div>
			</div>
		</section>
    	<!-- /MODULE st stnewsletter -->
<?php }
}
