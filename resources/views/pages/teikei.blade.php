@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
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
      <a href="#" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>

  </div>
</section>
@endsection