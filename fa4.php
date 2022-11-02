<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - Annual Report</title>
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
      <li class="nav-item active">
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

<h2><span id="What_is_an_Annual_Report"><strong>What is an Annual Report?</strong></span></h2>
<p>An annual report is a significant financial document that any public organisation is required to share with its shareholders. As its name suggests, such a financial document needs to be published annually to showcase a company’s business operations and financial condition for the concerned fiscal year.</p>
<p><strong>Annual reports</strong> are also a primary source of necessary financial information for potential investors and financial analysts to evaluate the current stock of a company. An annual report of a corporation showcases a basic overview of this said company over the previous financial year. It thus helps the masses to estimate the financial health of a corporation in the near future.</p>
<h2><span id="Importance_of_Company_Annual_Reports"><strong>Importance of Company Annual Reports</strong></span></h2>
<p><strong>Annual reports of Indian companies </strong>have grown into a significant mode of corporate reporting in the present day even though information regarding a company’s affairs can be easily obtained through several channels such as company prospectus, official press release, social media outlets, etc.</p>
<p>In addition to the above-mentioned channels, newspapers, business magazines, investment advisory services and statutory norms also provide relevant information on an organisation’s finances. Despite the existence of such varied sources of information, the <strong>annual reports</strong> of a company are still regarded as the most credible sources.</p>
<p>Several other reasons also indicate the importance of an annual report of a company. These can be narrowed down to –</p>
<ul>
<li>Besides financial statements of a concerned fiscal year, <strong>annual reports</strong> of a company also include additional company details such as business achievements, plans and policies of a corporation, an official declaration from a company’s chairman, etc. which are not available in other financial documents.</li>
<li>The annual report of a company includes audited information which helps in instilling confidence among the general public and existing shareholders.</li>
<li>Both inexperienced and veteran investors consider this financial document as a means to predict the financial status of a company. An annual report therein sets a standard for potential investors to estimate its future stock value and share of dividends generated from business profit.</li>
</ul>
<p>Hence, current and prospective shareholders, investors, employees, creditors and any other concerned entity can always rely on the <strong>annual reports</strong> of a company for accurate financial analysis. Organisations also release interim reports stating their financial results for a certain period, which is shorter than a fiscal year.</p>
<h3><span id="Annual_Report_Vs_Interim_Report"><strong>Annual Report Vs Interim Report</strong></span></h3>
<p>The difference between annual reports and interim reports of a company can be determined with the help of the following tabulation.</p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><strong>Points of Difference</strong></td>
<td><strong>Annual Report</strong></td>
<td><strong>Interim Report</strong></td>
</tr>
<tr>
<td>Coverage of financial information</td>
<td>Long-period, i.e. an entire fiscal.</td>
<td>Short period, usually quarterly or half-yearly.</td>
</tr>
<tr>
<td>Audit</td>
<td>Financial statements are audited as per the SEBI requirements.</td>
<td>Interim reports are usually unaudited.</td>
</tr>
<tr>
<td>Availability of information</td>
<td>Extensive information.</td>
<td>Brief analysis for a shorter period.</td>
</tr>
<tr>
<td>Credibility</td>
<td>High – as the analysis is conducted for the entire fiscal.</td>
<td>Indicative – as the evaluation is done based on a short period.</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2><span id="Components_of_an_Annual_Report"><strong>Components of an Annual Report?</strong></span></h2>
<p>According to the Analysis of Regulation, Chapter 33 to 38 of the Listing Obligations and Disclosure Requirements of SEBI</a>, <strong>annual reports</strong> of an organisation should consist of these following data –</p><div class="groww-content_6" id="groww-157667322"><div class="stocks-cta-main">
</div></div>
<ul>
<li>Financial statements of a company post-audit, i.e. profit and loss accounts of the concerned fiscal year, balance sheet, etc.</li>
</ul>
<ul>
<li>Consolidated financial statements of a company audited by licensed accounting professionals.</li>
</ul>
<ul>
<li>A financial report published by the Director of a company.</li>
</ul>
<ul>
<li>Cash flow statements of a company showcased under the indirect method as per prescribed regulations in Accounting Standard 3.</li>
</ul>
<p>As per the SEBI, companies are required to include the above mentioned topics in their annual report. SEBI or Securities and Exchange Board of India is a regulatory body which has been entrusted for the regulation of the Indian capital market. Its primary objective is to ensure that the capital market of our country is performing systematically and offers investors a transparent and secure environment for investment. Hence, accounting professionals who generate the <strong>annual report of Indian companies</strong> should be well versed with SEBI’s terms and conditions.</p>
<p>In case of public and private entities, an annual report is required by law, i.e. SEBI. However, most companies also issue a user-friendly financial report for their customers, shareholders, investors and employees.</p>
<p>As per several <strong>annual report examples</strong>, such reports usually contain the following elements in the respective order –</p>
<ul>
<li><strong>Chairman’s letter</strong></li>
</ul>
<p>A letter from a Chairman, Board of Directors or CEO of a company usually kick-starts the drafting of <strong>annual reports</strong>. This letter not only sets the tone but also establishes a theme by providing a summary of business operations.</p>
<p>This section of an annual report highlights accomplishments for the concerned fiscal year along with yearly targets which were not met by a company. Its objective is to state the reasons regarding how a company addressed its failures and related issues.</p>
<p>A Chairman’s letter also provides an in-depth analysis of the overall business performance and offers insights into the capital market in which a company is currently looking forward to incorporating commercial growth. The authority drafting this letter also indicates the challenges and risks faced by a company, such as alterations in market conditions, change in consumer trends, corporate scandals, etc. This section is usually concluded with the financial plans and business directions for the upcoming fiscal year.</p>
<p>A Chairman’s letter further provides an analysis of overall business performance, insights into the markets, and any opportunities for growth. It also points out any challenges or risks for a company, such as changing market conditions, recent scandals, consumer trends, etc. This letter often ends with providing a sense of corporate direction for the next year.</p>
<ul>
<li><strong>Business Profile</strong></li>
</ul>
<p>A section dedicated to the discussion of a company’s business profile is usually followed by the Chairman’s letter. The business profile is a significant part of the annual report; it describes an organisation by tabulating the following information.</p>
<ol>
<li>Revenue generated for a particular financial year.</li>
<li>Detailed information about the manufactured products/services provided.</li>
</ol>
<p>iii. Business operations.</p>
<ol>
<li>Subsidiaries owned by this company (if any).</li>
<li>Categories of the Indian capital market in which the company has competed for the concerned fiscal year.</li>
<li>Risk factors and related issues.</li>
</ol>
<p>Moreover, other important details such as major alterations in the company policy, new products and services launched, holiday list, etc. are also mentioned in this section of the annual report.</p>
<ul>
<li><strong>Financial Statement</strong></li>
</ul>
<p>The next section of most <strong>company annual reports</strong> usually comprises Financial Statements, primarily including the following.</p>
<ul>
<li>Balance Sheet</li>
<li>Income Statement</li>
<li>Cash Flow Statement</li>
</ul>
<p>The Balance Sheet showcases a detailed tabulation of assets and liabilities of a company whereas the Income Statement provides the public with an overview of the earnings of an organisation; from total sales to each expense concerning the said sale and business operation. The Cash Flow Statement brings forth essential information regarding the several sources and usage of funds in every segment of the supply chain.</p>
<ul>
<li><strong>Note to Financial Statements</strong></li>
</ul>
<p>Right after the Financial Statements come their notes in most <strong>annual reports of Indian companies</strong>. Here, additional elucidation regarding various components of these statements is provided to offer a detailed explanation of company debts, capitalised leases, taxations, etc.</p>
<ul>
<li><strong>Management discussion and analysis</strong></li>
</ul>
<p>The final section of every annual report of a company generally comprises a discussion along with a business analysis conducted by the organisation’s management. Info-graphics, flow charts, graphs of different metrics, etc. are some of the most common representations in this section, which help to highlight data essential for business growth. Such analysis concluded showcases the financial expectations and plans for the commercial growth of a company in the near future.</p>
<p>In the case of several organisations, few other sections in the <strong>annual reports </strong>exist too, which are reserved for discussions. They can include financial statements for shareholders, the financial condition of owned sectors, share-based calculations, looming threats, etc.</p>
<p>Hence, as per the above discussion, one can understand that annual report is an extensive financial document which should be made available to the public. It enables potential investors and existing shareholders to be aware of the business operations and financial condition of an organisation.</p>

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