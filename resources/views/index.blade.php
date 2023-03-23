<style>
    p{
 margin-left: 50px;
 margin-right: 50px;
 text-align: justify;
    }
    .one{
     margin-top: 15px;
     h1 {
                color: maroon;
                margin-left: 40px;
              }
    }
    .right{
     text-align: right;
    }




    .testimonial{ margin: 0 20px 50px; }
.testimonial .pic{
    display: inline-block;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    margin: 0 15px 15px 0;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
    border-radius: 50%;
}
.testimonial .testimonial-profile{
    display: inline-block;
    position: relative;
    top: 15px;
}
.testimonial .title{
    display: block;
    font-size: 20px;
    font-weight: 600;
    color: #2f2f2f;
    text-transform: capitalize;
    margin: 0 0 7px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #5d7aa7;
}
.testimonial .description{
    padding: 20px 22px;
    background: #1f487e;
    font-size: 15px;
    color: #fff;
    line-height: 25px;
    margin: 0;
    position: relative;
}
.testimonial .description:before,
.testimonial .description:after{
    content: "";
    border-width: 18px 0 0 18px;
    border-style: solid;
    border-color: #5d7aa7 transparent transparent;
    position: absolute;
    bottom: -18px;
    left: 0;
}
.testimonial .description:after{
    border-width: 18px 18px 0 0;
    left: auto;
    right: 0;
}
.owl-theme .owl-controls{
    margin-top: 10px;
    margin-left: 30px;
}
.owl-theme .owl-controls .owl-buttons div{
    opacity: 0.8;
    background: #fff;
}
.owl-prev:before,
.owl-next:before{
    content: "\f053";
    font-family: "Font Awesome 5 Free"; font-weight: 900;
    font-size: 20px;
    color: #1f487e;
}
.owl-next:before{ content: "\f054"; }
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
        <h5>የአደባባይ በዓል በደቂቀ ዘርዓ ያዕቆብ አደባባይ </h5>
        <p>“አእምሮ ሠናይ ይሁብ ክብረ ወሞገሰ”
            መልካም ዕውቀት ጥበብንና ሞገስን ይሰጣል ፡፡ ምሳሌ 13፥15</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100 img-fluid max-width: 100%  height: auto align-center" alt="DBU slider image" width="100%" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>በእግዚአብሔር መንፈስ የሚመሩ ሁሉ እነዚህ የእግዚአብሔር ልጆች ናቸው፡፡ ሮሜ. 8 ፥14</h5>
        <p>መኑ እንጋ ውእቱ መጋቢ ኄር ---- ዘይሰይሞ እግዚኡ ላእለ ኩሉ ሰብአ ቤቱ
            ጌታው በቤተሰቡ ላይ የሚሾመው ታማኝና ብልህ መጋቢ ማን ነው ሉቃ 12÷42</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100 img-fluid max-width: 100%  height: auto align-center" alt="DBU slider" width="100%" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>ብዙ ሰዎችንም ወደ ጽድቅ የሚመልሱ እንደ ከዋክብት ለዘላለም ይደምቃሉ ት/ዳን 12፡3</h5>
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
		<img src="{{asset('images/ab.jpg')}}" alt='likepapas photo' width=100% height="400" class="img-fluid max-width: 100%  height: auto align-center">
		</div>
		<div class='col text-justify'>

			<h1 style="color: maroon"><strong><u>እንኳን ደህና መጣችሁ!!! </u></strong></h1>
			<h3 style="color: rgb(35, 5, 145)"><br><b>
			የሀ/ስብከቱ ሊቀ ጳጳስ መልእክት<br><b></h3>
            <hr>
           <h2 style=" color:chartreuse"><strong> አባ ቀሌምንጦስ ቀዳማዊ</strong></h2>
            <h3 style="color:rgb(55, 0, 255)"><strong>በኢ/ኦ/ተ/ቤተ ክርስቲያን መንበረ ፓትርያርክ ጠቅላይ ጽ/ቤት
            የሰ/ት/ቤቶች ማደራጃ መምሪያና የሰሜን ሸዋ ሀ/ስብከት ሊቀ ጳጳስ</strong><h3>
            <h5 style="color:darkgoldenrod" > <strong>መኑ እንጋ ውእቱ መጋቢ ኄር ---- ዘይሰይሞ እግዚኡ ላእለ ኩሉ ሰብአ ቤቱ
            ጌታው በቤተሰቡ ላይ የሚሾመው ታማኝና ብልህ መጋቢ ማን ነው ሉቃ 12÷42</strong></h5>


		</div>
        <p class='p'> ውሉደ ጥምቀት ወውሉደ ክህነት የመንፈስ ቅዱስ ልጆቼ በሥራው የታመነ በዕውቀት የሠለጠነ
            የሚያስተምረውን የሆነ በተሰጠው ሥልጣን አስቀድሞ ለራሱ የጣመ የላመ ልጉረስ የሞቀ የደመቀ ልልበስ
            የማይል መንጋውን ረስቶ ራሱን አዝናንቶ የማይኖር በጎቹን በቁጥርና በስም በሕይወት ጠንቅቆ ያወቀ
            አገልጋይ ማን ነው ይህንን ያደረገእርሱ ታማኝ እረኛ ነውየተወደዳችሁ የቤተ ክርስቲያኒቱ አገልጋዮች
            መምህራንና ካህናት መከራ መስቀሉን ተሸክማችሁ ማኅበራዊና መንፈሳዊ ሰማያዊና ዘላለማዊ የሆነውንን
            ፍጹም አገልግሎት እንድትሰጡ የእግዚአብሔርን መንጋ እንድትጠብቁ የጠፋውን እንድትፈልጉ የባዘነውን
            እንድትመልሱ የደከመውን እንድታበረቱ የታመመውን እንድታክሙ የተሰበረውን እንድትጠግኑ ያዘነውን
            እንድታጽናኑ በጨለማው ዓለም የሚኖረውን በኢየሱስ ክርስቶስ የብርሃን ጎዳና እንዲመላለስ ታደርጉ ዘንድ
            ጌታ በሁሉ ላይ ሾሟችኋል ፡፡</p>
            <p class='p'> ከእናንተ እያንዳንዱ የሌላውን ሸክም ይሸከም እንዲሁም የክርስቶስን ሕግ ፈጽሙ ገላ 5፡2 እንዳለ
                ሐዋርያው ለክፋቱ ጥግ በሌለው ዓለም ውስጥ ብንኖርም አንዳችን ያንዳችንን ሸክም እየተሸከምን
                በመረዳዳትና በመግባባት የክርስቶስን ሕግ እንፈጽም ዘንድ አደራ አለብ የተጣለብን አደራ ምድራዊ
                ሳይሆን ሰማያዊ መሆኑ ገብቷችሁ ይህንን ሰማያዊ አደራ ለመወጣት እጅግ አስቸጋሪና ፈታኝ በሆኑ በፈተናዎች ውስጥ እያለፋችሁ መልካም የሆነውን መንፈሳዊ ሥራ እየሠራችሁ የክርስቶስን ቤተ
                ክርስቲያን ለተተኪው ትውልድ ለማስረከብ ያደረጋችሁት አስተዋጽኦ ዋጋ የሚያሰጥ አገልግሎት በመሆኑ
                በቀላሉ የሚታይ አይደለም ፡፡</p>
            <p class='p'> ትውልዱ ቤተ ክርስቲያንንና ሀብቷን በአደራ የሚረከብ እንዲሆን ለማድረግ ከትናንት ይልቅ ዛሬ ትልቅ
        ትጋት የሚጠይቅ ነው፡፡ወጣቱ ትውልድ ከመንፈሳዊ ማንነቱ ስለተራቆተ በዘረኝነት እንዲሁም ቅጥ ባጣ
        ዓለማዊ አስተሳሰብ ውስጥ ተዘፍቆ ለገዛ ሀገሩና ለገዛ ወገኑ ሸክም እሆነ በመምጣቱ በሀገራችን በፍጹም
        ሃይማኖትንና ኢትዮጵያዊነትን የማይገልጹ አሳፋሪ ተግባራት ተፈጽመዋል አብያተ ክርስቲያናት
        ተቃጥለዋል ካህናት ታርደዋል ምእመናን ሞተዋል ተሰደዋል ብዙ ንብረት ወድሟል ይህ ጥፋት ነገም
        እንዳይደገም አጥብቀን መሥራት በርትተን ማስተማር አለብን በቤተ ክርስቲያኒቱ መዋቅር ውስጥ ያላችሁ
        አገልጋዮች ዘመኑን በመዋጀት ትውልዱን እጅግ ውስብስብና ኋላ ቀር ከሆነ ብልሹ አመለካከት በመለየት
        መንፈሳዊ አስተምህሮውን በማዘመን ለሰላምና ለጽድቅ የተፋጠነ ማንነት እንዲኖረው ለሀገሩና ለቤተ
        ክርስቲያን እንዲጠቅም ማድረግ ለነገ የማይባል የዛሬ ሥራችን እንደሆነ ላሳስባችሁ እወዳለሁ ፡፡</p>
        <p class='p'>
        ቤተ ክርስቲያን በዓለም መድረክ የምትታወቅባቸውን አገልሎቶቿ መንፈሳዊ ይዘታቸውን ሳይለቁ
        እንዲቀጥሉ ቅርሶቿ እንዲጠበቁ ልማቶቿ እንዲፋጠኑ ዘመናዊ አሠራርን በመከተል ቤተ ክርስቲያን የሀገር
        አለኝታ መሆኗን ለነገ ማስቀጠልና የትናንትናው ውለታዋን ማስታወስ ተገቢ ነው ኢትዮጵያ እንደ ሀገር
        እንድትቀጥል ቤተ ክርስቲያን ያደረገችው አስተዋጽኦ መረሳት የለበትም ቀለም በጥብጣ ብራና ዳምጣ
        ፊደል ቀርጻ ኢትዮጵያን በዓለም መድረክ በማስተዋወቅ ለኢትዮጵያውያንና ለዓለም መልካም ሥነ
        ምግባራትን ስታስተምር ኖራለች ይህንን እውነት ለመደበቅና ከንቱ ለማድረግ የሚሠሩትን አጥብቆ
        መታገል የማናቸውም ክርስቲያን ተቀዳሚ ተግባሩ መሆን ይገባዋል፡፡ የአብነት ት/ቤቶችን ማስፋፋትና
        ለተማሩትም ቦታ በመስጠት የቤተ ክርስቲያኒቱ አገልግሎት እንዲሰፋና ቤተ ክርስቲያናችን ከልጆቿ ጋር
        ከፍ ብላ የምትታይበትን ሥራ ሁላችንም በአንድ ልብና በአንድ ሐሳብ ሆነን ልንሠራ ያስፈልጋል
        በዘመናችሁ መልካም ሥራችሁ ሁሉ በሰው ፊት እንዲታይ እየጸለይሁ ይህችን የማትጊያና የማንቂያ
        አጭር መልእክት አቅርቤላችኋለሁ በመሆኑም ጌታው በቤተሰቡ ላይ የሚሾመው ታማኝና ብልህ መጋቢ
        ማን ይሆን የሚለውን ጥያቄ እንመልሳለን ማለት ነው ሁሉን የሚችል የይቅርታ ባለቤት ቸሩ አምላካችን
        እግዚአብሔር ሀገራችንና ቤተ ክርስቲያናችንን በሰላምና በነጻነት ሕዝቧንም በፍቅርና በአንድነት
        ይጠብቅልን፡፡</p>
        <p class='p'> <h2 style="color: blue" > ወስብሐት ለእግዜብሔር ወለወላዲቱ ድንግል ወለመስቀለ ክቡር </h2></p>
	</div>


    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3" style="color:darkorange"><strong>የሃገረ ስብከቱ ሊቃነ ጳጳሳት </strong></h3>
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
                                            <img src="{{asset('images/ab.jpg')}}" alt='likepapas photo' width=100% height="400" class="img-fluid max-width: 100%  height: auto align-center">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: rgb(13, 2, 71)"><strong>አባ ቀሌምንጦስ ቀዳማዊ</strong></h4>
                                                <p class="card-text" style="color: rgb(13, 2, 71)"><strong>በኢ/ኦ/ተ/ቤተ ክርስቲያን መንበረ ፓትርያርክ ጠቅላይ ጽ/ቤት
                                                    የሰ/ት/ቤቶች ማደራጃ መምሪያና የሰሜን ሸዋ ሀ/ስብከት ሊቀ ጳጳስ ከ2012 ዓ.ም አስከ አሁን</strong></p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img src="{{asset('images/Pops/AE1.jpg')}}" alt='likepapas photo' width=100% height="400" class="img-fluid max-width: 100%  height: auto align-center">
                                             <div class="card-body">
                                                <h4 class="card-title">አቡነ ኤፍሬም </h4>
                                                <p class="card-text">የሰሜን ሸዋ ሀ/ስብከት ሊቀ ጳጳስ ከ1983-2014 ዓ.ም</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img src="{{asset('images/Pops/ጎርጎሪዮስ.jpg')}}" alt='likepapas photo' width=100% height="400" class="img-fluid max-width: 100%  height: auto align-center">
                                            <div class="card-body">
                                                <h4 class="card-title"><strong>አቡነ ጎርጎሪዮስ</strong></h4>
                                                <p class="card-text">የሰሜን ሸዋ ሀ/ስብከት ሊቀ ጳጳስ 1972-1982</p>

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
<section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-1.jpg">
                        </div>
                        <div class="testimonial-profile">
                            <h3 class="title">williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                        </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-2.jpg">
                        </div>
                        <div class="testimonial-profile">
                            <h3 class="title">Kristina</h3>
                            <span class="post">Web Designer</span>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                        </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-3.jpg">
                        </div>
                        <div class="testimonial-profile">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Web Developer</span>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                        </p>
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


<script type="text/javascript">
   $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
    </script>
