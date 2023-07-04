@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
<section class="" style="background: url(/images/index/top.jpg) no-repeat center;">
  <div class="container mx-auto py-40 relative">
    <div class="bg-white bg-opacity-75 p-8">
      <h1 class="mt-2 text-4xl font-bold font-heading text-center">Streamer Cloudとは？</h1>
      <p class="text-center pt-5">個人Stremerを支援するクラウド事務所です。<br>
        登録したチャンネル情報はStreamer図鑑に登録されます。<br>
      {{-- <div class="absolute right-0 bottom-0 transform translate-y-16">
        <a href="#"><img src="/images/index/video.jpg" alt="" class="shadow-lg"></a>
      </div> --}}
    </div>
  </div>
</section>

<section class="mt-16">
  <div class="container mx-auto">
    {{-- <p class="text-center text-2xl">特徴</p> --}}
    <h2 class="mt-2 font-bold font-heading text-center text-3xl">３つの特徴</h2>
  </div>

  <div class="flex flex-wrap -m-3 container mx-auto pt-8">
    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/live.jpg" alt="">
          <div class="ml-4">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">１：案件やイベントに応募できる</h3>
            <p class="text-left text-gray-500 text-sm">Streamer Cloudが企業案件をご紹介！さらに、Streamer Cloudが主催するオフラインイベントにも参加申し込み（抽選）可能！</p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/book.jpg" alt="">
          <div class="ml-4">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">２：Streamer図鑑に掲載される</h3>
            <p class="text-left text-gray-500 text-sm">「Streamer 図鑑」（WebサイトおよびYoutubeチャンネル）に掲載！限定ユニットの人気が出れば公式デビューも！？</p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/learning.jpg" alt="">
          <div class="ml-4">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">３：割引やセミナーを受けられる</h3>
            <p class="text-left text-gray-500 text-sm">Streamer Cloudが運営する「Streamer大学」の講義が受け放題！さらに、提携企業から器材などの割引も受けられます！</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-24 container mx-auto">
  {{-- <p class="text-center text-2xl">お知らせ</p> --}}
  <h2 class="mt-2 font-bold font-heading text-center text-3xl">お知らせ</h2>

  <ul class="mt-8">
    <li class="flex py-4 border-t border-b"><p class="font-bold w-40">2023. 7. 5（水）</p><p class="bg-gray-100 text-gray-400 px-3">デビュー</p><a href="#" class="ml-4 text-blue-500">期間限定ユニット「G's」がデビューします</a></li>
    <li class="flex py-4 border-b"><p class="font-bold w-40">2023. 7. 5（水）</p><p class="bg-gray-100 text-gray-400 px-3">商品発売</p><a href="#" class="ml-4 text-blue-500">全国のコンビニでコラボグッズが発売されます！</a></li>
    <li class="flex py-4 border-b"><p class="font-bold w-40">2023. 7. 5（水）</p><p class="bg-gray-100 text-gray-400 px-3">案件募集</p><a href="#" class="ml-4 text-blue-500">ジーズアカデミーからの新着案件のお知らせ</a></li>
    <li class="flex py-4 border-b"><p class="font-bold w-40">2023. 7. 5（水）</p><p class="bg-gray-100 text-gray-400 px-3">イベント</p><a href="#" class="ml-4 text-blue-500">秋葉原で「演奏してみたカフェ」を開催します</a></li>
    <li class="flex py-4 border-b"><p class="font-bold w-40">2023. 7. 5（水）</p><p class="bg-gray-100 text-gray-400 px-3">特別講義</p><a href="#" class="ml-4 text-blue-500">Streamer大学の特別オフライン講義を開催します！！</a></li>
  </ul>
  {{-- <div class="mt-8 text-center">
    <a href="/" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
  </div> --}}
</section>

<section class="mt-24">
  <div class="container mx-auto">
    {{-- <p class="text-center text-2xl">案件</p> --}}
    <h2 class="mt-2 font-bold font-heading text-center text-3xl">案件・イベント</h2>

    <div class="my-8 pb-4 border-b">
      {{-- <p class="text-lg text-left">カテゴリ / 企業案件</p> --}}
      <ul class="flex text-center pt-2">
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3">企業案件</li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">オフラインイベント</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">オーディション</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃謝礼あり</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃商品提供</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3"><a href="#">＃音楽デビュー</a></li>
      </ul>
    </div>

    <div class="flex flex-wrap -mx-3">
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">オフラインイベント</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/guitar.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">音楽カフェ開催決定！</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">一緒に盛り上げてくれる登録者5,000人以上...</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃オフイベ</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃音楽関連</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃〆切間近</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">企業案件</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/majan.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">麻雀アプリの紹介</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">チャンネル登録者10,000人以上の方限定。麻雀アプリ....</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃謝礼あり</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃商品提供</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃期間限定</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">オーディション</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/cat.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">アイドル猫グループ募集！</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">チャンネル登録者10,000人以上の方限定。アイドルデビュー…</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃いぬねこ</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃選考あり</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃〆切間近</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>

    <div class="mt-8 text-center">
      <a href="/anken" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>
  </div>
</section>

<section class="mt-24">
  <div class="container mx-auto">
    {{-- <p class="text-center text-2xl">案件</p> --}}
    <h2 class="mt-2 font-bold font-heading text-center text-3xl">学ぶ</h2>

    <div class="my-8 pb-4 border-b">
      {{-- <p class="text-lg text-left">カテゴリ / 税金・申告</p> --}}
      <ul class="flex text-center pt-2">
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3">税金・申告</li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">タスク管理</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">炎上対策</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃健康・メンタル</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃活動資金</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3"><a href="#">＃副業</a></li>
      </ul>
    </div>

    <div class="flex flex-wrap -mx-3">
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">税金・申告</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/zeimu.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">はじめての確定申告講座</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">無事に収益化して今年から確定申告をする方に...</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃お金</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃はじめて</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃無料</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">タスク管理</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/work.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">本業とのバランスをとる</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">副業として動画投稿活動をしている方に向けて....</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃副業</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃お金</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃タスク管理</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">炎上対策</span>
            <a href="#"><img class="w-full h-full object-cover opacity-75" src="/images/placeholders/blogs/fire.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">炎上しないための基礎講座</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">過去に炎上した経験のある講師を招き、事例を解説…</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃炎上</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ゲスト</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃リスク管理</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>

    <div class="mt-8 text-center">
      <a href="/manabu" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>
  </div>
</section>

<section class="mt-24">
  <div class="container mx-auto">
    {{-- <p class="text-center text-2xl">案件</p> --}}
    <h2 class="mt-2 font-bold font-heading text-center text-3xl">提携サービス</h2>

    <div class="my-8 pb-4 border-b">
      {{-- <p class="text-lg text-left">カテゴリ / 企業案件</p> --}}
      <ul class="flex text-center pt-2">
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3">Webサービス</li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">専門家相談</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">その他割引</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃半額以下</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃お試し</a></li>
        <li class="bg-gray-100 text-gray-400 py-1 px-3"><a href="#">＃期間限定</a></li>
      </ul>
    </div>

    <div class="flex flex-wrap -mx-3">
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">専門家相談</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/coin.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">税理士ワンコイン相談</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">専任の税理士がいない方が確定申告をする際に...</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃お金</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃確定申告</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃税理士</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">Webサービス</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/app.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">配信アプリ</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">新サービス「ABCD」で配信される方に報酬を...</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃お試し</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃審査あり</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃期間限定</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">その他割引</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/device.jpg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2023.7.5</time>
          </div>
          <div class="pt-2 pb-4 px-4">
            <a href="#">
              <h1 class="mb-2 text-2xl font-semibold font-heading text-left">デバイス割引</h1>
              <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">PC周辺機器の買い替えをご検討中の方は是非…</p>
            </a>
            <div class="flex justify-between">
              <ul class="flex">
                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃PC周辺機器</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃半額以下</li>
                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃期間限定</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>

    <div class="mt-8 text-center mb-24">
      <a href="/teikei" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>
  </div>
</section>

{{-- <section id="access" class="mt-24 pb-24 bg-gray-100">
  <div class="container mx-auto">
    <p class="text-center pt-10 text-2xl">アクセス</p>
    <h2 class="mt-2 font-bold font-heading text-center text-3xl h-24">ご来店をお待ちしております！</h2>
    <div class="md:flex justify-center">
      <div class="">
        <img class="rounded mx-auto" src="/images/map.jpg" alt="">
      </div>
      <div class="text-left lg:ml-8 px-8">
        <p class="font-bold text-3xl pb-5">ねこカフェららべる</p>
        <dl>
          <dt class="text-xl font-medium">営業時間</dt>
          <dd class="pl-12 text-lg"><span class="mr-6">平日</span>11:00〜20:00<span class="ml-6">（L.O. 19:15）</span></dd>
          <dd class="pl-12 text-lg"><span class="mr-1">土日祝 </span>11:00〜18:00<span class="ml-6">（L.O. 17:15）</span></dd>
          <dt class="mt-5 text-xl font-medium">住所</dt>
          <dd class="text-lg pl-12">〒123-4567<br>東京都墨田区押上1-2-3 ●●ビル▲F</dd>
          <dt class="mt-5 text-xl font-medium">最寄り駅から</dt>
          <dd class="pl-12 text-lg">とうきょうスカイツリー駅<span class="ml-6">徒歩5分</span></dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="flex mx-auto bg-white py-4 mt-10 md:w-192">
    <div class="text-left mx-auto">
      <p class="text-lg">なにかあればお気軽にお問い合わせください！</p>
      <p><a href="#" class="text-blue-600 hover:underline">よくあるご質問</a>もご用意しています</p>
    </div>
    <div class="mx-auto">
      <a href="/contact" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-700 border-solid bg-white border-blue-700 border-2 px-16 hover:text-white hover:bg-blue-700">お問い合わせ</a>
    </div>
  </div>
</section> --}}
@endsection