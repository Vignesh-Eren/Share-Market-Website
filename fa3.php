<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - Business and Industry Analysis</title>
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
	  <li class="nav-item active">
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

<h1 class="h2">How to do Business and Industry Analysis of a Company?</h1>


<p><span style="font-weight: 400;">Fundamental and technical analysis are two ways of evaluating a stock for its potential to give returns in the future. While technical analysis focuses on predicting a stock’s performance based on the trend in stock price, fundamental analysis focuses on intrinsic factors such as the company’s financial potential, growth prospects, competitive advantage over peers, management quality, etc. One aspect of fundamental analysis is to gather insights about the industry in general and the business in particular. This is known as Business and Industry analysis. In this article, I will explain how to conduct BIA and fine-tune your stock selection strategy. Read On!</span></p>
<p><b>Investment Strategy and BIA </b></p>
<p><span style="font-weight: 400;">There are two main approaches you can use to conduct a BIA- Top-Down or Bottom-Up approach. Let me quickly take you through them both. You can choose either one as your guiding light. </span></p><div class="groww-content_8" id="groww-610144191"><div class="row blog_cta">
	
</div></div>
<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#Top-Down_approach">Top-Down approach</a></li><li><a href="#1_Year-on-Year_YoY_Sales_Growth">1. Year-on-Year (YoY) Sales Growth</a></li><li><a href="#2_Performance_as_Compared_to_its_Peers">2. Performance as Compared to its Peers</a></li><li><a href="#3_Converting_Sales_Growth_to_Profits">3. Converting Sales Growth to Profits</a></li><li><a href="#4_Value-creation_for_Shareholders_from_the_Profits_Retained">4. Value-creation for Shareholders from the Profits Retained</a></li></ul></div>
<h3><span id="Top-Down_approach"><b>Top-Down approach</b></span></h3>
<p><span style="font-weight: 400;">In a top-down approach, investors usually start by analyzing the economy, move to analyse the industry and then finally the company. This allows them to narrow down the list of stocks by looking at the state of the economy and figuring out sectors that were expected to perform well. Subsequently, a company-level analysis would help the investor create a shortlist of stocks for investing.</span></p>
<p><b>Bottom-Up Approach </b></p>
<p><span style="font-weight: 400;">As the name suggests, in the bottom-up approach,  the investor tries to identify companies that are expected to grow without restricting the search to any specific sector or industry. This involves finding companies with superior business strengths regardless of the state of the industry or the economy. Investors who follow this approach believe that companies with a distinct business advantage are good companies to invest in for the long-term.</span></p>
<h3><span id="1_Year-on-Year_YoY_Sales_Growth"><b>1. Year-on-Year (YoY) Sales Growth</b></span></h3>
<p><span style="font-weight: 400;">If a company has a consistent history of year-on-year growth in sales, then it indicates that the company has a distinct business advantage. Typically, a company that has a YoY growth of 10-20 percent over the last 5/10 years indicates a company that is doing something right.</span></p>
<p><span style="font-weight: 400;">Let’s look at an example of two companies from the banking sector – IDBI Bank and HDFC Bank. Here is a table of the net sales turnover of both these banks over the last 5 years (in Rs. Crores):</span></p>
<p><span style="font-weight: 400;"><strong>Please Note</strong>: The companies mentioned below are not stock recommendations. They should be only used to understand the concept of the article. Please carry out independent research before investing. </span></p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><b>Company</b></td>
<td><b>2016</b></td>
<td><b>2017</b></td>
<td><b>2018</b></td>
<td><b>2019</b></td>
<td><b>2020</b></td>
<td><b>CAGR</b></td>
</tr>
<tr>
<td><b>HDFC Bank Ltd.</b></td>
<td><span style="font-weight: 400;">60221</span></td>
<td><span style="font-weight: 400;">69306</span></td>
<td><span style="font-weight: 400;">80241</span></td>
<td><span style="font-weight: 400;">98972</span></td>
<td><span style="font-weight: 400;">114812</span></td>
<td><b>9.09%</b></td>
</tr>
<tr>
<td><b>IDBI Bank Ltd.</b></td>
<td><span style="font-weight: 400;">28043</span></td>
<td><span style="font-weight: 400;">27791</span></td>
<td><span style="font-weight: 400;">23027</span></td>
<td><span style="font-weight: 400;">22071</span></td>
<td><span style="font-weight: 400;">20825</span></td>
<td><b>-5.78%</b></td>
</tr>
</tbody>
</table>
<p><span style="font-weight: 400;">As you can see above, there is a significant difference in the CAGR of the sales of HDFC and IDBI bank. If you look at the stock prices, HDFC Bank has generated more wealth for investors as compared to IDBI Bank. </span></p>
<p><span style="font-weight: 400;">If you had invested Rs.1 lakh in HDFC and IDBI in March 2016, then by March 2020, the invested amount would have grown to Rs.234233 in HDFC whereas it would have reduced to Rs.46490 in IDBI Bank. </span></p>
<p><span style="font-weight: 400;">However, it is important to remember that an increase in total sales of a company cannot be the sole factor for determining the strength of its stock. While this can give you an indication of a company that has a distinct business advantage, you need to consider other aspects too.</span></p>
<h3><span id="2_Performance_as_Compared_to_its_Peers"><strong>2. Performance as Compared to its Peers</strong></span></h3>
<p><span style="font-weight: 400;">While analyzing a stock, it is important to look at its immediate peers to assess its performance. While HDFC had a CAGR of around 9% in total income in the five years, how did its competitive banks perform? </span></p>
<p><span style="font-weight: 400;">This is where your industry knowledge comes handy. Which banks can be considered direct competitors of HDFC? My guess would be ICICI Bank, State bank of India, Kotak Mahindra Bank, and Axis Bank. Let’s take a quick look at the comparative performance of net sales turnover (Rs. Crores) of all these banks:</span></p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><b>Company</b></td>
<td><b>2016</b></td>
<td><b>2017</b></td>
<td><b>2018</b></td>
<td><b>2019</b></td>
<td><b>2020</b></td>
<td><b>CAGR</b></td>
</tr>
<tr>
<td><b>HDFC Bank Ltd.</b></td>
<td><span style="font-weight: 400;">60221</span></td>
<td><span style="font-weight: 400;">69306</span></td>
<td><span style="font-weight: 400;">80241</span></td>
<td><span style="font-weight: 400;">98972</span></td>
<td><span style="font-weight: 400;">114812</span></td>
<td><b>9.09%</b></td>
</tr>
<tr>
<td><b>ICICI Bank Ltd.</b></td>
<td><span style="font-weight: 400;">52739</span></td>
<td><span style="font-weight: 400;">54156</span></td>
<td><span style="font-weight: 400;">54966</span></td>
<td><span style="font-weight: 400;">63401</span></td>
<td><span style="font-weight: 400;">74798</span></td>
<td><b>7.24%</b></td>
</tr>
<tr>
<td><b>Kotak Mahindra Bank Ltd.</b></td>
<td><span style="font-weight: 400;">16384</span></td>
<td><span style="font-weight: 400;">17699</span></td>
<td><span style="font-weight: 400;">19748</span></td>
<td><span style="font-weight: 400;">23943</span></td>
<td><span style="font-weight: 400;">26930</span></td>
<td><b>10.45%</b></td>
</tr>
<tr>
<td><b>Axis Bank Ltd.</b></td>
<td><span style="font-weight: 400;">40988</span></td>
<td><span style="font-weight: 400;">44542</span></td>
<td><span style="font-weight: 400;">45780</span></td>
<td><span style="font-weight: 400;">54986</span></td>
<td><span style="font-weight: 400;">62635</span></td>
<td><b>8.85%</b></td>
</tr>
<tr>
<td><b>State Bank of India</b></td>
<td><span style="font-weight: 400;">163998</span></td>
<td><span style="font-weight: 400;">175518</span></td>
<td><span style="font-weight: 400;">220499</span></td>
<td><span style="font-weight: 400;">242867</span></td>
<td><span style="font-weight: 400;">257324</span></td>
<td><b>9.43%</b></td>
</tr>
</tbody>
</table>
<p><span style="font-weight: 400;">This table gives me a better picture of HDFC’s performance. While it has fared well when compared to IDBI, if we extend the comparison with other peers as well, then the growth in net sales turnover of HDFC is in sync with industry&#8217;s average and not there are other players who have outperformed it. </span></p>
<h3><span id="3_Converting_Sales_Growth_to_Profits"><strong>3. Converting Sales Growth to Profits</strong></span></h3>
<p><span style="font-weight: 400;">When you are analyzing a company’s fundamentals and find that it has a good rate of growth in sales as compared to its peers, the next step is to ascertain if the company is converting these sales into profits effectively.</span></p>
<p><span style="font-weight: 400;"> If the company has a distinct business advantage, then it will be able to generate increased profits as its sales increase. On the other hand, if the increase in profits is not proportional to the increase in sales, then the growth in sales is probably accompanied by an increase in expenses too, bringing profits down. Let’s look at how HDFC Bank fares on this parameter:</span></p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><b>HDFC Bank</b></td>
<td><b>2016</b></td>
<td><b>2017</b></td>
<td><b>2018</b></td>
<td><b>2019</b></td>
<td><b>2020</b></td>
<td><b>CAGR</b></td>
</tr>
<tr>
<td><b>Sales</b></td>
<td><span style="font-weight: 400;">60221</span></td>
<td><span style="font-weight: 400;">69306</span></td>
<td><span style="font-weight: 400;">80241</span></td>
<td><span style="font-weight: 400;">98972</span></td>
<td><span style="font-weight: 400;">114812</span></td>
<td><b>9.09%</b></td>
</tr>
<tr>
<td><b>Profit Before Tax (PAT)</b></td>
<td><span style="font-weight: 400;">12296</span></td>
<td><span style="font-weight: 400;">14550</span></td>
<td><span style="font-weight: 400;">17487</span></td>
<td><span style="font-weight: 400;">21078</span></td>
<td><span style="font-weight: 400;">26257</span></td>
<td><b>16.38%</b></td>
</tr>
<tr>
<td><b>Profit margin (PAT*100/Sales)</b></td>
<td><span style="font-weight: 400;">20.42%</span></td>
<td><span style="font-weight: 400;">20.99%</span></td>
<td><span style="font-weight: 400;">21.79%</span></td>
<td><span style="font-weight: 400;">21.30%</span></td>
<td><span style="font-weight: 400;">22.87%</span></td>
<td><b> </b></td>
</tr>
</tbody>
</table>
<p><i><span style="font-weight: 400;">Amounts in rupees crore</span></i></p>
<p><span style="font-weight: 400;">Let’s also take a look at Axis Bank’s performance:</span></p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><b>Axis Bank</b></td>
<td><b>2016</b></td>
<td><b>2017</b></td>
<td><b>2018</b></td>
<td><b>2019</b></td>
<td><b>2020</b></td>
<td><b>CAGR</b></td>
</tr>
<tr>
<td><b>Sales</b></td>
<td><span style="font-weight: 400;">40988</span></td>
<td><span style="font-weight: 400;">44542</span></td>
<td><span style="font-weight: 400;">45780</span></td>
<td><span style="font-weight: 400;">54986</span></td>
<td><span style="font-weight: 400;">62635</span></td>
<td><b>8.85%</b></td>
</tr>
<tr>
<td><b>Profit Before Tax (PAT)</b></td>
<td><span style="font-weight: 400;">8224</span></td>
<td><span style="font-weight: 400;">3679</span></td>
<td><span style="font-weight: 400;">276</span></td>
<td><span style="font-weight: 400;">4677</span></td>
<td><span style="font-weight: 400;">1627</span></td>
<td><b>-27.68%</b></td>
</tr>
<tr>
<td><b>Profit margin (PAT*100/Sales)</b></td>
<td><span style="font-weight: 400;">20.06%</span></td>
<td><span style="font-weight: 400;">8.26%</span></td>
<td><span style="font-weight: 400;">0.60%</span></td>
<td><span style="font-weight: 400;">8.51%</span></td>
<td><span style="font-weight: 400;">2.60%</span></td>
<td><b> </b></td>
</tr>
</tbody>
</table>
<p><i><span style="font-weight: 400;">Amounts in rupees crore</span></i></p>
<p><span style="font-weight: 400;">As you can see, although Axis Bank had a sales CAGR of 8.85% over the last five years, it couldn’t convert it into sales and hence has a negative CAGR of PAT. </span></p>
<p><span style="font-weight: 400;">Look at it this way, HDFC and Axis Bank have similar CAGR of sales but a huge difference in PAT. </span></p>
<h3><span id="4_Value-creation_for_Shareholders_from_the_Profits_Retained"><strong>4. Value-creation for Shareholders from the Profits Retained</strong></span></h3>
<p><span style="font-weight: 400;">When a company generates profits, it can retain a certain part of it for reinvesting in the business for growth and/or expansion. Companies that have a distinct business advantage ensure that they generate better value for their shareholders. If we follow Warren Buffett’s advice, then a fundamentally strong company is one that generates at least $1 of market value for every $1 that it retains.</span></p>
<p><span style="font-weight: 400;">The figures of HDFC Bank are as follows:</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Profits retained in the last five years = Rs.8.456 billion</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Increase in the market capitalization in the last five years = Rs.43.61 billion</span></li>
</ul>
<p><span style="font-weight: 400;">Therefore,</span></p>
<p><span style="font-weight: 400;">The value created per rupee = Increase in market capitalization / Profits retained</span></p>
<p><span style="font-weight: 400;">= 43.61/8.456 = 5.16</span></p>
<p><span style="font-weight: 400;">This means HDFC Bank has generated a value of Rs.5.16 for every one rupee retained by it for reinvestment in the business. Hence, it created value for shareholders due to a distinct business advantage.</span></p>
<p><strong>Summing Up</strong></p>
<p><span style="font-weight: 400;">As you can see, an individual investor can do a business and industry analysis of a company before investing to ensure that he picks fundamentally strong stocks with a distinct business advantage. To summarize, investors must look at companies with good growth rates in sales, comparison with their peers, and profit and value-creating ability. It is important to remember that looking at individual factors alone can be misleading. If a company fulfills the criteria mentioned above, then it is an indication of a fundamentally strong company that can be considered for investment.</span></p>
</div>
      <h2 class="handle"><label for="handle1">Disclaimer</label></h2>
        <div class="content">
            <p>Investment in securities market are subject to market risks, read all the related documents carefully before investing. Please read the Risk Disclosure documents carefully before investing in Equity Shares, Derivatives, Mutual fund, and/or other instruments traded on the Stock Exchanges. As investments are subject to market risks and price fluctuation risk, there is no assurance or guarantee that the investment objectives shall be achieved. NBT do not guarantee any assured returns on any investments. Past performance of securities/instruments is not indicative of their future performance.</p>
        </div>
</div></div>

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