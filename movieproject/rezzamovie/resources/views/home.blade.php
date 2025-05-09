@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="main">
                        <div id="content">
                          <div class="box">
                            <div class="head">
                              <h2>Film Terbaru</h2>
                              <p class="text-right"><a href="#">See all</a></p>
                            </div>
                            <div class="movie">
                              <div class="movie-image"><a href="{{ url('/detail') }}"> <span class="play"><span class="name">X-MAN</span></span> <img src="css/images/movie1.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">SPIDER MAN 2</span></span> <a href="#"><img src="css/images/movie2.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">SPIDER MAN 3</span></span> <a href="#"><img src="css/images/movie3.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">VALKYRIE</span></span> <a href="#"><img src="css/images/movie4.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">GLADIATOR</span></span> <a href="#"><img src="css/images/movie5.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie last">
                              <div class="movie-image"> <span class="play"><span class="name">ICE AGE</span></span> <a href="#"><img src="css/images/movie6.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="cl">&nbsp;</div>
                          </div>
                          <div class="box">
                            <div class="head">
                              <h2>TOP RATED</h2>
                              <p class="text-right"><a href="#">See all</a></p>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">TRANSFORMERS</span></span> <a href="#"><img src="css/images/movie7.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">MAGNETO</span></span> <a href="#"><img src="css/images/movie8.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">KUNG FU PANDA</span></span> <a href="#"><img src="css/images/movie9.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">EAGLE EYE</span></span> <a href="#"><img src="css/images/movie10.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">NARNIA</span></span> <a href="#"><img src="css/images/movie11.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie last">
                              <div class="movie-image"> <span class="play"><span class="name">ANGELS &amp; DEMONS</span></span> <a href="#"><img src="css/images/movie12.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="cl">&nbsp;</div>
                          </div>
                          <div class="box">
                            <div class="head">
                              <h2>MOST COMMENTED</h2>
                              <p class="text-right"><a href="#">See all</a></p>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">HOUSE</span></span> <a href="#"><img src="css/images/movie13.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">VACANCY</span></span> <a href="#"><img src="css/images/movie14.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">MIRRORS</span></span> <a href="#"><img src="css/images/movie15.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">THE KINGDOM</span></span> <a href="#"><img src="css/images/movie16.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie">
                              <div class="movie-image"> <span class="play"><span class="name">MOTIVES</span></span> <a href="#"><img src="css/images/movie17.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="movie last">
                              <div class="movie-image"> <span class="play"><span class="name">THE PRESTIGE</span></span> <a href="#"><img src="css/images/movie18.jpg" alt="" /></a> </div>
                              <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                  <div class="stars-in"> </div>
                                </div>
                                <span class="comments">12</span> </div>
                            </div>
                            <div class="cl">&nbsp;</div>
                          </div>
                        </div>
                        
                        <div class="cl">&nbsp;</div>
                      </div>
---


<div id="footer">
    <p class="lf">Copyright &copy; 2025 <a href="#">Moviesite</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
        </div>
    </div>
</div>
@endsection
