@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
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

    <div class="mt-8 text-center mb-24">
      <a href="#" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>

  </div>
</section>
@endsection