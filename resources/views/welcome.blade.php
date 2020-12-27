<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

        <style>

        /* overlay at start */
.mfp-fade.mfp-bg {
  opacity: 0;

  -webkit-transition: all 0.15s ease-out;
  -moz-transition: all 0.15s ease-out;
  transition: all 0.15s ease-out;
}
/* overlay animate in */
.mfp-fade.mfp-bg.mfp-ready {
  opacity: 0.8;
}
/* overlay animate out */
.mfp-fade.mfp-bg.mfp-removing {
  opacity: 0;
}

/* content at start */
.mfp-fade.mfp-wrap .mfp-content {
  opacity: 0;

  -webkit-transition: all 0.15s ease-out;
  -moz-transition: all 0.15s ease-out;
  transition: all 0.15s ease-out;
}
/* content animate it */
.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
  opacity: 1;
}
/* content animate out */
.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
  opacity: 0;
}

          .bg-light{
            background-color: rgba(221,221,221,0.5) !important;
          }

          .img-lp{
            background-image: url("{{asset('images/landing.jpg')}}");
            height:350px;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            opacity: 0.7;
          }
          .news-content{
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;  
            overflow: hidden;
          }
          #news-read-more{
            visibility:hidden;
          }

          .sermon-img{ 
            border-radius:3px 3px 0 0;           
            height:150px;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
          }
          .sermon-content{
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;  
            overflow: hidden;
          }

          .gallery-img{ 
            border-radius:3px 3px 0 0;           
            height:220px;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
          }
          .gallery-content{
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;  
            overflow: hidden;
          }

          .link-card{
            text-decoration:none;
            color:unset;
          }
          .link-card:hover{
            color:unset;
          }

        </style>

        <title>GBI Pahlawan</title>
    </head>
    <body>
        <div class="">
                
          <div class="img-lp"></div>

            <div id="jadwal-ibadah" class="pb-5">
              <div class="container">
                  <h2 class="text-center font-weight-normal">
                    Jadwal Ibadah
                  </h2>
                  
                  <div class="row">
                    <div class="col-12 col-md-6">
                    <table class="table">
                    <tbody>
                        <tr>
                          @foreach($schedules as $s)
                            <td>{{$s->day}}</td>
                            <td>{{$s->hour_start}} - {{$s->hour_end}} WIB</td>
                            <td>{{$s->name}}</td>
                          @endforeach
                        </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-12 col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.953060695938!2d110.21488301432296!3d-7.470435875718188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a85f41a24eb53%3A0x9f7e43a236850838!2sGBI%20Pahlawan!5e0!3m2!1sid!2sid!4v1596198402102!5m2!1sid!2sid" class="w-100" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>

              </div>              
            </div>

            <div id="berita" class="pb-5 bg-light">
              <div class="container">
                <div class="d-flex justify-content-between">
                      <h2 class="font-weight-normal">Pengumuman</h2>
                      <div>
                        <a href="#" class="btn btn-sm btn-primary px-3">More</a>
                      </div>  
                </div>
                <div>
                    <div class="card px-0">
                      <div class="card-header">
                        <h3 class="font-weight-normal">{{ $news->title }}</h3>
                        <small><em>{{tanggal_indo($news->updated_at, true)}}</em></small>
                      </div>
                      <div class="card-body">
                        <p class="m-0 mb-0 news-content">{{ $news->description }}</p>
                        <a id="news-read-more"href="#">Baca Selengkapnya</a>
                      </div>
                    </div>
                </div>                 
              </div>
              
            </div> 

            <div id="khotbah" class="pb-5">
                <div class="container">
                  <div class="d-flex justify-content-between">
                      <h2 class="font-weight-normal">Khotbah</h2>
                      <div>
                        <a href="#" class="btn btn-sm btn-primary px-3">More</a>
                      </div>  
                  </div>
                    <div class="row justify-content-md-between">
                      
                        <div class="px-2 col-12 col-md-4">
                          @foreach ($sermons as $s)
                          <a href="#" class="link-card">
                            <div class="card">
                              <div class="card-header p-0">
                                <div class="sermon-img" style="background-image: url('{{asset('uploads/sermons/').'/'.$s->img_url}}')"></div>
                              </div>
                              <div class="card-body">
                              <p class="sermon-content m-0">
                                {{ $s['description'] }}
                              </p>
                              <p class="m-0 p-0 mt-1 text-right"><em>{{$s['author']}}</em></p>
                            </div>
                            </div>
                          </a>
                          @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div id="gallery" class="pb-5 bg-light">
                <div class="container">
                  <div class="d-flex justify-content-between">
                      <h2 class="font-weight-normal">Galeri</h2>
                      <div>
                        <a href="#" class="btn btn-sm btn-primary px-3">More</a>
                      </div>  
                  </div>
                    <div class="row justify-content-md-between">
                      
                        <div class="px-2 col-12 col-md-3 parent-container">
                          <a href="" class="link-card">
                            <div class="card">
                              <div class="card-header p-0">
                                <div class="gallery-img" style="background-image: url('{{asset('images/landing.jpg')}}')"></div>
                              </div>
                              <div class="card-body">
                              <h3 class="gallery-content text-center m-0">
                                Acara Natal 2020
                              </h3>
                            </div>
                            </div>
                          </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>

    <footer>
      <div class="container-fluid bg-dark py-2">
        <div class="text-center">
            <p class="m-0 p-0 text-white">© {{date('Y')}} GBI Pahlawan Magelang</p>
        </div>
      </div>
    </footer>
</html>

<script src="js/app.js"></script>

<script>
  var element = document.querySelector('.news-content');
  if( (element.offsetHeight < element.scrollHeight) || (element.offsetWidth < element.scrollWidth)){
    document.querySelector('#news-read-more').style.visibility = "visible";
  }
</script>

<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

 <script>

  $(document).ready(function() {
    $('.parent-container').magnificPopup({
    items: [
      {
        src: '{{asset('images/landing.jpg')}}'
      },
      {
        src: '{{asset('images/landing.jpg')}}'
      },
    ],
    gallery: {
      enabled: true,
      tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
      tNext: 'Next (Right arrow key)', // Alt text on right arrow
    },
    type: 'image' // this is default type
});
  });

 </script>