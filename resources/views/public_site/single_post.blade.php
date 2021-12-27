@extends('layouts.public.master')
@section('title', 'Post')
@section('content')


    <div class="container" id="download-opera">
        <div class="get-opera">
            <div class="get-opera-closer">
                <svg width="24px" height="24px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle id="oval" fill="#fff" cx="15" cy="15" r="9"></circle>
                    <path d="M19.5146932,11 L11,19.5146932" id="line-1" stroke="#452eb7" stroke-width="2"></path>
                    <path d="M19.5146932,19.5146932 L11,11" id="line-2" stroke="#452eb7" stroke-width="2"></path>
                </svg>
            </div>
            <p class="get-opera-title">
                <strong>Do more on the web, with a fast and secure browser!</strong>
            </p>
            <p class="get-opera-element">Download Opera browser with:</p>
            <ul class="get-opera-features-list">
                <li class="get-opera-features-list--adblocker">built-in ad blocker</li>
                <li class="get-opera-features-list--battery-saver">battery saver</li>
                <li class="get-opera-features-list--free-vpn">free VPN</li>
            </ul>
            <a class="get-opera-btn os-default" href="https://www.opera.com/computer"
                data-query-params="utm_campaign=forums_banner&amp;utm_medium=ip&amp;utm_source=forums_opera_com">Download
                Opera</a>
        </div>

    </div>


    <div class="container" id="content">
        <noscript>
            <div class="alert alert-danger">
                <p>
                    Your browser does not seem to support JavaScript. As a result, your viewing experience will be
                    diminished, and you have been placed in <strong>read-only mode</strong>.
                </p>
                <p>
                    Please download a browser that supports JavaScript, or enable it if it's disabled (i.e. NoScript).
                </p>
            </div>
        </noscript>

        <div data-widget-area="header">

        </div>
        <div class="row">
            <div class="topic col-lg-12">
                <div class="topic-header">
                    <h1 component="post/header" class="" itemprop="name">
                        <span class="topic-title" component="topic/title">
                            <span component="topic/labels">
                                <i component="topic/scheduled" class="pull-left fa fa-clock-o hidden" title="Scheduled"></i>
                                <i component="topic/pinned" class="pull-left fa fa-thumb-tack hidden" title="Pinned"></i>
                                <i component="topic/locked" class="pull-left fa fa-lock hidden" title="Locked"></i>
                                <i class="pull-left fa fa-arrow-circle-right hidden" title="Moved"></i>

                            </span>
                            {{ $posts[0]->post_title }}
                        </span>
                    </h1>

                    <div class="topic-info clearfix">
                        <div class="category-item inline-block">
                            <div role="presentation" class="icon pull-left"
                                style="background-color: #00abef; color: #ffffff;">
                                <i class="fa fa-fw fa-windows"></i>
                            </div>
                            <a href="https://forums.opera.com/category/11/opera-for-windows">Opera for Windows</a>
                        </div>

                        <div class="tags tag-list inline-block hidden-xs">

                        </div>
                        <div class="inline-block hidden-xs">
                            <div class="stats text-muted">
                                <i class="fa fa-fw fa-user" title="Posters"></i>
                                <span title="3" class="human-readable-number">3</span>
                            </div>
                            <div class="stats text-muted">
                                <i class="fa fa-fw fa-pencil" title="Posts"></i>
                                <span component="topic/post-count" title="6" class="human-readable-number">6</span>
                            </div>
                            <div class="stats views text-muted">
                                <i class="fa fa-fw fa-eye" title="Views"></i>
                                <span class="human-readable-number" title="98">98</span>
                            </div>
                        </div>

                        <a class="hidden-xs" target="_blank" href="https://forums.opera.com/topic/53324.rss"><i
                                class="fa fa-rss-square"></i></a>

                        <div component="topic/browsing-users" class="inline-block hidden-xs">

                        </div>

                        <div class="topic-main-buttons pull-right inline-block">
                            <span class="loading-indicator btn pull-left hidden" done="0">
                                <span class="hidden-xs">Loading More Posts</span> <i class="fa fa-refresh fa-spin"></i>
                            </span>





                            <div title="Sort by" class="btn-group bottom-sheet hidden-xs" component="thread/sort">
                                <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                    <span><i class="fa fa-fw fa-sort"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" class="oldest_to_newest" data-sort="oldest_to_newest"><i
                                                class="fa fa-fw"></i> Oldest to Newest</a></li>
                                    <li><a href="#" class="newest_to_oldest" data-sort="newest_to_oldest"><i
                                                class="fa fa-fw"></i> Newest to Oldest</a></li>
                                    <li><a href="#" class="most_votes" data-sort="most_votes"><i
                                                class="fa fa-fw"></i> Most Votes</a></li>
                                </ul>
                            </div>


                            <div class="inline-block">

                            </div>
                            <div component="topic/reply/container" class="btn-group action-bar bottom-sheet hidden">
                                <a href="https://forums.opera.com/compose?tid=53324&amp;title=Do%20i%20wanna%20auto-refresh%20Opera%20or%20disable%20refresh%20in%20my%20case?"
                                    class="btn btn-sm btn-primary" component="topic/reply" data-ajaxify="false"
                                    role="button"><i class="fa fa-reply visible-xs-inline"></i><span
                                        class="visible-sm-inline visible-md-inline visible-lg-inline"> Reply</span></a>
                                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#" component="topic/reply-as-topic">Reply as topic</a></li>
                                </ul>
                            </div>




                            <a component="topic/reply/guest"
                                href="https://forums.opera.com/auth/opera?return_path=%2Ftopic%2F53324%2Fdo-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case%3F"
                                data-base-href="/auth/opera" class="btn btn-sm btn-primary operaLoginButton" rel="nofollow"
                                target="_top">Log in to reply</a>



                        </div>

                    </div>
                </div>



                <div component="topic/deleted/message" class="alert alert-warning hidden clearfix">
                    <span class="pull-left">This topic has been deleted. Only users with topic management privileges
                        can see it.</span>
                    <span class="pull-right">

                    </span>
                </div>


                <ul component="topic" class="posts timeline" data-tid="53324" data-cid="11">

                    <li component="post" class="  topic-owner-post" data-index="0" data-pid="270618" data-uid="289478"
                        data-timestamp="1640295535651" data-username="lillollo" data-userslug="lillollo" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="0" id="0"></a>

                        <meta itemprop="datePublished" content="2021-12-23T21:38:55.651Z">
                        <meta itemprop="dateModified" content="2021-12-23T21:53:14.876Z">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/lillollo">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                        data-username="lillollo" data-uid="289478">{{ $posts[0]->name }}</a>
                                </strong>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon "></i>
                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270618"><span
                                            class="timeago" title="2021-12-23T21:38:55.651Z"></span></a>
                                </span>
                            </small>
                            <p dir="auto"> {{ $posts[0]->post_body }}
                            </p>
                        </div>
                        <div class="clearfix post-footer">
                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>
                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                    <span component="post/vote-count" data-votes="0">0</span>
                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>
                                </span>
                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>
                            </small>
                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select ">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                    <img class="avatar  avatar-xs avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                        data-uid="64" loading="lazy" component="avatar/picture"
                                        src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                        style="" />

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title="2021-12-23T23:13:17.050Z"></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>
                    @foreach ($posts as $comments)
                        <li component="post" class="  topic-owner-post" data-index="0" data-pid="270618" data-uid="289478"
                            data-timestamp="1640295535651" data-username="lillollo" data-userslug="lillollo" itemscope
                            itemtype="http://schema.org/Comment">
                            <a component="post/anchor" data-index="0" id="0"></a>

                            <meta itemprop="datePublished" content="2021-12-23T21:38:55.651Z">
                            <meta itemprop="dateModified" content="2021-12-23T21:53:14.876Z">

                            <div class="clearfix post-header">
                                <div class="icon pull-left">
                                    <a href="https://forums.opera.com/user/lillollo">
                                        <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                            data-uid="289478" loading="lazy" component="user/picture"
                                            src="./black/img/{{ $comments->image }}" style="" />
                                        <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="content" component="post/content" itemprop="text">
                                <small class="post-author">
                                    <strong>
                                        <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                            data-username="lillollo" data-uid="289478">{{ $comments->name }}</a>
                                    </strong>
                                    <span
                                        class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                        <span>

                                        </span>
                                    </span>

                                </small>
                                <small class="pull-right">
                                    <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                                </small>
                                <small class="pull-right">
                                    <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon "></i>
                                    <span
                                        class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                        <a class="permalink" href="https://forums.opera.com/post/270618"><span
                                                class="timeago" title="2021-12-23T21:38:55.651Z"></span></a>
                                    </span>
                                </small>
                                <p dir="auto"> {{ $comments->comment }}
                                </p>
                            </div>

                            <div class="clearfix post-footer">


                                <small class="pull-right post-footer-menu">
                                    <span class="post-tools">
                                        <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                        <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                    </span>


                                    <span class="votes">
                                        <a component="post/upvote" href="#" class="">
                                            <i class="fa fa-thumbs-up"></i>
                                        </a>

                                        <span component="post/vote-count" data-votes="0">0</span>


                                        <a component="post/downvote" href="#" class="">
                                            <i class="fa fa-thumbs-down"></i>
                                        </a>

                                    </span>


                                    <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                        <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                                class="fa fa-fw fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                    </span>

                                </small>


                                <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                    class="threaded-replies no-select ">
                                    <span component="post/reply-count/avatars" class="avatars hidden ">

                                        <img class="avatar  avatar-xs avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                            data-uid="64" loading="lazy" component="avatar/picture"
                                            src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                            style="" />

                                    </span>

                                    <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                        Reply</strong>
                                    <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                            title="2021-12-23T23:13:17.050Z"></span></span>

                                    <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                    <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                    <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                                </a>

                                <div component="post/replies/container"></div>
                            </div>

                        </li>
                    @endforeach

                    <li component="post" class="  " data-index="1" data-pid="270630" data-uid="64"
                        data-timestamp="1640301197050" data-username="sgunhouse" data-userslug="sgunhouse" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="1" id="1"></a>

                        <meta itemprop="datePublished" content="2021-12-23T23:13:17.050Z">
                        <meta itemprop="dateModified" content="">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/sgunhouse">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                        data-uid="64" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/sgunhouse" itemprop="author"
                                        data-username="sgunhouse" data-uid="64">sgunhouse</a>
                                </strong>



                                <a href="https://forums.opera.com/groups/global-moderators"><small
                                        class="label group-label inline-block"
                                        style="color:#ffffff;background-color: #006ca6;"><i class="fa fa-gavel"></i>
                                        Moderator</small></a>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <a component="post/parent" class="btn btn-xs btn-default hidden-xs" data-topid="270618"
                                        href="https://forums.opera.com/post/270618"><i class="fa fa-reply"></i>
                                        @lillollo</a>

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon hidden"></i>

                                <small data-editor="" component="post/editor" class="hidden">last edited by <span
                                        class="timeago" title=""></span></small>

                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270630"><span
                                            class="timeago" title="2021-12-23T23:13:17.050Z"></span></a>
                                </span>
                            </small>

                            <p dir="auto"><a class="plugin-mentions-user plugin-mentions-a"
                                    href="https://forums.opera.com/uid/289478">@lillollo</a> What you're seeing is called
                                tab hibernation. Tabs that haven't been looked at in a while are dropped from RAM and have
                                to be reloaded from the cache.</p>




                        </div>

                        <div class="clearfix post-footer">


                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>


                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    <span component="post/vote-count" data-votes="0">0</span>


                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>

                                </span>


                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>

                            </small>


                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select ">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                    <img class="avatar  avatar-xs avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="avatar/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title="2021-12-26T15:47:24.493Z"></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>


                    <li component="post" class="  " data-index="2" data-pid="270632" data-uid="122"
                        data-timestamp="1640303376050" data-username="burnout426" data-userslug="burnout426" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="2" id="2"></a>

                        <meta itemprop="datePublished" content="2021-12-23T23:49:36.050Z">
                        <meta itemprop="dateModified" content="">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/burnout426">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="burnout426" title="burnout426"
                                        data-uid="122" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/304d6e1b17c5bdd141f9dc5aef93587b?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/burnout426" itemprop="author"
                                        data-username="burnout426" data-uid="122">burnout426</a>
                                </strong>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon hidden"></i>

                                <small data-editor="" component="post/editor" class="hidden">last edited by <span
                                        class="timeago" title=""></span></small>

                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270632"><span
                                            class="timeago" title="2021-12-23T23:49:36.050Z"></span></a>
                                </span>
                            </small>

                            <p dir="auto">See <a
                                    href="https://chrome.google.com/webstore/search/disable tab discard?_category=extensions"
                                    target="_blank"
                                    rel="noopener noreferrer nofollow ugc">https://chrome.google.com/webstore/search/disable
                                    tab discard?_category=extensions</a>.</p>




                        </div>

                        <div class="clearfix post-footer">


                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>


                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    <span component="post/vote-count" data-votes="0">0</span>


                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>

                                </span>


                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>

                            </small>


                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select ">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                    <img class="avatar  avatar-xs avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="avatar/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title="2021-12-26T15:56:26.225Z"></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>


                    <li component="post" class="  topic-owner-post" data-index="3" data-pid="270795" data-uid="289478"
                        data-timestamp="1640533644493" data-username="lillollo" data-userslug="lillollo" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="3" id="3"></a>

                        <meta itemprop="datePublished" content="2021-12-26T15:47:24.493Z">
                        <meta itemprop="dateModified" content="2021-12-26T15:59:50.065Z">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/lillollo">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                        data-username="lillollo" data-uid="289478">lillollo</a>
                                </strong>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <a component="post/parent" class="btn btn-xs btn-default hidden-xs" data-topid="270630"
                                        href="https://forums.opera.com/post/270630"><i class="fa fa-reply"></i>
                                        @sgunhouse</a>

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon "></i>

                                <small data-editor="lillollo" component="post/editor" class="hidden">last edited by
                                    lillollo <span class="timeago" title="2021-12-26T15:59:50.065Z"></span></small>

                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270795"><span
                                            class="timeago" title="2021-12-26T15:47:24.493Z"></span></a>
                                </span>
                            </small>

                            <p dir="auto"><a class="plugin-mentions-user plugin-mentions-a"
                                    href="https://forums.opera.com/uid/64">@sgunhouse</a> Thanks! then i instead dont
                                understand what the auto-refresh phenomen everybody else talk about mean? <img
                                    src="../../plugins/nodebb-plugin-emoji/emoji/emoji-one/1f6420606.png?v=91djilae11a"
                                    class="not-responsive emoji emoji-emoji-one emoji--slightly_smiling_face" title=":)"
                                    alt="🙂" /> when am i affected?</p>




                        </div>

                        <div class="clearfix post-footer">


                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>


                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    <span component="post/vote-count" data-votes="0">0</span>


                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>

                                </span>


                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>

                            </small>


                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select ">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                    <img class="avatar  avatar-xs avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                        data-uid="64" loading="lazy" component="avatar/picture"
                                        src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                        style="" />

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title="2021-12-26T16:48:13.287Z"></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>


                    <li component="post" class="  topic-owner-post" data-index="4" data-pid="270796" data-uid="289478"
                        data-timestamp="1640534186225" data-username="lillollo" data-userslug="lillollo" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="4" id="4"></a>

                        <meta itemprop="datePublished" content="2021-12-26T15:56:26.225Z">
                        <meta itemprop="dateModified" content="2021-12-26T15:58:06.614Z">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/lillollo">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                        data-username="lillollo" data-uid="289478">lillollo</a>
                                </strong>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <a component="post/parent" class="btn btn-xs btn-default hidden-xs" data-topid="270632"
                                        href="https://forums.opera.com/post/270632"><i class="fa fa-reply"></i>
                                        @burnout426</a>

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon "></i>

                                <small data-editor="lillollo" component="post/editor" class="hidden">last edited by
                                    lillollo <span class="timeago" title="2021-12-26T15:58:06.614Z"></span></small>

                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270796"><span
                                            class="timeago" title="2021-12-26T15:56:26.225Z"></span></a>
                                </span>
                            </small>

                            <p dir="auto"><a class="plugin-mentions-user plugin-mentions-a"
                                    href="https://forums.opera.com/uid/122">@burnout426</a> i will loose 80 % memory in the
                                brain according to studys on tau protein if im not a hibernating bear <img
                                    src="../../plugins/nodebb-plugin-emoji/emoji/emoji-one/1f6090606.png?v=91djilae11a"
                                    class="not-responsive emoji emoji-emoji-one emoji--winking_face" title=";)" alt="😉" />
                                accprding to this app<br />
                                <a href="https://chrome.google.com/webstore/detail/tab-suspender/fiabciakcmgepblmdkmemdbbkilneeeh"
                                    target="_blank"
                                    rel="noopener noreferrer nofollow ugc">https://chrome.google.com/webstore/detail/tab-suspender/fiabciakcmgepblmdkmemdbbkilneeeh</a>
                            </p>
                            <p dir="auto">So i think i choose this opposite app<br />
                                <a href="https://chrome.google.com/webstore/detail/donotdiscard-disable-tab/piohlfbmepkepkoiacedlalbmbkjfphc"
                                    target="_blank"
                                    rel="noopener noreferrer nofollow ugc">https://chrome.google.com/webstore/detail/donotdiscard-disable-tab/piohlfbmepkepkoiacedlalbmbkjfphc</a><br />
                                I have only! 130 tabs open, can i manually disable only <a href="http://youtube.com/"
                                    target="_blank" rel="noopener noreferrer nofollow ugc">youtube.com</a>?<br />
                                and podcast-sites from hibernation it might not hog my memory
                            </p>




                        </div>

                        <div class="clearfix post-footer">


                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>


                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    <span component="post/vote-count" data-votes="0">0</span>


                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>

                                </span>


                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>

                            </small>


                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select hidden">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="0">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title=""></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>


                    <li component="post" class="  " data-index="5" data-pid="270798" data-uid="64"
                        data-timestamp="1640537293287" data-username="sgunhouse" data-userslug="sgunhouse" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="5" id="5"></a>

                        <meta itemprop="datePublished" content="2021-12-26T16:48:13.287Z">
                        <meta itemprop="dateModified" content="">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/sgunhouse">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                        data-uid="64" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                            <small class="post-author">
                                <strong>
                                    <a href="https://forums.opera.com/user/sgunhouse" itemprop="author"
                                        data-username="sgunhouse" data-uid="64">sgunhouse</a>
                                </strong>



                                <a href="https://forums.opera.com/groups/global-moderators"><small
                                        class="label group-label inline-block"
                                        style="color:#ffffff;background-color: #006ca6;"><i class="fa fa-gavel"></i>
                                        Moderator</small></a>





                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">

                                    <a component="post/parent" class="btn btn-xs btn-default hidden-xs" data-topid="270795"
                                        href="https://forums.opera.com/post/270795"><i class="fa fa-reply"></i>
                                        @lillollo</a>

                                    <span>

                                    </span>
                                </span>

                            </small>
                            <small class="pull-right">
                                <span class="bookmarked"><i class="fa fa-bookmark-o"></i></span>
                            </small>
                            <small class="pull-right">
                                <i component="post/edit-indicator" class="fa fa-pencil-square edit-icon hidden"></i>

                                <small data-editor="" component="post/editor" class="hidden">last edited by <span
                                        class="timeago" title=""></span></small>

                                <span
                                    class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                                    <a class="permalink" href="https://forums.opera.com/post/270798"><span
                                            class="timeago" title="2021-12-26T16:48:13.287Z"></span></a>
                                </span>
                            </small>

                            <p dir="auto"><a class="plugin-mentions-user plugin-mentions-a"
                                    href="https://forums.opera.com/uid/289478">@lillollo</a> Auto-refresh refers to any tab
                                - even active tabs, Some sites regularly update with new information. On newer "dynamic"
                                sites they do that without having to reload the full page, but on older sites they did that
                                by setting an "auto-refresh" timer. Sometimes the time they chose was really silly, like
                                every 30 seconds on one auction site I remember (you couldn't read through half the page in
                                that time, and when it refreshed it always went back to the top}. On others they didn't set
                                any refresh time and should have. The extension you're looking at is for that - sites that
                                don't use dynamic content but need to be refreshed at a different rate than they are set
                                for.</p>




                        </div>

                        <div class="clearfix post-footer">


                            <small class="pull-right post-footer-menu">
                                <span class="post-tools">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>


                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    <span component="post/vote-count" data-votes="0">0</span>


                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>

                                </span>


                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>

                            </small>


                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select hidden">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="0">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title=""></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div>

                    </li>


                </ul>





                <div class="pagination-block text-center">
                    <div class="progress-bar"></div>
                    <div class="wrapper dropup">
                        <i class="fa fa-2x fa-angle-double-up pointer fa-fw pagetop"></i>

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="pagination-text"></span>
                        </a>

                        <i class="fa fa-2x fa-angle-double-down pointer fa-fw pagebottom"></i>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-xs-8 post-content"></div>
                                    <div class="col-xs-4 text-right">
                                        <div class="scroller-content">
                                            <span class="pointer pagetop">First post <i
                                                    class="fa fa-angle-double-up"></i></span>
                                            <div class="scroller-container">
                                                <div class="scroller-thumb">
                                                    <span class="thumb-text"></span>
                                                    <div class="scroller-thumb-icon"></div>
                                                </div>
                                            </div>
                                            <span class="pointer pagebottom">Last post <i
                                                    class="fa fa-angle-double-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="indexInput" placeholder="Enter index">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-widget-area="sidebar" class="col-lg-3 col-sm-12 hidden">

            </div>
        </div>

        <div data-widget-area="footer">

        </div>


        <noscript>
            <div component="pagination" class="text-center pagination-container hidden">
                <ul class="pagination hidden-xs">
                    <li class="previous pull-left disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-chevron-left"></i> </a>
                    </li>



                    <li class="next pull-right disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"> <i
                                class="fa fa-chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="pagination hidden-sm hidden-md hidden-lg">
                    <li class="first disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-fast-backward"></i> </a>
                    </li>

                    <li class="previous disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-chevron-left"></i> </a>
                    </li>

                    <li component="pagination/select-page" class="page select-page">
                        <a href="#">1 / 1</a>
                    </li>

                    <li class="next disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"> <i
                                class="fa fa-chevron-right"></i></a>
                    </li>

                    <li class="last disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-fast-forward"></i> </a>
                    </li>
                </ul>
            </div>
        </noscript>

        <script id="ajaxify-data" type="application/json">
            {
                "tid": 53324,
                "uid": 289478,
                "cid": 11,
                "mainPid": 270618,
                "title": "Do i wanna auto-refresh Opera or disable refresh in my case?",
                "slug": "53324/do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case",
                "timestamp": 1640295535651,
                "lastposttime": 1640537293287,
                "postcount": 6,
                "viewcount": 98,
                "postercount": 3,
                "tags": [],
                "teaserPid": 270798,
                "deleted": 0,
                "locked": 0,
                "pinned": 0,
                "pinExpiry": 0,
                "upvotes": 0,
                "downvotes": 0,
                "deleterUid": 0,
                "titleRaw": "Do i wanna auto-refresh Opera or disable refresh in my case?",
                "timestampISO": "2021-12-23T21:38:55.651Z",
                "scheduled": false,
                "lastposttimeISO": "2021-12-26T16:48:13.287Z",
                "pinExpiryISO": "",
                "votes": 0,
                "thumbs": [],
                "posts": [{
                    "pid": 270618,
                    "uid": 289478,
                    "tid": 53324,
                    "content": "<p dir=\"auto\">Re: <a href=\"/topic/43053/how-do-i-set-a-web-page-to-auto-refresh-in-opera\">How do I set a web page to auto refresh in Opera?<\/a><\/p>\n<p dir=\"auto\">I dont auto-understand this tech-english so i need a refresh <img src=\"https://forums.opera.com/plugins/nodebb-plugin-emoji/emoji/emoji-one/1f609.png?v=91djilae11a\" class=\"not-responsive emoji emoji-emoji-one emoji--winking_face\" title=\";)\" alt=\"😉\" /><\/p>\n<p dir=\"auto\">All i know is that i wanna make Opera to stop behaving as it does by deafult and that<br />\nis every time i swap between tabs, it will after several minutes have passed<br />\nauto-reread the tab, but only!! when re-enter that particular tab, Im not sure if the phenomen you call refresh means the same thing as re-read???<\/p>\n<p dir=\"auto\">What i mean with re-read is that if im listening to a podcast or watch a youtube video and then paus it in that tab....it will restart the mediaplayer from time-stamp zero agaon after i  i return  next time to that tab to continue playing.<\/p>\n<p dir=\"auto\">I have installed the app <a href=\"https://chrome.google.com/webstore/detail/tab-auto-refresh/jaioibhbkffompljnnipmpkeafhpicpd\" target=\"_blank\" rel=\"noopener noreferrer nofollow ugc\">https://chrome.google.com/webstore/detail/tab-auto-refresh/jaioibhbkffompljnnipmpkeafhpicpd<\/a><br />\nThe settings however make no sence to me, if i would enable auto-refresh every 200000000 minute i interpetate that it will make the tabs stop re-reading the page when i manually return to that page?.<br />\nBut i dont see any difference with that setting, it keeps re-reading...so i must double check with you<\/p>\n<p dir=\"auto\">Shall i sett a page to \"stop refresh for current  tab\"  or \"clear refresh for all tabs\"?<br />\nShall i sett a page to bypass cache? or reset tab?<\/p>\n<p dir=\"auto\">I understand somewhat what this thermes could mean in english, but i dont understand what action will generate what outcome?<\/p>\n",
                    "timestamp": 1640295535651,
                    "editor": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "displayname": "lillollo"
                    },
                    "edited": 1640296394876,
                    "replies": {
                        "hasMore": false,
                        "users": [{
                            "uid": 64,
                            "username": "sgunhouse",
                            "userslug": "sgunhouse",
                            "picture": "https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&d=mm",
                            "displayname": "sgunhouse",
                            "icon:text": "S",
                            "icon:bgColor": "#607d8b"
                        }],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 1,
                        "timestampISO": "2021-12-23T23:13:17.050Z"
                    },
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-23T21:38:55.651Z",
                    "editedISO": "2021-12-23T21:53:14.876Z",
                    "index": 0,
                    "nextPostTimestamp": 1640301197050,
                    "user": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "reputation": 4,
                        "postcount": 43,
                        "topiccount": 9,
                        "picture": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640534186255,
                        "groupTitle": null,
                        "displayname": "lillollo",
                        "groupTitleArray": [],
                        "icon:text": "L",
                        "icon:bgColor": "#607d8b",
                        "lastonlineISO": "2021-12-26T15:56:26.255Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [],
                        "custom_profile_info": []
                    },
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": true,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }, {
                    "pid": 270630,
                    "uid": 64,
                    "tid": 53324,
                    "content": "<p dir=\"auto\"><a class=\"plugin-mentions-user plugin-mentions-a\" href=\"https://forums.opera.com/uid/289478\">@lillollo<\/a> What you're seeing is called tab hibernation. Tabs that haven't been looked at in a while are dropped from RAM and have to be reloaded from the cache.<\/p>\n",
                    "timestamp": 1640301197050,
                    "toPid": "270618",
                    "replies": {
                        "hasMore": false,
                        "users": [{
                            "uid": 289478,
                            "username": "lillollo",
                            "userslug": "lillollo",
                            "picture": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                            "displayname": "lillollo",
                            "icon:text": "L",
                            "icon:bgColor": "#607d8b"
                        }],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 1,
                        "timestampISO": "2021-12-26T15:47:24.493Z"
                    },
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "edited": 0,
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-23T23:13:17.050Z",
                    "editedISO": "",
                    "index": 1,
                    "nextPostTimestamp": 1640303376050,
                    "parent": {
                        "username": "lillollo"
                    },
                    "user": {
                        "uid": 64,
                        "username": "sgunhouse",
                        "userslug": "sgunhouse",
                        "reputation": 392,
                        "postcount": 7260,
                        "topiccount": 28,
                        "picture": "https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640537293325,
                        "groupTitle": "Global Moderators",
                        "displayname": "sgunhouse",
                        "groupTitleArray": ["Global Moderators"],
                        "icon:text": "S",
                        "icon:bgColor": "#607d8b",
                        "lastonlineISO": "2021-12-26T16:48:13.325Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [{
                            "name": "Global Moderators",
                            "slug": "global-moderators",
                            "labelColor": "#006ca6",
                            "textColor": "#ffffff",
                            "icon": "fa-gavel",
                            "userTitle": "Moderator"
                        }],
                        "custom_profile_info": []
                    },
                    "editor": null,
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": false,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }, {
                    "pid": 270632,
                    "uid": 122,
                    "tid": 53324,
                    "content": "<p dir=\"auto\">See <a href=\"https://chrome.google.com/webstore/search/disable%20tab%20discard?_category=extensions\" target=\"_blank\" rel=\"noopener noreferrer nofollow ugc\">https://chrome.google.com/webstore/search/disable tab discard?_category=extensions<\/a>.<\/p>\n",
                    "timestamp": 1640303376050,
                    "replies": {
                        "hasMore": false,
                        "users": [{
                            "uid": 289478,
                            "username": "lillollo",
                            "userslug": "lillollo",
                            "picture": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                            "displayname": "lillollo",
                            "icon:text": "L",
                            "icon:bgColor": "#607d8b"
                        }],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 1,
                        "timestampISO": "2021-12-26T15:56:26.225Z"
                    },
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "edited": 0,
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-23T23:49:36.050Z",
                    "editedISO": "",
                    "index": 2,
                    "nextPostTimestamp": 1640533644493,
                    "user": {
                        "uid": 122,
                        "username": "burnout426",
                        "userslug": "burnout426",
                        "reputation": 978,
                        "postcount": 5718,
                        "topiccount": 8,
                        "picture": "https://www.gravatar.com/avatar/304d6e1b17c5bdd141f9dc5aef93587b?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640504607160,
                        "groupTitle": null,
                        "displayname": "burnout426",
                        "groupTitleArray": [],
                        "icon:text": "B",
                        "icon:bgColor": "#e91e63",
                        "lastonlineISO": "2021-12-26T07:43:27.160Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [],
                        "custom_profile_info": []
                    },
                    "editor": null,
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": false,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }, {
                    "pid": 270795,
                    "uid": 289478,
                    "tid": 53324,
                    "content": "<p dir=\"auto\"><a class=\"plugin-mentions-user plugin-mentions-a\" href=\"https://forums.opera.com/uid/64\">@sgunhouse<\/a> Thanks! then i instead dont understand what the auto-refresh phenomen everybody else talk about mean? <img src=\"https://forums.opera.com/plugins/nodebb-plugin-emoji/emoji/emoji-one/1f642.png?v=91djilae11a\" class=\"not-responsive emoji emoji-emoji-one emoji--slightly_smiling_face\" title=\":)\" alt=\"🙂\" /> when am i affected?<\/p>\n",
                    "timestamp": 1640533644493,
                    "toPid": "270630",
                    "editor": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "displayname": "lillollo"
                    },
                    "edited": 1640534390065,
                    "replies": {
                        "hasMore": false,
                        "users": [{
                            "uid": 64,
                            "username": "sgunhouse",
                            "userslug": "sgunhouse",
                            "picture": "https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&d=mm",
                            "displayname": "sgunhouse",
                            "icon:text": "S",
                            "icon:bgColor": "#607d8b"
                        }],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 1,
                        "timestampISO": "2021-12-26T16:48:13.287Z"
                    },
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-26T15:47:24.493Z",
                    "editedISO": "2021-12-26T15:59:50.065Z",
                    "index": 3,
                    "nextPostTimestamp": 1640534186225,
                    "parent": {
                        "username": "sgunhouse"
                    },
                    "user": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "reputation": 4,
                        "postcount": 43,
                        "topiccount": 9,
                        "picture": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640534186255,
                        "groupTitle": null,
                        "displayname": "lillollo",
                        "groupTitleArray": [],
                        "icon:text": "L",
                        "icon:bgColor": "#607d8b",
                        "lastonlineISO": "2021-12-26T15:56:26.255Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [],
                        "custom_profile_info": []
                    },
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": true,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }, {
                    "pid": 270796,
                    "uid": 289478,
                    "tid": 53324,
                    "content": "<p dir=\"auto\"><a class=\"plugin-mentions-user plugin-mentions-a\" href=\"https://forums.opera.com/uid/122\">@burnout426<\/a> i will loose 80 % memory in the brain according to studys on tau protein if im not a hibernating bear <img src=\"https://forums.opera.com/plugins/nodebb-plugin-emoji/emoji/emoji-one/1f609.png?v=91djilae11a\" class=\"not-responsive emoji emoji-emoji-one emoji--winking_face\" title=\";)\" alt=\"😉\" /> accprding to this app<br />\n<a href=\"https://chrome.google.com/webstore/detail/tab-suspender/fiabciakcmgepblmdkmemdbbkilneeeh\" target=\"_blank\" rel=\"noopener noreferrer nofollow ugc\">https://chrome.google.com/webstore/detail/tab-suspender/fiabciakcmgepblmdkmemdbbkilneeeh<\/a><\/p>\n<p dir=\"auto\">So i think i choose this opposite app<br />\n<a href=\"https://chrome.google.com/webstore/detail/donotdiscard-disable-tab/piohlfbmepkepkoiacedlalbmbkjfphc\" target=\"_blank\" rel=\"noopener noreferrer nofollow ugc\">https://chrome.google.com/webstore/detail/donotdiscard-disable-tab/piohlfbmepkepkoiacedlalbmbkjfphc<\/a><br />\nI have only! 130 tabs open,  can i manually disable only <a href=\"http://youtube.com\" target=\"_blank\" rel=\"noopener noreferrer nofollow ugc\">youtube.com<\/a>?<br />\nand podcast-sites from hibernation it might not hog my memory<\/p>\n",
                    "timestamp": 1640534186225,
                    "toPid": "270632",
                    "editor": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "displayname": "lillollo"
                    },
                    "edited": 1640534286614,
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "replies": {
                        "hasMore": false,
                        "users": [],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 0
                    },
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-26T15:56:26.225Z",
                    "editedISO": "2021-12-26T15:58:06.614Z",
                    "index": 4,
                    "nextPostTimestamp": 1640537293287,
                    "parent": {
                        "username": "burnout426"
                    },
                    "user": {
                        "uid": 289478,
                        "username": "lillollo",
                        "userslug": "lillollo",
                        "reputation": 4,
                        "postcount": 43,
                        "topiccount": 9,
                        "picture": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640534186255,
                        "groupTitle": null,
                        "displayname": "lillollo",
                        "groupTitleArray": [],
                        "icon:text": "L",
                        "icon:bgColor": "#607d8b",
                        "lastonlineISO": "2021-12-26T15:56:26.255Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [],
                        "custom_profile_info": []
                    },
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": true,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }, {
                    "pid": 270798,
                    "uid": 64,
                    "tid": 53324,
                    "content": "<p dir=\"auto\"><a class=\"plugin-mentions-user plugin-mentions-a\" href=\"https://forums.opera.com/uid/289478\">@lillollo<\/a> Auto-refresh refers to any tab - even active tabs, Some sites regularly update with new information. On newer \"dynamic\" sites they do that without having to reload the full page, but on older sites they did that by setting an \"auto-refresh\" timer. Sometimes the time they chose was really silly, like every 30 seconds on one auction site I remember (you couldn't read through half the page in that time, and when it refreshed it always went back to the top}. On others they didn't set any refresh time and should have. The extension you're looking at is for that - sites that don't use dynamic content but need to be refreshed at a different rate than they are set for.<\/p>\n",
                    "timestamp": 1640537293287,
                    "toPid": "270795",
                    "deleted": 0,
                    "upvotes": 0,
                    "downvotes": 0,
                    "deleterUid": 0,
                    "edited": 0,
                    "replies": {
                        "hasMore": false,
                        "users": [],
                        "text": "[[topic:one_reply_to_this_post]]",
                        "count": 0
                    },
                    "bookmarks": 0,
                    "votes": 0,
                    "timestampISO": "2021-12-26T16:48:13.287Z",
                    "editedISO": "",
                    "index": 5,
                    "nextPostTimestamp": 1640547885140,
                    "parent": {
                        "username": "lillollo"
                    },
                    "user": {
                        "uid": 64,
                        "username": "sgunhouse",
                        "userslug": "sgunhouse",
                        "reputation": 392,
                        "postcount": 7260,
                        "topiccount": 28,
                        "picture": "https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&d=mm",
                        "signature": "",
                        "banned": false,
                        "banned:expire": 0,
                        "status": "offline",
                        "lastonline": 1640537293325,
                        "groupTitle": "Global Moderators",
                        "displayname": "sgunhouse",
                        "groupTitleArray": ["Global Moderators"],
                        "icon:text": "S",
                        "icon:bgColor": "#607d8b",
                        "lastonlineISO": "2021-12-26T16:48:13.325Z",
                        "banned_until": 0,
                        "banned_until_readable": "Not Banned",
                        "selectedGroups": [{
                            "name": "Global Moderators",
                            "slug": "global-moderators",
                            "labelColor": "#006ca6",
                            "textColor": "#ffffff",
                            "icon": "fa-gavel",
                            "userTitle": "Moderator"
                        }],
                        "custom_profile_info": []
                    },
                    "editor": null,
                    "bookmarked": false,
                    "upvoted": false,
                    "downvoted": false,
                    "selfPost": false,
                    "topicOwnerPost": false,
                    "display_edit_tools": false,
                    "display_delete_tools": false,
                    "display_moderator_tools": false,
                    "display_move_tools": false,
                    "display_post_menu": true
                }],
                "events": [],
                "category": {
                    "cid": 11,
                    "name": "Opera for Windows",
                    "description": "Discuss Windows-specific topics here",
                    "descriptionParsed": "<p>Discuss Windows-specific topics here<\/p>\n",
                    "icon": "fa-windows",
                    "bgColor": "#00abef",
                    "color": "#ffffff",
                    "slug": "11/opera-for-windows",
                    "parentCid": 5,
                    "topic_count": 20463,
                    "post_count": 105928,
                    "disabled": 0,
                    "order": 11,
                    "link": "",
                    "numRecentReplies": 1,
                    "class": "col-md-3 col-xs-6",
                    "imageClass": "cover",
                    "subCategoriesPerPage": 10,
                    "minTags": 0,
                    "maxTags": 5,
                    "postQueue": 1,
                    "isSection": 0,
                    "totalPostCount": 105928,
                    "totalTopicCount": 20463
                },
                "tagWhitelist": [],
                "minTags": 0,
                "maxTags": 5,
                "thread_tools": [],
                "isFollowing": false,
                "isNotFollowing": true,
                "isIgnoring": false,
                "bookmark": null,
                "postSharing": [{
                    "id": "facebook",
                    "name": "Facebook",
                    "class": "fa-facebook",
                    "activated": true
                }, {
                    "id": "twitter",
                    "name": "Twitter",
                    "class": "fa-twitter",
                    "activated": true
                }],
                "deleter": null,
                "merger": null,
                "related": [],
                "unreplied": false,
                "icons": [],
                "privileges": {
                    "topics:reply": false,
                    "topics:read": true,
                    "topics:schedule": false,
                    "topics:tag": false,
                    "topics:delete": false,
                    "posts:edit": false,
                    "posts:history": false,
                    "posts:delete": false,
                    "posts:view_deleted": false,
                    "read": true,
                    "purge": false,
                    "view_thread_tools": false,
                    "editable": false,
                    "deletable": false,
                    "view_deleted": false,
                    "view_scheduled": false,
                    "isAdminOrMod": false,
                    "disabled": 0,
                    "tid": "53324",
                    "uid": 0
                },
                "topicStaleDays": 60,
                "reputation:disabled": 0,
                "downvote:disabled": 0,
                "feeds:disableRSS": 0,
                "bookmarkThreshold": 5,
                "necroThreshold": 7,
                "postEditDuration": 1800,
                "postDeleteDuration": 1800,
                "scrollToMyPost": true,
                "updateUrlWithPostIndex": true,
                "allowMultipleBadges": true,
                "privateUploads": false,
                "showPostPreviewsOnHover": true,
                "rssFeedUrl": "/topic/53324.rss",
                "postIndex": 1,
                "breadcrumbs": [{
                    "text": "[[global:home]]",
                    "url": "/"
                }, {
                    "text": "Opera for computers",
                    "url": "/category/5/opera-for-computers",
                    "cid": 5
                }, {
                    "text": "Opera for Windows",
                    "url": "/category/11/opera-for-windows",
                    "cid": 11
                }, {
                    "text": "Do i wanna auto-refresh Opera or disable refresh in my case?"
                }],
                "pagination": {
                    "prev": {
                        "page": 1,
                        "active": false
                    },
                    "next": {
                        "page": 1,
                        "active": false
                    },
                    "first": {
                        "page": 1,
                        "active": true
                    },
                    "last": {
                        "page": 1,
                        "active": true
                    },
                    "rel": [],
                    "pages": [],
                    "currentPage": 1,
                    "pageCount": 1
                },
                "loggedIn": false,
                "relative_path": "",
                "template": {
                    "name": "topic",
                    "topic": true
                },
                "url": "/topic/53324/do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case",
                "bodyClass": "page-topic page-topic-53324 page-topic-do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case page-topic-category-11 page-topic-category-opera-for-windows parent-category-5 parent-category-11 page-status-200 user-guest",
                "returnPath": "%2Ftopic%2F53324%2Fdo-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case%3F",
                "_header": {
                    "tags": {
                        "meta": [{
                            "name": "viewport",
                            "content": "width&#x3D;device-width, initial-scale&#x3D;1.0"
                        }, {
                            "name": "content-type",
                            "content": "text/html; charset=UTF-8",
                            "noEscape": true
                        }, {
                            "name": "apple-mobile-web-app-capable",
                            "content": "yes"
                        }, {
                            "name": "mobile-web-app-capable",
                            "content": "yes"
                        }, {
                            "property": "og:site_name",
                            "content": "Opera forums"
                        }, {
                            "name": "msapplication-badge",
                            "content": "frequency=30; polling-uri=https://forums.opera.com/sitemap.xml",
                            "noEscape": true
                        }, {
                            "name": "theme-color",
                            "content": "#ffffff"
                        }, {
                            "name": "title",
                            "content": "Do i wanna auto-refresh Opera or disable refresh in my case?"
                        }, {
                            "name": "description",
                            "content": "Re: How do I set a web page to auto refresh in Opera? I dont auto-understand this tech-english so i need a refresh  All i know is that i wanna make Opera to stop behaving as it does by deafult and that is every time i swap between tabs, it will after seve..."
                        }, {
                            "property": "og:title",
                            "content": "Do i wanna auto-refresh Opera or disable refresh in my case?"
                        }, {
                            "property": "og:description",
                            "content": "Re: How do I set a web page to auto refresh in Opera? I dont auto-understand this tech-english so i need a refresh  All i know is that i wanna make Opera to stop behaving as it does by deafult and that is every time i swap between tabs, it will after seve..."
                        }, {
                            "property": "og:type",
                            "content": "article"
                        }, {
                            "property": "article:published_time",
                            "content": "2021-12-23T21:38:55.651Z"
                        }, {
                            "property": "article:modified_time",
                            "content": "2021-12-26T16:48:13.287Z"
                        }, {
                            "property": "article:section",
                            "content": "Opera for Windows"
                        }, {
                            "property": "og:image",
                            "content": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                            "noEscape": true
                        }, {
                            "property": "og:image:url",
                            "content": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                            "noEscape": true
                        }, {
                            "property": "og:image",
                            "content": "https://forums.opera.com/assets/uploads/system/og-image.png",
                            "noEscape": true
                        }, {
                            "property": "og:image:url",
                            "content": "https://forums.opera.com/assets/uploads/system/og-image.png",
                            "noEscape": true
                        }, {
                            "property": "og:image:width",
                            "content": "192"
                        }, {
                            "property": "og:image:height",
                            "content": "192"
                        }, {
                            "content": "https://forums.opera.com/topic/53324/do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case?",
                            "property": "og:url"
                        }],
                        "link": [{
                            "rel": "icon",
                            "type": "image/x-icon",
                            "href": "/assets/uploads/system/favicon.ico?v&#x3D;91djilae11a"
                        }, {
                            "rel": "manifest",
                            "href": "/manifest.webmanifest",
                            "crossorigin": "use-credentials"
                        }, {
                            "rel": "search",
                            "type": "application/opensearchdescription+xml",
                            "title": "Opera forums",
                            "href": "/osd.xml"
                        }, {
                            "rel": "apple-touch-icon",
                            "href": "/assets/uploads/system/touchicon-orig.png"
                        }, {
                            "rel": "icon",
                            "sizes": "36x36",
                            "href": "/assets/uploads/system/touchicon-36.png"
                        }, {
                            "rel": "icon",
                            "sizes": "48x48",
                            "href": "/assets/uploads/system/touchicon-48.png"
                        }, {
                            "rel": "icon",
                            "sizes": "72x72",
                            "href": "/assets/uploads/system/touchicon-72.png"
                        }, {
                            "rel": "icon",
                            "sizes": "96x96",
                            "href": "/assets/uploads/system/touchicon-96.png"
                        }, {
                            "rel": "icon",
                            "sizes": "144x144",
                            "href": "/assets/uploads/system/touchicon-144.png"
                        }, {
                            "rel": "icon",
                            "sizes": "192x192",
                            "href": "/assets/uploads/system/touchicon-192.png"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/uploads.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/drafts.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/tags.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/categoryList.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/resize.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/composer/autocomplete.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/templates/composer.tpl?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/language/en-GB/topic.json?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/language/en-GB/modules.json?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/language/en-GB/tags.json?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch stylesheet",
                            "type": "",
                            "href": "/plugins/nodebb-plugin-markdown/styles/railscasts.css"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/src/modules/highlight.js?v&#x3D;91djilae11a"
                        }, {
                            "rel": "prefetch",
                            "href": "/assets/language/en-GB/markdown.json?v&#x3D;91djilae11a"
                        }, {
                            "rel": "stylesheet",
                            "href": "/plugins/nodebb-plugin-emoji/emoji/styles.css?v&#x3D;91djilae11a"
                        }, {
                            "rel": "canonical",
                            "href": "https://forums.opera.com/topic/53324/do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case"
                        }, {
                            "rel": "alternate",
                            "type": "application/rss+xml",
                            "href": "/topic/53324.rss"
                        }, {
                            "rel": "up",
                            "href": "https://forums.opera.com/category/11/opera-for-windows"
                        }]
                    }
                },
                "widgets": {
                    "header": []
                },
                "_locals": {
                    "useragent": {
                        "isYaBrowser": false,
                        "isAuthoritative": true,
                        "isMobile": false,
                        "isMobileNative": false,
                        "isTablet": false,
                        "isiPad": false,
                        "isiPod": false,
                        "isiPhone": false,
                        "isiPhoneNative": false,
                        "isAndroid": false,
                        "isAndroidNative": false,
                        "isBlackberry": false,
                        "isOpera": false,
                        "isIE": false,
                        "isEdge": false,
                        "isIECompatibilityMode": false,
                        "isSafari": false,
                        "isFirefox": false,
                        "isWebkit": false,
                        "isChrome": false,
                        "isKonqueror": false,
                        "isOmniWeb": false,
                        "isSeaMonkey": false,
                        "isFlock": false,
                        "isAmaya": false,
                        "isPhantomJS": false,
                        "isEpiphany": false,
                        "isDesktop": false,
                        "isWindows": false,
                        "isLinux": false,
                        "isLinux64": false,
                        "isMac": false,
                        "isChromeOS": false,
                        "isBada": false,
                        "isSamsung": false,
                        "isRaspberry": false,
                        "isBot": false,
                        "isCurl": false,
                        "isAndroidTablet": false,
                        "isWinJs": false,
                        "isKindleFire": false,
                        "isSilk": false,
                        "isCaptive": false,
                        "isSmartTV": false,
                        "isUC": false,
                        "isFacebook": false,
                        "isAlamoFire": false,
                        "isElectron": false,
                        "silkAccelerated": false,
                        "browser": "unknown",
                        "version": "unknown",
                        "os": "unknown",
                        "platform": "unknown",
                        "geoIp": {},
                        "source": "Mozilla/4.5 (compatible; HTTrack 3.0x; Windows 98)",
                        "isWechat": false
                    },
                    "renderHeader": true,
                    "isAPI": false,
                    "config": {
                        "relative_path": "",
                        "upload_url": "/assets/uploads",
                        "assetBaseUrl": "/assets",
                        "siteTitle": "Opera forums",
                        "browserTitle": "Opera forums",
                        "titleLayout": "&#123;pageTitle&#125; | &#123;browserTitle&#125;",
                        "showSiteTitle": true,
                        "maintenanceMode": false,
                        "minimumTitleLength": 4,
                        "maximumTitleLength": 255,
                        "minimumPostLength": 4,
                        "maximumPostLength": 32767,
                        "minimumTagsPerTopic": 0,
                        "maximumTagsPerTopic": 5,
                        "minimumTagLength": 3,
                        "maximumTagLength": 15,
                        "undoTimeout": 10000,
                        "useOutgoingLinksPage": false,
                        "allowGuestHandles": false,
                        "allowTopicsThumbnail": false,
                        "usePagination": false,
                        "disableChat": false,
                        "disableChatMessageEditing": false,
                        "maximumChatMessageLength": 1000,
                        "socketioTransports": ["polling", "websocket"],
                        "socketioOrigins": "https://forums.opera.com:*",
                        "websocketAddress": "",
                        "maxReconnectionAttempts": 5,
                        "reconnectionDelay": 1500,
                        "topicsPerPage": 20,
                        "postsPerPage": 20,
                        "maximumFileSize": 2048,
                        "theme:id": "nodebb-theme-opera",
                        "theme:src": "",
                        "defaultLang": "en-GB",
                        "userLang": "en-GB",
                        "loggedIn": false,
                        "uid": 0,
                        "cache-buster": "v=91djilae11a",
                        "topicPostSort": "oldest_to_newest",
                        "categoryTopicSort": "newest_to_oldest",
                        "csrf_token": "2eKx3lIB-345dbhluQOIXILwOeCTCpaWdw6Q",
                        "searchEnabled": true,
                        "searchDefaultInQuick": "titles",
                        "bootswatchSkin": "",
                        "enablePostHistory": true,
                        "timeagoCutoff": 30,
                        "timeagoCodes": ["af", "am", "ar", "az-short", "az", "be", "bg", "bs", "ca", "cs", "cy", "da",
                            "de-short", "de", "dv", "el", "en-short", "en", "es-short", "es", "et", "eu", "fa-short", "fa",
                            "fi", "fr-short", "fr", "gl", "he", "hr", "hu", "hy", "id", "is", "it-short", "it", "ja", "jv",
                            "ko", "ky", "lt", "lv", "mk", "nl", "no", "pl", "pt-br-short", "pt-br", "pt-short", "pt", "ro",
                            "rs", "ru", "rw", "si", "sk", "sl", "sq", "sr", "sv", "th", "tr-short", "tr", "uk", "ur", "uz",
                            "vi", "zh-CN", "zh-TW"
                        ],
                        "cookies": {
                            "enabled": false,
                            "message": "&lsqb;&lsqb;global:cookies.message&rsqb;&rsqb;",
                            "dismiss": "&lsqb;&lsqb;global:cookies.accept&rsqb;&rsqb;",
                            "link": "&lsqb;&lsqb;global:cookies.learn_more&rsqb;&rsqb;",
                            "link_url": "https:&#x2F;&#x2F;www.cookiesandyou.com"
                        },
                        "thumbs": {
                            "size": 512
                        },
                        "iconBackgrounds": ["#f44336", "#e91e63", "#9c27b0", "#673ab7", "#3f51b5", "#2196f3", "#009688",
                            "#1b5e20", "#33691e", "#827717", "#e65100", "#ff5722", "#795548", "#607d8b"
                        ],
                        "emailPrompt": 1,
                        "acpLang": "en-GB",
                        "topicSearchEnabled": false,
                        "hideSubCategories": false,
                        "hideCategoryLastPost": false,
                        "enableQuickReply": false,
                        "composer-default": {},
                        "markdown": {
                            "highlight": 1,
                            "highlightLinesLanguageList": [""],
                            "theme": "railscasts.css"
                        },
                        "opera": {
                            "authValidateEmailURL": "https://auth.opera.com/account/edit-profile"
                        },
                        "google-analytics": {
                            "id": "UA-4118503-39",
                            "displayFeatures": "off"
                        },
                        "emojiCustomFirst": false
                    },
                    "metaTags": [{
                        "name": "title",
                        "content": "Do i wanna auto-refresh Opera or disable refresh in my case?"
                    }, {
                        "name": "description",
                        "content": "Re: How do I set a web page to auto refresh in Opera? I dont auto-understand this tech-english so i need a refresh  All i know is that i wanna make Opera to stop behaving as it does by deafult and that is every time i swap between tabs, it will after seve..."
                    }, {
                        "property": "og:title",
                        "content": "Do i wanna auto-refresh Opera or disable refresh in my case?"
                    }, {
                        "property": "og:description",
                        "content": "Re: How do I set a web page to auto refresh in Opera? I dont auto-understand this tech-english so i need a refresh  All i know is that i wanna make Opera to stop behaving as it does by deafult and that is every time i swap between tabs, it will after seve..."
                    }, {
                        "property": "og:type",
                        "content": "article"
                    }, {
                        "property": "article:published_time",
                        "content": "2021-12-23T21:38:55.651Z"
                    }, {
                        "property": "article:modified_time",
                        "content": "2021-12-26T16:48:13.287Z"
                    }, {
                        "property": "article:section",
                        "content": "Opera for Windows"
                    }, {
                        "property": "og:image",
                        "content": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                        "noEscape": true
                    }, {
                        "property": "og:image:url",
                        "content": "https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&d=mm",
                        "noEscape": true
                    }],
                    "linkTags": [{
                        "rel": "canonical",
                        "href": "https://forums.opera.com/topic/53324/do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-case"
                    }, {
                        "rel": "alternate",
                        "type": "application/rss+xml",
                        "href": "/topic/53324.rss"
                    }, {
                        "rel": "up",
                        "href": "https://forums.opera.com/category/11/opera-for-windows"
                    }],
                    "template": "topic"
                },
                "scripts": [],
                "customJS": "",
                "isSpider": false
            }
        </script>
    </div><!-- /.container#content -->
    </main>

    <div component="toaster/tray" class="alert-window">
        <div id="reconnect-alert" class="alert alert-dismissable alert-warning clearfix hide" component="toaster/toast">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>Looks like your connection to Opera forums was lost, please wait while we try to reconnect.</p>
        </div>
    </div>

@endsection
