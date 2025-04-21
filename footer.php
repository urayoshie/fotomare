<footer id="footer" class="footer">
  <div class="inner">
    <ul class="footer_nav">
<!--
      <li class="footer_nav_li"><a href="<?php echo home_url('/form?check=tab01'); ?>" <?php $url = $_SERVER['REQUEST_URI']; if( strstr($url,'check=tab01') ): ?>class="current" <?php endif; ?>>お問い合わせ</a></li>
      <li class="footer_nav_li"><a href="<?php echo home_url('/form?check=tab02'); ?>" <?php $url = $_SERVER['REQUEST_URI']; if( strstr($url,'check=tab02') ): ?>class="current" <?php endif; ?>>資料ダウンロード</a></li>
-->
<!--
      <li class="footer_nav_li"><a href="<?php echo home_url('/form?check=tab01'); ?>" <?php $url = $_SERVER['REQUEST_URI']; if( strstr($url,'check=tab01') ): ?>class="current" <?php endif; ?>>お問い合わせ</a></li>
      <li class="footer_nav_li"><a href="<?php echo home_url('/form?check=tab02'); ?>" <?php $url = $_SERVER['REQUEST_URI']; if( strstr($url,'check=tab02') ): ?>class="current" <?php endif; ?>>資料ダウンロード</a></li>
      <li class="footer_nav_li"><a href="<?php echo home_url('/privacy/'); ?>" <?php if( is_page("privacy") ): ?>class="current" <?php endif; ?>>プライバシーポリシー</a></li>
      <li class="footer_nav_li"><a href="https://www.nagasaki-fotomare.com/about" target="_blank" rel="noopener noreferrer">運営会社</a></li>
-->
      <li class="footer_nav_li"><a class="footer_nav_li01" href="<?php echo home_url('/form?check=tab01'); ?>">お問い合わせ</a></li>
      <li class="footer_nav_li"><a class="footer_nav_li02" href="<?php echo home_url('/form?check=tab02'); ?>">資料ダウンロード</a></li>
      <li class="footer_nav_li"><a href="<?php echo home_url('/privacy/'); ?>" <?php if( is_page("privacy") ): ?>class="current" <?php endif; ?>>プライバシーポリシー</a></li>
      <li class="footer_nav_li"><a href="https://www.nagasaki-fotomare.com/about" target="_blank" rel="noopener noreferrer">運営会社</a></li>
      
    </ul>
    <a class="footer_logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="保険加入見込客の取次サービス　フォトマーケ"></a>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/8-1-6/js/8-1-6.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<?php  wp_footer(); ?>
</body>
</html>
