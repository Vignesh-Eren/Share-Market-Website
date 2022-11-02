<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - Stock Market Index</title>
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
  <a class="navbar-brand" href="index.php">BASIC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="basics.php">Stock Market Basics<span class="sr-only">(current)</span></a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="basics2.php">How Stock Market Work</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="basics3.php">Demat Account</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="basics4.php">Who can Invest</a>
        </li>
	  <li class="nav-item">
        <a class="nav-link" href="basics5.php">Types of Stocks</a>
      </li>
	  <li class="nav-item  active">
        <a class="nav-link" href="basics6.php">Stock Market Index</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="basics7.php">IPO</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="basics8.php">How to Invest in an IPO</a>
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
<h1 class="h2 page-main-title">Stock Market Index</h1>
				<p>Sensex and Nifty are the two most important stock market Indices in India. They are the benchmark indices meaning, the important ones, and a standard point of reference for the entire stock market of India. Before we proceed, it’s important to understand what stock market indices are.</p>
<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#What_are_Stock_Market_IndexIndices">What are Stock Market Index/Indices?</a></li><li><a href="#Types_of_Stock_Market_Indices">Types of Stock Market Indices</a></li><li><a href="#How_Do_Indices_Select_Stocks">How Do Indices Select Stocks?</a></li><li><a href="#Why_Do_We_Need_Indices">Why Do We Need Indices?</a></li><li><a href="#Reflects_Investor_Sentiment">Reflects Investor Sentiment:</a></li><li><a href="#Conclusion">Conclusion</a></li></ul></div>
<h2><span id="What_are_Stock_Market_IndexIndices"><strong>What are Stock Market Index/Indices?</strong></span></h2>


<h1 class="h2 page-main-title">Stock Market Index</h1>

<p>The right guide to understanding a stock market index is to first know what a stock exchange is. The stock exchange is a place where all the tradable securities like shares, bonds, derivatives, commodities are listed.</p>
<p>To be able to trade(buy and sell) these securities, they need to be listed on the stock exchanges first and the Securities and Exchange Board of India (Sebi), our market regulator, oversees such activities.</p>
<p>We have two major stock exchanges in India:</p>
<ol>
<li>Bombay Stock Exchange</a> (BSE)</li>
<li>National Stock Exchange</a> (NSE)</li>
</ol>
<p>Other than these two we have few other exchanges like Calcutta Stock Exchange, Metropolitan Stock Exchange, National Commodity &amp; Derivatives Exchange Ltd. among others. There are 9 stock exchanges recognized by Sebi in the country.</p>
<p>A stock market index in India is an indicator of its respective stock exchange. Hundreds and thousands of companies are listed on both the exchanges but indicators are a gauge of only a few top-performing companies.</p>
<p>This is done to reduce the clutter and to indicate the true position of the market. Bigger and better companies lead the economy and the country’s financial health hence this is the rationale behind keeping only the cream in the indices. We will later get into the different methodologies of how companies are picked to be listed on the respective indices.</p>
<h2><span id="Types_of_Stock_Market_Indices"><strong>Types of Stock Market Indices</strong></span></h2>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text">Indices</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1100,
  "height": 400,
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "FOREXCOM:SPXUSD",
          "displayName": "S&P 500"
        },
        {
          "name": "FOREXCOM:NSXUSD",
          "displayName": "Nasdaq 100"
        },
        {
          "name": "FOREXCOM:DJI",
          "displayName": "Dow 30"
        },
        {
          "name": "INDEX:NKY",
          "displayName": "Nikkei 225"
        },
        {
          "name": "INDEX:DEU30",
          "displayName": "DAX Index"
        },
        {
          "name": "FOREXCOM:UKXGBP",
          "displayName": "FTSE 100"
        },
        {
          "name": "BSE:SENSEX",
          "displayName": "SENSEX"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->

<p><strong>Benchmark Indices: </strong>S&amp;P BSE Sensex</a>, a collection of 30 best-performing stocks and Nifty 50</a>, a collection of 50 best-performing stocks are indicators of BSE and NSE respectively. They are considered benchmark indices because they are the most concise, use the best practices to regulate the companies they pick and hence are the best points of reference for how the markets are doing in general.</p><div class="groww-content_6" id="groww-2007658570"><div class="stocks-cta-main">
        
</div></div>
<p><b><i>Fun fact: </i></b><i><span style="font-weight: 400;">BSE adds S&amp;P as a prefix before all the indices because, in the year 2013, BSE and S&amp;P Down Jones Indices, a global resource for all index related information announced a strategic partnership “</span></i><i><span style="font-weight: 400;">to calculate, disseminate, and license the widely followed suite of BSE indices,” BSE had said in a statement. It is just a co-branding technique. </span></i></p>
<p><strong>Sectoral Indices: </strong>Both exchanges, NSE and BSE also have some indicators that are a gauge of companies falling under one particular sector. Indices like NSE Pharma and S&amp;P BSE Healthcare are indicators of their respective exchanges for the pharmaceutical sector. Another example could be Nifty PSU Bank and S&amp;P BSE PSU Indices are indicators of all the listed public sector banks. It is not necessary that both the exchanges will have corresponding indices for all the sectors but this is generally the case.</p>
<p><strong>Market-cap based indices: </strong>There are few indices that purely select companies only on the basis of market capitalization. Market cap, as we know, is the market value of any public traded company. Indices like NSE smallcap 50 and S&amp;P BSE smallcap are indices that are a collection of only those companies that have a lower/smaller market capitalization in accordance with rules by Sebi. There are also other indices like NSE midcap 100, S&amp;P BSE midcap, and likewise.</p>
<p><strong>Other indices: </strong>There are also some other indices like S&amp;P BSE 100, S&amp;P BSE 500, NSE 100 among others which are slightly bigger indices and have a much bigger number of stocks listed on them.</p>
<h2><span id="How_Do_Indices_Select_Stocks"><strong>How Do Indices Select Stocks?</strong></span></h2>
<p>By far, we must’ve understood that indices are ways and means to group the best of the stocks as they impact the economy the most and are the best gauge to understand the markets in general. However, we also need to know how a stock market index in India selects stocks.</p>
<p><strong>How do indices arrive at a value: </strong>When an entire index, for e.g. like a Sensex or a Nifty goes up or down, it means that stocks comprising those indices have performed better or worse. This does not mean that if a company, say Reliance Industries Ltd. (RIL) which is listed in both, Nifty and Sensex, goes up by say 4% during a trading session, the index will not correspondingly go up by 4% because there are other stocks in the index as well which may have gone up or down and influenced the movement of the index. On any given day, not all sectors in the economy are doing well. An index’s total value cannot be a simple addition of all m-cap values because not all stocks carry the same weightage in the index. How will the weights be assigned depends on the stock selection strategy put in place?</p>
<p>There are primarily two factors by which stocks are picked:</p>
<p><strong>a) Market-capitalization</strong>: Companies with the largest market-cap are picked and grouped together in an index when the M-cap is the premise of the stock selection strategy. Companies with the largest m-cap have a bigger weightage on the index’s value while stocks with a small m-cap do not influence the index as much. Indian indices mostly use free-float market capitalization for assigning weights to their stocks.</p>
<p><strong>How is free float m-cap different from full m-cap: </strong>M-cap is the total value of the company measured in the outstanding shares it has issued. Free float m-cap, which the indices use to weigh stocks, excludes shares held by promoters.</p>
<p>For example, Reliance Industries Ltd</a>. (RIL) has the highest free float m-cap as on April 20 closing data so it has the highest weightage among other stocks that form Sensex. So a movement in RIL, positive or negative, will have a higher impact than a positive or negative movement in other stocks.</p>
<p><strong>b) Price</strong>: There are also some indices in the world that use price to give weightage to stocks in an index. An example of this would be Japan’s Nikkei 225. Companies with a higher stock price have a higher weightage and impact the index more than the lower valued stocks.</p>
<h2><span id="Why_Do_We_Need_Indices"><strong>Why Do We Need Indices?</strong></span></h2>
<p>The basic premise of having indices is to make trading easy for investors. Imagine a stock market where you do not have such categories, it is just an open marketplace where all the stocks listed on the exchanges are available for purchase, you do not know which stock has a higher m-cap, you do not know which stocks have lower value and which are the ‘better’ stocks. All investors will be roaming around like headless hunters. This is where the importance of stock market indices is realized. They make it easy for you to trade by grouping them and making their visibility stronger.</p>
<p>Here are a few reasons why having indices is an essential component of stock market investments</a>:</p>
<p><strong>Grouping/Sorting</strong>: As mentioned above, having all the stocks grouped together in an organised fashion and selected by a certain strategy, such as free float m-cap in this case, makes it easier to see the best of the stocks in one place. Let’s consider Sensex as an example. S&amp;P BSE Sensex is a collection of 30 stocks, S&amp;P BSE 100 is a collection of 100 stocks and S&amp;P BSE 500 is a collection of 500 stocks. These indices help you to see the top stocks by way of m-cap in one place.</p>
<p>Sometimes you may just want to see how a certain sector is doing. For example, in current times where a pandemic has gripped the entire world and stock markets are down, you may be curious about how the health sector is doing. In the absence of indices, you would have to individually hunt for all pharmaceutical companies, collate them together and do your own math. However, grouped indices like Nifty Pharma and S&amp;P BSE Healthcare do that job for you.</p>
<p><strong>Assessing stock and market performance: </strong>Not only does sorting help you to pick your stocks but also guides you in the process thereafter. Having organized indices help you to find answers to If a stock is performing better than the benchmark stock market index<strong>, </strong>if a certain stock is riskier than the others, if it is performing better or worse than the others listed along with it in the index, has the stock performed better or worse than the others belonging to its sector and many such questions. Indices are a great way to have a record of how the stock performs individually and comparatively.</p>
<p>Indices have a plethora of information on stocks. Price history, volume changes, peer to peer comparison, sector performance, volatility, and a sense of where the market is moving. If a collection of the 30 or 50 best companies is showing an uptrend or a downtrend it speaks volumes on how the stock market is doing in general.</p>
<h2><span id="Reflects_Investor_Sentiment"><strong>Reflects Investor Sentiment</strong>:</span></h2>
<table  style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td>Index</td>
<td>YTD performance (year to date) *</td>
</tr>
<tr>
<td>Nifty 50</td>
<td>-26.59%</td>
</tr>
<tr>
<td>S&amp;P BSE Sensex</td>
<td>-26.07%</td>
</tr>
</tbody>
</table>
<p>*As on April 20 closing session</p>
<p>If we refer to the table above, we can see that in the calendar year 2020, Nifty 50 has dropped 26.59% and Sensex by 26.07% in the last 4.5 months. This speaks a lot about investor sentiment. Coronavirus has shaken investor confidence and global economies. With job loss, industry shutdowns and the lockdown imposed, people have lower confidence in the markets and do not consider them as safe havens anymore. Currently, the market is indicating a negative investor sentiment.</p>
<p>In the absence of indices, you would not be able to get this figure in a jiffy and would have to do your own calculations, siphon off the best and worst-performing companies from a list of 1,000 companies.</p>
<h2><span id="Conclusion"><strong>Conclusion</strong></span></h2>
<p><strong>Stock market indices</strong> are the bread and butter of the investment milieu. It is not just an added advantage but a necessity. In its absence, the investment world would have been mayhem of investors flocking around for good stocks to invest in. The importance of stock market indices rests in making investment easy.</p>
<p>Having indices reduces your load and makes at least the first step in stock market investment easy. This is not the end. You do need to do the rest of the work for yourself when it comes to investing. Sensex may have the 30 best companies but it does not necessarily mean that they are the 30 best companies for you. You may have a low-risk appetite and a stock listed on Sensex may have a high-risk value.</p>
<p>Investment portfolios cannot be a one-size-fits-all and need to be tailor-made for every investor.</p>

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