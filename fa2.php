<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - SWOT Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">SHARE MARKET</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>

	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LEARN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="basics.php">BASIC</a>
          <a class="dropdown-item" href="ta.php">TECHNICAL ANALYSIS</a>
          <a class="dropdown-item" href="fa.php">FUNDAMENTAL ANALYSIS</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="nifty50.php">NIFTY 50</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="advancedchart.php">ADVANCED CHART</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="currencymarket.php">CURRENCY MARKET</a>
        </li>
	  <li class="nav-item">
        <a class="nav-link" href="portfolio\index.php" target="_blank" rel="noopener noreferrer">PORTFOLIO</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>

    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php">FUNDAMENTAL ANALYSIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="fa.php">D/B Fundamental and Technical<span class="sr-only">(current)</span></a>
      </li>

	  <li class="nav-item active">
        <a class="nav-link" href="fa2.php">SWOT Analysis</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="fa3.php">Business and Industry Analysis</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="fa4.php">Annual Reports</a>
        </li>
	  <li class="nav-item">
        <a class="nav-link" href="fa5.php">Cash Flow Statement</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="fa6.php">Best 5 Financial Ratios</a>
      </li>
	  
	        

    </ul>
  </div>
</nav>


<!-- TradingView BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "SENSEX",
      "proName": "BSE:SENSEX"
    },
    {
      "description": "ADANIPORTS",
      "proName": "BSE:ADANIPORTS"
    },
    {
      "description": "ASIANPAINT",
      "proName": "BSE:ASIANPAINT"
    },
    {
      "description": "AXISBANK",
      "proName": "BSE:AXISBANK"
    },
    {
      "description": "BAJAJ-AUTO",
      "proName": "BSE:BAJAJ_AUTO"
    },
    {
      "description": "BAJAJFINSV",
      "proName": "BSE:BAJAJFINSV"
    },
    {
      "description": "BHARTIARTL",
      "proName": "BSE:BHARTIARTL"
    },
    {
      "description": "BPCL",
      "proName": "BSE:BPCL"
    },
    {
      "description": "BRITANNIA",
      "proName": "BSE:BRITANNIA"
    },
    {
      "description": "CIPLA",
      "proName": "BSE:CIPLA"
    },
    {
      "description": "COALINDIA",
      "proName": "BSE:COALINDIA"
    },
    {
      "description": "DIVISLAB",
      "proName": "BSE:DIVISLAB"
    },
    {
      "description": "DRREDDY",
      "proName": "BSE:DRREDDY"
    },
    {
      "description": "EICHERMOT",
      "proName": "BSE:EICHERMOT"
    },
    {
      "description": "GAIL",
      "proName": "BSE:GAIL"
    },
    {
      "description": "GRASIM",
      "proName": "BSE:GRASIM"
    },
    {
      "description": "HCLTECH",
      "proName": "BSE:HCLTECH"
    },
    {
      "description": "HDFC",
      "proName": "BSE:HDFC"
    },
    {
      "description": "HDFC BANK",
      "proName": "BSE:HDFCBANK"
    },
    {
      "description": "HDFC LIFE",
      "proName": "BSE:HDFCLIFE"
    },
    {
      "description": "HEROMOTOCO",
      "proName": "BSE:HEROMOTOCO"
    },
    {
      "description": "HINDALCO",
      "proName": "BSE:HINDALCO"
    },
    {
      "description": "HINDUNILVR",
      "proName": "BSE:HINDUNILVR"
    },
    {
      "description": "ICICI BANK",
      "proName": "BSE:ICICIBANK"
    },
    {
      "description": "INDUSINDBK",
      "proName": "BSE:INDUSINDBK"
    },
    {
      "description": "INFY",
      "proName": "BSE:INFY"
    },
    {
      "description": "IOC",
      "proName": "BSE:IOC"
    },
    {
      "description": "ITC",
      "proName": "BSE:ITC"
    },
    {
      "description": "JSW STEEL",
      "proName": "BSE:JSWSTEEL"
    },
    {
      "description": "KOTAKBANK",
      "proName": "BSE:KOTAKBANK"
    },
    {
      "description": "LT",
      "proName": "BSE:LT"
    },
    {
      "description": "M&M",
      "proName": "BSE:M_M"
    },
    {
      "description": "MARUTI",
      "proName": "BSE:MARUTI"
    },
    {
      "description": "NESTLEIND",
      "proName": "BSE:NESTLEIND"
    },
    {
      "description": "NTPC",
      "proName": "BSE:NTPC"
    },
    {
      "description": "ONGC",
      "proName": "BSE:ONGC"
    },
    {
      "description": "POWERGRID",
      "proName": "BSE:POWERGRID"
    },
    {
      "description": "RELIANCE",
      "proName": "BSE:RELIANCE"
    },
    {
      "description": "SBILIFE",
      "proName": "BSE:SBILIFE"
    },
    {
      "description": "SBIN",
      "proName": "BSE:SBIN"
    },
    {
      "description": "SHREECEM",
      "proName": "BSE:SHREECEM"
    },
    {
      "description": "SUNPHARMA",
      "proName": "BSE:SUNPHARMA"
    },
    {
      "description": "TATA MOTORS",
      "proName": "BSE:TATAMOTORS"
    },
    {
      "description": "TATA STEEL",
      "proName": "BSE:TATASTEEL"
    },
    {
      "description": "TCS",
      "proName": "BSE:TCS"
    },
    {
      "description": "TECHM",
      "proName": "BSE:TECHM"
    },
    {
      "description": "TITAN",
      "proName": "BSE:TITAN"
    },
    {
      "description": "ULTRACEMCO",
      "proName": "BSE:ULTRACEMCO"
    },
    {
      "description": "UPL",
      "proName": "BSE:UPL"
    },
    {
      "description": "WIPRO",
      "proName": "BSE:WIPRO"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView END -->


<section>
	<div class="container">
<div class="panel panel-default">
<div class="panel-body"></div>		
						
						
						<h1 class="h2">How To Do A SWOT Analysis For Stocks</h1>
				<p>Investing in the stock market can be an extremely rewarding activity provided you base your decisions on the fundamentals. This essentially means evaluating a company on the basis of its strengths, weaknesses and future caliber before buying its stock. While there are many tools to assess a company, a SWOT analysis is a well-known method that can lend interesting insights into the company&#8217;s potential .The SWOT analysis for stocks evaluates the investment viability of a company from the following angles:-</p>
<ul>
<li style="font-weight: 400;"><b>S</b><span style="font-weight: 400;">trengths</span></li>
<li style="font-weight: 400;"><b>W</b><span style="font-weight: 400;">eaknesses</span></li>
<li style="font-weight: 400;"><b>O</b><span style="font-weight: 400;">pportunities</span></li>
<li style="font-weight: 400;"><b>T</b><span style="font-weight: 400;">hreats</span></li>
</ul>


<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#Evaluating_Strengths">Evaluating Strengths</a></li><li><a href="#Evaluating_Weaknesses">Evaluating Weaknesses</a></li><li><a href="#Evaluating_Opportunities">Evaluating Opportunities</a></li><li><a href="#Evaluating_Threats">Evaluating Threats</a></li></ul></div>
<h2><span id="Evaluating_Strengths"><b>Evaluating Strengths</b></span></h2>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Management including the promoters and the employees</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Products or services (quality of the product, criticality in the value chain, research &amp; development, patent, and the likes)</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Margins (sustenance of the margins vis-a-vis the competitors, importance of the product, substitution, etc.)</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Customer base (customer loyalty, brand loyalty, etc.) </span></li>
</ul>
<p><span style="font-weight: 400;">A  company with fortified upper management, viable product offerings, excellent innovation facilities, and great mass appeal is likely to thrive in the future and can be considered as a viable bet.  However, do keep in mind that every company, product, and market has different strengths. For example, a tech company and an agrochemical or pharmaceutical company will have different strengths. While a pharmaceutical company may have R&amp;D expense or several patents as critical criteria, the tech company may have a client portfolio, and order book as the strength. So analyze the strengths of a company keeping the industry and sector in mind to reach a suitable conclusion buying its stocks</a></span></p>
<h2><span id="Evaluating_Weaknesses"><b>Evaluating Weaknesses</b></span></h2>
<p><span style="font-weight: 400;"> In addition to the strengths, there may be certain areas where a company will be lacking. Some of these shortcomings can be overcome, while really critical ones can make or break its future growth prospects. These soft spots and the gravity of the weaknesses can give a fair idea of the future potential of the company. While evaluating the weaknesses of a company is not an easy task, one thing that can shed a lot of light in this regard is the annual report. </span>In the notes of accounts, companies tend to mention contingent or the potential liabilities that may arise. This information may help you understand the weaknesses of a company. Also, the following are some other weaknesses that should be considered &#8211;</p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Product liability</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Absence of research/innovation</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Unstable management or declining promoter&#8217;s interest including siphoning of the funds from the company resources. </span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Competitive intensity</span></li>
</ul>
<p>Similar to the strengths, a company&#8217;s potential weaknesses will be different. For example, while the utility sector may not face any competition, the FMCG sector may experience it at an elevated level. So again, keep in mind the intrinsic limitations of the industry before evaluating a company for its weak spots.</p>


<h2><span id="Evaluating_Opportunities"><b>Evaluating Opportunities</b></span></h2>
<p><span style="font-weight: 400;">One of the crucial and complicated factors to figure out is opportunities. Opportunities show the potential growth pattern the company may chart out. For some companies, spotting a prospect could be easier than others. Thus, as an investor, you should look for companies that are aggressively venturing out into upcoming areas and possess an early mover advantage. For example, Maruti announced entering the electric vehicle segment when it was evident that India, sooner or later, will adapt to the same owing to the rising pollution level. Similarly, a lot of start-ups are finding opportunities in different segments, such as artificial intelligence. </span></p>
<p><span style="font-weight: 400;">While evaluating on the opportunities front, here are a few things to look out for:- </span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Internal opportunities such as new geography, new product, etc. </span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">External opportunities such as mergers or acquisitions, a new segment, new industries, etc. </span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Macroeconomic factors such as scarcity of resources, an abundance of the same, etc. </span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Social trends</span></li>
</ul>
<p><span style="font-weight: 400;">In the annual report of a company or even the transcript call or quarterly earnings presentation, a company may share its insights under the Management Discussion &amp; Analysis section. This is where the company talks of its plans for the future and how it is going to leverage the growth of the economy or the sector. An investor should gain insights from the section and accordingly form an opinion of the company&#8217;s future.</span></p>
<h2><span id="Evaluating_Threats"><b>Evaluating Threats</b></span></h2>
<p><span style="font-weight: 400;">The last of the four-point framework in the SWOT analysis of stocks is the threats. Every investor needs to look at the direct risks to their investments and threats a company faces can tell you a lot about the risk your investments could be exposed to as well. Threats are basically weaknesses magnified, that have a direct impact on the business of the company. </span></p>
<p><span style="font-weight: 400;">For example, a high contingent liability could be a threat. Some common risks include:</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Litigation</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Government policies that may impact the business</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Competition</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Substitute and its pricing</span></li>
</ul>
<p><span style="font-weight: 400;">The notes to the accounts section provide excellent insights into potential threats to the company. An investor could look at line items such as a lawsuit against the company, ban on product/process of the company, any pending litigation matter, stay order, or any ban on the production/license (more applicable to pharmaceutical, agrochemical sector). Competition can also pose as a threat in-case the company is not fast enough with their product and pricing innovations.</span></p>
<p><span style="font-weight: 400;">To conclude, use the SWOT analysis of a company before basing your bets. It may seem like a cumbersome and time-consuming activity however it will make sure your investment decisions are based on sound fundamentals and not short-sighted gains. Eventually, this research will bear fruits in the form of long term gains as well as protect your capital to a large extent. In fact, many companies who scored well on the SWOT analysis went on to become multi-baggers</a> and graciously rewarded their investors who didn&#8217;t relinquish their stocks due to short term volatility. You can gain immensely from stock investing too provided you know what you are getting into and remain patient. So make informed decisions, carefully weigh the pros and cons and then stay invested!</span></p>
<p>Happy Investing!</p>


      <h2 class="handle"><label for="handle1">Disclaimer</label></h2>
        <div class="content">
            <p>Investment in securities market are subject to market risks, read all the related documents carefully before investing. Please read the Risk Disclosure documents carefully before investing in Equity Shares, Derivatives, Mutual fund, and/or other instruments traded on the Stock Exchanges. As investments are subject to market risks and price fluctuation risk, there is no assurance or guarantee that the investment objectives shall be achieved. NBT do not guarantee any assured returns on any investments. Past performance of securities/instruments is not indicative of their future performance.</p>
        </div>
						
</section>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<p>&nbsp;</p>

		<footer>
		<p class="p-3 bg-dark text-white text-center">
		© 2021 ShareMarket All Rights Reserved</p>
		</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
