<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            <a href="{{route('post.index')}}"><img src="{{asset('coffee_break-web/web/images/logo-1.png')}}" alt="" /></a>
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{route('post.index')}}"  class="active">Home</a></li>
                    <li><a href="{{route('about.index')}}">About</a></li>
{{--                    <li><a href="gallery.html">Gallery</a></li>--}}
{{--                    <li><a href="typo.html">Typo</a></li>--}}
                    <li><a href="{{route('contact.index')}}">Contact</a></li>
                </ul>

            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twit"> </span></a></li>
                    <li><a href="#"><span class="pin"> </span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
