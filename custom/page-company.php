<?php get_header(); ?>
      <section class="page-top" id="company-top">
        <div class="section-title">
          Company
          <div class="description">会社概要</div>
        </div>
      </section>
      <section class="company-main container">
        <table>
          <tbody>
            <tr>
              <td>会社名</td>
              <td>株式会社FanMate</td>
            </tr>
            <tr>
              <td>事務所名</td>
              <td>ライバー事務所「en-Taku」</td>
            </tr>
            <tr>
              <td>住所</td>
              <td>
                〒150-0012 東京都渋谷区広尾１丁目１０−４ 越山ＬＫビル 4f<br />
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/company-map.png" alt="" />
              </td>
            </tr>
          </tbody>
        </table>
      </section>
      <section class="contact container-fluid">
        <div class="contact-item container-fluid" id="contact">
          <div class="item-title container">
            Contact
            <div class="description">お問い合わせ</div>
          </div>
          <div class="more-btn">
            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/contact">more</a>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
