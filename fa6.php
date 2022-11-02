<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - 5 Financial Ratios</title>
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

	  <li class="nav-item">
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
	  <li class="nav-item active">
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

<h1 class="h2">5 Financial Ratios Every Stock Investor Should Know</h1>

<p><span style="font-weight: 400;">In stock investing, most experts will tell you about conducting the fundamental analysis of the company before picking stocks. This means that you need to look at the financial records of the company and assess if its stocks are worth investing in right now. </span></p>
<p><span style="font-weight: 400;">However, not everyone is a finance wiz to know what exactly to look for while assessing a company and its stocks. Hence, there are some fundamental areas that need your attention to ascertain the viability of the investment.</span></p>
<p>Here&#8217;s where financial ratios can come to your aid to analyse a stock and make a decision. Let&#8217;s see what these ratios are and what to they say about the viability of a stock.</p><div class="groww-content_8" id="groww-1900140254"><div class="row blog_cta">
</div></div>

<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#1_Price_to_earnings_PE_Ratio">1. Price to earnings (P/E) Ratio</a></li><li><a href="#2_Return_on_Equity_RoE_Ratio">2. Return on Equity (RoE) Ratio</a></li><li><a href="#3_Price-to-Book_PB_Ratio">3. Price-to-Book (P/B) Ratio</a></li><li><a href="#4_Dividend_Yield_or_the_Dividend-Price_ratio">4. Dividend Yield or the Dividend-Price ratio</a></li><li><a href="#5_Debt-to-Equity_DE_Ratio">5. Debt-to-Equity (D/E) Ratio</a></li></ul></div>
<h2><span id="1_Price_to_earnings_PE_Ratio"><strong>1. Price to earnings (P/E) Ratio</strong></span></h2>
<p><span style="font-weight: 400;">As the name suggests, a P/E ratio</a> is the ratio of the current share price to the earning of the company per share. This ratio can tell you if the <em>company is undervalued or overvalued in the market.</em></span></p>
<p><strong>Let’s say that a company has an overall earning of Rs.1000. Also, it has 100 shares trading in the market. </strong></p>
<p><strong>Therefore, its ‘earning per share’ is Rs.10. </strong></p>
<p><strong>Further, let’s say that the shares of the company are trading at Rs.100 per share. Hence, we have</strong></p>
<p><strong>P/E Ratio = 100/10 = 10</strong></p>
<p><span style="font-weight: 400;">In the simplest terms, this means that you are paying Rs.10 for getting Rs.1 from the company’s earnings. Hence, it is easy to deduce that if a company has a higher P/E ratio, it is that much overvalued.</span></p>
<p><strong>What should be the ideal P/E ratio of a stock that you can invest in?</strong></p>
<p><span style="font-weight: 400;">The answer to this question is not straightforward. This is because you cannot compare P/E Ratios as absolute values since every industry has a different benchmark.</span></p>
<p><span style="font-weight: 400;"> For example, in the FMCG industry, the normal P/E Ratio is around 40-50. Let’s look at two FMCG companies:</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Hindustan Unilever Ltd</a> (HUL) has a P/E ratio of &gt;70</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Britannia has a P/E ratio of ~ 50</span></li>
</ul>
<p><span style="font-weight: 400;">Hence, HUL is overvalued as compared to Britannia.</span></p>
<p><span style="font-weight: 400;">Just to give you more clarity, the P/E ratio of JK Paper is 4. If you compare this with the P/E ratios of HUL or Britannia, then you will get an incorrect picture because the industries are different. In the Paper Industry, the normal P/E ratio is around 7-9. Therefore, JK Paper is around normal.</span></p>
<p><span style="font-weight: 400;">Hence, while analyzing the P/E ratio of a company, it is important to know the industry benchmarks and assess its valuation accordingly.</span></p>
<h2><span id="2_Return_on_Equity_RoE_Ratio"><strong>2. Return on Equity (RoE) Ratio</strong></span></h2>
<p><span style="font-weight: 400;">As the name suggests, the RoE Ratio</a> is a measure of the rate of return on the stock of a company. In other words, it tells investors how good the company is in generating returns on stock investments. </span></p>
<p><span style="font-weight: 400;">Mathematically,</span></p>
<p>RoE = Net Income/Total Shareholder’s Equity</p>
<p><span style="font-weight: 400;">This is an important ratio because it shows the company’s ability to turn equity investments into profits. </span></p>
<p><strong><i>Let’s say that you are the promoter of a company and have contributed Rs.100 in equity and the total equity of the company is Rs.100.</i></strong></p>
<p><strong><i> Using this equity if the company generates an income of Rs.20, then the RoE is 20%. Imagine another company with the same total equity but generating an income of Rs.40 – its RoE ratio will be 40%. The company that generates better RoE is considered better.</i></strong></p>
<p><span style="font-weight: 400;">However, you should not look at RoE as a standalone factor. Here is a quick example:</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Last year, Coal India had an RoE of 70%</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">The RoE of HEG was &gt; 100%</span></li>
</ul>
<p><strong>Does this mean that these are good companies to invest in? </strong></p>
<p><span style="font-weight: 400;">There are a couple of important things that you need to understand about RoE ratios:</span></p>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Like the P/E ratios, the RoE ratios can vary according to sectors and industries. Hence, it is important to understand the industry average too.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">A company can also have a high RoE ratio because it has taken a lot of debt and its equity investment is low. Hence, you must look at the equity structure of the company along with its complete financials to make the decision.</span></li>
</ol>
<h2><span id="3_Price-to-Book_PB_Ratio"><strong>3. Price-to-Book (P/B) Ratio</strong></span></h2>
<p><span style="font-weight: 400;">The price-to-book ratio is a simple comparison of a company’s market value (market capitalization) to its book value. It compares the company’s stock price to its book value per share.</span></p>
<p><span style="font-weight: 400;">Before we understand the P/B ratio, let’s look at what book value means:</span></p>
<p><span style="font-weight: 400;">The simplest way to understand book value is to think that if a company stops doing all business, pays off its loans, and sells its assets, what will be the value of the company. Here is an example:</span></p>
<p><strong>Let’s say that the value of a company is Rs.1000. It decides to shut down the company and receives Rs.1000. Out of this, it has to pay Rs.400 as loan repayment. Also, the company has some assets that fetch it Rs.200. Therefore, </strong></p>
<p><strong>The total book value of the company = 1000 – 400 + 200 = Rs.800</strong></p>
<p><strong>Next, let’s say that the total number of outstanding shares was 100. Therefore, the book value of the company per share = 800/100 = Rs.8</strong></p>
<p><strong>Now, </strong></p>
<p><strong>P/B ratio = Market price of a share/Book value per share</strong></p>
<p><strong>Let’s say that the market price of a share of the company is Rs.80. Therefore,</strong></p>
<p><strong>P/B ratio = 80/8 = 10</strong></p>
<p><span style="font-weight: 400;">If a company has a low P/B ratio, then it is said to be undervalued and a high P/B ratio is overvalued. It is an excellent way to identify companies whose stock prices have sky-rocketed without any asset base. </span></p>
<p><span style="font-weight: 400;">However, as is the case with the other ratios mentioned above, you should not make a decision about the strength of a company by looking at its P/B ratio alone. In the current markets, with panic selling being the theme, many fundamentally weak stocks will have a low P/B ratio (even less than 1).</span></p>
<p><span style="font-weight: 400;"> You must ensure that you look at the industry average and other financial factors before making an investment. Here is an example to explain this point:</span></p>
<p><span style="font-weight: 400;">We all know that Yes Bank was in a lot of problems recently. However, its P/B ratio is 1.14 (that’s low). On the other hand, the P/B ratio of D-mart is 22 but it is considered to be fundamentally strong!</span></p>
<h2><span id="4_Dividend_Yield_or_the_Dividend-Price_ratio"><strong>4. Dividend Yield or the Dividend-Price ratio</strong></span></h2>
<p><span style="font-weight: 400;">Dividend yield or the dividend-price ratio is the amount of money or dividend that a company pays its shareholders over the course of a year </span><b>divided</b><span style="font-weight: 400;"> by its current stock price. It is an indicator of the returns you can expect on your investment.</span></p>
<p><span style="font-weight: 400;">Let’s say that you purchased a stock at the market price of Rs.100. A year later, the stock price is still Rs.100. Is this a good investment?</span></p>
<p><span style="font-weight: 400;">A quick look at the appreciation of share price says that it is not – you got a zero percent return! However, have you considered the dividend before making this decision?</span></p>
<p><b>What is dividend?</b></p>
<p><span style="font-weight: 400;">Let’s say that the company makes a profit of Rs.1000. Out of this, it decides to keep Rs.600 for business expansion and distribute Rs.400 among its shareholders. Assuming that there were 100 shares in the market, each shareholder will receive a dividend of Rs.4. </span></p>
<p><span style="font-weight: 400;">This becomes the return on investment for the shareholder. Even if the share price did not appreciate, the shareholder earned a return on his investment.</span></p>
<p><span style="font-weight: 400;">Dividend yield is an important ratio because there are many stocks that do not appreciate in price but offer handsome dividends. If the dividend yield is higher, the investor has a better chance of receiving higher dividends for the same investment as compared to a stock with a low dividend yield.</span></p>
<h2><span id="5_Debt-to-Equity_DE_Ratio"><strong>5. Debt-to-Equity (D/E) Ratio</strong></span></h2>
<p><span style="font-weight: 400;">As the name suggests, this ratio gives you an overview of the debts and equity of the company. It is calculated by dividing the company’s total liabilities (debts) by its total shareholder equity. It can give you an indication of how much is the company running on loans versus owned funds. </span></p>
<p><span style="font-weight: 400;">There is no ideal D/E ratio as it can vary with industries and sectors.</span></p>
<p><span style="font-weight: 400;">Usually, if a company has a lot of debt, then it is assumed that the company will find it difficult to pay it back. Also, since debt attracts interest, it will directly impact the company’s profit and loss statement and negatively impact its net income leading to a drop in the cash flow. </span></p>
<p><span style="font-weight: 400;">The D/E ratio can help you determine if the company has a lot of debt or not. A high D/E ratio means higher debt and vice-versa.</span></p>
<p><span style="font-weight: 400;">However, it is important to remember that high debt does not necessarily mean a bad thing. If the company factors in the interest and repays its debts on time while utilizing the funds constructively, it can experience growth.</span></p>
<p><span style="font-weight: 400;"> Hence, it is important to treat this ratio as a mere indicator of the amount of debt a company as with respect to its equity.</span></p>
<p><strong>Summing Up</strong></p>
<p><span style="font-weight: 400;">While a detailed fundamental analysis of a company is a must, these ratios can help you get a bird’s-eye view of the company’s financials. It is also important to remember that these ratios are dynamic in nature.</span></p>
<p><span style="font-weight: 400;"> Hence, it is important to recalculate them once every quarter (after the declaration of the quarterly financial results). Prudence is a necessary skill for investors and learning how to analyze the fundamentals of a company before investing in its stock is the first step to becoming a prudent investor. </span></p>
<p><em>Happy Investing!</em></p>



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