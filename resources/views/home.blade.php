<x-template>
	@section('wraperClass','home')
	@section('hero')
		<div class="hero mt40m">
			<img src="img/cafe.jpg" alt="{{__('web/home/hero.alt')}}" width="1920" height="1279">
			<div class="context">
				<a href="./beginer">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="800px" height="800px" viewBox="-220.072 -116.442 800 800" enable-background="new -220.072 -116.442 800 800" xml:space="preserve">
						<defs>
						</defs>
						<path d="M344.909,1.888C341.641,0.619,338.178,0,334.739,0c-6.127,0-12.17,1.962-16.887,5.709L179.928,111.602L42.003,5.709
						C37.29,1.962,31.244,0,25.12,0c-3.44,0-6.904,0.619-10.172,1.888C5.861,5.416,0,13.308,0,22.018v363.341 c0,6.213,2.995,12.139,8.249,16.311l153.935,159.74c4.714,3.745,10.757,5.706,16.88,5.706c0.288,0,0.576-0.03,0.864-0.038 c0.289,0.008,0.576,0.038,0.864,0.038c6.123,0,12.166-1.961,16.88-5.706l153.938-159.74c5.252-4.172,8.246-10.098,8.246-16.311 V22.018C359.856,13.308,353.997,5.416,344.909,1.888z M174.828,532.226L29.356,381.267V33.008l145.472,111.688V532.226z"/>
					</svg>
					<p>{{__('web/home/hero.buttonText')}}</p>
				</a>
			</div>
		</div>
	@endsection
	@section('contents')
			<x-home.newsLink/>
			<x-home.our/>
			<x-home.staff/>
			<x-question h2="{{__('web/home/question.h2')}}" :questions="__('web/home/question.contents')" />
			<div class="bgi bgi1 mt40m"></div>
			<div class="bgi bgi2"></div>
			<div class="bgi bgi3"></div>
			<x-logo/>
	@endsection
</x-template>