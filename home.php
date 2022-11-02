<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - HOME</title>
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
      <li class="nav-item active">
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



<!-- TradingView BEGIN -->
<center>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
  {
  "symbol": "BSE:SENSEX",
  "width": 1349,
  "locale": "in",
  "colorTheme": "dark",
  "isTransparent": false
}
  </script>
</div>
</center>
<!-- TradingView END -->

<!-- TradingView BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_7b426"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text"></span></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 1330,
  "height": 610,
  "symbol": "BSE:SENSEX",
  "interval": "D",
  "timezone": "Asia/Kolkata",
  "theme": "dark",
  "style": "1",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "studies": [
    "MACD@tv-basicstudies",
    "RSI@tv-basicstudies"
  ],
  "container_id": "tradingview_7b426"
}
  );
  </script>
</div>
<!-- TradingView END -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<!-- TradingView BEGIN -->
<center>
  <center><center><p style="font-size:30px">STOCK MARKET OVERVIEW</p></center></center>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text">Stock Market Today</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "exchange": "BSE",
  "showChart": true,
  "locale": "in",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": false,
  "width": "1330",
  "height": "610",
  "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
  "gridLineColor": "rgba(42, 46, 57, 1)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
  "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
  "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
}
  </script>
</div>
</center>
<!-- TradingView END -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
  <center><p style="font-size:30px">WORLD MARKET OVERVIEW</p></center>
  <!-- TradingView BEGIN -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><span class="blue-text">Financial Markets</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "dark",
    "dateRange": "12M",
    "showChart": true,
    "locale": "in",
    "largeChartUrl": "",
    "isTransparent": false,
    "showSymbolLogo": true,
    "width": "1330",
    "height": "610",
    "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
    "plotLineColorFalling": "rgba(25, 118, 210, 1)",
    "gridLineColor": "rgba(42, 46, 57, 1)",
    "scaleFontColor": "rgba(0, 0, 0, 1)",
    "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
    "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
    "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
    "tabs": [
      {
        "title": "Indices",
        "symbols": [
          {
            "s": "FOREXCOM:SPXUSD",
            "d": "S&P 500"
          },
          {
            "s": "FOREXCOM:NSXUSD",
            "d": "Nasdaq 100"
          },
          {
            "s": "INDEX:NKY",
            "d": "Nikkei 225"
          },
          {
            "s": "INDEX:DEU30",
            "d": "DAX Index"
          },
          {
            "s": "BSE:SENSEX",
            "d": "SENSEX"
          }
        ],
        "originalTitle": "Indices"
      },
      {
        "title": "Commodities",
        "symbols": [
          {
            "s": "CME_MINI:ES1!",
            "d": "S&P 500"
          },
          {
            "s": "CME:6E1!",
            "d": "Euro"
          },
          {
            "s": "COMEX:GC1!",
            "d": "Gold"
          },
          {
            "s": "NYMEX:CL1!",
            "d": "Crude Oil"
          },
          {
            "s": "NYMEX:NG1!",
            "d": "Natural Gas"
          },
          {
            "s": "CBOT:ZC1!",
            "d": "Corn"
          }
        ],
        "originalTitle": "Commodities"
      },
      {
        "title": "Bonds",
        "symbols": [
          {
            "s": "CME:GE1!",
            "d": "Eurodollar"
          },
          {
            "s": "CBOT:ZB1!",
            "d": "T-Bond"
          },
          {
            "s": "CBOT:UB1!",
            "d": "Ultra T-Bond"
          },
          {
            "s": "EUREX:FGBL1!",
            "d": "Euro Bund"
          },
          {
            "s": "EUREX:FBTP1!",
            "d": "Euro BTP"
          },
          {
            "s": "EUREX:FGBM1!",
            "d": "Euro BOBL"
          }
        ],
        "originalTitle": "Bonds"
      },
      {
        "title": "Forex",
        "symbols": [
          {
            "s": "FX:EURUSD"
          },
          {
            "s": "FX:GBPUSD"
          },
          {
            "s": "FX:USDJPY"
          },
          {
            "s": "FX:USDCHF"
          },
          {
            "s": "FX:AUDUSD"
          },
          {
            "s": "FX:USDCAD"
          }
        ],
        "originalTitle": "Forex"
      }
    ]
  }
    </script>
  </div>
  <!-- TradingView END -->
</center>


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
