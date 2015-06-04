<?php 
	//Template: Blackrock Landing Page
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>BLACKROCK</title>
	<link type="image/x-icon" href="../images/favicon.ico" rel="icon">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://cdn1.raptmedia.com/system/scripts/api.v2.jq.min.js"></script>
	<script type="text/javascript">
	  !function(a,b){a("Keen","https://d26b395fwzu5fz.cloudfront.net/3.2.4/keen.min.js",b)}(function(a,b,c){var d,e,f;c["_"+a]={},c[a]=function(b){c["_"+a].clients=c["_"+a].clients||{},c["_"+a].clients[b.projectId]=this,this._config=b},c[a].ready=function(b){c["_"+a].ready=c["_"+a].ready||[],c["_"+a].ready.push(b)},d=["addEvent","setGlobalProperties","trackExternalLink","on"];for(var g=0;g<d.length;g++){var h=d[g],i=function(a){return function(){return this["_"+a]=this["_"+a]||[],this["_"+a].push(arguments),this}};c[a].prototype[h]=i(h)}e=document.createElement("script"),e.async=!0,e.src=b,f=document.getElementsByTagName("script")[0],f.parentNode.insertBefore(e,f)},this);
	</script>

	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<img src="images/blackrock_logo.png" alt="BlackRock" width="211px" height="auto">
			</div>

			<div class="bg-overlay-top">
			<div class="bg-overlay-bottom">
				<div class="container main-content">
		  			<div class="row">
						<div class="col-xs-12 video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://cdn1.raptmedia.com/projects/jxK53Bnb/embed?autoplay=false&amp;controls=below">&lt;p style="text-align:center"&gt;Iframes are required to view this content.&lt;/p&gt;</iframe>
							</div>
						</div>		
						<div class="col-xs-12 learnmore">
							<p class="text-center"><a href="#"><span class="icon-chevron">Learn More About 401(k) Benefits</span></a></p>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- bg-overlay-top -->
			</div><!-- bg-overlay-bottom -->

			<footer>
				<div class="container footer">
					<div class="row">
						<div class="col-xs-12">
							<ul class="socialmedia">
								<li>
									<a href="http://www.facebook.com/BlackRock" title="Facebook" target="_blank" class="icon-facebook"></a>
								</li>
								<li>
									<a href="http://www.linkedin.com/company/blackrock" title="LinkedIn" target="_blank" class="icon-linkedin"></a>
								</li>
								<li>
									<a href="http://twitter.com/blackrock" title="twitter" target="_blank" class="icon-twitter"></a>
								</li>
								<li>
									<a href="http://www.youtube.com/blackrock" title="YouTube" target="_blank" class="icon-youtube"></a>
								</li>
								<li>
									<a href="http://www.blackrockblog.com" title="BlackRock Blog" target="_blank" class="icon-blk-blog"></a>
								</li>
							</ul>
						</div><!-- col-xs-12 -->
					</div><!-- row -->

					<div class="col-xs-12">
						<p class="footnotes"><strong>Carefully consider the Fund's investment objectives, risk factors, and changes and expenses before investing. This and other information can be found in the Fund's prospectuses or, if available, the <a href="http://www.blackrock.com/investing/library?materialType=summary+prospectus">summary prospectuses</a> which may be obtained visiting the <a href="http://www.blackrock.com/investing/library?materialType=prospectus&&&productGroup=ETF">iShares ETF</a> and <a href="http://www.blackrock.com/investing/library?materialType=prospectus">BlackRock Mutual Fund</a> prospectus pages. Read the prosectus carefully before investing.</strong></p>
						<br>
						<p class="footnotes"><strong><em>Investing involves risk, including possible loss of principal.</em></strong></p>
						<p class="footnotes">USR-6252</p>
					</div><!-- col-xs-12 -->
				</div><!-- container -->
			</footer>

		</div><!-- wrapper -->

    <script type="text/javascript">
    	var client = new Keen({
        projectId: "556e0a16672e6c08523b6389",
        writeKey: "695c2959c45b1a2d67874027aea603d58cf61dd626b2a95606242f22068d907e8b1fcbefcb89f7754dc82e02e5852db896838c9c9aba49ef6e5e71f844e1df34392051f07b5ba822fbfc4568a7d9de5e3ebd990e3342982dd7ad133ff916e02f9878f939d6b813c16c0bf9b8f3cd94de"
      });

      raptor.api.on("ready", function(event, el){
      	raptor.settings("defaultIFrame", el.name);


      	el.onload = function(){
      		raptor.api.load();

      	}

      });
    	raptor.api.on("inboundReady", function(event, data){
      	console.log("inbound commands ready");
      	raptor.api.nodes();
      	//raptor.api.play();
   	  });
   	  raptor.api.on("button", function(event, data){
   	  	console.log(data);
   	  	raptor.api.pause();
   	  	raptor.api.setTimePercentage(0.9);
   	  	if (data.action == "watch") {
   	  		var purchaseEvent = {
            item: "golden gadget",  
            price: 25.50,
            referrer: document.referrer,
            keen: {
              timestamp: new Date().toISOString()
            }
          };

          // Send it to the "purchases" collection
          client.addEvent("purchases", purchaseEvent, function(err, res){
            if (err) {
              // there was an error!
            }
            else {
              // see sample response below
            }
          });
   	  	}
   	  });

   	  raptor.api.on("projectStart", function(event, data){
   	  	console.log(data);
   	  }); 		
    </script>
	</body>	
	</html>
