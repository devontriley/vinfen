const allowedDomains = [ 'vinfen.org', 'vinfenct.org' ];

if ( allowedDomains.some(domain => window.location.origin.includes(domain)) && window.location.href.includes('work-at-vinfen') ) {
    var oliviaChatData = oliviaChatData || [];
    var oliviaChatBaseUrl =  'https://olivia.paradox.ai';
    oliviaChatData.push(['setKey', 'mytbbsrvgnbyqtaelvcx']);
    oliviaChatData.push(['start']);
    (function() {
        var apply = document.createElement('script');
        apply.type = 'text/javascript';
        apply.async = true;
        apply.src = 'https://dokumfe7mps0i.cloudfront.net/static/site/js/widget-client.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(apply, s);
    })();
}