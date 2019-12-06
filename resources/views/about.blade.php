<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/logo_dark@2x.png') }}" width="100%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/logo@2x.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
{{--            <a href="https://github.com/hui-ho/WebStack-Laravel" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>--}}
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray" style="font-weight: bold">About this website</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>你是否曾听过很多道理，却仍旧过不好这一生？</p>
                                        <p>你是否曾因青春懵懂，抱憾终生？</p>
                                        <p>你是否曾收藏过许多精彩的网站，却从未打开？</p>
                                        <p>这个网站不会聚焦于广度，也不会聚焦于深度，而会聚焦于跨界，新奇，灵感。</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray" style="font-weight: bold">About me</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>95后, 毕业一年，没什么人生大志，日常摸鱼。</p>
                                        <p>如果我的网站真的对你产生帮助的话，请不要吝啬，给个关注，我也只是想找找同类，这真的对我很重要呐！！！！！</p>
                                        <p>如果你有任何工作啊，恋爱，生活上的吐槽，都可以来我的公众号，分享给我！！！！</p>
                                        <p>提名网站也可以哦！</p>
                                    </blockquote>
{{--                                    <img src="{{ asset('img/wechat.jpg') }}" width="250px" alt="无火余灰"/>--}}
                                </div>
                            </div>
                            <h4 class="text-gray" style="font-weight: bold">Support me</h4>
                            <img src="{{ asset('img/wechat.jpg') }}" width="250px" alt="无火余灰"/>

                            {{--                            <div class="row">--}}
{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.viggoz.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://www.viggoz.com/">--}}
{{--                                        <div class="xe-comment-entry">--}}
{{--                                            <a class="xe-user-img">--}}
{{--                                                <img src="https://avatars1.githubusercontent.com/u/28501148?s=460&v=4" class="img-circle" width="40">--}}
{{--                                            </a>--}}
{{--                                            <div class="xe-comment">--}}
{{--                                                <a href="#" class="xe-user-name overflowClip_1">--}}
{{--                                                    <strong>Designer. hui-ho.</strong>--}}
{{--                                                </a>--}}
{{--                                                <p class="overflowClip_2"> hui-ho@outlook.com</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-12">--}}
{{--                                            <br />--}}
{{--                                            <blockquote>--}}
{{--                                                <p>--}}
{{--                                                    这是一个公益项目，而且是<a href="https://github.com/hui-ho/WebStack-Laravel"> 开源 </a>的。你也可以拿来制作自己的网址导航。如果你有更好的想法，可以通过邮件与我联系，欢迎与我交流分享。--}}
{{--                                                </p>--}}
{{--                                            </blockquote>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>