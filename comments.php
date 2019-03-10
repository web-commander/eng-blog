<!-- パスワード付きページの場合は表示しない。 -->
<?php
  if (post_password_required()) {
     return;
   }
?>
<!-- comments start -->
<div class="comments-area">
   <?php if (have_comments()) :?>
   <h3 class="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h3>
   <!-- comments-list start -->
   <div class="comments-list">
     <?php wp_list_comments(array(
       'avatar_size'=>48,
       'style'=>'div',
       'type'=>'comment'
      )); ?>
   </div>
   <?php if (get_comment_pages_count() > 1) : ?>
   <div class="comments-nav">
     <?php previous_comments_link('◀︎ 前のコメント'); ?>
     <?php next_comments_link('次のコメント ▶︎'); ?>
   </div>
   <?php endif; ?>
  <?php endif; ?>
  <!-- comments-list end -->
  <!-- comments-form start -->
  <?php
     $comments_args = array(
       'fields' => array(
       'author' => '<p class="comments-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="comments-required">*</span>' : '' ) . '</label><br>' .'<input id="author" name="author" class="form-control" placeholder="エンジニア 太郎" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"></p>',
       'email' => '<p class="comments-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="comments-required">*</span>' : '' ) . '</label><br> ' .'<input id="email" name="email" class="form-control" placeholder="sample@sample.com" type="email"' . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '"></p>'
     ),
     'title_reply' => 'コメントはこちらから',
     'comment_notes_before' => '<p class="comments-notes">メールアドレスは公開されませんのでご安心ください。また、<span class="comments-required">*</span> が付いている欄は必須項目となります。</p>',
     'comment_notes_after' => '<p class="comments-form-allowed-tags">内容に問題なければ、下記の「コメントを送信する」ボタンを押してください。</p>',
     'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br><textarea id="comment" name="comment" class="form-control" placeholder="とてもよいブログですねえ" rows="8" required="required"></textarea></p>',
     'label_submit' => 'コメントを送信する',
     'class_submit' => 'submit btn btn-primary',
     'submit_button' => '<button id="%2$s" class="%3$s">%4$s</button>',
   );
   comment_form($comments_args);
  ?>
  <!-- comments-form end -->
</div>
<!-- comments end -->
