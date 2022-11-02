<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - CURRENCY</title>
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
          <a class="dropdown-item" href="#">BASIC</a>
          <a class="dropdown-item" href="#">TECHNICAL ANALYSIS</a>
          <a class="dropdown-item" href="#">FUNDAMENTAL ANALYSIS</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="nifty50.php">NIFTY 50</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="advancedchart.php">ADVANCED CHART</a>
      </li>
      <li class="nav-item active">
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
						<h1 class="h2 page-main-title">Stock Market Basics</h1>					<!--	<span class="ins_author page-date"> -->
	
	
	
				<div class="addtoany_share_save_container addtoany_content addtoany_content_top"><div class="addtoany_header">Share: </div><div class="a2a_kit a2a_kit_size_26 addtoany_list" data-a2a-url="https://groww.in/p/stock-market-basics/" data-a2a-title="Stock Market Basics"><a class="a2a_button_whatsapp" href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fgroww.in%2Fp%2Fstock-market-basics%2F&amp;linkname=Stock%20Market%20Basics" title="WhatsApp" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fgroww.in%2Fp%2Fstock-market-basics%2F&amp;linkname=Stock%20Market%20Basics" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_linkedin" href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fgroww.in%2Fp%2Fstock-market-basics%2F&amp;linkname=Stock%20Market%20Basics" title="LinkedIn" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fgroww.in%2Fp%2Fstock-market-basics%2F&amp;linkname=Stock%20Market%20Basics" title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_reddit" href="https://www.addtoany.com/add_to/reddit?linkurl=https%3A%2F%2Fgroww.in%2Fp%2Fstock-market-basics%2F&amp;linkname=Stock%20Market%20Basics" title="Reddit" rel="nofollow noopener" target="_blank"></a></div></div><p>All companies need money to run their business. Sometimes the profit acquired from selling goods or services is not sufficient to meet the working capital requirements. And so, companies invite normal people like you and me to put some money in their company so that they can run it efficiently and in return investors get a share of whatever profit they make. Understanding this is the first step towards understanding stock market basics. Let’s learn about this in detail.</p>
<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#What_are_shares">What are shares?</a></li><li><a href="#Why_do_companies_need_shares">Why do companies need shares?</a></li><li><a href="#How_does_a_company_list_its_shares">How does a company list its shares?</a></li><li><a href="#How_do_you_make_money">How do you make money?</a></li><li><a href="#How_do_you_start_trading_or_investing">How do you start trading or investing:</a></li></ul></div>
<h2><span id="What_are_shares"><strong>What are shares?</strong></span></h2>
<p>Shares are a way to own a part of the company’s value. In proportion to the capital you invest, you can get ownership rights to a certain percentage in the company.  Say you own 2% of the shares being traded in the market, you can say you have 2% ownership in the company.</p>
<p>Hence, shares are units of ownership in the company and its financial assets. Shares are also known as stocks, equity, scrips etc. After purchasing them you will be known as a stockholder or a shareholder of the company.</p>
<h2><span id="Why_do_companies_need_shares"><strong>Why do companies need shares?</strong></span></h2>
<p>Why does a company need money from the market? As mentioned before, when a company is scaling up, expanding its business etc, it will need more capital. During such times, a company can tap into the share market and offer a certain number of shares based on its market value, which investors can buy.</p>
<p>Investors will be paying the company some money and in return get to be part owners. So when the value of shares rises, the value of shares investors own rises. Investors are however not lending money to the company so they are not creditors. These indeed share market basics for beginners because it is essential to understand why companies need shares at all.</p>
<h2><span id="How_does_a_company_list_its_shares"><strong>How does a company list its shares?</strong></span></h2>
<p>Another important aspect of share market basics is Initial Public Offering (IPO). The first time a company offers its shares to the public, it is called an IPO. Securities and Exchange Board of India (Sebi), our markets regulator, has laid out a few rules and regulations for a company to list its IPO on exchanges which they have to comply with before being eligible for listing.</p>
<p><strong>What is Sebi?</strong></p>
<p>Securities and Exchange Board of India</a> is the securities market regulator to oversee any fraudulent transactions and activities made by any of the parties: companies, investors, traders, brokers and the likes.</p><div class="groww-content_6" id="groww-1795025708"><div class="stocks-cta-main">
        
</div></div>
<p><strong>What are stock exchanges and how many exchanges are there?</strong></p>
<p>Stock exchanges is a place or a platform where traders and buyers come together to buy and sell stocks. There are two primary stock exchanges in the country: Bombay Stock Exchange (BSE) and National Stock Exchange (NSE). This is extremely important information to know about stock market basics in India.</p>
<p><strong>What are Nifty and Sensex?</strong></p>
<p>All companies who want to get listed approach either NSE, BSE or both. All stock exchanges need equity benchmarks to signify the trend in the stock market in the best way possible. Both BSE and NSE have 100s and 1000s of companies listed on them. But if you have to pick the top 30 stocks, or look at what the bottom 100 are doing, it will be difficult for you to siphon through this huge number of companies listed. What indices like Nifty and Sensex do is to group them together.</p>
<p>Nifty 50</a> is a collection of the top 50 companies listed on NSE and Sensex is a collection of the top 30 stocks listed on BSE by way of market capitalisation. The top companies are the ones that influence the stock market the most and influence the country’s economy the most. Hence an index with the top and largest companies is the best gauge for how the entire stock market.</p>
<p>There is also BSE500, Nifty Midcap, BSE Smallcap and many more such indices. However, Nifty 50 and Sensex are primary benchmarks.</p>
<p>There are sectoral indices as well; Nifty Pharma, BSEBankex, Nifty PSU and many such sectoral indices that group the top stocks in each sector which helps us to understand how the sector is doing.</p>
<p>In Short: Indices tell us in a short, concise and easy way, how is the market doing.</p>
<p><strong>When can you conduct stock market transactions?</strong></p>
<p>To know about the stock market basics in India, you should also know when you are permitted to buy and sell shares. The stock market business hours in India run from 9.15 a.m. to 3.30 p.m. There are a few days in the country when the stock market is shut, they are known as market holidays. Few examples of market holidays are Holi, Id, Independence Day, Republic Day etc.</p>
<h2><span id="How_do_you_make_money"><strong>How do you make money?</strong></span></h2>
<p>Naturally, when you buy shares at a lower price and sell it at a higher price, you earn the capital gain. However there are two ways you can do this and if you are a beginner, it is especially important for you to know the difference between stock trading basics and stock investment basics.</p>
<p>There are two ways</p>
<p><strong>Stock investors</strong>: Stock investors are those who keep their money in the stock for a longer period of time, sometimes even years. Returns are compounded over a period of time. Investors use fundamental analysis. They look at the growth trajectory of the company because your investment literally grows with the company in the long term.</p>
<p><strong>Stock traders</strong>: Stock traders generally buy and sell within the same trading session. Traders use technical analysis to understand which stocks to invest in. Traders look for short and quick gains. Stock trading</a> basics will require you to learn technical indicators like momentum oscillators, bollinger bands, charts and more.</p>
<h2><span id="How_do_you_start_trading_or_investing"><strong>How do you start trading or investing</strong>:</span></h2>
<p>You need to open a Demat and trading account. Most investment platforms and brokers these days provide you with a Demat cum trading account. Trading account is used for just the transactions.; buying and selling. Generally, if you are a trader, you don’t really need to open a Demat account because if you are buying and selling within the same day, a trading account will suffice. Demat account is where your shares are stored in electronic form. Generally takes 2 working days for shares to get dematerialised and transferred to your Demat account. So after that, if you buy or sell your share it gets debited or credited from your account.</p>
<p><strong>Are there any taxes?</strong></p>
<p>Yes, taxes are applicable to the gains you make from your stock market transactions. A brief of how much you will be taxed is mentioned in the table below.</p>
<p>Long term capital gains are defined as gains you make after holding your shares for a period of 1 year or more and short term capital gains are gains you make when you hold the shares for a period of less than a year.</p>
</div>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td>Tax Type</td>
<td>Tax applicable</td>
</tr>
<tr>
<td>Long term capital gains tax</a></td>
<td>10% over and above Rs. 1 Lakh on sale of equity shares.</td>
</tr>
<tr>
<td>Short term capital gains tax</a></td>
<td>15%, when securities transaction tax is applicable.</td>
</tr>
</tbody>
</table>
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
