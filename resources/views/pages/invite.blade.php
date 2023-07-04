@extends('layouts.default')
@section('title', 'トップページ')
@section('content')
<section class="mt-24">
    <div class="container mx-auto">
        <h2 class="mt-2 font-bold font-heading text-center text-3xl">友達招待</h2>
        <div class="my-8 pb-4 border-b"></div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-12 mx-auto">
              <div class="flex flex-wrap w-full flex-col items-center text-center">
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">ご登録されたStreamer様には様々な特をご用意しております。</p>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">ぜひご紹介・ご登録ください。</p>
              </div>
            </div>
          </section>
    </div>

    <div class="container px-5 py-12 mx-auto">
      <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">紹介文（例）</h1>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-100 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">私も登録したクラウド事務所おすすめだから検索してみて！登録すると自動でStreamer図鑑に活動情報を掲載してもらえるよー！詳しくは「Streamer図鑑」「Streamer Cloud」とかで検索してみて！紹介キャンペーンもやってるみたい。</p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-gray-900">紹介パターンA</span>
                <span class="text-gray-500 text-sm">友人宛</span>
              </span>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-100 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">いつも配信を楽しく拝見しています。ぜひたくさんの方にもその魅力を知って欲しいと思っているので、ぜひStreamer図鑑に活動情報を掲載して欲しいです！詳しくは「Streamer図鑑」「Streamer Cloud」などでWeb検索してみてください！</p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-gray-900">紹介パターンB</span>
                <span class="text-gray-500 text-sm">配信者宛</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mb-24">
        <a href="/" class="mt-10 inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">招待する</a>
    </div>
    
  </section>

@endsection