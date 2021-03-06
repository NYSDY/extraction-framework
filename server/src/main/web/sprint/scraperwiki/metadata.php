

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>
	ScraperWiki / ScraperWiki / source – Bitbucket
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="ScraperWiki,Code,repository,for,ScraperWiki.com,source,sourcecode,scraperlibs/scraperwiki/metadata.php@c0f684545717" />
  <!--[if lt IE 9]>
  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/js/lib/html5.js"></script>
  <![endif]-->

  <script type="text/javascript">
    var MEDIA_URL = "https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/";
    (function (window) {
      // prevent stray occurrences of `console.log` from causing errors in IE
      var console = window.console || (window.console = {});
      console.log || (console.log = function () {});

      window.BB || (window.BB = {});
      window.BB.debug = false;
      window.BB.cname = false;
      window.BB.CANON_URL = 'https://bitbucket.org';
      window.BB.user || (window.BB.user = {});
      window.BB.user.has = (function () {
        var betaFeatures = [];
        
        return function (feature) {
          return _.contains(betaFeatures, feature);
        };
      }());
      window.BB.repo || (window.BB.repo = {});
  
  
    
    
      window.BB.repo.slug = 'scraperwiki';
    
    
      window.BB.repo.owner = {
        username: 'ScraperWiki'
      };
    
  
    }(this));
  </script>


  
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/reset.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/defaults.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/layout.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/forms.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/components.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/svn-import.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/admin.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/changesets.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/dashboard.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/descendants.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/explore.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/issues.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/messages.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/profile.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/promo.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/signup.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/wiki.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/zealots.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/jqueryui/jquery-ui-1.8.7.custom.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/jqueryui/jquery.ui.progressbar.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/screen.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/fancybox.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/plans.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/markitup/skins/simple/style.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/print.css" media="print" />



  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Bitbucket" />
  <link rel="icon" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/img/logo_new.png" type="image/png" />

  <!--[if IE]>
  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/js/lib/excanvas.js"></script>
  <![endif]-->


  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/js/lib/bundle.js"></script>



	<link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/css/highlight/trac.css" type="text/css" />


</head>

<body class="">

  <div id="wrapper">



  <div id="header-wrap">
    <div id="header">
    <ul id="global-nav">
      <li><a class="home" href="http://www.atlassian.com">Atlassian Home</a></li>
      <li><a class="docs" href="http://confluence.atlassian.com/display/BITBUCKET">Documentation</a></li>
      <li><a class="support" href="/support">Support</a></li>
      <li><a class="blog" href="http://blog.bitbucket.org">Blog</a></li>
      <li><a class="forums" href="http://groups.google.com/group/bitbucket-users">Forums</a></li>
    </ul>
    <a href="/" id="logo">Bitbucket by Atlassian</a>

    <div id="main-nav" class="clearfix">
    
      <ul class="clearfix">
        <li><a href="/plans">Pricing &amp; Signup</a></li>
        <li><a href="/repo/month">Explore Bitbucket</a></li>
        <li><a href="/account/signin/">Log in</a></li>
        

<li class="search-box">
  <form action="/repo/all">
    <input type="text" name="name" id="search" placeholder="Find a project" />
  </form>
</li>

      </ul>
    
    </div>
    </div>
  </div>

    <div id="header-messages">
  
  
    
    
    
    
  

    
   </div>



    <div id="content">
      <div id="unnamed">
      
	
  





  <script type="text/javascript">
    jQuery(function ($) {
        var cookie = $.cookie,
            cookieOptions, date,
            $content = $('#content'),
            $pane = $('#what-is-bitbucket'),
            $hide = $pane.find('[href="#hide"]').css('display', 'block').hide();

        date = new Date();
        date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
        cookieOptions = { path: '/', expires: date };

        if (cookie('toggle_status') == 'hide') $content.addClass('repo-desc-hidden');

        $('#toggle-repo-content').click(function (event) {
            event.preventDefault();
            $content.toggleClass('repo-desc-hidden');
            cookie('toggle_status', cookie('toggle_status') == 'show' ? 'hide' : 'show', cookieOptions);
        });

        if (!cookie('hide_intro_message')) $pane.show();

        $hide.click(function (event) {
            event.preventDefault();
            cookie('hide_intro_message', true, cookieOptions);
            $pane.slideUp('slow');
        });

        $pane.hover(
            function () { $hide.fadeIn('fast'); },
            function () { $hide.fadeOut('fast'); });
    });
  </script>



  
  
  
  
  
    <div id="what-is-bitbucket" class="new-to-bitbucket">
      <h2>ScraperWiki <span id="slogan">is sharing code with you</span></h2>
      <img src="https://secure.gravatar.com/avatar/4ba76f697d2fa2d70afa585e6adb6ae9?d=identicon&s=32" alt="" class="avatar" />
      <p>Bitbucket is a code hosting site. Unlimited public and private repositories. Free for small teams.</p>
      <div class="primary-action-link signup"><a href="/account/signup/?utm_source=internal&utm_medium=banner&utm_campaign=what_is_bitbucket">Try Bitbucket free</a></div>
      <a href="#hide" title="Don't show this again">Don't show this again</a>
    </div>
  


<div id="tabs">
  <ul class="tabs">
    <li>
      <a href="/ScraperWiki/scraperwiki/overview">Overview</a>
    </li>

    <li>
      <a href="/ScraperWiki/scraperwiki/downloads">Downloads (0)</a>
    </li>

    

    

    <li class="selected">
      
        <a href="/ScraperWiki/scraperwiki/src/c0f684545717">Source</a>
      
    </li>

    <li>
      <a href="/ScraperWiki/scraperwiki/changesets">Changesets</a>
    </li>

    
      
        <li class="dropdown">
          <a href="/ScraperWiki/scraperwiki/wiki">Wiki</a>
        </li>
      
    

    
      
        <li class="dropdown">
          <a href="/ScraperWiki/scraperwiki/issues?status=new&amp;status=open">Issues (207) &raquo;</a>
          <ul>
            <li><a href="/ScraperWiki/scraperwiki/issues/new">Create new issue</a></li>
            <li><a href="/ScraperWiki/scraperwiki/issues?status=new">New issues</a></li>
            <li><a href="/ScraperWiki/scraperwiki/issues?status=new&amp;status=open">Open issues</a></li>
            <li><a href="/ScraperWiki/scraperwiki/issues?status=resolved&amp;status=invalid&amp;status=duplicate">Closed issues</a></li>
            
            <li><a href="/ScraperWiki/scraperwiki/issues">All issues</a></li>
            <li><a href="/ScraperWiki/scraperwiki/issues/query">Advanced query</a></li>
          </ul>
        </li>
      
    

    

    <li class="secondary">
      <a href="/ScraperWiki/scraperwiki/descendants">Forks/Queues (2)</a>
    </li>

    <li class="secondary">
      <a href="/ScraperWiki/scraperwiki/zealots">Followers (<span id="followers-count">14</span>)</a>
    </li>
  </ul>
</div>


  <div class="repo-menu" id="repo-menu">
    <ul id="repo-menu-links">
     
      <li>
        <a href="/ScraperWiki/scraperwiki/rss" class="rss" title="RSS feed for ScraperWiki">RSS</a>
      </li>
      
        <li>
          <a href="/ScraperWiki/scraperwiki/pull" class="pull-request">
            pull request
          </a>
        </li>
      
      <li><a href="/ScraperWiki/scraperwiki/fork" class="fork">fork</a></li>
      
        <li><a href="/ScraperWiki/scraperwiki/hack" class="patch-queue">patch queue</a></li>
      
      <li>
        <a rel="nofollow" href="/ScraperWiki/scraperwiki/follow" class="follow">follow</a>
      </li>
      
          
      
      
        <li>
          <a class="source">get source</a>
          <ul class="downloads">
            
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.zip">zip</a></li>
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.tar.gz">gz</a></li>
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.tar.bz2">bz2</a></li>
            
          </ul>
        </li>
      
    </ul>

  
    <ul class="metadata">
    
      <li class="branches">branches
        <ul>
          <li>
            <a href="/ScraperWiki/scraperwiki/src/2209f34702a0">stable</a>
          
            <a rel="nofollow" class="menu-compare" href="/ScraperWiki/scraperwiki/compare/default..stable" title="Show changes between stable and default">compare</a>
          
          </li>
          <li>
            <a href="/ScraperWiki/scraperwiki/src/9fc022e96401">scraperwiki</a>
          
            <a rel="nofollow" class="menu-compare" href="/ScraperWiki/scraperwiki/compare/default..scraperwiki" title="Show changes between scraperwiki and default">compare</a>
          
          </li>
          <li>
            <a href="/ScraperWiki/scraperwiki/src/54f97c010c9e">design_revamp</a>
          
            <a rel="nofollow" class="menu-compare" href="/ScraperWiki/scraperwiki/compare/default..design_revamp" title="Show changes between design_revamp and default">compare</a>
          
          </li>
          <li>
            <a href="/ScraperWiki/scraperwiki/src/c0f684545717">default</a>
          
          </li>
        </ul>
      </li>
    
      <li class="tags">tags
        <ul>
          <li><a href="/ScraperWiki/scraperwiki/src/c0f684545717">tip</a>
            </li>
        </ul>
      </li>
    </ul>
  
</div>
<div class="repo-menu" id="repo-desc">
  

    <ul id="repo-menu-links-mini">
      
      <li>
        <a href="/ScraperWiki/scraperwiki/rss" class="rss" title="RSS feed for ScraperWiki"></a>
      </li>
      
        <li>
          <a href="/ScraperWiki/scraperwiki/pull" class="pull-request" title="Pull request"></a>
        </li>
      
      <li><a href="/ScraperWiki/scraperwiki/fork" class="fork" title="Fork"></a></li>
      
        <li><a href="/ScraperWiki/scraperwiki/hack" class="patch-queue" title="Patch queue"></a></li>
      
      <li>
        <a rel="nofollow" href="/ScraperWiki/scraperwiki/follow" class="follow">follow</a>
      </li>
      
          
      
      
        <li>
          <a class="source" title="Get source"></a>
          <ul class="downloads">
            
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.zip">zip</a></li>
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.tar.gz">gz</a></li>
              <li><a rel="nofollow" href="/ScraperWiki/scraperwiki/get/c0f684545717.tar.bz2">bz2</a></li>
            
          </ul>
        </li>
      
    </ul>

    <h3 id="repo-heading">
      <a href="/ScraperWiki">ScraperWiki</a> /
      <a href="/ScraperWiki/scraperwiki/wiki/Home">ScraperWiki</a>
    
      <span><a href="http://scraperwiki.com/">http://scraperwiki.com/</a></span>
    
    </h3>


  <p class="repo-desc-description">Code repository for <a href="http://ScraperWiki.com" rel="nofollow">ScraperWiki.com</a></p>


  <div id="repo-desc-cloneinfo">Clone this repository (size: 15.8 MB): <a href="https://bitbucket.org/ScraperWiki/scraperwiki" onclick="$('#clone-url-ssh').hide();$('#clone-url-https').toggle();return(false);"><small>HTTPS</small></a> / <a href="ssh://hg@bitbucket.org/ScraperWiki/scraperwiki" onclick="$('#clone-url-https').hide();$('#clone-url-ssh').toggle();return(false);"><small>SSH</small></a><br />
    <pre id="clone-url-https">hg clone <a href="https://bitbucket.org/ScraperWiki/scraperwiki">https://bitbucket.org/ScraperWiki/scraperwiki</a></pre>

    <pre id="clone-url-ssh" style="display:none;">hg clone <a href="ssh://hg@bitbucket.org/ScraperWiki/scraperwiki">ssh://hg@bitbucket.org/ScraperWiki/scraperwiki</a></pre></div>

  <a href="#" id="toggle-repo-content"></a>

  

</div>




      

<div id="source-path" class="layout-box">
	<a href="/ScraperWiki/scraperwiki/src">ScraperWiki</a> /
	
		
			
				<a href="/ScraperWiki/scraperwiki/src/c0f684545717/scraperlibs/">
					scraperlibs
				</a>
			
		
		/
	
		
			
				<a href="/ScraperWiki/scraperwiki/src/c0f684545717/scraperlibs/scraperwiki/">
					scraperwiki
				</a>
			
		
		/
	
		
			
				metadata.php
			
		
		
	
</div>


<div id="source-view">
	<table class="info-table">
		<tr>
			<th>r3257:c0f684545717</th>
			<th>113 loc</th>
			<th>2.7 KB</th>
			<th class="source-view-links">
				<a id="embed-link" href="#" onclick="makeEmbed('#embed-link', 'https://bitbucket.org/ScraperWiki/scraperwiki/src/c0f684545717/scraperlibs/scraperwiki/metadata.php?embed=t');">embed</a> /
				<a href="/ScraperWiki/scraperwiki/history/scraperlibs/scraperwiki/metadata.php">history</a> /
				<a href="/ScraperWiki/scraperwiki/annotate/c0f684545717/scraperlibs/scraperwiki/metadata.php">annotate</a> /
				<a href="/ScraperWiki/scraperwiki/raw/c0f684545717/scraperlibs/scraperwiki/metadata.php">raw</a> /
				<form action="/ScraperWiki/scraperwiki/diff/scraperlibs/scraperwiki/metadata.php" class="source-view-form">
					
					<input type="hidden" name="diff2" value="c0f684545717" />
						<select name="diff1" class="smaller">
							
								
									<option value="215502162341">
										r1473:215502162341
									</option>
								
							
								
									<option value="ce79a893f17a">
										r1471:ce79a893f17a
									</option>
								
							
								
									<option value="70386fc2cc90">
										r1463:70386fc2cc90
									</option>
								
							
								
									<option value="4ebe7fd1540d">
										r1462:4ebe7fd1540d
									</option>
								
							
								
									<option value="33f82e902b1a">
										r1363:33f82e902b1a
									</option>
								
							
								
									<option value="d1dae4460f5f">
										r1362:d1dae4460f5f
									</option>
								
							
								
									<option value="942811c0bf08">
										r1359:942811c0bf08
									</option>
								
							
								
									<option value="a213fc808f31">
										r1358:a213fc808f31
									</option>
								
							
								
									<option value="f6b85c4ae887">
										r1351:f6b85c4ae887
									</option>
								
							
						</select>
						<input type="submit" value="diff" class="smaller" />
					
				</form>
			</th>
		</tr>
	</table>
	
		<div class="scroll-x">
		
			<table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre><a href="#cl-1">  1</a>
<a href="#cl-2">  2</a>
<a href="#cl-3">  3</a>
<a href="#cl-4">  4</a>
<a href="#cl-5">  5</a>
<a href="#cl-6">  6</a>
<a href="#cl-7">  7</a>
<a href="#cl-8">  8</a>
<a href="#cl-9">  9</a>
<a href="#cl-10"> 10</a>
<a href="#cl-11"> 11</a>
<a href="#cl-12"> 12</a>
<a href="#cl-13"> 13</a>
<a href="#cl-14"> 14</a>
<a href="#cl-15"> 15</a>
<a href="#cl-16"> 16</a>
<a href="#cl-17"> 17</a>
<a href="#cl-18"> 18</a>
<a href="#cl-19"> 19</a>
<a href="#cl-20"> 20</a>
<a href="#cl-21"> 21</a>
<a href="#cl-22"> 22</a>
<a href="#cl-23"> 23</a>
<a href="#cl-24"> 24</a>
<a href="#cl-25"> 25</a>
<a href="#cl-26"> 26</a>
<a href="#cl-27"> 27</a>
<a href="#cl-28"> 28</a>
<a href="#cl-29"> 29</a>
<a href="#cl-30"> 30</a>
<a href="#cl-31"> 31</a>
<a href="#cl-32"> 32</a>
<a href="#cl-33"> 33</a>
<a href="#cl-34"> 34</a>
<a href="#cl-35"> 35</a>
<a href="#cl-36"> 36</a>
<a href="#cl-37"> 37</a>
<a href="#cl-38"> 38</a>
<a href="#cl-39"> 39</a>
<a href="#cl-40"> 40</a>
<a href="#cl-41"> 41</a>
<a href="#cl-42"> 42</a>
<a href="#cl-43"> 43</a>
<a href="#cl-44"> 44</a>
<a href="#cl-45"> 45</a>
<a href="#cl-46"> 46</a>
<a href="#cl-47"> 47</a>
<a href="#cl-48"> 48</a>
<a href="#cl-49"> 49</a>
<a href="#cl-50"> 50</a>
<a href="#cl-51"> 51</a>
<a href="#cl-52"> 52</a>
<a href="#cl-53"> 53</a>
<a href="#cl-54"> 54</a>
<a href="#cl-55"> 55</a>
<a href="#cl-56"> 56</a>
<a href="#cl-57"> 57</a>
<a href="#cl-58"> 58</a>
<a href="#cl-59"> 59</a>
<a href="#cl-60"> 60</a>
<a href="#cl-61"> 61</a>
<a href="#cl-62"> 62</a>
<a href="#cl-63"> 63</a>
<a href="#cl-64"> 64</a>
<a href="#cl-65"> 65</a>
<a href="#cl-66"> 66</a>
<a href="#cl-67"> 67</a>
<a href="#cl-68"> 68</a>
<a href="#cl-69"> 69</a>
<a href="#cl-70"> 70</a>
<a href="#cl-71"> 71</a>
<a href="#cl-72"> 72</a>
<a href="#cl-73"> 73</a>
<a href="#cl-74"> 74</a>
<a href="#cl-75"> 75</a>
<a href="#cl-76"> 76</a>
<a href="#cl-77"> 77</a>
<a href="#cl-78"> 78</a>
<a href="#cl-79"> 79</a>
<a href="#cl-80"> 80</a>
<a href="#cl-81"> 81</a>
<a href="#cl-82"> 82</a>
<a href="#cl-83"> 83</a>
<a href="#cl-84"> 84</a>
<a href="#cl-85"> 85</a>
<a href="#cl-86"> 86</a>
<a href="#cl-87"> 87</a>
<a href="#cl-88"> 88</a>
<a href="#cl-89"> 89</a>
<a href="#cl-90"> 90</a>
<a href="#cl-91"> 91</a>
<a href="#cl-92"> 92</a>
<a href="#cl-93"> 93</a>
<a href="#cl-94"> 94</a>
<a href="#cl-95"> 95</a>
<a href="#cl-96"> 96</a>
<a href="#cl-97"> 97</a>
<a href="#cl-98"> 98</a>
<a href="#cl-99"> 99</a>
<a href="#cl-100">100</a>
<a href="#cl-101">101</a>
<a href="#cl-102">102</a>
<a href="#cl-103">103</a>
<a href="#cl-104">104</a>
<a href="#cl-105">105</a>
<a href="#cl-106">106</a>
<a href="#cl-107">107</a>
<a href="#cl-108">108</a>
<a href="#cl-109">109</a>
<a href="#cl-110">110</a>
<a href="#cl-111">111</a>
<a href="#cl-112">112</a>
<a href="#cl-113">113</a>
</pre></div></td><td class="code"><div class="highlight"><pre><a name="cl-1"></a><span class="cp">&lt;?php</span>
<a name="cl-2"></a><span class="k">class</span> <span class="nc">SW_MetadataClient</span>
<a name="cl-3"></a><span class="p">{</span>   
<a name="cl-4"></a>    <span class="k">private</span> <span class="k">static</span> <span class="nv">$instance</span><span class="p">;</span>
<a name="cl-5"></a>
<a name="cl-6"></a>    <span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">create</span><span class="p">()</span>
<a name="cl-7"></a>    <span class="p">{</span>
<a name="cl-8"></a>        <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$instance</span><span class="p">))</span>
<a name="cl-9"></a>        <span class="p">{</span>
<a name="cl-10"></a>            <span class="nx">self</span><span class="o">::</span><span class="nv">$instance</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">SW_MetadataClient</span><span class="p">();</span>
<a name="cl-11"></a>        <span class="p">}</span>
<a name="cl-12"></a>
<a name="cl-13"></a>        <span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$instance</span><span class="p">;</span>
<a name="cl-14"></a>    <span class="p">}</span>
<a name="cl-15"></a>
<a name="cl-16"></a>    <span class="k">function</span> <span class="nf">__construct</span><span class="p">()</span>
<a name="cl-17"></a>    <span class="p">{</span>
<a name="cl-18"></a>        <span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;SCRAPER_GUID&quot;</span><span class="p">))</span>
<a name="cl-19"></a>        <span class="p">{</span>
<a name="cl-20"></a>            <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">metadata_local</span> <span class="o">=</span> <span class="k">Array</span><span class="p">(</span><span class="s2">&quot;title&quot;</span> <span class="o">=&gt;</span> <span class="s2">&quot;Untitled Scraper&quot;</span><span class="p">,</span> <span class="s2">&quot;CPU limit&quot;</span> <span class="o">=&gt;</span> <span class="s2">&quot;100&quot;</span><span class="p">);</span>
<a name="cl-21"></a>        <span class="p">}</span>
<a name="cl-22"></a>
<a name="cl-23"></a>    <span class="p">}</span>
<a name="cl-24"></a>
<a name="cl-25"></a>    <span class="k">private</span> <span class="k">function</span> <span class="nf">get_url</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">)</span>
<a name="cl-26"></a>    <span class="p">{</span>
<a name="cl-27"></a>        <span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;http://%s/scrapers/metadata_api/%s/%s/&quot;</span><span class="p">,</span> <span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;metadata_host&quot;</span><span class="p">),</span> <span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;SCRAPER_GUID&quot;</span><span class="p">),</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">));</span>
<a name="cl-28"></a>    <span class="p">}</span>
<a name="cl-29"></a>    
<a name="cl-30"></a>    <span class="k">private</span> <span class="k">function</span> <span class="nf">get_metadata</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">)</span>
<a name="cl-31"></a>    <span class="p">{</span>
<a name="cl-32"></a>        <span class="nv">$ch</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>
<a name="cl-33"></a>        <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_URL</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_url</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">));</span>
<a name="cl-34"></a>        <span class="nb">curl_setopt</span> <span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_RETURNTRANSFER</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span>
<a name="cl-35"></a>        <span class="nv">$res</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span>
<a name="cl-36"></a>        <span class="nv">$status</span> <span class="o">=</span> <span class="nb">curl_getinfo</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLINFO_HTTP_CODE</span><span class="p">);</span>
<a name="cl-37"></a>        <span class="nb">curl_close</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span>
<a name="cl-38"></a>        <span class="k">if</span><span class="p">(</span><span class="nv">$status</span> <span class="o">==</span> <span class="m">200</span><span class="p">)</span>
<a name="cl-39"></a>        <span class="p">{</span>
<a name="cl-40"></a>            <span class="k">return</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nv">$res</span><span class="p">);</span>
<a name="cl-41"></a>        <span class="p">}</span>
<a name="cl-42"></a>        <span class="k">else</span>
<a name="cl-43"></a>        <span class="p">{</span>
<a name="cl-44"></a>            <span class="k">return</span> <span class="k">null</span><span class="p">;</span>
<a name="cl-45"></a>        <span class="p">}</span>
<a name="cl-46"></a>    <span class="p">}</span>
<a name="cl-47"></a>    
<a name="cl-48"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">get</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">,</span> <span class="nv">$default</span><span class="o">=</span><span class="k">null</span><span class="p">)</span>
<a name="cl-49"></a>    <span class="p">{</span>
<a name="cl-50"></a>        <span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;SCRAPER_GUID&quot;</span><span class="p">))</span>
<a name="cl-51"></a>        <span class="p">{</span>
<a name="cl-52"></a>            <span class="nv">$value</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">metadata_local</span><span class="p">[</span><span class="nv">$metadata_name</span><span class="p">];</span>
<a name="cl-53"></a>            <span class="k">if</span><span class="p">(</span><span class="nv">$value</span> <span class="o">==</span> <span class="k">null</span><span class="p">)</span>
<a name="cl-54"></a>            <span class="p">{</span>
<a name="cl-55"></a>                <span class="k">return</span> <span class="nv">$default</span><span class="p">;</span>
<a name="cl-56"></a>            <span class="p">}</span>
<a name="cl-57"></a>            <span class="k">return</span> <span class="nv">$value</span><span class="p">;</span>
<a name="cl-58"></a>        <span class="p">}</span>
<a name="cl-59"></a>
<a name="cl-60"></a>        <span class="nv">$metadata</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_metadata</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">);</span>
<a name="cl-61"></a>        <span class="k">if</span><span class="p">(</span><span class="nv">$metadata</span><span class="p">)</span>
<a name="cl-62"></a>        <span class="p">{</span>
<a name="cl-63"></a>            <span class="k">return</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nv">$metadata</span><span class="o">-&gt;</span><span class="na">value</span><span class="p">);</span>
<a name="cl-64"></a>        <span class="p">}</span>
<a name="cl-65"></a>        <span class="k">else</span>
<a name="cl-66"></a>        <span class="p">{</span>
<a name="cl-67"></a>            <span class="k">return</span> <span class="nv">$default</span><span class="p">;</span>
<a name="cl-68"></a>        <span class="p">}</span>
<a name="cl-69"></a>    <span class="p">}</span>    
<a name="cl-70"></a>
<a name="cl-71"></a>    
<a name="cl-72"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">get_run_id</span><span class="p">(</span><span class="nv">$metdata_name</span><span class="p">)</span>
<a name="cl-73"></a>    <span class="p">{</span>
<a name="cl-74"></a>        <span class="nv">$metadata</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_metadata</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">);</span>
<a name="cl-75"></a>        <span class="k">if</span><span class="p">(</span><span class="nv">$metadata</span><span class="p">)</span>
<a name="cl-76"></a>        <span class="p">{</span>
<a name="cl-77"></a>            <span class="k">return</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nv">$metadata</span><span class="o">-&gt;</span><span class="na">run_id</span><span class="p">);</span>
<a name="cl-78"></a>        <span class="p">}</span>
<a name="cl-79"></a>        <span class="k">else</span>
<a name="cl-80"></a>        <span class="p">{</span>
<a name="cl-81"></a>            <span class="k">return</span> <span class="k">null</span><span class="p">;</span>
<a name="cl-82"></a>        <span class="p">}</span>
<a name="cl-83"></a>    <span class="p">}</span>
<a name="cl-84"></a>    
<a name="cl-85"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">save</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span>
<a name="cl-86"></a>    <span class="p">{</span>
<a name="cl-87"></a>        <span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;SCRAPER_GUID&quot;</span><span class="p">))</span>
<a name="cl-88"></a>        <span class="p">{</span>
<a name="cl-89"></a>            <span class="k">print</span> <span class="s1">&#39;The scraper has not been saved yet. Metadata will not be persisted between runs\n&#39;</span><span class="p">;</span>
<a name="cl-90"></a>            <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">metadata_local</span><span class="p">[</span><span class="nv">$metadata_name</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span>
<a name="cl-91"></a>        <span class="p">}</span>
<a name="cl-92"></a>
<a name="cl-93"></a>        <span class="nv">$ch</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>
<a name="cl-94"></a>        <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_URL</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_url</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">));</span>
<a name="cl-95"></a>        <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_RETURNTRANSFER</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
<a name="cl-96"></a>
<a name="cl-97"></a>        <span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">(</span><span class="nv">$metadata_name</span><span class="p">))</span>
<a name="cl-98"></a>        <span class="p">{</span>
<a name="cl-99"></a>            <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_CUSTOMREQUEST</span><span class="p">,</span> <span class="s1">&#39;PUT&#39;</span><span class="p">);</span>
<a name="cl-100"></a>        <span class="p">}</span>
<a name="cl-101"></a>        <span class="k">else</span>
<a name="cl-102"></a>        <span class="p">{</span>
<a name="cl-103"></a>            <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_CUSTOMREQUEST</span><span class="p">,</span> <span class="s1">&#39;POST&#39;</span><span class="p">);</span>
<a name="cl-104"></a>        <span class="p">}</span>
<a name="cl-105"></a>
<a name="cl-106"></a>        <span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s2">&quot;run_id=%s&amp;value=%s&quot;</span><span class="p">,</span> <span class="nb">getenv</span><span class="p">(</span><span class="s2">&quot;RUNID&quot;</span><span class="p">),</span> <span class="nx">json_encode</span><span class="p">(</span><span class="nv">$value</span><span class="p">)));</span>
<a name="cl-107"></a>        
<a name="cl-108"></a>        <span class="nv">$res</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span>
<a name="cl-109"></a>        <span class="nb">curl_close</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span>
<a name="cl-110"></a>        <span class="k">return</span> <span class="nv">$res</span><span class="p">;</span>
<a name="cl-111"></a>    <span class="p">}</span>
<a name="cl-112"></a><span class="p">}</span>
<a name="cl-113"></a><span class="cp">?&gt;</span><span class="x"></span>
</pre></div>
</td></tr></table>
		
		</div>
	
</div>



      </div>
    </div>

  </div>

  <div id="footer">
    <ul id="footer-nav">
      <li>Copyright © 2011 <a href="http://atlassian.com">Atlassian</a></li>
      <li><a href="http://www.atlassian.com/hosted/terms.jsp">Terms of Service</a></li>
      <li><a href="http://www.atlassian.com/about/privacy.jsp">Privacy</a></li>
      <li><a href="//bitbucket.org/site/master/issues/new">Report a Bug</a></li>
      <li><a href="http://confluence.atlassian.com/x/IYBGDQ">API</a></li>
      <li><a href="http://status.bitbucket.org/">Server Status</a></li>
    </ul>
    <ul id="social-nav">
      <li class="blog"><a href="http://blog.bitbucket.org">Bitbucket Blog</a></li>
      <li class="twitter"><a href="http://www.twitter.com/bitbucket">Twitter</a></li>
    </ul>
    <h5>We run</h5>
    <ul id="technologies">
      <li><a href="http://www.djangoproject.com/">Django 1.2.5</a></li>
      <li><a href="//bitbucket.org/jespern/django-piston/">Piston 0.3dev</a></li>
      <li><a href="http://www.selenic.com/mercurial/">Hg 1.8.2</a></li>
      <li><a href="http://www.python.org">Python 2.7.0</a></li>
      <li>r7394:a4196b9dafb6 | bitbucket03</li>
    </ul>
  </div>

  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/6775e5f05d3f/js/lib/global.js"></script>






  <script src="//cdn.optimizely.com/js/4079040.js"></script>
  <script type="text/javascript">
    BB.gaqPush(['_trackPageview']);
  
    /* User specified tracking. */
    BB.gaqPush(
        ['repo._setAccount', 'UA-21451224-2'],
        ['repo._trackPageview']
    );
  
    BB.gaqPush(['atl._trackPageview']);

    

    

    (function () {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
    }());
  </script>

</body>
</html>
