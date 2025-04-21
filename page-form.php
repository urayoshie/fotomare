<?php get_header(); ?>
<main class="p-contact bg-l-blue">
  <div class="inner"> 
    
    <!-- タブ　-->
    <ul class="tab-list">
      <li id="tab01" class="tab-list-item active">お問い合わせ</li>
      <li id="tab02" class="tab-list-item"><span>資料</span>ダウンロード</li>
    </ul>
    
    <!-- タブコンテンツ 　-->
    <div class="tab-contents">
      <div id="tab-contens01" class="tab-contents-item">
        <p class="form_description">お問い合わせは<br class="pc-none">
          下記フォームからお送りください。</p>
        <div class="tab01_content_wrapper"> <?php echo do_shortcode( '[contact-form-7 id="75b45a9" title="お問い合わせ"]' ); ?> </div>
      </div>
      <div id="tab-contens02" class="tab-contents-item tab-contents-item02">
        <p class="form_description">資料ダウンロード請求は<br class="pc-none">
          下記フォームからお送りください。</p>
        <div class="tab02_content_wrapper">
          <div class="tab02_content_left">
            <h2>サービスご紹介資料</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/download_sample.jpg" alt="フォトマーケご紹介資料">
            <p class="tab02_content_description">保険加入見込客の取次サービス「フォトマーケ」に関心をお寄せいただきありがとうございます。<br>
              サービスご紹介資料のダウンロードを希望される方は、フォームに必要事項をご記入の上、送信ボタンを押してください。</p>
            <div class="tab02_content_list">
              <h3>ご紹介資料の内容</h3>
              <ul>
                <li>保険加入プロセス</li>
                <li>フォトマーケだからできること</li>
                <li>集客時の事前アンケート</li>
                <li>会場</li>
                <li>料金体系</li>
                <li>これまでの実績</li>
              </ul>
            </div>
          </div>
          <div class="tab02_content_right"> <?php echo do_shortcode( '[contact-form-7 id="39a99b2" title="ダウンロード"]' ); ?> </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<?php get_footer(); ?>
