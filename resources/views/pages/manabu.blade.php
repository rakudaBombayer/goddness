@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
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

      <div class="container mx-auto">
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

        <div class="container mx-auto">
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
  
      <div class="mt-8 text-center mb-24">
        <a href="#" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
      </div>
    </div>
  </section>
  
@endsection