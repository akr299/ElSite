<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>株式会社エル</title>
    <link rel="stylesheet" href="./css/setup.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/top.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/favicon3.ico?v=2" type="image/x-icon">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> -->


</head>


<body>
    <!-- ヘッダー -->
    <header>
        <div class="header" id="home">
            <div class="logo">
                <p class="logo_text">el.</p>
            </div>
            <button type="button" class="menu-btn">
                <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                <label class="h-menu_icon" for="h-menu_checkbox"><span class="hamburger-icon"></span></label>
            </button>
            <div class="menu">
                <ul class="navi">
                    <li class="item"> <a href="#home">ホーム</a></li>
                    <li class="item"> <a href="#news">新着情報</a></li>
                    <li class="item"> <a href="#recruit">採用情報</a></li>
                    <li class="item"> <a href="#corp">会社概要</a></li>
                    <li class="item"> <a href="#form">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- /ヘッダー -->


    <!-- メイン -->
    <main>
        <!-- トップ -->
        <div class="top_area">
            <img class="top_img" src=".\img\01_topimage.png">
            <p class="top_text"><span class="printf">printf</span><span class="kakko">(</span><span
                    class="string">"Hello,World!!"</span><span class="kakko">)</span></p>
        </div>
        <!-- /トップ -->

        <!-- ロゴバー -->
        <div class="wrap_logo_bar">
            <!-- <div class="logo_bar">
                <ul class="slideshow_logo">
                    <li class="content">tomato</li>
                    <li class="content">orange</li>
                    <li class="content">blue</li>
                    <li class="content">green</li>
                </ul>
            </div>

            <div class="logo_bar">
                <ul class="slideshow_logo">
                    <li class="content">tomato</li>
                    <li class="content">orange</li>
                    <li class="content">blue</li>
                    <li class="content">green</li>
                </ul>
            </div>

            <div class="logo_bar">
                <ul class="slideshow_logo">
                    <li class="content">tomato</li>
                    <li class="content">orange</li>
                    <li class="content">blue</li>
                    <li class="content">green</li>
                </ul>
            </div> -->
        </div>
        <!-- ロゴバー -->

        <!-- 新着情報 -->
        <div class="news_area" id="news">
            <img class="news_img absolute" src=".\img\02_sintyakuimage.png">
            <div class="news-contents">

                <div class="flex_box">
                    <div class="swiper-button-prev"></div>
                    <div>
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="testtest">
                                            <div class="news_panel">
                                                <p>新着情報</p>
                                            </div>
                                            <h1>10月キャンプへ行こう！！</h1>
                                            <p class="slide-p">年二回開催されるキャンプ会 </p>
                                            <p class="slide-p">参加自由です。 </p>
                                            <!-- <div class="caption">caption 01</div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="testtest">
                                            <div class="news_panel">
                                                <p>新着情報</p>
                                            </div>
                                            <h1>エルで一緒に働きませんか？</h1>
                                            <p class="slide-p">弊社では「楽しみながら手に職を付けたい方」を募集しております。 </p>
                                            <p class="slide-p">┗プログラムの経験はもちろん、パソコンの打ち方を知らない、 </p>
                                            <p class="slide-p">電源がどこにあるかもわからないという方、歓迎します！</p>
                                            <p class="slide-p">◎IT企業の経験はもちろん、社会人経験、ブランクも問いません。</p>
                                            <!-- <div class="caption">caption 02</div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="testtest">
                                            <div class="news_panel">
                                                <p>新着情報</p>
                                            </div>
                                            <h1>令和4年秋基本情報資格取得に向けて！</h1>
                                            <p class="slide-p">年二回開催される基本情報技術者試験。</p>
                                            <p class="slide-p">エルの社員たちも資格取得に向けて動き出しました。</p>
                                            <p class="slide-p">隔週の土曜日はみんなで会社に集まって、資格を持っている先輩たちに教えてもらいながら勉強しています。</p>
                                            <p class="slide-p">目指せ国家資格！勉強頑張るぞ！！</p>
                                            <!-- <div class="caption">caption 03</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of .swiper-wrapper -->
                            <div class="swiper-pagination swiper-pagination-white"></div>

                        </div>
                        <!-- end of .swiper -->
                    </div>

                    <div class="swiper-button-next"></div>
                </div>


            </div>
            <img class="news_img" src=".\img\02_sintyakuimage.png">
            <!-- 高さ調整用 -->
        </div>

        <!-- /新着情報 -->

        <!-- 採用情報 -->
        <div class="recruit_area margin" id="recruit">
            <div class="contents">
                <p class="container">採用情報</p>
                <div class="p_block">
                    <p class="default-fonts">導入研修制度あり、未経験の方でもプログラミングを習得することが出来ます。</p>
                    <p class="default-fonts">まずは「ITってなに？」「システム開発ってどんなことをするの？」ということからスタート。</p>
                    <p class="default-fonts">その後プログラミングの基礎を学習し、自身でスケジュールを立てながらWebシステムを作成していきます。</p>
                    <p class="default-fonts">入社1～2ヶ月は研修期間としてカリキュラムを用意しています。</p>
                </div>
                <div class="p_block">
                    <p class="title-fonts">カリキュラム内容</p>
                    <ul>
                        <li>C#</li>
                        <li>Java</li>
                        <li>javascript</li>
                        <li>SQL</li>
                        <li>Github</li>
                    </ul>
                    <br>
                    <p class="default-fonts">弊社が意識しているのは、目的をもって手を動かすことを意識しています。</p>
                    <p class="default-fonts">また、研修での理解度や本人の希望に合わせながら適した研修プログラムを変更していきます。</p>
                </div>
                <div class="p_block">
                    <p class="title-fonts">研修後の具体的な業務</p>
                    <ul>
                        <li>コンサルティング</li>
                        <li>サンプルテキスト</li>

                        <li>要件定義</li>
                        <li>設計</li>
                        <li>コーディング</li>
                        <li>プロジェクトリーダー</li>
                        <li>テスト</li>
                    </ul>
                    <br>
                    <p class="default-fonts">設計書を書いたり、コンサルティングから参加している場合は大枠の仕様から決めたり、プログラミングをしたり。</p>
                    <p class="default-fonts">お任せする業務については、その人のスキルや適性に応じて変わります。</p>
                    <p class="default-fonts">例えば、「まだスキルに自信がない・・・」という方は、難易度の低いテスト工程から始めます。</p>
                    <p class="default-fonts">
                        ※現在、在庫管理システムや生産管理システムだけでなく、「機械にセンサーを設置してデータを採取するシステム」などの開発実績もあります。 生産現場の効率化を実現しました。
                    </p>
                </div>
            </div>
            <div class="recruit_info">
                <div class="column">
                    <div class="treatment">
                        <div class="title">
                            <p>募集資格</p>
                        </div>
                        <div class="t_text">
                            <p class="bold">学歴不問&lt;未経験、第二新卒歓迎&gt;</p>
                            <br>
                            <p>楽しみながら手に職をつけていきたい方。</p>
                            <p>プログラミングの経験はもちろん、パソコンの打ち方を知らない、電源がどこにあるのかも分からないという方も歓迎しております。</p>
                            <br>
                            <p>◎IT業界の経験はもちろん、社会人経験、ブランクも問いません。</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>基本給</p>
                        </div>
                        <div class="t_text">
                            <p class="bold">155,700円（2016年実績）</p>
                            <br>
                            <p class="para">&lt;モデル月収例&gt;</p>
                            <p class="bold">初任給　181,200円</p>
                            <p class="small">（基本給155,700円＋年齢給4,000円＋在籍給1,500円＋職能給20,000円）</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>勤務地</p>
                        </div>
                        <div class="t_text">
                            <p class="para">&lt;各プロジェクト先&gt;</p>
                            <p>愛知県（名古屋・三河・尾張）</p>
                            <p class="para">&lt;本社&gt;</p>
                            <p>愛知県名古屋市中区大須3-31-22　シーフォレスト２　２Ｆ</p>
                            <br>
                            <p class="small">※地図情報は別ページの「会社情報」にて記載</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>福利厚生・待遇</p>
                        </div>
                        <div class="t_text">
                            <li class="list">昇給年１回</li>
                            <li class="list">社会保険完備（健康、雇用、労災、厚生年金）</li>
                            <li class="list">交通費全額支給</li>
                            <li class="list">時間外手当１００％支給</li>
                            <li class="list">住宅手当（月２万円　※会社から２ｋｍ圏内の在住者）</li>
                            <li class="list">各種研修制度</li>
                            <li class="list">書籍購入費全額負担</li>
                            <p class="small">※従業員の学習を促進するため、書籍購入を会社の補助で購入する制度</p>
                            <li class="list">社内イベント(旅行、BBQ、忘年会、勉強会、etc…)</li>
                            <p class="small">※ 月１回社内で開催されるピザパーティがあります。ソフトドリンクだけでなくお酒も飲みつつ親睦を深めています。</p>

                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="treatment">
                        <div class="title">
                            <p>職務の目的</p>
                        </div>
                        <div class="t_text">
                            <p class="bold">IT技術を用いて社会に必要とされる企業となる。</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>資格</p>
                        </div>
                        <div class="t_text">
                            <p>基本情報技術者試験</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>学歴</p>
                        </div>
                        <div class="t_text">
                            <p>高校卒・大学新卒・既卒者　※30歳ぐらいまで</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>昇給</p>
                        </div>
                        <div class="t_text">
                            <p>年1回</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>賞与</p>
                        </div>
                        <div class="t_text">
                            <p>年1回　約0.5カ月（9月）</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>休日休暇</p>
                        </div>
                        <div class="t_text">
                            <p>週休2日​制</p>
                            <p class="small">※プロジェクト先によっては休日出勤有り</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>勤務時間</p>
                        </div>
                        <div class="t_text">
                            <p>9:00～18:00　※実労働８時間</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>教育制度</p>
                        </div>
                        <div class="t_text">
                            <p>１~２ヶ月の研修以外、土曜日を使って任意参加の勉強会を開催しております。</p>
                            <p>『ＡＢＣ』という名前の勉強会は、「好きなこと」「楽しいこと」「スキルアップできること」を参加者が決めて学べる勉強会です。</p>
                            <p>月に１度、５時間ほどお菓子を食べながらやっています。</p>
                            <p>前回は全６回でTwitterのような簡易SNSを作れるようになりました。</p>
                            <p>今はラズベリーパイを使ったシステムづくりをしています。</p>
                            <p>それ以外にも、年１回以上、キャリアアップ勉強会を実施しています。</p>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="title">
                            <p>働く仲間</p>
                        </div>
                        <div class="t_text">
                            <p>株式会社エルには前職で、IT系の仕事をしていた社員だけではなく、
                                スポーツトレーナー、アパレルスタッフ、飲食店店員、ゲームセンターのスタッフなど様々な職種の社員が所属しています。最近では、神がかり的なストライクショットを決めて見事プロゲーマーになった社員もいます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /採用情報 -->

        <!-- 行動指針 -->
        <div class="action_agenda margin">
            <p class="container">行動指針</p>
            <div class="contents">
                <p class="guidelines_title"> 〇「正しさ」と「楽しさ」の両方を追求する</p>
                <p class="guidelines_explanation">
                    人として・社会人として正しい行動をとり、仕事で自分の「楽しい」と思えることに対してがむしゃらに頑張れることは、 会社にとっても働く個人に対しても充実したものになると考えております。
                <p class="guidelines_title"> 〇「意志」を持って行動する</p>
                <p class="guidelines_explanation">
                    自分のやることに対して意思を持ち責任感のある行動をとることを常に意識し努力します。 例え、上司であろうが「こうしたらもっと良くなる」などのことがあれば
                    素直に言えるような環境であることを目指しております。
                </p>
                <p class="guidelines_title"> 〇 相手のことを「キチン」と考え、自分のことも「キチン」と考える</p>
                <p class="guidelines_explanation">
                    相手のことを考え行動するのは良いことです。 しかし、自分のことも知っておくことで相手により満足や信頼関係を築けることに繋がると 信じ自分のこともちゃんと考えて行動をとることが大切だと考えております。
                </p>
            </div>
        </div>
        <!-- /行動指針 -->

        <!-- 採用スケジュール -->
        <div class="flow_area pd">
            <div class="container ">採用スケジュール</div>
            <div class="flow_bar">
                <div class="flow_box">
                    <div class="step_background">
                        <p class="step">step<br>1</p>
                    </div>
                    <div class="svg_background">
                        <img class="svg" src=".\img\05_document.svg" alt="My Happy SVG" />
                        <p class="flow_text" style="white-space:nowrap;">履歴書による書類選考</p>
                    </div>

                </div>
                <div class="triangle"></div>
                <div class="flow_box">
                    <div class="step_background">
                        <p class="step">step<br>2</p>
                    </div>
                    <div class="svg_background">
                        <img class="svg" src=".\img\06_company.svg" alt="My Happy SVG" />
                        <p class="flow_text">会社説明会</p>
                    </div>
                </div>
                <div class="triangle"></div>
                <div class="flow_box">
                    <div class="step_background">
                        <p class="step">step<br>3</p>
                    </div>
                    <div class="svg_background">
                        <img class="svg" src=".\img\07_meeting.svg" alt="My Happy SVG" />
                        <p class="flow_text">面接１回</p>
                    </div>
                </div>
                <div class="triangle"></div>
                <div class="flow_box">
                    <div class="step_background">
                        <p class="step">step<br>4</p>
                    </div>
                    <div class="svg_background">
                        <img class="svg" src=".\img\08_goal.svg" alt="My Happy SVG" />
                        <p class="flow_text">内定！</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /採用スケジュール -->


        <!-- 会社概要 -->
        <div class="margin " id="corp">
            <p class="container">会社概要</p>


            <div class="corp_info">
                <div class="column ue">
                    <table class="table">
                        <tr>
                            <th class="right">会社名</th>
                            <td>株式会社<br> el Co.,Ltd.</td>
                        </tr>
                        <tr>
                            <th class="right">所在地</th>
                            <td>〒460-0011<br> 愛知県名古屋市中区大須三丁目31-22
                                <br> シーフォレスト2 2F
                            </td>
                        </tr>
                        <tr>
                            <th class="right">設立</th>
                            <td>2016年11月1日</td>
                        </tr>
                        <tr>
                            <th class="right">代表取締役</th>
                            <td>江上 峰嗣</td>
                        </tr>
                        <tr>
                            <th class="right">資本金</th>
                            <td>2,600万円</td>
                        </tr>
                        <tr>
                            <th class="right">事業</th>
                            <td>ITコンサルティング事業<br> ソフトウェア開発事業
                                <br> webサービス事業
                                <br> 技術者派遣事業
                            </td>
                        </tr>
                        <tr>
                            <th class="right">労働者派遣<br>事業許可番号</th>
                            <td>派 23-301868</td>
                        </tr>
                        <tr>
                            <th class="right">連絡先</th>
                            <td>TEL：052-269-9888<br> FAX：052-269-9889
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="column width">
                    <div class="iframe_area">
                        <!-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d815.4848425552003!2d136.905191329222!3d35.15813279876996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370cbaf1149a7%3A0xc8e9b9a1fdbaabcd!2z44CSNDYwLTAwMTEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy65aSn6aCI77yT5LiB55uu77yT77yR4oiS77yS77yT!5e0!3m2!1sja!2sjp!4v1632126307214!5m2!1sja!2sjp"
                        allowfullscreen loading="lazy"></iframe> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d815.4848425552003!2d136.905191329222!3d35.15813279876996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x600370cbaf1149a7%3A0xc8e9b9a1fdbaabcd!2z44CSNDYwLTAwMTEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy65aSn6aCI77yT5LiB55uu77yT77yR4oiS77yS77yT!5e0!3m2!1sja!2sjp!4v1632126307214!5m2!1sja!2sjp"
                            allowfullscreen loading="lazy" class="iframe"></iframe>
                    </div>
                    <div class="insta_area">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-e4d57b01-503a-4234-9082-b1b67f2aaf7f itemA"></div>

                        <blockquote class="a_block itemB" cite="http://www.el-dev.net/">
                            <a href="http://www.el-dev.net/">
                                <div class="link_panel">
                                    <p class="bbb">el-dev.net</p>
                                    
                                    <img class="link_img" src=".\img\10_eldev.net.jpg" alt="">
                                </div>
                            </a>
                        </blockquote>
                        <blockquote class="a_block itemC" cite="http://www.el-dev.net/school.html">
                            <a href="http://www.el-dev.net/school.html">
                                <div class="link_panel">
                                    <p class="bbb">ELSCHOOL</p>
                                    <img class="link_img" src=".\img\09_elschool.jpg" alt="">
                                </div>
                            </a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <!-- /会社概要 -->

        <!-- フォーム -->
        <div class="form" id="form">
            <p class="container contact-form">お問い合わせ</p>
            <form action="mail.php" method="post">
                <div class="form-parts">
                    <label class="form-title" for="form_name">お名前（必須）</label><br>
                    <input type="text" class="form-input" name="お名前" id="form_name" placeholder="お名前..." required autoforcus><br>
                </div>
                <div class="form-parts">
                    <label class="form-title" for="form_Email">メールアドレス（必須）</label><br>
                    <input type="email" class="form-input" name="Email" id="form_Email" placeholder="sample@domain.com" required><br>
                </div>
                <div class="form-parts">
                    <label class="form-title" for="form_title">件名</label><br>
                    <input type="text" class="form-input" name="件名" id="form_title" placeholder="件名..."><br>
                </div>
                <div class="form-parts">
                    <label class="form-title" for="form_massage">メッセージ本文</label><br>
                    <textarea type="text" class="message-input" name="メッセージ" id="form_massage" rows="12" cols="80" placeholder="こちらに入力..." ></textarea><br>
                </div>

                <div class="Form-Button">
                    <button class="Send-Button">送信する</button>
                </div>


            </form>
        </div>

        <!-- /フォーム -->

    </main>
    <!-- /メイン -->
    <!-- フッター -->
    <footer>
        <small class="cmark">
            <p class="copy">©️ 2022 el co.,ltd. </p>
        </small>
    </footer>
    <!-- /フッター -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="./js/slideshow.js"></script>
    <script src="https://unpkg.com/ityped@1.0.3"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>