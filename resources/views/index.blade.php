<style>
a {
  text-decoration: none;
}

</style>
@extends('app')
@section('content')
<div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100 img-fluid max-width: 100%  height: auto align-center" alt="DBU slider image" width="100%" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100 img-fluid max-width: 100%  height: auto align-center" alt="DBU slider image" width="100%" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100 img-fluid max-width: 100%  height: auto align-center" alt="DBU slider" width="100%" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	<div class="row mt-5 mb-5 ml-20 mr-20">
		<div class='col'>
		<img src="{{asset('images/slider/1.jpg')}}" alt='president photo' width=100% height="400" class="img-fluid max-width: 100%  height: auto align-center">
		</div>
		<div class='col text-justify'>
			<strong><u>Welcome to </u></strong>
			<br>
			President Message<br>
Debre Berhan University’s motto “We are in the Community!” extends to all levels of the university, including the leadership. DBU University is accessible and responsive to inquiries and exchanges with all sectors of the campus community. Openness and transparency are emphasized and positive and constructive discourse with the leadership of DBU helps in moving the institution forward. Visitors to DBU find the leaders of the institution friendly and curious about their experiences at DBU and show Ethiopia’s famous hospitality to all newcomers on campus. We engage the broader campus community in a variety of ways, and it is not uncommon to see the top management engaging casually with students, faculty, foreign guests and staff. Through this, the cohesiveness of the campus community is strengthened, and a truly unique collaborative environment is created.
		</div>
	</div>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Carousel cards title </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	    <!-- service-section -->
    <section class="news-section">
        <div class="container">
            <div class="sec-title centred">
                <h1> <i class="fas fa-newspaper"></i>&nbsp;Latest News</h1>
                <p><br/></p>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-single.html"><img src="{{asset('images/news/1.jpg')}}" alt="" width: auto height=200></a></figure>
                            <div class="lower-content">
                                <h4><a href="blog-single.html">Why I’ll Never Go on a Mission Trip Again</a></h4>
                                <div class="text">Our well-intentioned attempts to serve Black and Brown people barely made an impact</div>
                                <ul class="post-info">
                                    <li>Mahfuz Riad in ACTO</li>
                                    <li>Jul 16, 2019  Read 4 Min</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 post-column">
                    <div class="post-inner wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-single.html"><img src="{{asset('images/news/1.jpg')}}" width: auto height=200 alt=""></a></figure>
                            <h5><a href="blog-single.html">When a business can no longer meet the demands</a></h5>
                            <div class="text">Our well-intentioned attempts</div>
                            <span class="post-info">Jul 18, 2019  Read 1 Min</span>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
                            <h5><a href="blog-single.html">The Scariest Thing About DeepNude ware</a></h5>
                            <div class="text">Our well-intentioned attempts</div>
                            <span class="post-info">Jul 17, 2019  Read 5 Min</span>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
                            <h5><a href="blog-single.html">What Does FaceApp Do With Your Photos?</a></h5>
                            <div class="text">Our well-intentioned attempts</div>
                            <span class="post-info">Jul 17, 2019  Read 3 Min</span>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
                            <h5><a href="blog-single.html">Why You Need to Infuse Your Creative Practice </a></h5>
                            <div class="text">Our well-intentioned attempts</div>
                            <span class="post-info">Jul 16, 2019  Read 4 Min</span>
                        </div>
						<div class="post">
                            <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
                            <h5><a href="blog-single.html">Why You Need to Infuse Your Creative Practice </a></h5>
                            <div class="text">Our well-intentioned attempts</div>
                            <span class="post-info">Jul 16, 2019  Read 4 Min</span>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-12 signup-column">
			<div class="signup-box wow fadeInRight" data-wow-delay="900ms" data-wow-duration="1500ms">
				<div class="inner-box">
					<center><div class="icon-box"><i class="fas fa-bullhorn"></i></div></center>
					<h4 style=" text-align:center;">Upcoming Events</h4>
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
							<figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
							</div>
							<div class="col-lg-9 col-md-6 col-sm-12">
							<h5><a href="blog-single.html">Why You Need to Infuse Your Creative Practice </a></h5>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text">Our well-intentioned attempts</div>
							<span class="post-info">Jul 16, 2019  Read 4 Min</span>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
							<figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
							</div>
							<div class="col-lg-9 col-md-6 col-sm-12">
							<h5><a href="blog-single.html">Why You Need to Infuse Your Creative Practice </a></h5>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text">Our well-intentioned attempts</div>
							<span class="post-info">Jul 16, 2019  Read 4 Min</span>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
							<figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-1.JPG" alt=""></a></figure>
							</div>
							<div class="col-lg-9 col-md-6 col-sm-12">
							<h5><a href="blog-single.html">Why You Need to Infuse Your Creative Practice </a></h5>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text">Our well-intentioned attempts</div>
							<span class="post-info">Jul 16, 2019  Read 4 Min</span>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="btn-box"><a href="#" class="btn btn-info">Discover More News&nbsp;
							<i class="fas fa-arrow-right"></i></a></div>
							</div>
						</div>

				</div>
			</div>
            </div>
            </div>
			<br>
			<div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 news-block">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 news-block" >
				<div class="btn-box"><a href="whatisnew/news" class="btn btn-info">Discover More News&nbsp;<i class="fas fa-arrow-right"></i></a></div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 news-block" >
				</div>
			</div>

        </div>

    </section>
    <!-- service-section end -->
</div>
@endsection
