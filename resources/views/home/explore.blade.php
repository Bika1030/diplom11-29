<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')
  </head>

<body>

 @include('home.header')

 <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <div class=""></div>
          </div>
        </div>
          <div class="book">
          <h2 style="color: #333; font-size:30px; font-weight: bold">Бүх Номнууд</h2>
                <div class="background"></div>
                <div class="background-texture"></div>
                <section class="carousel">
                @foreach($data as $data)
   
                  <div class="carousel__container">
                    <div class="carousel-item">
                    <a href="{{route('home.book.details', $data->id)}}"><img
                        class="carousel-item__img"
                        src="{{$data->book_img}}"
                        alt="people"
                      width=""/></a>
                        <h5 class="title" style="color:#3f3f95; text-align:center; font-size:18px;font-weight:600">{{$data->title}}</h5>
                        <h6 style="font-size: 12px; color: #999;text-align:center">{{$data->author->name}}</h6>
                    </div>
                  
                  </div>
                  @endforeach
                </section>
            </div>
      </div>
        </div>
      </div>
    </div>
  </div>

  @include('home.footer')




  </body>
</html>
