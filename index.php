<?php get_header(); ?>

<section id="top">
  <div class="topContainer">
    <h2>
      信頼の個人Web制作工房<br>
      集客に役立つホームページをあなたに
    </h2>
    <p>「聞き上手・説明上手・誠実」を心がけるWeb制作者です。<br>
      あなたの大切なストーリー、お客様に確実にお届けします。
    </p>
    <span>scroll</span>
  </div>
</section>

<section id="works">
  <div class="wrapper">
    <div class="container">
      <h2>Works
        <p>※画像をクリックすると、それぞれのサイトに移動します。</p>
      </h2>
      <div class="works-contents">
        <h3>Ramen Nobu様ホームページ</h3>
        <div class="works-item">
          <a class="works-link" href="https://ramen-nobu-cairns.com"> <img class="works-img works-img-right" src="<?php echo get_template_directory_uri(); ?>/images/index/work-photo01.jpg" alt="Airbnb模写のスクリーンショット"> </a>
          <div class="works-text works-text-left">
            <h4>実装機能</h4>
            <p>レスポンシブ対応<br>お問い合わせフォーム<br>各種アニメーション</p>
            <h4>使用言語</h4>
            <p>HTML, CSS, Javascript, PHP</p>
          </div>
        </div>
        <h3>ポートフォリオ</h3>
        <div class="works-item flex-reverse">
          <a class="works-link" href="#"> <img class="works-img works-img-left" src="<?php echo get_template_directory_uri(); ?>/images/index/portfolio.png" alt="このポートフォリオサイトのスクリーンショット"> </a>
          <div class="works-text text-reverse">
            <h4>実装機能</h4>
            <p>レスポンシブ対応<br>お問い合わせフォーム<br>各種アニメーション</p>
            <h4>使用言語</h4>
            <p>HTML, CSS, JavaScript, PHP</p>
          </div>
        </div>
        <h3>架空ECサイト</h3>
        <div class="works-item">
          <a class="works-link" href="http://<?php echo $host ?>wp-portfolio-ecommerce"> <img class="works-img works-img-right" src="<?php echo get_template_directory_uri(); ?>/images/index/portfolio2.jpg" alt="架空ECサイトのスクリーンショット"> </a>
          <div class="works-text works-text-right">
            <h4>使用言語</h4>
            <p>WordPress<br>Woo Commerce (プラグイン)<br>Contact Form 7 (プラグイン)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="service">
  <div class="wrapper">
    <div class="container">
      <h2>Service</h2>
      <div class="service-contents">
        <div class="service-item service-item-01 scroll">
          <div class="service-text service-text-01 scroll">
            <h3>Webサイト制作</h3>
            <p>
              高品質なホームページを作成いたします。<br>
              制作後の編集の必要がない方や、とりあえずホームページを作りたい方へ。
            </p>
          </div>
        </div>
        <div class="service-item service-item-02 scroll">
          <div class="service-text service-text-02 scroll">
            <h3>WordPress<br>オリジナルテーマ構築</h3>
            <p>
              カスタマイズ自由自在！<br>
              ブログで情報発信をしたい方や、ご自身でホームページを編集したい方へ。</p>
          </div>
        </div>
        <div class="service-item service-item-03 scroll">
          <div class="service-text service-text-03 scroll">
            <h3>ランディングページ<br>（LP）作成</h3>
            <p>
              成約率の高いランディングページを作成いたします！<br>
              ご自身の商品やサービスを、確実にお客様にお届けしたい方へ。
            </p>
          </div>
        </div>
        <div class="service-item service-item-04 scroll">
          <div class="service-text service-text-04 scroll">
            <h3>コーディング代行</h3>
            <p>
              あなたのデザインを忠実に再現いたします。<br>
              提携していただけるパートナー様も募集しております。
            </p>
          </div>
        </div>
        <div class="service-item service-item-05 scroll">
          <div class="service-text service-text-05 scroll">
            <h3>PC、SP画面対応<br>（レスポンシブ対応）</h3>
            <p>
              ホームページはスマホから見る時代！<br>
              PCサイトとスマホサイトの表示を、美しく切り替えます。
            </p>
          </div>
        </div>
        <div class="service-item service-item-06 scroll">
          <div class="service-text service-text-06 scroll">
            <h3>検索エンジン対策<br>（内部SEO対策）</h3>
            <p>
              あなたのホームページを、検索結果の上位へ！<br>
              お客様の目に留まり、クリックしていただけるよう対策を講じます。
            </p>
          </div>
        </div>
      </div>
      <a href="#contact">お問い合わせ、ご依頼はこちら</a>
    </div>
  </div>
</section>


<section id="skills">
  <div class="wrapper">
    <div class="container">
      <h2>Skills</h2>
      <div class="skills-contents">
        <div class="skills-item">
          <h3 class="skill-title">HTML5</h3>
          <p class="skill-desc">メンテナンス性・可読性の高い、効率のいいHTML設計をいたします。</p>
        </div>
        <div class="skills-item">
          <h3 class="skill-title">CSS3</h3>
          <p class="skill-desc">主にDart Sassを使用。変数や配列、mixin等を使い、効率よくコーディングいたします。</p>
        </div>
        <div class="skills-item">
          <h3 class="skill-title">JavaScript</h3>
          <p class="skill-desc">要素に動きを付けるのはもちろん、DOM操作やAPIの使用も可能です。</p>
        </div>
        <div class="skills-item">
          <h3 class="skill-title">PHP</h3>
          <p class="skill-desc">HTMLのパーツ化、データや条件に応じた表示の操作、 HTTP通信、などが可能です。</p>
        </div>
        <div class="skills-item">
          <h3 class="skill-title">WordPress</h3>
          <p class="skill-desc">オリジナルテーマの作成が可能です。セキュリティー対策もお任せください。</p>
        </div>
        <div class="skills-item">
          <h3 class="skill-title">SEO対策</h3>
          <p class="skill-desc">検索結果の上位に表示させるよう対策致します。</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="about">
  <div class="wrapper">
    <div class="container">
      <h2>About</h2>
      <div class="introduce">
        <h3>自己紹介</h3>
        <p>こんにちは。フリーランスとしてWeb制作をしてます、上田隼也（ウエダジュンヤ）と申します。「聞き上手・説明上手・誠実」を心がけ、あなたのビジネスのお役に立てるWebサイトの構築をいたします。<br><br>
          性格は特に真面目で、人の手助けをしてあげたいという気持ちが強い傾向があります。そのおかげもあって、一度ご依頼いただいた方から再度ご依頼を受けたり、サイト以外の事でもご相談を頂いたりすることが多いのが自慢です。<br><br>

          資格：基本情報技術者、調理師免許、自家用操縦士（滑空機上級）、操縦教育証明、TOEIC 810点、IELTS 6.0</p>
      </div>
      <div class="history">
        <h3>経歴</h3>
        <div id="about-contents" class="about-contents">
          <div class="about-item about-left scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/waseda.jpg" alt="">
            <div class="about-item-text">
              <h4>2007年 早稲田大学第一文学卒業</h4>
              <p>日本史学を専攻。部活では体育会航空部に所属し、自家用操縦士（上級滑空機）と教官の資格を獲得。「相談しやすい先輩」との評価を得る。</p>
            </div>
          </div>
          <div class="about-item about-right scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/fsol.jpg">
            <div class="about-item-text">
              <h4>2007年～ 大手SIer企業に就職</h4>
              <p>プログラムに関することを叩き込まれる。主に上流工程と、お客様とのコミュニケーション方法を学ぶ。</p>
            </div>
          </div>
          <div class="about-item about-left scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/aus1.JPG" alt="">
            <div class="about-item-text">
              <h4>2009年～ ワーキングホリデーで渡豪</h4>
              <p>2年間の海外経験を通じ、多文化への理解を習得。多面的なものの見方や、相手の立場に立って物を考える癖を身に着ける。</p>
            </div>
          </div>
          <div class="about-item about-right scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/chef.JPG" alt="">
            <div class="about-item-text">
              <h4>2011年～ 日本橋で板前修業</h4>
              <p>移住を目指し、ビザ取得に有利な料理人の道に入る。昔ながらの職人の世界に揉まれ、根気と根性を叩き込まれる。</p>
            </div>
          </div>
          <div class="about-item about-left scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/aus2.jpg" alt="">
            <div class="about-item-text">
              <h4>2014年 再度渡豪し、副料理長に</h4>
              <p>責任感を買われ、副料理長に抜擢される。どのように説明すれば分かりやすいかを常に意識しながら、新人や後輩の教育も行う。</p>
            </div>
          </div>
          <div class="about-item about-right scroll">
            <img class="about-item-img" src="<?php echo get_template_directory_uri(); ?>/images/index/cording.JPG" alt="">
            <div class="about-item-text">
              <h4>2020年～ フリーランスとして活動</h4>
              <p>持ち前の自走力を発揮し、全て単独でWeb制作を学ぶ。一度ご依頼いただいたお客様には信用を頂き、プロジェクト後も継続してお仕事を頂くことが多い。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="contact">
  <div class="wrapper">
    <div class="container">
      <h2>Contact</h2>
      <?php echo do_shortcode('[contact-form-7 id="15" title="コンタクトフォーム 1"]'); ?>
    </div>
  </div>
</section>


<footer class="scroll">
  <div id="footer-container">
    <h2>Thank you for visiting</h2>
    <p id="thanks">最後までご覧いただき、ありがとうございました<br>
      お問い合わせ、ご依頼、お気づきの点等ございましたら<br>
      上記お問い合わせフォームにてご連絡お願いいたします</p>
    <div id="footer-bottom">
      <div id="footer-left">
        <p id="follow-me">よろしければフォローもお願いいたします</p>
        <a href="https://twitter.com/junyaUeda"><i class="fab fa-twitter-square fa-3x"></i></a>
      </div>
      <div id="footer-right">
        <p>Junya Ueda 2020 -</p>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_footer(); ?>

</body>

</html>