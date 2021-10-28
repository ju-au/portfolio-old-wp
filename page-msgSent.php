<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  $clean = array();
  $page_flag = 1; //確認画面

  if (!empty($_POST['submit'])) {
    $page_flag = 2; //送信完了画面
  }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if ($page_flag == 1) {
      echo "Confirm";
    } elseif ($page_flag == 2) {
      echo "Message Sent";
    }
    ?>

  </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
  <?php get_header();  ?>

  <!-- 確認画面 -->
  <?php if ($page_flag === 1) : ?>
    <?php
    if (!empty($_POST)) {
      foreach ($_POST as $key => $value) {
        $clean[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
      }
    }
    ?>


    <section id="confirm">
      <div class="wrapper">
        <div class="container">
          <h2>内容の確認</h2>
          <form action="#" id="confirm-form" method="post">
            <div id="confirm-contents">
              <h3>以下の内容でよろしいですか？</h3>
              <p name='name'>お名前:</p><span class="values"><?php echo $clean['queryName'] ?></span><br>
              <p name='name'>Email:</p><span class="values"><?php echo $clean['queryEmail'] ?></span><br>
              <p name='name'>お問い合わせ内容:</p><span class="values"><?php echo $clean['queryMessage'] ?></span><br>
              <div class="buttons">
                <input class="each-btn" type="button" name="back" value="戻る" onclick="history.back()">
                <input class="each-btn" type="submit" name="submit" value="送信">
              </div>
              <input type="hidden" name="name" value="<?php echo $clean['queryName'] ?>">
              <input type="hidden" name="email" value="<?php echo $clean['queryEmail'] ?>">
              <input type="hidden" name="message" value="<?php echo $clean['queryMessage'] ?>">
            </div>
          </form>
        </div>
      </div>
    </section>

  <?php elseif ($page_flag === 2) : ?>

    <?php

    if (!empty($_POST)) {
      foreach ($_POST as $key => $value) {
        $clean[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
      }
    }

    $to = "ueda.the.tallest.pilot@gmail.com";
    // $to = "info@junyaportfolio.com";
    $subject = " {$clean['name']}様よりお問い合わせがあります";
    $message = $clean['message'];
    $header = "from: {$clean['email']}";
    // $header = "from:info@junyaportfolio.com";
    $header .= "Reply-To: {$clean['email']}\n";
    $header .= "Return-Path: {$clean['email']}\n";
    $header .= "X-Mailer: PHP/" . phpversion();

    mb_language("Ja");
    mb_internal_encoding("UTF-8");
    ?>
    <section id="sent">
      <div class="wrapper">
        <div class="container">
          <?php if (mb_send_mail($to, $subject, $message, $header)) : ?>
            <h2>送信完了</h2>
            <div id="sent-form">
              <div id="sent-contents">
                <h3>お問い合わせありがとうございました。</h3>
              <?php else : ?>
                <h2>送信は失敗しました</h2>
                <div id="sent-form">
                  <div id="sent-contents">
                    <h3>お手数ですが、以下のアドレスまでご連絡お願いいたします</h3>
                    <p><?php echo $to ?></p>
                  <?php endif; ?>
                  <input type="button" value="Topに戻る" onclick="location.href='../portfolio-home'">
                  </div>
                </div>
              </div>
            </div>
    </section>
  <?php endif; ?>
  <script src="../assets/js/common.js"></script>

</body>

</html>