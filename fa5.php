<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - Cash Flow Statement</title>
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
	  <li class="nav-item active">
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

<h1 class="h2 page-main-title">Cash Flow Statement</h1>	


<p>A cash flow statement of a company lays down an organisation’s total fund inflow in the form of cash and cash equivalents through operational, investment, and financing activities.</p>
<p>It also showcases the total cash outflow through the aforesaid activities.</p>
<div id="toc_container" class="no_bullets"><p class="toc_title">In this article</p><ul class="toc_list"><li><a href="#An_Introduction_to_Cash_Flow_Statement">An Introduction to Cash Flow Statement</a></li><li><a href="#Cash_Flow_Statement_Structure">Cash Flow Statement – Structure</a></li><li><a href="#How_to_Prepare_a_Cash_Flow_Statement">How to Prepare a Cash Flow Statement?</a></li><li><a href="#How_to_use_a_Cash_Flow_Statement">How to use a Cash Flow Statement?</a></li></ul></div>
<h2><span id="An_Introduction_to_Cash_Flow_Statement"><strong>An Introduction to Cash Flow Statement</strong></span></h2>
<p>It is one of the three most crucial financial reports and statements that any organisation prepares at the end of every financial year.</p>
<p>Alongside Balance Sheet</a> and Income Statement, all registered companies are mandated to prepare a cash flow statement, according to the revised Accounting Standard – III (AS – III).</p>
<p>It shall be noted that a cash flow statementis fundamentally distinct from a Balance Sheet or an Income Statement.</p>
<p>An Income Statement represents the net income of an organisation within a specific period, including all sorts of expenditures (accrual accounting approach).</p>
<p>On the other hand, a cash flow statement represents the net cash income of an organisation. It includes only those revenues and expenditures that have been realised in an accounting period (cash accounting approach).</p>
<p>Therefore, a cash flow statement indicates an organisation’s ability to meet liquidity needs.</p><div class="groww-content_6" id="groww-464226233"><div class="stocks-cta-main">
        
</div></div>
<h2><span id="Cash_Flow_Statement_Structure"><strong>Cash Flow Statement – Structure</strong></span></h2>
<p>In the standard cash flow statement format, there are three subdivisions under which all concerned cash inflow and outflow are classified – operations, investing, and financing.</p>
<ul>
<li><strong>Cash flow from Operations</strong></li>
</ul>
<p>The first section in the statement, it summarises all cash inflow and outflow stemming from an organisation’s operational activities. Therefore, the first entry in this section is the net income computed in an organisation’s Income Statement for a corresponding period.</p>
<p>Since the net income shown in an Income Statement represents cash and non-cash transactions, adjustments are made to derive net cash flows. Thereafter, both the statements are reconciled to exclude and include all the non-cash and cash items that were incorporated or omitted respectively during the preparation of the Income Statement.</p>
<p>For instance, depreciation and amortisation are chipped away from the total revenue of a company to derive the net income.</p>
<p>However, it is a non-cash item and thus does not qualify as a cash outflow item. Therefore, it is added back to net income when preparing a cash flow statement.</p>
<p>Moreover, a decrease in the value of current assets is recognised as a cash inflow and vice versa. A decrease in the value of current liabilities</a> is recorded as cash outflow and vice versa.</p>
<p><em>Example – The net income of Company A is Rs.5 lakh, as shown in its Income Statement. Company A has listed Rs.75000 as depreciation on Plant &amp; Machinery; Rs. 2 lakh as an increase in the value of current assets; and Rs. 3 lakh as an increase in the value of current liabilities. </em></p>
<p>The cash flow statement against the given data is given below.</p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><b>Particulars</b></td>
<td><b>Amount (Rs.)</b></td>
</tr>
<tr>
<td><b>Cash flow from operating activities</b></td>
<td></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Net income</span></td>
<td><span style="font-weight: 400;">5,00,000</span></td>
</tr>
<tr>
<td><b>Additions</b></td>
<td></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Depreciation and Amortisation</span></td>
<td><span style="font-weight: 400;">75,000</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Increase in current liabilities</span></td>
<td><span style="font-weight: 400;">3,00,000</span></td>
</tr>
<tr>
<td><b>Deductions</b></td>
<td></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Increase in current assets</span></td>
<td><span style="font-weight: 400;">2,00,000</span></td>
</tr>
<tr>
<td><b>Net cash flow from operating activities</b></td>
<td><span style="font-weight: 400;">6,75,000</span></td>
</tr>
</tbody>
</table>
<ul>
<li><strong>It is the second section in a cash flow statement.Cash flow from investing activities (CFI)</strong></li>
</ul>
<p>This section denotes all cash inflow and outflow realised from investing activities of an organisation in a specific accounting year.</p>
<p>These activities include purchasing and selling of fixed assets and investments and disinvestments in securities.</p>
<p>Therefore, all expenditures listed under this section are classified as capital expenditure and all revenues as capital revenue.</p>
<p><strong>CFI Analysis</strong></p>
<p>Cash flow analysis of investing should not be based on the margin of difference between cash inflow and outflow. A low margin of difference or a negative difference between inflow and outflow might indicate that a company is spending a substantial amount of money towards enhancing its financial health by purchasing or improving its fixed assets.</p>
<p>Ergo, from an analyst’s perspective, a low margin of difference is sometimes indicative of a company’s sustainability and growth.</p>
<p>On the other hand, a high margin of difference might indicate that a company is not spending enough towards developing its assets or selling them off without adequately replacing them.</p>
<p>Therefore, from an analyst’s perspective, a high margin of difference between cash inflow and outflow can be indicative of a company’s inability to sustain in the long run.</p>
<p>A few items recorded in this section are mentioned in the table below.</p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><strong>Particulars</strong></td>
<td><strong>Amount (Rs.)</strong></td>
</tr>
<tr>
<td>Purchase of fixed assets</td>
<td>(XX)</td>
</tr>
<tr>
<td>Purchase of marketable and non-marketable securities</td>
<td>(XX)</td>
</tr>
<tr>
<td>Proceeds from sale of fixed assets</td>
<td>XX</td>
</tr>
<tr>
<td>Proceeds from sale of marketable and non-marketable securities</td>
<td>XX</td>
</tr>
<tr>
<td>Loans advanced</td>
<td>(XX)</td>
</tr>
<tr>
<td>Loan repayment realised</td>
<td>XX</td>
</tr>
<tr>
<td>Insurance proceeds</td>
<td>XX</td>
</tr>
</tbody>
</table>
<ul>
<li><strong>Cash flow from financing activities (CFF)</strong></li>
</ul>
<p>It is the third and last section in a cash flow statement. It represents all the cash inflow and outflow of a company stemming from its financing activities. These activities are directly linked with a company’s capital, both owned and borrowed.</p>
<p>Therefore, cash inflows under this section include funds raised from the issuance of stocks and debentures. On the other hand, cash outflows include retiring debts, stock repurchases, interest on debentures, and dividend payments.</p>
<p><strong>CFF Analysis</strong></p>
<p>Cash flow from financing activities provides analysts and investors insights into a company’s capital structure, how well it is managed, and how far it can sustain with the showcased capital strength.</p>
<p>A positive margin of difference, in this case, is most often desired by investors, since it shows that more cash is coming in to buttress its financial strength. However, it might also imply that a company’s earnings are not sufficient, and thus, it has to resort to the issuance of stocks or debentures for funding purposes.</p>
<p>Conversely, a negative margin of difference or a low margin might indicate that a company’s financial strength is enervating. Or it can also imply that the company is spending substantial amounts towards stock repurchases, retiring debts, and paying dividends.</p>
<p><em>Example – In 2019 &#8211; 20, Walmart Inc. showed a negative cash flow from financing activities amounting to $14,299 million. The financing activities’ components are shown in the table below.</em></p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><strong>Particulars</strong></td>
<td><strong>Amount (in millions)</strong></td>
</tr>
<tr>
<td>Proceeds from issuance of short-term borrowings</td>
<td>$5,492</td>
</tr>
<tr>
<td>Net change in short-term borrowings</td>
<td>($4,656)</td>
</tr>
<tr>
<td>Repayments of long-term debt</td>
<td>($1,907)</td>
</tr>
<tr>
<td>Stock repurchases</td>
<td>($5,717)</td>
</tr>
<tr>
<td>Dividends paid</td>
<td>($6,048)</td>
</tr>
<tr>
<td>Dividends paid to non-controlling interest</td>
<td>($555)</td>
</tr>
<tr>
<td>Other financing activities</td>
<td>($908)</td>
</tr>
<tr>
<td><strong>Net cash flow from financing activities</strong></td>
<td>($14,299)</td>
</tr>
</tbody>
</table>
<p>The bulk of all cash outflows are for retiring debt, both short- and long-term, repurchasing stocks, and paying dividends. Therefore, even with negative net cash flow from operating activities, it bodes well for investors and the market in general.</p>
<h2><span id="How_to_Prepare_a_Cash_Flow_Statement"><strong>How to Prepare a Cash Flow Statement?</strong></span></h2>
<p>A cash flow statement can be prepared by following either of the two below-mentioned methods –</p>
<ul>
<li><strong>Direct Method</strong></li>
</ul>
<p>Under this approach of preparing a cash flow statement, all cash-related transactions within an accounting period are added and deducted accordingly to calculate the net cash flows. These transactions, in turn, are derived from the opening and closing balances of relevant accounts.</p>
<p><strong><em>Cash flow statement example – </em></strong><em>Company B has realised Rs. 10 lakh from customers; paid Rs. 3.5 lakh towards salary and wages; realised Rs. 7 lakh from sale of land; paid taxes Rs. 50000; earned Rs. 1.5 lakh as net proceeds from maturity of securities; purchased machinery worth Rs. 10 lakh; spent Rs. 3 lakh towards repayment of debenture; and realised Rs. 5 lakh as proceeds from the issuance of shares in FY 2019 – 20.</em></p>
<p>The cash flow statement for 2019 – 20 as per the direct method is laid down below.</p>
<table style="font-size:20px;"border="1" cellpadding="5" cellspacing="1" class="ten">
<tbody>
<tr>
<td><strong>Particulars</strong></td>
<td><strong>Amount (Rs.)</strong></td>
</tr>
<tr>
<td>Decrease in accounts receivable</td>
<td>10,00,000</td>
</tr>
<tr>
<td>Salary and wages</td>
<td>(3,50,000)</td>
</tr>
<tr>
<td>Taxes</td>
<td>(50,000)</td>
</tr>
<tr>
<td><strong>Cash flow from operating activities</strong></td>
<td>6,00,000</td>
</tr>
<tr>
<td>Sale of land</td>
<td>7,00,000</td>
</tr>
<tr>
<td>Net proceeds from maturity of securities</td>
<td>1,50,000</td>
</tr>
<tr>
<td>Purchase of machinery</td>
<td>(10,00,000)</td>
</tr>
<tr>
<td><strong>Cash flow from investing activities </strong></td>
<td>(1,50,000)</td>
</tr>
<tr>
<td>Repayment of debenture</td>
<td>(3,00,000)</td>
</tr>
<tr>
<td>Shares issued</td>
<td>5,00,000</td>
</tr>
<tr>
<td><strong>Cash flow from financing activities</strong></td>
<td>2,00,000</td>
</tr>
<tr>
<td><strong>Net cash flow</strong></td>
<td>6,50,000</td>
</tr>
</tbody>
</table>
<ul>
<li><strong>Indirect Method</strong></li>
</ul>
<p>In the indirect method, the net cash flow is derived from the net income shown in an organisation’s Income Statement. As discussed previously, from the net income, all cash and non-cash transactions are added and deducted accordingly to derive the net cash flow.</p>
<h2><span id="How_to_use_a_Cash_Flow_Statement"><strong>How to use a Cash Flow Statement?</strong></span></h2>
<p>A cash flow statement serves as a crucial tool for investors, analysts, and third parties alongside the organisation itself. Use of cash flow statement is mentioned below –</p>
<ul>
<li>To assess the financial footing of an organisation.</li>
<li>To determine its capability to tide over short- and long-term liabilities.</li>
<li>To gauge a company’s profitability.</li>
<li>Recognising the sources of capital of an organisation.</li>
<li>Identifying ways in which a company is spending its capital and earnings.</li>
</ul>
<p>Therefore, before making any investment decisions, investors can take a look at a company’s cash flow statement to see whether it suits their profile and investment objectives.</p>
<p><strong>FAQ</strong></p>
<ul>
<li><strong>How is a cash flow statement from operating activities prepared under the indirect method?</strong></li>
</ul>
<p>The cash flow statement from operating activities can be derived from two stages –</p>
<ol>
<li>Calculation of operating profit prior to any change in working capital.</li>
<li>Effect of working capital change.</li>
</ol>
<ul>
<li><strong>What is the purpose of a cash flow statement?</strong></li>
</ul>
<p>A cash flow statement helps to identify the majority of cash flows that occur during the same time as that recorded in a company’s income statement. Cash flow consists of – operating activities, investing activities and financing activities.</p>
<ul>
<li><strong>What is a non-cash expense?</strong></li>
</ul>
<p>These are the expenses that are included in a company’s income statement but do not include any actual transaction of cash. Depreciation is one of the examples of a non-cash expense.</p>

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