<?php get_header(); ?>

<section class="page-top" id="contact-top">
        <div class="section-title">
          Contact
          <div class="description">お問い合わせ</div>
        </div>
      </section>
      <section class="contact-step sm-container container">
        <div class="content">
          <p>
            en-Takuへのお問い合わせは、下記のフォームにご入力ください。<br />
            お気軽にお問い合せください。
          </p>
          <p><span class="red">※</span>は必須項目です。</p>
        </div>
        <div class="step-diagram">
          <p class="fir active">入力</p>
          <span class="arrow"></span>
          <p class="sec">確認</p>
          <span class="arrow"></span>
          <p class="thr">送信</p>
        </div>
      </section>
      <section class="contact-form sm-container container">
        <form action="">
          <label for="format">お問い合わせ項目</label>
          <div class="boxs">
            <div class="box">
              <input
                type="checkbox"
                name="format"
                id="format"
                value="サービスについて"
              />サービスについて
            </div>
            <div class="box">
              <input
                type="checkbox"
                name="format"
                id="format"
                value="お見積もり"
              />お見積もり
            </div>
            <div class="box">
              <input
                type="checkbox"
                name="format"
                id="format"
                value="採用について"
              />採用について
            </div>
          </div>
          <label for="company_name">会社名<span class="red">※</span></label>
          <input
            type="text"
            name="company_name"
            id="company_name"
            placeholder="個人事業主の方は「個人」と入力してください。"
          />
          <label for="name">お名前<span class="red">※</span></label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="お名前を入力してください。"
          />
          <label for="huri_name">ふりがな<span class="red">※</span></label>
          <input
            type="text"
            name="huri_name"
            id="huri_name"
            placeholder="ふりがなを入力してください。"
          />
          <label for="tiktok_url">tiktokアカウント 及び URL</label>
          <input
            type="text"
            name="tiktok_url"
            id="tiktok_url"
            placeholder="URLで入力してください。"
          />
          <label for="mail">メールアドレス<span class="red">※</span></label>
          <input
            type="email"
            name="mail"
            id="mail"
            placeholder="メールアドレスを入力してください。"
          />
          <label for="tel">電話番号</label>
          <input
            type="tel"
            name="tel"
            id="tel"
            placeholder="電話番号で入力してください。"
          />
          <label for="contact-text">お問い合わせ内容</label>
          <textarea
            name="contact-text"
            id="contact-text"
            cols="30"
            rows="10"
          ></textarea>

          <div class="more-btn">
            <a>
              <input type="submit" id="submit" value="確認画面" />
            </a>
          </div>
        </form>
      </section>
    </main>
    <?php get_footer(); ?>
