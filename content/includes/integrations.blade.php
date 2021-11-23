@if(App::environment('production'))
    @if (!empty(config('settings.facebook')))
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', "{{config('settings.facebook') }}");
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{config('settings.facebook') }}&ev=PageView&noscript=1"/>
        </noscript>
    @endif

    <!-- Hotjar Tracking Code -->
    @if (!empty(config('settings.hotjar')))
        <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:{{config('settings.hotjar')}},hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    @endif



    @if (!empty(config('settings.analytics')))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{config('settings.analytics')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', "{{config('settings.analytics')}}");
        </script>
    @endif
    @if (!empty(config('settings.intercom')) && !empty(config('settings.intercom_key')))
        @if(Auth::check())
            @php ($hash_hmac = hash_hmac('sha256', Auth::user()->id, config('settings.intercom_key')))
            <script>
            window.intercomSettings = {
                app_id: "{{config('settings.intercom')}}",
                user_hash: "{{$hash_hmac}}",
                user_id: "{{Auth::user()->id}}",
                name: "{{Auth::user()->name}}",
                email: "{{Auth::user()->email}}",
                created_at: "{{strtotime(Auth::user()->created_at)}}",
                avatar: '{"type":"avatar", "image_url": "{{Auth::user()->gravatar()}}"}',
                custom_launcher_selector:'.btn-intercom'
            };
            </script>
        @elseif(isset($invitedUser) && $invitedUser->invite != null)
            @php ($hash_hmac = hash_hmac('sha256', $invitedUser->id, config('settings.intercom_key')))
            <script>
            window.intercomSettings = {
                app_id: "{{config('settings.intercom')}}",
                user_hash: "{{$hash_hmac}}",
                user_id: "{{$invitedUser->id}}",
                name: "{{$invitedUser->name}}",
                email: "{{$invitedUser->email}}",
                created_at: "{{strtotime($invitedUser->created_at)}}",
                avatar: '{"type":"avatar", "image_url": "{{$invitedUser->gravatar()}}"}',
                custom_launcher_selector:'.btn-intercom'
            };
            </script>
        @else
        <script>
            window.intercomSettings = {app_id: "{{config('settings.intercom')}}"};
        </script>
        @endif
        <script>
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/qffjq6ts';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
        </script>
    @endif
@endif