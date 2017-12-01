<?php

function the_google_id(){
  $gid = $gsend ='';
  if (get_toption('google_id') != ''){
    $gid .= "ga('create', '".get_toption('google_id')."', 'auto');";
    $gsend .= "ga('send', 'pageview');";
  }
  if (get_toption('google_id_client') != ''){
    $gid .= "ga('create', '".$pl_options['google_id_client']."', 'auto', 'clientTracker2');";
    $gsend .= "ga('clientTracker.send', 'pageview');";
  }
  if ($gid != '') {
    print "<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ".$gid."
            ".$gsend."
          </script>";
  }
}

function the_face_fx_id(){
  if (get_toption('face_fx_id') != ''){ 
    print "<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '".get_toption('face_fx_id')."');
        fbq('track', 'PageView');
      </script>
      <noscript>
        <img height=\"1\" width=\"1\" src=\"https://www.facebook.com/tr?id=".get_toption('face_fx_id')."&ev=PageView&noscript=1\"/>
      </noscript>";
  }
}

function the_tag_id(){
    if (get_toption('tag_id') != ''): 
      print "<script type=\"text/javascript\">
          /* <![CDATA[ */
          var google_conversion_id = ".get_toption('tag_id').";
          var google_custom_params = window.google_tag_params;
          var google_remarketing_only = true;
          /* ]]> */
        </script>
        <script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
        </script>
        <noscript>
          <div style=\"display:inline;\">
            <img height=\"1\" width=\"1\" style=\"border-style:none;\"  src=\"//googleads.g.doubleclick.net/pagead/viewthroughconversion/".get_toption('tag_id')."/?guid=ON&amp;script=0\"/>
          </div>
        </noscript>";
    endif;
}

function pl_add_custom_css(){
  if (get_toption('ctcss') != '') {
    print '<style type="text/css"> '.get_toption('ctcss').'</style>';
  }
}

function pl_add_custom_js(){
  if (get_toption('ctjs') != '') {
    print '<script type="text/javascript">'.get_toption('ctjs').'</script>';
  }
}

add_action('wp_head', 'site_add_header');
add_action('wp_footer', 'site_add_footer');
function site_add_header(){
    the_google_id();
    the_face_fx_id();
    pl_add_custom_css();
}

function site_add_footer(){
    the_tag_id();
    pl_add_custom_js();
}