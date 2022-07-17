<span id='lippButton'></span>
<script src='https://www.paypalobjects.com/js/external/api.js'></script>
<script>
paypal.use( ['login'], function (login) {
  login.render ({
    "appid":"AQ0T3Km0fZKmH3t4o8lIFrSkAf8J2Ep_hmtWtA2p2pCfmx1rmi5nDX041HXOMwr2cFMYesxqDF01I_9b",
    "authend":"sandbox",
    "scopes":"openid",
    "containerid":"lippButton",
    "responseType":"code",
    "locale":"fr-fr",
    "buttonType":"LWP",
    "buttonShape":"pill",
    "buttonSize":"lg",
    "fullPage":"true",
    "returnurl":"http://127.0.0.1:8080/transactions"
  });
});
</script>