<div class="widget more_view">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#read" aria-controls="read" role="tab" data-toggle="tab">الاكثر قراءة </a></li>
        <li class=""><a href="#commen" aria-controls="commen" role="tab" data-toggle="tab">الاكثر جدلاً</a></li>
    </ul>		
    <div class="tab-content">
        <!-- show popular posts -->
        <div class="tab-pane  fade in active" id="read">
            @foreach ($postss->get()->sortByDesc('views') as $post)
                <article class="small-post">
                    <div class="thumb">
                        
                        <a href=""><img src="{{URL::asset('assets/frontend/img/friends1-1200x600-580x290.jpg')}}" alt=""></a>
                        <div class="more-thumb"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                    </div>
                    <div class="content">
                        <div class="content-slide">
                            
                            <h3 class="title"><a href="">{{ Str::words($post->name, 11, ' ...') }}</a></h3>
                        </div> 
                        <div class="share">
                            <span class="title">
                                <h3>شارك</h3>
                            </span>
                            <div class="inner_share">
                                <ul>
                                    <li><a href="" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <!-- .show popular posts -->	
        <!-- show posts by views -->
        <div class="tab-pane fade" id="commen">

            @php
            $postss = $postss->with('allComments')->get()->sortByDesc(function($post){return $post->comments->count();});
            @endphp

            @foreach ($postss as $post)
                <article class="small-post">
                    <div class="thumb">
                        
                        <a href=""><img src="{{URL::asset('assets/frontend/img/friends1-1200x600-580x290.jpg')}}" alt=""></a>
                        <div class="more-thumb"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                    </div>
                    <div class="content">
                        <div class="content-slide">
                            
                            <h3 class="title"><a href="">{{ Str::words($post->name, 11, ' ...') }}</a></h3>
                        </div> 
                        <div class="share">
                            <span class="title">
                                <h3>شارك</h3>
                            </span>
                            <div class="inner_share">
                                <ul>
                                    <li><a href="" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <!-- .show posts by views-->	
    </div>
</div>