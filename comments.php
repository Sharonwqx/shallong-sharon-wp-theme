<?php $options = get_option('S_options');?>

<?php

if ( post_password_required() )	: ?>

<p><?php _e('請輸入密碼才可觀看留言'); ?></p>

<?php return; endif; ?>

<div id="comments">

<h2><?php comments_number(__('0	留言'),	__('1 個留言'),	__('% 個留言')); ?><?php if	( comments_open() )	: ?><small><a href="#postcomment" title="<?php _e("發表留言"); ?>">▼</a></small><?php endif; ?></h2>

</div>

<?php if ( $comments ) : ?>

<div class="comments-nav">

<?php paginate_comments_links('prev_text=上一頁&next_text=下一頁');?>

</div>

<div class="commentmetadata">

<ul	class="commentlist">

<?php wp_list_comments(	array ('avatar_size'=>57,'type'=>'comment'));?>

</ul>

</div>

<div class="comments-nav">

<?php paginate_comments_links('prev_text=上一頁&next_text=下一頁');?>

</div>

<?php else : //	If there are no	comments yet ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div class="commentline"></div>

<h2	id="post_comment"><?php	comment_form_title(	'發表留言 &raquo;',	'Leave a Reply to %s' ); ?></h2>

<div id="respond">

<div id="cancel_comment_reply"><?php cancel_comment_reply_link() ?></div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p><?php printf(__('你必須 <a href="%s">登入</a> 才能留言'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>

<?php else : ?>

<form action="<?php	echo get_option('siteurl');	?>/wp-comments-post.php" method="post" id="commentform"	name="commentform">

<?php if ( $user_ID	) :	?>

<p><?php printf(__('登入為 %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a	href="<?php	echo wp_logout_url(get_permalink()); ?>" title="<?php _e('登出此帳戶') ?>"><?php _e('登出 &raquo;'); ?></a></p>

<?php else : ?>

<label for="author"></label>

<span style="color:	#22DDBB;">姓名</span>:<input type="text" name="author" id="author" value="<?php	echo $comment_author; ?>" size="30"	tabindex="1" /><small><span	style="color: #ff0000;">(必填*)</span></small><br />

<label for="email"></label>

<span style="color:	#22DDBB;">信箱</span>:<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30"	tabindex="2" /><small><span	style="color: #ff0000;">(必填*)</span></small><br />

<label for="url"></label>

<span style="color:	#22DDBB;">網站</span>:<input type="text" name="url"	id="url" value="<?php echo $comment_author_url;	?>"	size="30" tabindex="3" /><small><span style="color:	#ff0000;">(必填*)</span></small><br	/>

<?php endif; ?>

<label for="comment"></label>

<textarea name="comment" id="comment" style="width:	90%; height: 150px;" tabindex="4"></textarea><br />

<label for="submitct"></label>

<input type="submit" id="submitct" class="button" tabindex="5" value="<?php	echo attribute_escape(__('發表留言 [Ctrl+Enter]'));	?>"	/>

<?php comment_id_fields(); ?>

<?php do_action('comment_form',	$post->ID);	?>

</form>

<?php endif; //	If registration	required and not logged	in ?>

<script	type="text/javascript">

<!--//--><![CDATA[//><!--

var	commenttextarea	= document.getElementById('comment');

commenttextarea.onkeydown =	function quickSubmit(e)	{

if (!e)	var	e =	window.event;

if (e.ctrlKey && e.keyCode == 13){

document.getElementById('submitct').click();

}

};

//--><!]]>

</script>

</div>

<?php else : //	Comments are closed	?>

<p><?php _e('很抱歉，此文章關閉留言'); ?></p>

<?php endif; ?>