{{--<!-- technology-left -->
@if (isset($data['news']) && count($data['news']) > 0)

<div class="col-md-9 technology-left">

    @foreach($data['news'] as $key => $row)
    <div class="{{ $key == 0?'tech-no':'tc-ch' }}">



    </div>
        @endforeach
</div>

  @endif--}}

<!-- technology-left -->
@if (isset($data['news']) && count($data['news']) > 0)
<div class="col-md-9 technology-left">

    <div class="tech-no">
        <!-- technology-top -->
        @foreach($data['news'] as $key => $row)
        <div class="{{ $key == 0?'tc-ch':'tc-ch' }}">

            <div class="tch-img">
                <a href="{{ route('news.detail', $row->slug) }}"><img src="{{ asset('front_panel/assets/images/1.jpg') }}" class="img-responsive" alt=""/></a>
            </div>
            <a class="blog blue" href="{{ route('news.detail', $row->slug) }}">Technology</a>
            <h3><a href="{{ route('news.detail', $row->slug) }}">{{ $row->title }}</a></h3>
           {!! $row->short_des !!}
           {{-- <p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
             <a class="" href="{{ route('news.detail', $row->slug) }}">Read more<span class="glyphicon"></span> </a>
            <div class="blog-poast-info">
                <ul>
                    <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
                    <li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
                    <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
                    <li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
                    <li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- technology-top -->
        <!-- technology-top -->

        @endforeach
        <!-- technology-top -->
    </div>
</div>

    @endif
