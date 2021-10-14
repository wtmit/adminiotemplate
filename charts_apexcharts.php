<?php include './header.php'; ?>
<main class="content">
   <div class="container-fluid p-0">
      <div class="mb-3">
         <h1 class="h3 d-inline align-middle">ApexCharts</h1>
      </div>
      <div class="row">
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Line Chart</h5>
                  <h6 class="card-subtitle text-muted">Line charts are a typical pictorial representation that depicts trends and behaviors
                     over time.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-line" style="min-height: 365px;">
                        <div id="apexchartspse7db99" class="apexcharts-canvas apexchartspse7db99 apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg2224" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="SessionxDuration" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Session%20Duration" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Session Duration</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="PagexViews" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Page%20Views" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Page Views</span></div>
                                    <div class="apexcharts-legend-series" rel="3" seriesname="TotalxVisits" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(252, 185, 44) !important; color: rgb(252, 185, 44); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Total%20Visits" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total Visits</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2226" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                 <defs id="SvgjsDefs2225">
                                    <clipPath id="gridRectMaskpse7db99">
                                       <rect id="SvgjsRect2233" width="378.640625" height="248.58928833007815" x="-5.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskpse7db99"></clipPath>
                                    <clipPath id="nonForecastMaskpse7db99"></clipPath>
                                    <clipPath id="gridRectMarkerMaskpse7db99">
                                       <rect id="SvgjsRect2234" width="371.640625" height="245.58928833007815" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine2232" x1="333.71875" y1="0" x2="333.71875" y2="241.58928833007815" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="333.71875" y="0" width="1" height="241.58928833007815" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG2248" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2249" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)">
                                       <text id="SvgjsText2251" font-family="Helvetica, Arial, sans-serif" x="0" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 1.1640625 259.5859375)">
                                          <tspan id="SvgjsTspan2252">01 Jan</tspan>
                                          <title>01 Jan</title>
                                       </text>
                                       <text id="SvgjsText2254" font-family="Helvetica, Arial, sans-serif" x="33.421875" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 34.5859375 259.5859375)">
                                          <tspan id="SvgjsTspan2255">02 Jan</tspan>
                                          <title>02 Jan</title>
                                       </text>
                                       <text id="SvgjsText2257" font-family="Helvetica, Arial, sans-serif" x="66.84375" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 68.0078125 259.5859375)">
                                          <tspan id="SvgjsTspan2258">03 Jan</tspan>
                                          <title>03 Jan</title>
                                       </text>
                                       <text id="SvgjsText2260" font-family="Helvetica, Arial, sans-serif" x="100.265625" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 101.4296875 259.5859375)">
                                          <tspan id="SvgjsTspan2261">04 Jan</tspan>
                                          <title>04 Jan</title>
                                       </text>
                                       <text id="SvgjsText2263" font-family="Helvetica, Arial, sans-serif" x="133.6875" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 134.8515625 259.5859375)">
                                          <tspan id="SvgjsTspan2264">05 Jan</tspan>
                                          <title>05 Jan</title>
                                       </text>
                                       <text id="SvgjsText2266" font-family="Helvetica, Arial, sans-serif" x="167.109375" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 168.2734375 259.5859375)">
                                          <tspan id="SvgjsTspan2267">06 Jan</tspan>
                                          <title>06 Jan</title>
                                       </text>
                                       <text id="SvgjsText2269" font-family="Helvetica, Arial, sans-serif" x="200.53125" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 201.6953125 259.5859375)">
                                          <tspan id="SvgjsTspan2270">07 Jan</tspan>
                                          <title>07 Jan</title>
                                       </text>
                                       <text id="SvgjsText2272" font-family="Helvetica, Arial, sans-serif" x="233.953125" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 235.1171875 259.5859375)">
                                          <tspan id="SvgjsTspan2273">08 Jan</tspan>
                                          <title>08 Jan</title>
                                       </text>
                                       <text id="SvgjsText2275" font-family="Helvetica, Arial, sans-serif" x="267.375" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 268.5390625 259.5859375)">
                                          <tspan id="SvgjsTspan2276">09 Jan</tspan>
                                          <title>09 Jan</title>
                                       </text>
                                       <text id="SvgjsText2278" font-family="Helvetica, Arial, sans-serif" x="300.796875" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 301.9609375 259.5859375)">
                                          <tspan id="SvgjsTspan2279">10 Jan</tspan>
                                          <title>10 Jan</title>
                                       </text>
                                       <text id="SvgjsText2281" font-family="Helvetica, Arial, sans-serif" x="334.21875" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 335.3828125 259.5859375)">
                                          <tspan id="SvgjsTspan2282">11 Jan</tspan>
                                          <title>11 Jan</title>
                                       </text>
                                       <text id="SvgjsText2284" font-family="Helvetica, Arial, sans-serif" x="367.640625" y="264.58928833007815" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 368.8046875 259.5859375)">
                                          <tspan id="SvgjsTspan2285">12 Jan</tspan>
                                          <title>12 Jan</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine2286" x1="0" y1="242.58928833007815" x2="367.640625" y2="242.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2301" class="apexcharts-grid">
                                    <g id="SvgjsG2302" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine2316" x1="0" y1="0" x2="367.640625" y2="0" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2317" x1="0" y1="48.31785766601563" x2="367.640625" y2="48.31785766601563" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2318" x1="0" y1="96.63571533203125" x2="367.640625" y2="96.63571533203125" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2319" x1="0" y1="144.95357299804687" x2="367.640625" y2="144.95357299804687" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2320" x1="0" y1="193.2714306640625" x2="367.640625" y2="193.2714306640625" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2321" x1="0" y1="241.58928833007815" x2="367.640625" y2="241.58928833007815" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2303" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine2304" x1="0" y1="242.58928833007815" x2="0" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2305" x1="33.421875" y1="242.58928833007815" x2="33.421875" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2306" x1="66.84375" y1="242.58928833007815" x2="66.84375" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2307" x1="100.265625" y1="242.58928833007815" x2="100.265625" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2308" x1="133.6875" y1="242.58928833007815" x2="133.6875" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2309" x1="167.109375" y1="242.58928833007815" x2="167.109375" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2310" x1="200.53125" y1="242.58928833007815" x2="200.53125" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2311" x1="233.953125" y1="242.58928833007815" x2="233.953125" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2312" x1="267.375" y1="242.58928833007815" x2="267.375" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2313" x1="300.796875" y1="242.58928833007815" x2="300.796875" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2314" x1="334.21875" y1="242.58928833007815" x2="334.21875" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2315" x1="367.640625" y1="242.58928833007815" x2="367.640625" y2="248.58928833007815" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2323" x1="0" y1="241.58928833007815" x2="367.640625" y2="241.58928833007815" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2322" x1="0" y1="1" x2="0" y2="241.58928833007815" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2235" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2236" class="apexcharts-series" seriesName="SessionxDuration" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath2239" d="M 0 132.874108581543L 33.421875 115.96285839843752L 66.84375 149.78535876464844L 100.265625 183.6078591308594L 133.6875 161.86482318115236L 167.109375 178.77607336425783L 200.53125 190.85553778076172L 233.953125 193.2714306640625L 267.375 227.09393103027347L 300.796875 222.2621452636719L 334.21875 205.35089508056643L 367.640625 217.43035949707033" fill="none" fill-opacity="1" stroke="rgba(59,125,221,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskpse7db99)" pathTo="M 0 132.874108581543L 33.421875 115.96285839843752L 66.84375 149.78535876464844L 100.265625 183.6078591308594L 133.6875 161.86482318115236L 167.109375 178.77607336425783L 200.53125 190.85553778076172L 233.953125 193.2714306640625L 267.375 227.09393103027347L 300.796875 222.2621452636719L 334.21875 205.35089508056643L 367.640625 217.43035949707033" pathFrom="M -1 241.58928833007815L -1 241.58928833007815L 33.421875 241.58928833007815L 66.84375 241.58928833007815L 100.265625 241.58928833007815L 133.6875 241.58928833007815L 167.109375 241.58928833007815L 200.53125 241.58928833007815L 233.953125 241.58928833007815L 267.375 241.58928833007815L 300.796875 241.58928833007815L 334.21875 241.58928833007815L 367.640625 241.58928833007815"></path>
                                       <g id="SvgjsG2237" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2329" r="0" cx="334.21875" cy="205.35089508056643" class="apexcharts-marker wazhkjf1kj no-pointer-events" stroke="#ffffff" fill="#3b7ddd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2240" class="apexcharts-series" seriesName="PagexViews" data:longestSeries="true" rel="2" data:realIndex="1">
                                       <path id="SvgjsPath2243" d="M 0 157.0330374145508L 33.421875 142.5376801147461L 66.84375 91.80392956542971L 100.265625 140.12178723144532L 133.6875 210.182680847168L 167.109375 198.10321643066408L 200.53125 171.5283947143555L 233.953125 152.20125164794922L 267.375 154.61714453125L 300.796875 118.3787512817383L 334.21875 164.28071606445315L 367.640625 157.0330374145508" fill="none" fill-opacity="1" stroke="rgba(28,187,140,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7" stroke-dasharray="8" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskpse7db99)" pathTo="M 0 157.0330374145508L 33.421875 142.5376801147461L 66.84375 91.80392956542971L 100.265625 140.12178723144532L 133.6875 210.182680847168L 167.109375 198.10321643066408L 200.53125 171.5283947143555L 233.953125 152.20125164794922L 267.375 154.61714453125L 300.796875 118.3787512817383L 334.21875 164.28071606445315L 367.640625 157.0330374145508" pathFrom="M -1 241.58928833007815L -1 241.58928833007815L 33.421875 241.58928833007815L 66.84375 241.58928833007815L 100.265625 241.58928833007815L 133.6875 241.58928833007815L 167.109375 241.58928833007815L 200.53125 241.58928833007815L 233.953125 241.58928833007815L 267.375 241.58928833007815L 300.796875 241.58928833007815L 334.21875 241.58928833007815L 367.640625 241.58928833007815"></path>
                                       <g id="SvgjsG2241" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2330" r="0" cx="334.21875" cy="164.28071606445315" class="apexcharts-marker w5g2zl9pn no-pointer-events" stroke="#ffffff" fill="#1cbb8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2244" class="apexcharts-series" seriesName="TotalxVisits" data:longestSeries="true" rel="3" data:realIndex="2">
                                       <path id="SvgjsPath2247" d="M 0 31.406607482910175L 33.421875 103.88339398193361L 66.84375 62.81321496582032L 100.265625 2.415892883300785L 133.6875 60.39732208251954L 167.109375 149.78535876464844L 200.53125 91.80392956542971L 233.953125 128.04232281494143L 267.375 43.48607189941407L 300.796875 106.2992868652344L 334.21875 132.874108581543L 367.640625 128.04232281494143" fill="none" fill-opacity="1" stroke="rgba(252,185,44,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="5" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskpse7db99)" pathTo="M 0 31.406607482910175L 33.421875 103.88339398193361L 66.84375 62.81321496582032L 100.265625 2.415892883300785L 133.6875 60.39732208251954L 167.109375 149.78535876464844L 200.53125 91.80392956542971L 233.953125 128.04232281494143L 267.375 43.48607189941407L 300.796875 106.2992868652344L 334.21875 132.874108581543L 367.640625 128.04232281494143" pathFrom="M -1 241.58928833007815L -1 241.58928833007815L 33.421875 241.58928833007815L 66.84375 241.58928833007815L 100.265625 241.58928833007815L 133.6875 241.58928833007815L 167.109375 241.58928833007815L 200.53125 241.58928833007815L 233.953125 241.58928833007815L 267.375 241.58928833007815L 300.796875 241.58928833007815L 334.21875 241.58928833007815L 367.640625 241.58928833007815"></path>
                                       <g id="SvgjsG2245" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2331" r="0" cx="334.21875" cy="132.874108581543" class="apexcharts-marker wn0m156ic no-pointer-events" stroke="#ffffff" fill="#fcb92c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2238" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG2242" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    <g id="SvgjsG2246" class="apexcharts-datalabels" data:realIndex="2"></g>
                                 </g>
                                 <line id="SvgjsLine2324" x1="0" y1="0" x2="367.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2325" x1="0" y1="0" x2="367.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG2326" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG2327" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG2328" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect2231" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2287" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                 <g id="SvgjsG2288" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText2289" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2290">100</tspan>
                                       <title>100</title>
                                    </text>
                                    <text id="SvgjsText2291" font-family="Helvetica, Arial, sans-serif" x="20" y="79.81785766601563" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2292">80</tspan>
                                       <title>80</title>
                                    </text>
                                    <text id="SvgjsText2293" font-family="Helvetica, Arial, sans-serif" x="20" y="128.13571533203125" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2294">60</tspan>
                                       <title>60</title>
                                    </text>
                                    <text id="SvgjsText2295" font-family="Helvetica, Arial, sans-serif" x="20" y="176.45357299804687" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2296">40</tspan>
                                       <title>40</title>
                                    </text>
                                    <text id="SvgjsText2297" font-family="Helvetica, Arial, sans-serif" x="20" y="224.7714306640625" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2298">20</tspan>
                                       <title>20</title>
                                    </text>
                                    <text id="SvgjsText2299" font-family="Helvetica, Arial, sans-serif" x="20" y="273.08928833007815" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2300">0</tspan>
                                       <title>0</title>
                                    </text>
                                 </g>
                              </g>
                              <g id="SvgjsG2227" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 179.172px; top: 135.589px;">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">11 Jan</div>
                              <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Session Duration (mins)</span><span class="apexcharts-tooltip-text-y-value">15</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Page Views per session</span><span class="apexcharts-tooltip-text-y-value">32</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 185, 44);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Total Visits</span><span class="apexcharts-tooltip-text-y-value">45</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 346.953px; top: 273.589px;">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 41.2188px;">11 Jan</div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Area Chart</h5>
                  <h6 class="card-subtitle text-muted">Area charts are used to represent quantitative variations.</h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-area" style="min-height: 365px;">
                        <div id="apexchartsbubwypex" class="apexcharts-canvas apexchartsbubwypex apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg2334" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="series1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="series1" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series1</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="series2" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="series2" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series2</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2336" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                 <defs id="SvgjsDefs2335">
                                    <clipPath id="gridRectMaskbubwypex">
                                       <rect id="SvgjsRect2353" width="375.640625" height="274.2" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskbubwypex"></clipPath>
                                    <clipPath id="nonForecastMaskbubwypex"></clipPath>
                                    <clipPath id="gridRectMarkerMaskbubwypex">
                                       <rect id="SvgjsRect2354" width="371.640625" height="274.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient2359" x1="0" y1="0" x2="0" y2="1">
                                       <stop id="SvgjsStop2360" stop-opacity="0.65" stop-color="rgba(59,125,221,0.65)" offset="0"></stop>
                                       <stop id="SvgjsStop2361" stop-opacity="0.5" stop-color="rgba(157,190,238,0.5)" offset="1"></stop>
                                       <stop id="SvgjsStop2362" stop-opacity="0.5" stop-color="rgba(157,190,238,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <linearGradient id="SvgjsLinearGradient2368" x1="0" y1="0" x2="0" y2="1">
                                       <stop id="SvgjsStop2369" stop-opacity="0.65" stop-color="rgba(28,187,140,0.65)" offset="0"></stop>
                                       <stop id="SvgjsStop2370" stop-opacity="0.5" stop-color="rgba(142,221,198,0.5)" offset="1"></stop>
                                       <stop id="SvgjsStop2371" stop-opacity="0.5" stop-color="rgba(142,221,198,0.5)" offset="1"></stop>
                                    </linearGradient>
                                 </defs>
                                 <line id="SvgjsLine2344" x1="0" y1="0" x2="0" y2="226.59576416015625" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="226.59576416015625" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG2374" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2375" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText2377" font-family="Helvetica, Arial, sans-serif" x="28.28004807692308" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2378">19:00</tspan>
                                          <title>19:00</title>
                                       </text>
                                       <text id="SvgjsText2380" font-family="Helvetica, Arial, sans-serif" x="84.84014423076924" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2381">20:00</tspan>
                                          <title>20:00</title>
                                       </text>
                                       <text id="SvgjsText2383" font-family="Helvetica, Arial, sans-serif" x="141.40024038461542" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2384">21:00</tspan>
                                          <title>21:00</title>
                                       </text>
                                       <text id="SvgjsText2386" font-family="Helvetica, Arial, sans-serif" x="197.96033653846158" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2387">22:00</tspan>
                                          <title>22:00</title>
                                       </text>
                                       <text id="SvgjsText2389" font-family="Helvetica, Arial, sans-serif" x="254.52043269230774" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2390">23:00</tspan>
                                          <title>23:00</title>
                                       </text>
                                       <text id="SvgjsText2392" font-family="Helvetica, Arial, sans-serif" x="311.0805288461539" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2393">19 Sep</tspan>
                                          <title>19 Sep</title>
                                       </text>
                                       <text id="SvgjsText2395" font-family="Helvetica, Arial, sans-serif" x="367.6406250000001" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2396"></tspan>
                                          <title></title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine2397" x1="0" y1="271.2" x2="367.640625" y2="271.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2410" class="apexcharts-grid">
                                    <g id="SvgjsG2411" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine2419" x1="0" y1="0" x2="367.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2420" x1="0" y1="67.55" x2="367.640625" y2="67.55" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2421" x1="0" y1="135.1" x2="367.640625" y2="135.1" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2422" x1="0" y1="202.64999999999998" x2="367.640625" y2="202.64999999999998" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2423" x1="0" y1="270.2" x2="367.640625" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2412" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine2413" x1="28.28004807692308" y1="271.2" x2="28.28004807692308" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2414" x1="84.84014423076924" y1="271.2" x2="84.84014423076924" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2415" x1="141.40024038461542" y1="271.2" x2="141.40024038461542" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2416" x1="197.96033653846158" y1="271.2" x2="197.96033653846158" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2417" x1="254.52043269230774" y1="271.2" x2="254.52043269230774" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2418" x1="311.0805288461539" y1="271.2" x2="311.0805288461539" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2425" x1="0" y1="270.2" x2="367.640625" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2424" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2355" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG2356" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath2363" d="M 0 270.2L 0 200.3983333333333C 29.694050480769228 200.3983333333333 55.14609375 180.13333333333333 84.84014423076923 180.13333333333333C 104.63617788461538 180.13333333333333 121.60420673076923 207.15333333333334 141.4002403846154 207.15333333333334C 161.19627403846152 207.15333333333334 178.16430288461538 155.365 197.96033653846152 155.365C 217.75637019230768 155.365 234.7243990384615 175.63 254.52043269230768 175.63C 274.31646634615385 175.63 291.28449519230765 24.768333333333345 311.0805288461538 24.768333333333345C 330.8765625 24.768333333333345 347.84459134615383 45.03333333333333 367.640625 45.03333333333333C 367.640625 45.03333333333333 367.640625 45.03333333333333 367.640625 270.2M 367.640625 45.03333333333333z" fill="url(#SvgjsLinearGradient2359)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbubwypex)" pathTo="M 0 270.2L 0 200.3983333333333C 29.694050480769228 200.3983333333333 55.14609375 180.13333333333333 84.84014423076923 180.13333333333333C 104.63617788461538 180.13333333333333 121.60420673076923 207.15333333333334 141.4002403846154 207.15333333333334C 161.19627403846152 207.15333333333334 178.16430288461538 155.365 197.96033653846152 155.365C 217.75637019230768 155.365 234.7243990384615 175.63 254.52043269230768 175.63C 274.31646634615385 175.63 291.28449519230765 24.768333333333345 311.0805288461538 24.768333333333345C 330.8765625 24.768333333333345 347.84459134615383 45.03333333333333 367.640625 45.03333333333333C 367.640625 45.03333333333333 367.640625 45.03333333333333 367.640625 270.2M 367.640625 45.03333333333333z" pathFrom="M -1 270.2L -1 270.2L 84.84014423076923 270.2L 141.4002403846154 270.2L 197.96033653846152 270.2L 254.52043269230768 270.2L 311.0805288461538 270.2L 367.640625 270.2"></path>
                                       <path id="SvgjsPath2364" d="M 0 200.3983333333333C 29.694050480769228 200.3983333333333 55.14609375 180.13333333333333 84.84014423076923 180.13333333333333C 104.63617788461538 180.13333333333333 121.60420673076923 207.15333333333334 141.4002403846154 207.15333333333334C 161.19627403846152 207.15333333333334 178.16430288461538 155.365 197.96033653846152 155.365C 217.75637019230768 155.365 234.7243990384615 175.63 254.52043269230768 175.63C 274.31646634615385 175.63 291.28449519230765 24.768333333333345 311.0805288461538 24.768333333333345C 330.8765625 24.768333333333345 347.84459134615383 45.03333333333333 367.640625 45.03333333333333" fill="none" fill-opacity="1" stroke="#3b7ddd" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbubwypex)" pathTo="M 0 200.3983333333333C 29.694050480769228 200.3983333333333 55.14609375 180.13333333333333 84.84014423076923 180.13333333333333C 104.63617788461538 180.13333333333333 121.60420673076923 207.15333333333334 141.4002403846154 207.15333333333334C 161.19627403846152 207.15333333333334 178.16430288461538 155.365 197.96033653846152 155.365C 217.75637019230768 155.365 234.7243990384615 175.63 254.52043269230768 175.63C 274.31646634615385 175.63 291.28449519230765 24.768333333333345 311.0805288461538 24.768333333333345C 330.8765625 24.768333333333345 347.84459134615383 45.03333333333333 367.640625 45.03333333333333" pathFrom="M -1 270.2L -1 270.2L 84.84014423076923 270.2L 141.4002403846154 270.2L 197.96033653846152 270.2L 254.52043269230768 270.2L 311.0805288461538 270.2L 367.640625 270.2"></path>
                                       <g id="SvgjsG2357" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2431" r="0" cx="0" cy="0" class="apexcharts-marker wnnl2n26t no-pointer-events" stroke="#ffffff" fill="#3b7ddd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2365" class="apexcharts-series" seriesName="series2" data:longestSeries="true" rel="2" data:realIndex="1">
                                       <path id="SvgjsPath2372" d="M 0 270.2L 0 245.43166666666667C 29.694050480769228 245.43166666666667 55.14609375 198.14666666666665 84.84014423076923 198.14666666666665C 104.63617788461538 198.14666666666665 121.60420673076923 168.875 141.4002403846154 168.875C 161.19627403846152 168.875 178.16430288461538 198.14666666666665 197.96033653846152 198.14666666666665C 217.75637019230768 198.14666666666665 234.7243990384615 193.64333333333332 254.52043269230768 193.64333333333332C 274.31646634615385 193.64333333333332 291.28449519230765 153.11333333333334 311.0805288461538 153.11333333333334C 330.8765625 153.11333333333334 347.84459134615383 177.88166666666666 367.640625 177.88166666666666C 367.640625 177.88166666666666 367.640625 177.88166666666666 367.640625 270.2M 367.640625 177.88166666666666z" fill="url(#SvgjsLinearGradient2368)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskbubwypex)" pathTo="M 0 270.2L 0 245.43166666666667C 29.694050480769228 245.43166666666667 55.14609375 198.14666666666665 84.84014423076923 198.14666666666665C 104.63617788461538 198.14666666666665 121.60420673076923 168.875 141.4002403846154 168.875C 161.19627403846152 168.875 178.16430288461538 198.14666666666665 197.96033653846152 198.14666666666665C 217.75637019230768 198.14666666666665 234.7243990384615 193.64333333333332 254.52043269230768 193.64333333333332C 274.31646634615385 193.64333333333332 291.28449519230765 153.11333333333334 311.0805288461538 153.11333333333334C 330.8765625 153.11333333333334 347.84459134615383 177.88166666666666 367.640625 177.88166666666666C 367.640625 177.88166666666666 367.640625 177.88166666666666 367.640625 270.2M 367.640625 177.88166666666666z" pathFrom="M -1 270.2L -1 270.2L 84.84014423076923 270.2L 141.4002403846154 270.2L 197.96033653846152 270.2L 254.52043269230768 270.2L 311.0805288461538 270.2L 367.640625 270.2"></path>
                                       <path id="SvgjsPath2373" d="M 0 245.43166666666667C 29.694050480769228 245.43166666666667 55.14609375 198.14666666666665 84.84014423076923 198.14666666666665C 104.63617788461538 198.14666666666665 121.60420673076923 168.875 141.4002403846154 168.875C 161.19627403846152 168.875 178.16430288461538 198.14666666666665 197.96033653846152 198.14666666666665C 217.75637019230768 198.14666666666665 234.7243990384615 193.64333333333332 254.52043269230768 193.64333333333332C 274.31646634615385 193.64333333333332 291.28449519230765 153.11333333333334 311.0805288461538 153.11333333333334C 330.8765625 153.11333333333334 347.84459134615383 177.88166666666666 367.640625 177.88166666666666" fill="none" fill-opacity="1" stroke="#1cbb8c" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskbubwypex)" pathTo="M 0 245.43166666666667C 29.694050480769228 245.43166666666667 55.14609375 198.14666666666665 84.84014423076923 198.14666666666665C 104.63617788461538 198.14666666666665 121.60420673076923 168.875 141.4002403846154 168.875C 161.19627403846152 168.875 178.16430288461538 198.14666666666665 197.96033653846152 198.14666666666665C 217.75637019230768 198.14666666666665 234.7243990384615 193.64333333333332 254.52043269230768 193.64333333333332C 274.31646634615385 193.64333333333332 291.28449519230765 153.11333333333334 311.0805288461538 153.11333333333334C 330.8765625 153.11333333333334 347.84459134615383 177.88166666666666 367.640625 177.88166666666666" pathFrom="M -1 270.2L -1 270.2L 84.84014423076923 270.2L 141.4002403846154 270.2L 197.96033653846152 270.2L 254.52043269230768 270.2L 311.0805288461538 270.2L 367.640625 270.2"></path>
                                       <g id="SvgjsG2366" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle2432" r="0" cx="0" cy="0" class="apexcharts-marker w8cw92kud no-pointer-events" stroke="#ffffff" fill="#1cbb8c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2358" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG2367" class="apexcharts-datalabels" data:realIndex="1"></g>
                                 </g>
                                 <line id="SvgjsLine2426" x1="0" y1="0" x2="367.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2427" x1="0" y1="0" x2="367.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG2428" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG2429" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG2430" class="apexcharts-point-annotations"></g>
                                 <rect id="SvgjsRect2433" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                 <rect id="SvgjsRect2434" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect2343" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2398" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                 <g id="SvgjsG2399" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText2400" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2401">120</tspan>
                                       <title>120</title>
                                    </text>
                                    <text id="SvgjsText2402" font-family="Helvetica, Arial, sans-serif" x="20" y="98.95" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2403">90</tspan>
                                       <title>90</title>
                                    </text>
                                    <text id="SvgjsText2404" font-family="Helvetica, Arial, sans-serif" x="20" y="166.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2405">60</tspan>
                                       <title>60</title>
                                    </text>
                                    <text id="SvgjsText2406" font-family="Helvetica, Arial, sans-serif" x="20" y="234.04999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2407">30</tspan>
                                       <title>30</title>
                                    </text>
                                    <text id="SvgjsText2408" font-family="Helvetica, Arial, sans-serif" x="20" y="301.59999999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2409">0</tspan>
                                       <title>0</title>
                                    </text>
                                 </g>
                              </g>
                              <g id="SvgjsG2337" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-zoomin-icon" title="Zoom In">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoomout-icon" title="Zoom Out">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-pan-icon" title="Panning">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <defs>
                                       <path d="M0 0h24v24H0z" id="a"></path>
                                    </defs>
                                    <clipPath id="b">
                                       <use overflow="visible" xlink:href="#a"></use>
                                    </clipPath>
                                    <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-reset-icon" title="Reset Zoom">
                                 <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Bar Chart</h5>
                  <h6 class="card-subtitle text-muted">A bar chart is the best tool for displaying comparisons between categories of data.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-bar" style="min-height: 365px;">
                        <div id="apexchartsfhpos67v" class="apexcharts-canvas apexchartsfhpos67v apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg2435" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 60px; top: 4px; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="MarinexSprite" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Marine%20Sprite" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Marine Sprite</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="StrikingxCalf" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Striking%20Calf" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Striking Calf</span></div>
                                    <div class="apexcharts-legend-series" rel="3" seriesname="TankxPicture" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(252, 185, 44) !important; color: rgb(252, 185, 44); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Tank%20Picture" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Tank Picture</span></div>
                                    <div class="apexcharts-legend-series" rel="4" seriesname="BucketxSlope" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(220, 53, 69) !important; color: rgb(220, 53, 69); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Bucket%20Slope" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Bucket Slope</span></div>
                                    <div class="apexcharts-legend-series" rel="5" seriesname="RebornxKid" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="5" data:collapsed="false" style="background: rgb(23, 162, 184) !important; color: rgb(23, 162, 184); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="5" i="4" data:default-text="Reborn%20Kid" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Reborn Kid</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2437" class="apexcharts-inner apexcharts-graphical" transform="translate(51.484375, 72)">
                                 <defs id="SvgjsDefs2436">
                                    <linearGradient id="SvgjsLinearGradient2441" x1="0" y1="0" x2="0" y2="1">
                                       <stop id="SvgjsStop2442" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                       <stop id="SvgjsStop2443" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                       <stop id="SvgjsStop2444" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskfhpos67v">
                                       <rect id="SvgjsRect2446" width="351" height="241.348" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskfhpos67v"></clipPath>
                                    <clipPath id="nonForecastMaskfhpos67v"></clipPath>
                                    <clipPath id="gridRectMarkerMaskfhpos67v">
                                       <rect id="SvgjsRect2447" width="350" height="244.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <rect id="SvgjsRect2445" width="0" height="240.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2441)" class="apexcharts-xcrosshairs" y2="240.348" filter="none" fill-opacity="0.9"></rect>
                                 <g id="SvgjsG2652" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0">
                                    <g id="SvgjsG2653" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(0, 0)">
                                       <text id="SvgjsText2654" font-family="Helvetica, Arial, sans-serif" x="-15" y="18.728415584415586" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2655">2008</tspan>
                                          <title>2008</title>
                                       </text>
                                       <text id="SvgjsText2656" font-family="Helvetica, Arial, sans-serif" x="-15" y="53.06384415584416" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2657">2009</tspan>
                                          <title>2009</title>
                                       </text>
                                       <text id="SvgjsText2658" font-family="Helvetica, Arial, sans-serif" x="-15" y="87.39927272727273" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2659">2010</tspan>
                                          <title>2010</title>
                                       </text>
                                       <text id="SvgjsText2660" font-family="Helvetica, Arial, sans-serif" x="-15" y="121.73470129870131" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2661">2011</tspan>
                                          <title>2011</title>
                                       </text>
                                       <text id="SvgjsText2662" font-family="Helvetica, Arial, sans-serif" x="-15" y="156.07012987012988" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2663">2012</tspan>
                                          <title>2012</title>
                                       </text>
                                       <text id="SvgjsText2664" font-family="Helvetica, Arial, sans-serif" x="-15" y="190.40555844155844" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2665">2013</tspan>
                                          <title>2013</title>
                                       </text>
                                       <text id="SvgjsText2666" font-family="Helvetica, Arial, sans-serif" x="-15" y="224.740987012987" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2667">2014</tspan>
                                          <title>2014</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine2668" x1="0" y1="1" x2="0" y2="240.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2634" class="apexcharts-xaxis apexcharts-yaxis-inversed">
                                    <g id="SvgjsG2635" class="apexcharts-xaxis-texts-g" transform="translate(0, -8)">
                                       <text id="SvgjsText2636" font-family="Helvetica, Arial, sans-serif" x="346" y="270.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2638">160K</tspan>
                                          <title>160K</title>
                                       </text>
                                       <text id="SvgjsText2639" font-family="Helvetica, Arial, sans-serif" x="259.4" y="270.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2641">120K</tspan>
                                          <title>120K</title>
                                       </text>
                                       <text id="SvgjsText2642" font-family="Helvetica, Arial, sans-serif" x="172.80000000000004" y="270.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2644">80K</tspan>
                                          <title>80K</title>
                                       </text>
                                       <text id="SvgjsText2645" font-family="Helvetica, Arial, sans-serif" x="86.20000000000005" y="270.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2647">40K</tspan>
                                          <title>40K</title>
                                       </text>
                                       <text id="SvgjsText2648" font-family="Helvetica, Arial, sans-serif" x="-0.39999999999997726" y="270.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2650">0K</tspan>
                                          <title>0K</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine2651" x1="0" y1="240.348" x2="346" y2="240.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2669" class="apexcharts-grid">
                                    <g id="SvgjsG2670" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine2677" x1="0" y1="0" x2="346" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2678" x1="0" y1="34.33542857142857" x2="346" y2="34.33542857142857" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2679" x1="0" y1="68.67085714285714" x2="346" y2="68.67085714285714" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2680" x1="0" y1="103.00628571428572" x2="346" y2="103.00628571428572" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2681" x1="0" y1="137.3417142857143" x2="346" y2="137.3417142857143" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2682" x1="0" y1="171.67714285714285" x2="346" y2="171.67714285714285" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2683" x1="0" y1="206.01257142857142" x2="346" y2="206.01257142857142" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2684" x1="0" y1="240.34799999999998" x2="346" y2="240.34799999999998" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2671" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine2672" x1="0" y1="241.348" x2="0" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2673" x1="86.8" y1="241.348" x2="86.8" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2674" x1="173.60000000000002" y1="241.348" x2="173.60000000000002" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2675" x1="260.40000000000003" y1="241.348" x2="260.40000000000003" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2676" x1="347.20000000000005" y1="241.348" x2="347.20000000000005" y2="247.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2686" x1="0" y1="240.348" x2="346" y2="240.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2685" x1="0" y1="1" x2="0" y2="240.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2448" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG2449" class="apexcharts-series" seriesName="MarinexSprite" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath2451" d="M 0.1 5.150314285714286L 95.25 5.150314285714286Q 95.25 5.150314285714286 95.25 5.150314285714286L 95.25 28.185114285714285Q 95.25 28.185114285714285 95.25 28.185114285714285L 95.25 28.185114285714285L 0.1 28.185114285714285L 0.1 28.185114285714285z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 5.150314285714286L 95.25 5.150314285714286Q 95.25 5.150314285714286 95.25 5.150314285714286L 95.25 28.185114285714285Q 95.25 28.185114285714285 95.25 28.185114285714285L 95.25 28.185114285714285L 0.1 28.185114285714285L 0.1 28.185114285714285z" pathFrom="M 0.1 5.150314285714286L 0.1 5.150314285714286L 0.1 28.185114285714285L 0.1 28.185114285714285L 0.1 28.185114285714285L 0.1 28.185114285714285L 0.1 28.185114285714285L 0.1 5.150314285714286" cy="39.48574285714286" cx="95.25" j="0" val="44" barHeight="24.0348" barWidth="95.15"></path>
                                       <path id="SvgjsPath2456" d="M 0.1 39.48574285714286L 119.0375 39.48574285714286Q 119.0375 39.48574285714286 119.0375 39.48574285714286L 119.0375 62.52054285714286Q 119.0375 62.52054285714286 119.0375 62.52054285714286L 119.0375 62.52054285714286L 0.1 62.52054285714286L 0.1 62.52054285714286z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 39.48574285714286L 119.0375 39.48574285714286Q 119.0375 39.48574285714286 119.0375 39.48574285714286L 119.0375 62.52054285714286Q 119.0375 62.52054285714286 119.0375 62.52054285714286L 119.0375 62.52054285714286L 0.1 62.52054285714286L 0.1 62.52054285714286z" pathFrom="M 0.1 39.48574285714286L 0.1 39.48574285714286L 0.1 62.52054285714286L 0.1 62.52054285714286L 0.1 62.52054285714286L 0.1 62.52054285714286L 0.1 62.52054285714286L 0.1 39.48574285714286" cy="73.82117142857143" cx="119.0375" j="1" val="55" barHeight="24.0348" barWidth="118.9375"></path>
                                       <path id="SvgjsPath2461" d="M 0.1 73.82117142857143L 88.7625 73.82117142857143Q 88.7625 73.82117142857143 88.7625 73.82117142857143L 88.7625 96.85597142857144Q 88.7625 96.85597142857144 88.7625 96.85597142857144L 88.7625 96.85597142857144L 0.1 96.85597142857144L 0.1 96.85597142857144z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 73.82117142857143L 88.7625 73.82117142857143Q 88.7625 73.82117142857143 88.7625 73.82117142857143L 88.7625 96.85597142857144Q 88.7625 96.85597142857144 88.7625 96.85597142857144L 88.7625 96.85597142857144L 0.1 96.85597142857144L 0.1 96.85597142857144z" pathFrom="M 0.1 73.82117142857143L 0.1 73.82117142857143L 0.1 96.85597142857144L 0.1 96.85597142857144L 0.1 96.85597142857144L 0.1 96.85597142857144L 0.1 96.85597142857144L 0.1 73.82117142857143" cy="108.1566" cx="88.7625" j="2" val="41" barHeight="24.0348" barWidth="88.66250000000001"></path>
                                       <path id="SvgjsPath2466" d="M 0.1 108.1566L 80.1125 108.1566Q 80.1125 108.1566 80.1125 108.1566L 80.1125 131.1914Q 80.1125 131.1914 80.1125 131.1914L 80.1125 131.1914L 0.1 131.1914L 0.1 131.1914z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 108.1566L 80.1125 108.1566Q 80.1125 108.1566 80.1125 108.1566L 80.1125 131.1914Q 80.1125 131.1914 80.1125 131.1914L 80.1125 131.1914L 0.1 131.1914L 0.1 131.1914z" pathFrom="M 0.1 108.1566L 0.1 108.1566L 0.1 131.1914L 0.1 131.1914L 0.1 131.1914L 0.1 131.1914L 0.1 131.1914L 0.1 108.1566" cy="142.49202857142856" cx="80.1125" j="3" val="37" barHeight="24.0348" barWidth="80.0125"></path>
                                       <path id="SvgjsPath2471" d="M 0.1 142.49202857142856L 47.675000000000004 142.49202857142856Q 47.675000000000004 142.49202857142856 47.675000000000004 142.49202857142856L 47.675000000000004 165.52682857142855Q 47.675000000000004 165.52682857142855 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 0.1 165.52682857142855L 0.1 165.52682857142855z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 142.49202857142856L 47.675000000000004 142.49202857142856Q 47.675000000000004 142.49202857142856 47.675000000000004 142.49202857142856L 47.675000000000004 165.52682857142855Q 47.675000000000004 165.52682857142855 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 0.1 165.52682857142855L 0.1 165.52682857142855z" pathFrom="M 0.1 142.49202857142856L 0.1 142.49202857142856L 0.1 165.52682857142855L 0.1 165.52682857142855L 0.1 165.52682857142855L 0.1 165.52682857142855L 0.1 165.52682857142855L 0.1 142.49202857142856" cy="176.82745714285713" cx="47.675000000000004" j="4" val="22" barHeight="24.0348" barWidth="47.575"></path>
                                       <path id="SvgjsPath2476" d="M 0.1 176.82745714285713L 93.08749999999999 176.82745714285713Q 93.08749999999999 176.82745714285713 93.08749999999999 176.82745714285713L 93.08749999999999 199.86225714285712Q 93.08749999999999 199.86225714285712 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 0.1 199.86225714285712L 0.1 199.86225714285712z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 176.82745714285713L 93.08749999999999 176.82745714285713Q 93.08749999999999 176.82745714285713 93.08749999999999 176.82745714285713L 93.08749999999999 199.86225714285712Q 93.08749999999999 199.86225714285712 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 0.1 199.86225714285712L 0.1 199.86225714285712z" pathFrom="M 0.1 176.82745714285713L 0.1 176.82745714285713L 0.1 199.86225714285712L 0.1 199.86225714285712L 0.1 199.86225714285712L 0.1 199.86225714285712L 0.1 199.86225714285712L 0.1 176.82745714285713" cy="211.1628857142857" cx="93.08749999999999" j="5" val="43" barHeight="24.0348" barWidth="92.9875"></path>
                                       <path id="SvgjsPath2481" d="M 0.1 211.1628857142857L 45.5125 211.1628857142857Q 45.5125 211.1628857142857 45.5125 211.1628857142857L 45.5125 234.19768571428568Q 45.5125 234.19768571428568 45.5125 234.19768571428568L 45.5125 234.19768571428568L 0.1 234.19768571428568L 0.1 234.19768571428568z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 0.1 211.1628857142857L 45.5125 211.1628857142857Q 45.5125 211.1628857142857 45.5125 211.1628857142857L 45.5125 234.19768571428568Q 45.5125 234.19768571428568 45.5125 234.19768571428568L 45.5125 234.19768571428568L 0.1 234.19768571428568L 0.1 234.19768571428568z" pathFrom="M 0.1 211.1628857142857L 0.1 211.1628857142857L 0.1 234.19768571428568L 0.1 234.19768571428568L 0.1 234.19768571428568L 0.1 234.19768571428568L 0.1 234.19768571428568L 0.1 211.1628857142857" cy="245.49831428571426" cx="45.5125" j="6" val="21" barHeight="24.0348" barWidth="45.4125"></path>
                                    </g>
                                    <g id="SvgjsG2486" class="apexcharts-series" seriesName="StrikingxCalf" rel="2" data:realIndex="1">
                                       <path id="SvgjsPath2488" d="M 95.25 5.150314285714286L 209.8625 5.150314285714286Q 209.8625 5.150314285714286 209.8625 5.150314285714286L 209.8625 28.185114285714285Q 209.8625 28.185114285714285 209.8625 28.185114285714285L 209.8625 28.185114285714285L 95.25 28.185114285714285L 95.25 28.185114285714285z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 95.25 5.150314285714286L 209.8625 5.150314285714286Q 209.8625 5.150314285714286 209.8625 5.150314285714286L 209.8625 28.185114285714285Q 209.8625 28.185114285714285 209.8625 28.185114285714285L 209.8625 28.185114285714285L 95.25 28.185114285714285L 95.25 28.185114285714285z" pathFrom="M 95.25 5.150314285714286L 95.25 5.150314285714286L 95.25 28.185114285714285L 95.25 28.185114285714285L 95.25 28.185114285714285L 95.25 28.185114285714285L 95.25 28.185114285714285L 95.25 5.150314285714286" cy="39.48574285714286" cx="209.8625" j="0" val="53" barHeight="24.0348" barWidth="114.6125"></path>
                                       <path id="SvgjsPath2493" d="M 119.0375 39.48574285714286L 188.2375 39.48574285714286Q 188.2375 39.48574285714286 188.2375 39.48574285714286L 188.2375 62.52054285714286Q 188.2375 62.52054285714286 188.2375 62.52054285714286L 188.2375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 119.0375 39.48574285714286L 188.2375 39.48574285714286Q 188.2375 39.48574285714286 188.2375 39.48574285714286L 188.2375 62.52054285714286Q 188.2375 62.52054285714286 188.2375 62.52054285714286L 188.2375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286z" pathFrom="M 119.0375 39.48574285714286L 119.0375 39.48574285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 62.52054285714286L 119.0375 39.48574285714286" cy="73.82117142857143" cx="188.2375" j="1" val="32" barHeight="24.0348" barWidth="69.2"></path>
                                       <path id="SvgjsPath2498" d="M 88.7625 73.82117142857143L 160.125 73.82117142857143Q 160.125 73.82117142857143 160.125 73.82117142857143L 160.125 96.85597142857144Q 160.125 96.85597142857144 160.125 96.85597142857144L 160.125 96.85597142857144L 88.7625 96.85597142857144L 88.7625 96.85597142857144z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 88.7625 73.82117142857143L 160.125 73.82117142857143Q 160.125 73.82117142857143 160.125 73.82117142857143L 160.125 96.85597142857144Q 160.125 96.85597142857144 160.125 96.85597142857144L 160.125 96.85597142857144L 88.7625 96.85597142857144L 88.7625 96.85597142857144z" pathFrom="M 88.7625 73.82117142857143L 88.7625 73.82117142857143L 88.7625 96.85597142857144L 88.7625 96.85597142857144L 88.7625 96.85597142857144L 88.7625 96.85597142857144L 88.7625 96.85597142857144L 88.7625 73.82117142857143" cy="108.1566" cx="160.125" j="2" val="33" barHeight="24.0348" barWidth="71.3625"></path>
                                       <path id="SvgjsPath2503" d="M 80.1125 108.1566L 192.5625 108.1566Q 192.5625 108.1566 192.5625 108.1566L 192.5625 131.1914Q 192.5625 131.1914 192.5625 131.1914L 192.5625 131.1914L 80.1125 131.1914L 80.1125 131.1914z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 80.1125 108.1566L 192.5625 108.1566Q 192.5625 108.1566 192.5625 108.1566L 192.5625 131.1914Q 192.5625 131.1914 192.5625 131.1914L 192.5625 131.1914L 80.1125 131.1914L 80.1125 131.1914z" pathFrom="M 80.1125 108.1566L 80.1125 108.1566L 80.1125 131.1914L 80.1125 131.1914L 80.1125 131.1914L 80.1125 131.1914L 80.1125 131.1914L 80.1125 108.1566" cy="142.49202857142856" cx="192.5625" j="3" val="52" barHeight="24.0348" barWidth="112.45"></path>
                                       <path id="SvgjsPath2508" d="M 47.675000000000004 142.49202857142856L 75.78750000000001 142.49202857142856Q 75.78750000000001 142.49202857142856 75.78750000000001 142.49202857142856L 75.78750000000001 165.52682857142855Q 75.78750000000001 165.52682857142855 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 47.675000000000004 142.49202857142856L 75.78750000000001 142.49202857142856Q 75.78750000000001 142.49202857142856 75.78750000000001 142.49202857142856L 75.78750000000001 165.52682857142855Q 75.78750000000001 165.52682857142855 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855z" pathFrom="M 47.675000000000004 142.49202857142856L 47.675000000000004 142.49202857142856L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 165.52682857142855L 47.675000000000004 142.49202857142856" cy="176.82745714285713" cx="75.78750000000001" j="4" val="13" barHeight="24.0348" barWidth="28.1125"></path>
                                       <path id="SvgjsPath2513" d="M 93.08749999999999 176.82745714285713L 186.075 176.82745714285713Q 186.075 176.82745714285713 186.075 176.82745714285713L 186.075 199.86225714285712Q 186.075 199.86225714285712 186.075 199.86225714285712L 186.075 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 93.08749999999999 176.82745714285713L 186.075 176.82745714285713Q 186.075 176.82745714285713 186.075 176.82745714285713L 186.075 199.86225714285712Q 186.075 199.86225714285712 186.075 199.86225714285712L 186.075 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712z" pathFrom="M 93.08749999999999 176.82745714285713L 93.08749999999999 176.82745714285713L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 199.86225714285712L 93.08749999999999 176.82745714285713" cy="211.1628857142857" cx="186.075" j="5" val="43" barHeight="24.0348" barWidth="92.9875"></path>
                                       <path id="SvgjsPath2518" d="M 45.5125 211.1628857142857L 114.7125 211.1628857142857Q 114.7125 211.1628857142857 114.7125 211.1628857142857L 114.7125 234.19768571428568Q 114.7125 234.19768571428568 114.7125 234.19768571428568L 114.7125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 234.19768571428568z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 45.5125 211.1628857142857L 114.7125 211.1628857142857Q 114.7125 211.1628857142857 114.7125 211.1628857142857L 114.7125 234.19768571428568Q 114.7125 234.19768571428568 114.7125 234.19768571428568L 114.7125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 234.19768571428568z" pathFrom="M 45.5125 211.1628857142857L 45.5125 211.1628857142857L 45.5125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 234.19768571428568L 45.5125 211.1628857142857" cy="245.49831428571426" cx="114.7125" j="6" val="32" barHeight="24.0348" barWidth="69.2"></path>
                                    </g>
                                    <g id="SvgjsG2523" class="apexcharts-series" seriesName="TankxPicture" rel="3" data:realIndex="2">
                                       <path id="SvgjsPath2525" d="M 209.8625 5.150314285714286L 235.8125 5.150314285714286Q 235.8125 5.150314285714286 235.8125 5.150314285714286L 235.8125 28.185114285714285Q 235.8125 28.185114285714285 235.8125 28.185114285714285L 235.8125 28.185114285714285L 209.8625 28.185114285714285L 209.8625 28.185114285714285z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 209.8625 5.150314285714286L 235.8125 5.150314285714286Q 235.8125 5.150314285714286 235.8125 5.150314285714286L 235.8125 28.185114285714285Q 235.8125 28.185114285714285 235.8125 28.185114285714285L 235.8125 28.185114285714285L 209.8625 28.185114285714285L 209.8625 28.185114285714285z" pathFrom="M 209.8625 5.150314285714286L 209.8625 5.150314285714286L 209.8625 28.185114285714285L 209.8625 28.185114285714285L 209.8625 28.185114285714285L 209.8625 28.185114285714285L 209.8625 28.185114285714285L 209.8625 5.150314285714286" cy="39.48574285714286" cx="235.8125" j="0" val="12" barHeight="24.0348" barWidth="25.95"></path>
                                       <path id="SvgjsPath2530" d="M 188.2375 39.48574285714286L 225 39.48574285714286Q 225 39.48574285714286 225 39.48574285714286L 225 62.52054285714286Q 225 62.52054285714286 225 62.52054285714286L 225 62.52054285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 188.2375 39.48574285714286L 225 39.48574285714286Q 225 39.48574285714286 225 39.48574285714286L 225 62.52054285714286Q 225 62.52054285714286 225 62.52054285714286L 225 62.52054285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286z" pathFrom="M 188.2375 39.48574285714286L 188.2375 39.48574285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286L 188.2375 62.52054285714286L 188.2375 39.48574285714286" cy="73.82117142857143" cx="225" j="1" val="17" barHeight="24.0348" barWidth="36.7625"></path>
                                       <path id="SvgjsPath2535" d="M 160.125 73.82117142857143L 183.9125 73.82117142857143Q 183.9125 73.82117142857143 183.9125 73.82117142857143L 183.9125 96.85597142857144Q 183.9125 96.85597142857144 183.9125 96.85597142857144L 183.9125 96.85597142857144L 160.125 96.85597142857144L 160.125 96.85597142857144z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 160.125 73.82117142857143L 183.9125 73.82117142857143Q 183.9125 73.82117142857143 183.9125 73.82117142857143L 183.9125 96.85597142857144Q 183.9125 96.85597142857144 183.9125 96.85597142857144L 183.9125 96.85597142857144L 160.125 96.85597142857144L 160.125 96.85597142857144z" pathFrom="M 160.125 73.82117142857143L 160.125 73.82117142857143L 160.125 96.85597142857144L 160.125 96.85597142857144L 160.125 96.85597142857144L 160.125 96.85597142857144L 160.125 96.85597142857144L 160.125 73.82117142857143" cy="108.1566" cx="183.9125" j="2" val="11" barHeight="24.0348" barWidth="23.7875"></path>
                                       <path id="SvgjsPath2540" d="M 192.5625 108.1566L 212.025 108.1566Q 212.025 108.1566 212.025 108.1566L 212.025 131.1914Q 212.025 131.1914 212.025 131.1914L 212.025 131.1914L 192.5625 131.1914L 192.5625 131.1914z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 192.5625 108.1566L 212.025 108.1566Q 212.025 108.1566 212.025 108.1566L 212.025 131.1914Q 212.025 131.1914 212.025 131.1914L 212.025 131.1914L 192.5625 131.1914L 192.5625 131.1914z" pathFrom="M 192.5625 108.1566L 192.5625 108.1566L 192.5625 131.1914L 192.5625 131.1914L 192.5625 131.1914L 192.5625 131.1914L 192.5625 131.1914L 192.5625 108.1566" cy="142.49202857142856" cx="212.025" j="3" val="9" barHeight="24.0348" barWidth="19.462500000000002"></path>
                                       <path id="SvgjsPath2545" d="M 75.78750000000001 142.49202857142856L 108.22500000000001 142.49202857142856Q 108.22500000000001 142.49202857142856 108.22500000000001 142.49202857142856L 108.22500000000001 165.52682857142855Q 108.22500000000001 165.52682857142855 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 75.78750000000001 142.49202857142856L 108.22500000000001 142.49202857142856Q 108.22500000000001 142.49202857142856 108.22500000000001 142.49202857142856L 108.22500000000001 165.52682857142855Q 108.22500000000001 165.52682857142855 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855z" pathFrom="M 75.78750000000001 142.49202857142856L 75.78750000000001 142.49202857142856L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 165.52682857142855L 75.78750000000001 142.49202857142856" cy="176.82745714285713" cx="108.22500000000001" j="4" val="15" barHeight="24.0348" barWidth="32.4375"></path>
                                       <path id="SvgjsPath2550" d="M 186.075 176.82745714285713L 209.86249999999998 176.82745714285713Q 209.86249999999998 176.82745714285713 209.86249999999998 176.82745714285713L 209.86249999999998 199.86225714285712Q 209.86249999999998 199.86225714285712 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 186.075 199.86225714285712L 186.075 199.86225714285712z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 186.075 176.82745714285713L 209.86249999999998 176.82745714285713Q 209.86249999999998 176.82745714285713 209.86249999999998 176.82745714285713L 209.86249999999998 199.86225714285712Q 209.86249999999998 199.86225714285712 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 186.075 199.86225714285712L 186.075 199.86225714285712z" pathFrom="M 186.075 176.82745714285713L 186.075 176.82745714285713L 186.075 199.86225714285712L 186.075 199.86225714285712L 186.075 199.86225714285712L 186.075 199.86225714285712L 186.075 199.86225714285712L 186.075 176.82745714285713" cy="211.1628857142857" cx="209.86249999999998" j="5" val="11" barHeight="24.0348" barWidth="23.7875"></path>
                                       <path id="SvgjsPath2555" d="M 114.7125 211.1628857142857L 157.9625 211.1628857142857Q 157.9625 211.1628857142857 157.9625 211.1628857142857L 157.9625 234.19768571428568Q 157.9625 234.19768571428568 157.9625 234.19768571428568L 157.9625 234.19768571428568L 114.7125 234.19768571428568L 114.7125 234.19768571428568z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 114.7125 211.1628857142857L 157.9625 211.1628857142857Q 157.9625 211.1628857142857 157.9625 211.1628857142857L 157.9625 234.19768571428568Q 157.9625 234.19768571428568 157.9625 234.19768571428568L 157.9625 234.19768571428568L 114.7125 234.19768571428568L 114.7125 234.19768571428568z" pathFrom="M 114.7125 211.1628857142857L 114.7125 211.1628857142857L 114.7125 234.19768571428568L 114.7125 234.19768571428568L 114.7125 234.19768571428568L 114.7125 234.19768571428568L 114.7125 234.19768571428568L 114.7125 211.1628857142857" cy="245.49831428571426" cx="157.9625" j="6" val="20" barHeight="24.0348" barWidth="43.25"></path>
                                    </g>
                                    <g id="SvgjsG2560" class="apexcharts-series" seriesName="BucketxSlope" rel="4" data:realIndex="3">
                                       <path id="SvgjsPath2562" d="M 235.8125 5.150314285714286L 255.275 5.150314285714286Q 255.275 5.150314285714286 255.275 5.150314285714286L 255.275 28.185114285714285Q 255.275 28.185114285714285 255.275 28.185114285714285L 255.275 28.185114285714285L 235.8125 28.185114285714285L 235.8125 28.185114285714285z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 235.8125 5.150314285714286L 255.275 5.150314285714286Q 255.275 5.150314285714286 255.275 5.150314285714286L 255.275 28.185114285714285Q 255.275 28.185114285714285 255.275 28.185114285714285L 255.275 28.185114285714285L 235.8125 28.185114285714285L 235.8125 28.185114285714285z" pathFrom="M 235.8125 5.150314285714286L 235.8125 5.150314285714286L 235.8125 28.185114285714285L 235.8125 28.185114285714285L 235.8125 28.185114285714285L 235.8125 28.185114285714285L 235.8125 28.185114285714285L 235.8125 5.150314285714286" cy="39.48574285714286" cx="255.275" j="0" val="9" barHeight="24.0348" barWidth="19.462500000000002"></path>
                                       <path id="SvgjsPath2567" d="M 225 39.48574285714286L 240.1375 39.48574285714286Q 240.1375 39.48574285714286 240.1375 39.48574285714286L 240.1375 62.52054285714286Q 240.1375 62.52054285714286 240.1375 62.52054285714286L 240.1375 62.52054285714286L 225 62.52054285714286L 225 62.52054285714286z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 225 39.48574285714286L 240.1375 39.48574285714286Q 240.1375 39.48574285714286 240.1375 39.48574285714286L 240.1375 62.52054285714286Q 240.1375 62.52054285714286 240.1375 62.52054285714286L 240.1375 62.52054285714286L 225 62.52054285714286L 225 62.52054285714286z" pathFrom="M 225 39.48574285714286L 225 39.48574285714286L 225 62.52054285714286L 225 62.52054285714286L 225 62.52054285714286L 225 62.52054285714286L 225 62.52054285714286L 225 39.48574285714286" cy="73.82117142857143" cx="240.1375" j="1" val="7" barHeight="24.0348" barWidth="15.137500000000001"></path>
                                       <path id="SvgjsPath2572" d="M 183.9125 73.82117142857143L 194.725 73.82117142857143Q 194.725 73.82117142857143 194.725 73.82117142857143L 194.725 96.85597142857144Q 194.725 96.85597142857144 194.725 96.85597142857144L 194.725 96.85597142857144L 183.9125 96.85597142857144L 183.9125 96.85597142857144z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 183.9125 73.82117142857143L 194.725 73.82117142857143Q 194.725 73.82117142857143 194.725 73.82117142857143L 194.725 96.85597142857144Q 194.725 96.85597142857144 194.725 96.85597142857144L 194.725 96.85597142857144L 183.9125 96.85597142857144L 183.9125 96.85597142857144z" pathFrom="M 183.9125 73.82117142857143L 183.9125 73.82117142857143L 183.9125 96.85597142857144L 183.9125 96.85597142857144L 183.9125 96.85597142857144L 183.9125 96.85597142857144L 183.9125 96.85597142857144L 183.9125 73.82117142857143" cy="108.1566" cx="194.725" j="2" val="5" barHeight="24.0348" barWidth="10.8125"></path>
                                       <path id="SvgjsPath2577" d="M 212.025 108.1566L 229.32500000000002 108.1566Q 229.32500000000002 108.1566 229.32500000000002 108.1566L 229.32500000000002 131.1914Q 229.32500000000002 131.1914 229.32500000000002 131.1914L 229.32500000000002 131.1914L 212.025 131.1914L 212.025 131.1914z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 212.025 108.1566L 229.32500000000002 108.1566Q 229.32500000000002 108.1566 229.32500000000002 108.1566L 229.32500000000002 131.1914Q 229.32500000000002 131.1914 229.32500000000002 131.1914L 229.32500000000002 131.1914L 212.025 131.1914L 212.025 131.1914z" pathFrom="M 212.025 108.1566L 212.025 108.1566L 212.025 131.1914L 212.025 131.1914L 212.025 131.1914L 212.025 131.1914L 212.025 131.1914L 212.025 108.1566" cy="142.49202857142856" cx="229.32500000000002" j="3" val="8" barHeight="24.0348" barWidth="17.3"></path>
                                       <path id="SvgjsPath2582" d="M 108.22500000000001 142.49202857142856L 121.2 142.49202857142856Q 121.2 142.49202857142856 121.2 142.49202857142856L 121.2 165.52682857142855Q 121.2 165.52682857142855 121.2 165.52682857142855L 121.2 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 108.22500000000001 142.49202857142856L 121.2 142.49202857142856Q 121.2 142.49202857142856 121.2 142.49202857142856L 121.2 165.52682857142855Q 121.2 165.52682857142855 121.2 165.52682857142855L 121.2 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855z" pathFrom="M 108.22500000000001 142.49202857142856L 108.22500000000001 142.49202857142856L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 165.52682857142855L 108.22500000000001 142.49202857142856" cy="176.82745714285713" cx="121.2" j="4" val="6" barHeight="24.0348" barWidth="12.975"></path>
                                       <path id="SvgjsPath2587" d="M 209.86249999999998 176.82745714285713L 229.325 176.82745714285713Q 229.325 176.82745714285713 229.325 176.82745714285713L 229.325 199.86225714285712Q 229.325 199.86225714285712 229.325 199.86225714285712L 229.325 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 209.86249999999998 176.82745714285713L 229.325 176.82745714285713Q 229.325 176.82745714285713 229.325 176.82745714285713L 229.325 199.86225714285712Q 229.325 199.86225714285712 229.325 199.86225714285712L 229.325 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712z" pathFrom="M 209.86249999999998 176.82745714285713L 209.86249999999998 176.82745714285713L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 199.86225714285712L 209.86249999999998 176.82745714285713" cy="211.1628857142857" cx="229.325" j="5" val="9" barHeight="24.0348" barWidth="19.462500000000002"></path>
                                       <path id="SvgjsPath2592" d="M 157.9625 211.1628857142857L 166.6125 211.1628857142857Q 166.6125 211.1628857142857 166.6125 211.1628857142857L 166.6125 234.19768571428568Q 166.6125 234.19768571428568 166.6125 234.19768571428568L 166.6125 234.19768571428568L 157.9625 234.19768571428568L 157.9625 234.19768571428568z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 157.9625 211.1628857142857L 166.6125 211.1628857142857Q 166.6125 211.1628857142857 166.6125 211.1628857142857L 166.6125 234.19768571428568Q 166.6125 234.19768571428568 166.6125 234.19768571428568L 166.6125 234.19768571428568L 157.9625 234.19768571428568L 157.9625 234.19768571428568z" pathFrom="M 157.9625 211.1628857142857L 157.9625 211.1628857142857L 157.9625 234.19768571428568L 157.9625 234.19768571428568L 157.9625 234.19768571428568L 157.9625 234.19768571428568L 157.9625 234.19768571428568L 157.9625 211.1628857142857" cy="245.49831428571426" cx="166.6125" j="6" val="4" barHeight="24.0348" barWidth="8.65"></path>
                                    </g>
                                    <g id="SvgjsG2597" class="apexcharts-series" seriesName="RebornxKid" rel="5" data:realIndex="4">
                                       <path id="SvgjsPath2599" d="M 255.275 5.150314285714286L 309.3375 5.150314285714286Q 309.3375 5.150314285714286 309.3375 5.150314285714286L 309.3375 28.185114285714285Q 309.3375 28.185114285714285 309.3375 28.185114285714285L 309.3375 28.185114285714285L 255.275 28.185114285714285L 255.275 28.185114285714285z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 255.275 5.150314285714286L 309.3375 5.150314285714286Q 309.3375 5.150314285714286 309.3375 5.150314285714286L 309.3375 28.185114285714285Q 309.3375 28.185114285714285 309.3375 28.185114285714285L 309.3375 28.185114285714285L 255.275 28.185114285714285L 255.275 28.185114285714285z" pathFrom="M 255.275 5.150314285714286L 255.275 5.150314285714286L 255.275 28.185114285714285L 255.275 28.185114285714285L 255.275 28.185114285714285L 255.275 28.185114285714285L 255.275 28.185114285714285L 255.275 5.150314285714286" cy="39.48574285714286" cx="309.3375" j="0" val="25" barHeight="24.0348" barWidth="54.0625"></path>
                                       <path id="SvgjsPath2604" d="M 240.1375 39.48574285714286L 266.0875 39.48574285714286Q 266.0875 39.48574285714286 266.0875 39.48574285714286L 266.0875 62.52054285714286Q 266.0875 62.52054285714286 266.0875 62.52054285714286L 266.0875 62.52054285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 240.1375 39.48574285714286L 266.0875 39.48574285714286Q 266.0875 39.48574285714286 266.0875 39.48574285714286L 266.0875 62.52054285714286Q 266.0875 62.52054285714286 266.0875 62.52054285714286L 266.0875 62.52054285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286z" pathFrom="M 240.1375 39.48574285714286L 240.1375 39.48574285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286L 240.1375 62.52054285714286L 240.1375 39.48574285714286" cy="73.82117142857143" cx="266.0875" j="1" val="12" barHeight="24.0348" barWidth="25.95"></path>
                                       <path id="SvgjsPath2609" d="M 194.725 73.82117142857143L 235.8125 73.82117142857143Q 235.8125 73.82117142857143 235.8125 73.82117142857143L 235.8125 96.85597142857144Q 235.8125 96.85597142857144 235.8125 96.85597142857144L 235.8125 96.85597142857144L 194.725 96.85597142857144L 194.725 96.85597142857144z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 194.725 73.82117142857143L 235.8125 73.82117142857143Q 235.8125 73.82117142857143 235.8125 73.82117142857143L 235.8125 96.85597142857144Q 235.8125 96.85597142857144 235.8125 96.85597142857144L 235.8125 96.85597142857144L 194.725 96.85597142857144L 194.725 96.85597142857144z" pathFrom="M 194.725 73.82117142857143L 194.725 73.82117142857143L 194.725 96.85597142857144L 194.725 96.85597142857144L 194.725 96.85597142857144L 194.725 96.85597142857144L 194.725 96.85597142857144L 194.725 73.82117142857143" cy="108.1566" cx="235.8125" j="2" val="19" barHeight="24.0348" barWidth="41.0875"></path>
                                       <path id="SvgjsPath2614" d="M 229.32500000000002 108.1566L 298.52500000000003 108.1566Q 298.52500000000003 108.1566 298.52500000000003 108.1566L 298.52500000000003 131.1914Q 298.52500000000003 131.1914 298.52500000000003 131.1914L 298.52500000000003 131.1914L 229.32500000000002 131.1914L 229.32500000000002 131.1914z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 229.32500000000002 108.1566L 298.52500000000003 108.1566Q 298.52500000000003 108.1566 298.52500000000003 108.1566L 298.52500000000003 131.1914Q 298.52500000000003 131.1914 298.52500000000003 131.1914L 298.52500000000003 131.1914L 229.32500000000002 131.1914L 229.32500000000002 131.1914z" pathFrom="M 229.32500000000002 108.1566L 229.32500000000002 108.1566L 229.32500000000002 131.1914L 229.32500000000002 131.1914L 229.32500000000002 131.1914L 229.32500000000002 131.1914L 229.32500000000002 131.1914L 229.32500000000002 108.1566" cy="142.49202857142856" cx="298.52500000000003" j="3" val="32" barHeight="24.0348" barWidth="69.2"></path>
                                       <path id="SvgjsPath2619" d="M 121.2 142.49202857142856L 175.2625 142.49202857142856Q 175.2625 142.49202857142856 175.2625 142.49202857142856L 175.2625 165.52682857142855Q 175.2625 165.52682857142855 175.2625 165.52682857142855L 175.2625 165.52682857142855L 121.2 165.52682857142855L 121.2 165.52682857142855z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 121.2 142.49202857142856L 175.2625 142.49202857142856Q 175.2625 142.49202857142856 175.2625 142.49202857142856L 175.2625 165.52682857142855Q 175.2625 165.52682857142855 175.2625 165.52682857142855L 175.2625 165.52682857142855L 121.2 165.52682857142855L 121.2 165.52682857142855z" pathFrom="M 121.2 142.49202857142856L 121.2 142.49202857142856L 121.2 165.52682857142855L 121.2 165.52682857142855L 121.2 165.52682857142855L 121.2 165.52682857142855L 121.2 165.52682857142855L 121.2 142.49202857142856" cy="176.82745714285713" cx="175.2625" j="4" val="25" barHeight="24.0348" barWidth="54.0625"></path>
                                       <path id="SvgjsPath2624" d="M 229.325 176.82745714285713L 281.22499999999997 176.82745714285713Q 281.22499999999997 176.82745714285713 281.22499999999997 176.82745714285713L 281.22499999999997 199.86225714285712Q 281.22499999999997 199.86225714285712 281.22499999999997 199.86225714285712L 281.22499999999997 199.86225714285712L 229.325 199.86225714285712L 229.325 199.86225714285712z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 229.325 176.82745714285713L 281.22499999999997 176.82745714285713Q 281.22499999999997 176.82745714285713 281.22499999999997 176.82745714285713L 281.22499999999997 199.86225714285712Q 281.22499999999997 199.86225714285712 281.22499999999997 199.86225714285712L 281.22499999999997 199.86225714285712L 229.325 199.86225714285712L 229.325 199.86225714285712z" pathFrom="M 229.325 176.82745714285713L 229.325 176.82745714285713L 229.325 199.86225714285712L 229.325 199.86225714285712L 229.325 199.86225714285712L 229.325 199.86225714285712L 229.325 199.86225714285712L 229.325 176.82745714285713" cy="211.1628857142857" cx="281.22499999999997" j="5" val="24" barHeight="24.0348" barWidth="51.9"></path>
                                       <path id="SvgjsPath2629" d="M 166.6125 211.1628857142857L 188.2375 211.1628857142857Q 188.2375 211.1628857142857 188.2375 211.1628857142857L 188.2375 234.19768571428568Q 188.2375 234.19768571428568 188.2375 234.19768571428568L 188.2375 234.19768571428568L 166.6125 234.19768571428568L 166.6125 234.19768571428568z" fill="rgba(23,162,184,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="4" clip-path="url(#gridRectMaskfhpos67v)" pathTo="M 166.6125 211.1628857142857L 188.2375 211.1628857142857Q 188.2375 211.1628857142857 188.2375 211.1628857142857L 188.2375 234.19768571428568Q 188.2375 234.19768571428568 188.2375 234.19768571428568L 188.2375 234.19768571428568L 166.6125 234.19768571428568L 166.6125 234.19768571428568z" pathFrom="M 166.6125 211.1628857142857L 166.6125 211.1628857142857L 166.6125 234.19768571428568L 166.6125 234.19768571428568L 166.6125 234.19768571428568L 166.6125 234.19768571428568L 166.6125 234.19768571428568L 166.6125 211.1628857142857" cy="245.49831428571426" cx="188.2375" j="6" val="10" barHeight="24.0348" barWidth="21.625"></path>
                                    </g>
                                    <g id="SvgjsG2450" class="apexcharts-datalabels" data:realIndex="0">
                                       <g id="SvgjsG2453" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2455" font-family="Helvetica, Arial, sans-serif" x="47.675" y="21.16771428571429" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="47.675" cy="21.16771428571429" style="font-family: Helvetica, Arial, sans-serif;">44</text>
                                       </g>
                                       <g id="SvgjsG2458" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2460" font-family="Helvetica, Arial, sans-serif" x="59.568749999999994" y="55.50314285714286" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="59.568749999999994" cy="55.50314285714286" style="font-family: Helvetica, Arial, sans-serif;">55</text>
                                       </g>
                                       <g id="SvgjsG2463" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2465" font-family="Helvetica, Arial, sans-serif" x="44.43125" y="89.83857142857143" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="44.43125" cy="89.83857142857143" style="font-family: Helvetica, Arial, sans-serif;">41</text>
                                       </g>
                                       <g id="SvgjsG2468" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2470" font-family="Helvetica, Arial, sans-serif" x="40.106249999999996" y="124.17399999999999" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="40.106249999999996" cy="124.17399999999999" style="font-family: Helvetica, Arial, sans-serif;">37</text>
                                       </g>
                                       <g id="SvgjsG2473" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2475" font-family="Helvetica, Arial, sans-serif" x="23.887500000000003" y="158.50942857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="23.887500000000003" cy="158.50942857142857" style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                       </g>
                                       <g id="SvgjsG2478" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2480" font-family="Helvetica, Arial, sans-serif" x="46.59374999999999" y="192.84485714285714" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="46.59374999999999" cy="192.84485714285714" style="font-family: Helvetica, Arial, sans-serif;">43</text>
                                       </g>
                                       <g id="SvgjsG2483" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2485" font-family="Helvetica, Arial, sans-serif" x="22.806250000000002" y="227.1802857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="22.806250000000002" cy="227.1802857142857" style="font-family: Helvetica, Arial, sans-serif;">21</text>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2487" class="apexcharts-datalabels" data:realIndex="1">
                                       <g id="SvgjsG2490" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2492" font-family="Helvetica, Arial, sans-serif" x="152.55625" y="21.16771428571429" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="152.55625" cy="21.16771428571429" style="font-family: Helvetica, Arial, sans-serif;">53</text>
                                       </g>
                                       <g id="SvgjsG2495" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2497" font-family="Helvetica, Arial, sans-serif" x="153.63750000000002" y="55.50314285714286" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="153.63750000000002" cy="55.50314285714286" style="font-family: Helvetica, Arial, sans-serif;">32</text>
                                       </g>
                                       <g id="SvgjsG2500" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2502" font-family="Helvetica, Arial, sans-serif" x="124.44375" y="89.83857142857143" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="124.44375" cy="89.83857142857143" style="font-family: Helvetica, Arial, sans-serif;">33</text>
                                       </g>
                                       <g id="SvgjsG2505" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2507" font-family="Helvetica, Arial, sans-serif" x="136.3375" y="124.17399999999999" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="136.3375" cy="124.17399999999999" style="font-family: Helvetica, Arial, sans-serif;">52</text>
                                       </g>
                                       <g id="SvgjsG2510" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2512" font-family="Helvetica, Arial, sans-serif" x="61.73125000000001" y="158.50942857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="61.73125000000001" cy="158.50942857142857" style="font-family: Helvetica, Arial, sans-serif;">13</text>
                                       </g>
                                       <g id="SvgjsG2515" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2517" font-family="Helvetica, Arial, sans-serif" x="139.58124999999998" y="192.84485714285714" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="139.58124999999998" cy="192.84485714285714" style="font-family: Helvetica, Arial, sans-serif;">43</text>
                                       </g>
                                       <g id="SvgjsG2520" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2522" font-family="Helvetica, Arial, sans-serif" x="80.11250000000001" y="227.1802857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="80.11250000000001" cy="227.1802857142857" style="font-family: Helvetica, Arial, sans-serif;">32</text>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2524" class="apexcharts-datalabels" data:realIndex="2">
                                       <g id="SvgjsG2527" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2529" font-family="Helvetica, Arial, sans-serif" x="222.8375" y="21.16771428571429" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="222.8375" cy="21.16771428571429" style="font-family: Helvetica, Arial, sans-serif;">12</text>
                                       </g>
                                       <g id="SvgjsG2532" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2534" font-family="Helvetica, Arial, sans-serif" x="206.61875" y="55.50314285714286" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="206.61875" cy="55.50314285714286" style="font-family: Helvetica, Arial, sans-serif;">17</text>
                                       </g>
                                       <g id="SvgjsG2537" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2539" font-family="Helvetica, Arial, sans-serif" x="172.01874999999998" y="89.83857142857143" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="172.01874999999998" cy="89.83857142857143" style="font-family: Helvetica, Arial, sans-serif;">11</text>
                                       </g>
                                       <g id="SvgjsG2542" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2544" font-family="Helvetica, Arial, sans-serif" x="202.29375000000002" y="124.17399999999999" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="202.29375000000002" cy="124.17399999999999" style="font-family: Helvetica, Arial, sans-serif;">9</text>
                                       </g>
                                       <g id="SvgjsG2547" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2549" font-family="Helvetica, Arial, sans-serif" x="92.00625000000001" y="158.50942857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="92.00625000000001" cy="158.50942857142857" style="font-family: Helvetica, Arial, sans-serif;">15</text>
                                       </g>
                                       <g id="SvgjsG2552" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2554" font-family="Helvetica, Arial, sans-serif" x="197.96874999999997" y="192.84485714285714" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="197.96874999999997" cy="192.84485714285714" style="font-family: Helvetica, Arial, sans-serif;">11</text>
                                       </g>
                                       <g id="SvgjsG2557" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2559" font-family="Helvetica, Arial, sans-serif" x="136.3375" y="227.1802857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="136.3375" cy="227.1802857142857" style="font-family: Helvetica, Arial, sans-serif;">20</text>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2561" class="apexcharts-datalabels" data:realIndex="3">
                                       <g id="SvgjsG2564" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2566" font-family="Helvetica, Arial, sans-serif" x="245.54375000000002" y="21.16771428571429" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="245.54375000000002" cy="21.16771428571429" style="font-family: Helvetica, Arial, sans-serif;">9</text>
                                       </g>
                                       <g id="SvgjsG2569" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2571" font-family="Helvetica, Arial, sans-serif" x="232.56875" y="55.50314285714286" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="232.56875" cy="55.50314285714286" style="font-family: Helvetica, Arial, sans-serif;">7</text>
                                       </g>
                                       <g id="SvgjsG2574" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2576" font-family="Helvetica, Arial, sans-serif" x="189.31875" y="89.83857142857143" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="189.31875" cy="89.83857142857143" style="font-family: Helvetica, Arial, sans-serif;">5</text>
                                       </g>
                                       <g id="SvgjsG2579" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2581" font-family="Helvetica, Arial, sans-serif" x="220.675" y="124.17399999999999" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="220.675" cy="124.17399999999999" style="font-family: Helvetica, Arial, sans-serif;">8</text>
                                       </g>
                                       <g id="SvgjsG2584" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2586" font-family="Helvetica, Arial, sans-serif" x="114.7125" y="158.50942857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="114.7125" cy="158.50942857142857" style="font-family: Helvetica, Arial, sans-serif;">6</text>
                                       </g>
                                       <g id="SvgjsG2589" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2591" font-family="Helvetica, Arial, sans-serif" x="219.59375" y="192.84485714285714" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="219.59375" cy="192.84485714285714" style="font-family: Helvetica, Arial, sans-serif;">9</text>
                                       </g>
                                       <g id="SvgjsG2594" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2596" font-family="Helvetica, Arial, sans-serif" x="162.28750000000002" y="227.1802857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="162.28750000000002" cy="227.1802857142857" style="font-family: Helvetica, Arial, sans-serif;">4</text>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2598" class="apexcharts-datalabels" data:realIndex="4">
                                       <g id="SvgjsG2601" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2603" font-family="Helvetica, Arial, sans-serif" x="282.30625" y="21.16771428571429" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="282.30625" cy="21.16771428571429" style="font-family: Helvetica, Arial, sans-serif;">25</text>
                                       </g>
                                       <g id="SvgjsG2606" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2608" font-family="Helvetica, Arial, sans-serif" x="253.11249999999998" y="55.50314285714286" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="253.11249999999998" cy="55.50314285714286" style="font-family: Helvetica, Arial, sans-serif;">12</text>
                                       </g>
                                       <g id="SvgjsG2611" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2613" font-family="Helvetica, Arial, sans-serif" x="215.26875" y="89.83857142857143" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="215.26875" cy="89.83857142857143" style="font-family: Helvetica, Arial, sans-serif;">19</text>
                                       </g>
                                       <g id="SvgjsG2616" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2618" font-family="Helvetica, Arial, sans-serif" x="263.925" y="124.17399999999999" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="263.925" cy="124.17399999999999" style="font-family: Helvetica, Arial, sans-serif;">32</text>
                                       </g>
                                       <g id="SvgjsG2621" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2623" font-family="Helvetica, Arial, sans-serif" x="148.23125" y="158.50942857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="148.23125" cy="158.50942857142857" style="font-family: Helvetica, Arial, sans-serif;">25</text>
                                       </g>
                                       <g id="SvgjsG2626" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2628" font-family="Helvetica, Arial, sans-serif" x="255.27499999999998" y="192.84485714285714" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="255.27499999999998" cy="192.84485714285714" style="font-family: Helvetica, Arial, sans-serif;">24</text>
                                       </g>
                                       <g id="SvgjsG2631" class="apexcharts-data-labels" transform="rotate(0)">
                                          <text id="SvgjsText2633" font-family="Helvetica, Arial, sans-serif" x="177.425" y="227.1802857142857" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="177.425" cy="227.1802857142857" style="font-family: Helvetica, Arial, sans-serif;">10</text>
                                       </g>
                                    </g>
                                 </g>
                                 <line id="SvgjsLine2687" x1="0" y1="0" x2="346" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2688" x1="0" y1="0" x2="346" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG2689" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG2690" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG2691" class="apexcharts-point-annotations"></g>
                              </g>
                              <g id="SvgjsG2438" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 185, 44);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(220, 53, 69);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 5;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 162, 184);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Column Chart</h5>
                  <h6 class="card-subtitle text-muted">A column chart uses vertical bars to display data and is used to compare values across
                     categories.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-column" style="min-height: 365px;">
                        <div id="apexchartsci4ris0b" class="apexcharts-canvas apexchartsci4ris0b apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg2692" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="NetxProfit" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Net%20Profit" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Net Profit</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div>
                                    <div class="apexcharts-legend-series" rel="3" seriesname="FreexCashxFlow" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(252, 185, 44) !important; color: rgb(252, 185, 44); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Free%20Cash%20Flow" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Free Cash Flow</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2694" class="apexcharts-inner apexcharts-graphical" transform="translate(52.359375, 30)">
                                 <defs id="SvgjsDefs2693">
                                    <linearGradient id="SvgjsLinearGradient2699" x1="0" y1="0" x2="0" y2="1">
                                       <stop id="SvgjsStop2700" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                       <stop id="SvgjsStop2701" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                       <stop id="SvgjsStop2702" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskci4ris0b">
                                       <rect id="SvgjsRect2704" width="366.640625" height="266.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskci4ris0b"></clipPath>
                                    <clipPath id="nonForecastMaskci4ris0b"></clipPath>
                                    <clipPath id="gridRectMarkerMaskci4ris0b">
                                       <rect id="SvgjsRect2705" width="364.640625" height="268.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <rect id="SvgjsRect2703" width="7.346383101851853" height="264.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2699)" class="apexcharts-xcrosshairs" y2="264.348" filter="none" fill-opacity="0.9"></rect>
                                 <g id="SvgjsG2770" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2771" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText2773" font-family="Helvetica, Arial, sans-serif" x="20.03559027777778" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2774">Feb</tspan>
                                          <title>Feb</title>
                                       </text>
                                       <text id="SvgjsText2776" font-family="Helvetica, Arial, sans-serif" x="60.106770833333336" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2777">Mar</tspan>
                                          <title>Mar</title>
                                       </text>
                                       <text id="SvgjsText2779" font-family="Helvetica, Arial, sans-serif" x="100.17795138888889" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2780">Apr</tspan>
                                          <title>Apr</title>
                                       </text>
                                       <text id="SvgjsText2782" font-family="Helvetica, Arial, sans-serif" x="140.24913194444446" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2783">May</tspan>
                                          <title>May</title>
                                       </text>
                                       <text id="SvgjsText2785" font-family="Helvetica, Arial, sans-serif" x="180.3203125" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2786">Jun</tspan>
                                          <title>Jun</title>
                                       </text>
                                       <text id="SvgjsText2788" font-family="Helvetica, Arial, sans-serif" x="220.39149305555554" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2789">Jul</tspan>
                                          <title>Jul</title>
                                       </text>
                                       <text id="SvgjsText2791" font-family="Helvetica, Arial, sans-serif" x="260.4626736111111" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2792">Aug</tspan>
                                          <title>Aug</title>
                                       </text>
                                       <text id="SvgjsText2794" font-family="Helvetica, Arial, sans-serif" x="300.53385416666663" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2795">Sep</tspan>
                                          <title>Sep</title>
                                       </text>
                                       <text id="SvgjsText2797" font-family="Helvetica, Arial, sans-serif" x="340.6050347222222" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan2798">Oct</tspan>
                                          <title>Oct</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine2799" x1="0" y1="265.348" x2="360.640625" y2="265.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2814" class="apexcharts-grid">
                                    <g id="SvgjsG2815" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine2827" x1="0" y1="0" x2="360.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2828" x1="0" y1="66.087" x2="360.640625" y2="66.087" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2829" x1="0" y1="132.174" x2="360.640625" y2="132.174" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2830" x1="0" y1="198.26100000000002" x2="360.640625" y2="198.26100000000002" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine2831" x1="0" y1="264.348" x2="360.640625" y2="264.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2816" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine2817" x1="0" y1="265.348" x2="0" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2818" x1="40.07118055555556" y1="265.348" x2="40.07118055555556" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2819" x1="80.14236111111111" y1="265.348" x2="80.14236111111111" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2820" x1="120.21354166666667" y1="265.348" x2="120.21354166666667" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2821" x1="160.28472222222223" y1="265.348" x2="160.28472222222223" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2822" x1="200.35590277777777" y1="265.348" x2="200.35590277777777" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2823" x1="240.42708333333331" y1="265.348" x2="240.42708333333331" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2824" x1="280.49826388888886" y1="265.348" x2="280.49826388888886" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2825" x1="320.5694444444444" y1="265.348" x2="320.5694444444444" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2826" x1="360.64062499999994" y1="265.348" x2="360.64062499999994" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine2833" x1="0" y1="264.348" x2="360.640625" y2="264.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2832" x1="0" y1="1" x2="0" y2="264.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2706" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG2707" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0">
                                       <path id="SvgjsPath2711" d="M 9.016015625 264.348L 9.016015625 167.42040000000003Q 9.016015625 167.42040000000003 9.016015625 167.42040000000003L 14.36239872685185 167.42040000000003Q 14.36239872685185 167.42040000000003 14.36239872685185 167.42040000000003L 14.36239872685185 167.42040000000003L 14.36239872685185 264.348L 14.36239872685185 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 9.016015625 264.348L 9.016015625 167.42040000000003Q 9.016015625 167.42040000000003 9.016015625 167.42040000000003L 14.36239872685185 167.42040000000003Q 14.36239872685185 167.42040000000003 14.36239872685185 167.42040000000003L 14.36239872685185 167.42040000000003L 14.36239872685185 264.348L 14.36239872685185 264.348z" pathFrom="M 9.016015625 264.348L 9.016015625 264.348L 14.36239872685185 264.348L 14.36239872685185 264.348L 14.36239872685185 264.348L 14.36239872685185 264.348L 14.36239872685185 264.348L 9.016015625 264.348" cy="167.42040000000003" cx="48.08719618055556" j="0" val="44" barHeight="96.9276" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2713" d="M 49.08719618055556 264.348L 49.08719618055556 143.1885Q 49.08719618055556 143.1885 49.08719618055556 143.1885L 54.43357928240741 143.1885Q 54.43357928240741 143.1885 54.43357928240741 143.1885L 54.43357928240741 143.1885L 54.43357928240741 264.348L 54.43357928240741 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 49.08719618055556 264.348L 49.08719618055556 143.1885Q 49.08719618055556 143.1885 49.08719618055556 143.1885L 54.43357928240741 143.1885Q 54.43357928240741 143.1885 54.43357928240741 143.1885L 54.43357928240741 143.1885L 54.43357928240741 264.348L 54.43357928240741 264.348z" pathFrom="M 49.08719618055556 264.348L 49.08719618055556 264.348L 54.43357928240741 264.348L 54.43357928240741 264.348L 54.43357928240741 264.348L 54.43357928240741 264.348L 54.43357928240741 264.348L 49.08719618055556 264.348" cy="143.1885" cx="88.15837673611111" j="1" val="55" barHeight="121.15950000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2715" d="M 89.15837673611111 264.348L 89.15837673611111 138.7827Q 89.15837673611111 138.7827 89.15837673611111 138.7827L 94.50475983796296 138.7827Q 94.50475983796296 138.7827 94.50475983796296 138.7827L 94.50475983796296 138.7827L 94.50475983796296 264.348L 94.50475983796296 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 89.15837673611111 264.348L 89.15837673611111 138.7827Q 89.15837673611111 138.7827 89.15837673611111 138.7827L 94.50475983796296 138.7827Q 94.50475983796296 138.7827 94.50475983796296 138.7827L 94.50475983796296 138.7827L 94.50475983796296 264.348L 94.50475983796296 264.348z" pathFrom="M 89.15837673611111 264.348L 89.15837673611111 264.348L 94.50475983796296 264.348L 94.50475983796296 264.348L 94.50475983796296 264.348L 94.50475983796296 264.348L 94.50475983796296 264.348L 89.15837673611111 264.348" cy="138.7827" cx="128.22955729166665" j="2" val="57" barHeight="125.56530000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2717" d="M 129.22955729166665 264.348L 129.22955729166665 140.9856Q 129.22955729166665 140.9856 129.22955729166665 140.9856L 134.5759403935185 140.9856Q 134.5759403935185 140.9856 134.5759403935185 140.9856L 134.5759403935185 140.9856L 134.5759403935185 264.348L 134.5759403935185 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 129.22955729166665 264.348L 129.22955729166665 140.9856Q 129.22955729166665 140.9856 129.22955729166665 140.9856L 134.5759403935185 140.9856Q 134.5759403935185 140.9856 134.5759403935185 140.9856L 134.5759403935185 140.9856L 134.5759403935185 264.348L 134.5759403935185 264.348z" pathFrom="M 129.22955729166665 264.348L 129.22955729166665 264.348L 134.5759403935185 264.348L 134.5759403935185 264.348L 134.5759403935185 264.348L 134.5759403935185 264.348L 134.5759403935185 264.348L 129.22955729166665 264.348" cy="140.9856" cx="168.3007378472222" j="3" val="56" barHeight="123.36240000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2719" d="M 169.3007378472222 264.348L 169.3007378472222 129.9711Q 169.3007378472222 129.9711 169.3007378472222 129.9711L 174.64712094907404 129.9711Q 174.64712094907404 129.9711 174.64712094907404 129.9711L 174.64712094907404 129.9711L 174.64712094907404 264.348L 174.64712094907404 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 169.3007378472222 264.348L 169.3007378472222 129.9711Q 169.3007378472222 129.9711 169.3007378472222 129.9711L 174.64712094907404 129.9711Q 174.64712094907404 129.9711 174.64712094907404 129.9711L 174.64712094907404 129.9711L 174.64712094907404 264.348L 174.64712094907404 264.348z" pathFrom="M 169.3007378472222 264.348L 169.3007378472222 264.348L 174.64712094907404 264.348L 174.64712094907404 264.348L 174.64712094907404 264.348L 174.64712094907404 264.348L 174.64712094907404 264.348L 169.3007378472222 264.348" cy="129.9711" cx="208.37191840277774" j="4" val="61" barHeight="134.3769" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2721" d="M 209.37191840277774 264.348L 209.37191840277774 136.5798Q 209.37191840277774 136.5798 209.37191840277774 136.5798L 214.71830150462958 136.5798Q 214.71830150462958 136.5798 214.71830150462958 136.5798L 214.71830150462958 136.5798L 214.71830150462958 264.348L 214.71830150462958 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 209.37191840277774 264.348L 209.37191840277774 136.5798Q 209.37191840277774 136.5798 209.37191840277774 136.5798L 214.71830150462958 136.5798Q 214.71830150462958 136.5798 214.71830150462958 136.5798L 214.71830150462958 136.5798L 214.71830150462958 264.348L 214.71830150462958 264.348z" pathFrom="M 209.37191840277774 264.348L 209.37191840277774 264.348L 214.71830150462958 264.348L 214.71830150462958 264.348L 214.71830150462958 264.348L 214.71830150462958 264.348L 214.71830150462958 264.348L 209.37191840277774 264.348" cy="136.5798" cx="248.44309895833328" j="5" val="58" barHeight="127.76820000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2723" d="M 249.44309895833328 264.348L 249.44309895833328 125.56530000000001Q 249.44309895833328 125.56530000000001 249.44309895833328 125.56530000000001L 254.78948206018515 125.56530000000001Q 254.78948206018515 125.56530000000001 254.78948206018515 125.56530000000001L 254.78948206018515 125.56530000000001L 254.78948206018515 264.348L 254.78948206018515 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 249.44309895833328 264.348L 249.44309895833328 125.56530000000001Q 249.44309895833328 125.56530000000001 249.44309895833328 125.56530000000001L 254.78948206018515 125.56530000000001Q 254.78948206018515 125.56530000000001 254.78948206018515 125.56530000000001L 254.78948206018515 125.56530000000001L 254.78948206018515 264.348L 254.78948206018515 264.348z" pathFrom="M 249.44309895833328 264.348L 249.44309895833328 264.348L 254.78948206018515 264.348L 254.78948206018515 264.348L 254.78948206018515 264.348L 254.78948206018515 264.348L 254.78948206018515 264.348L 249.44309895833328 264.348" cy="125.56530000000001" cx="288.5142795138888" j="6" val="63" barHeight="138.7827" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2725" d="M 289.5142795138888 264.348L 289.5142795138888 132.174Q 289.5142795138888 132.174 289.5142795138888 132.174L 294.8606626157407 132.174Q 294.8606626157407 132.174 294.8606626157407 132.174L 294.8606626157407 132.174L 294.8606626157407 264.348L 294.8606626157407 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 289.5142795138888 264.348L 289.5142795138888 132.174Q 289.5142795138888 132.174 289.5142795138888 132.174L 294.8606626157407 132.174Q 294.8606626157407 132.174 294.8606626157407 132.174L 294.8606626157407 132.174L 294.8606626157407 264.348L 294.8606626157407 264.348z" pathFrom="M 289.5142795138888 264.348L 289.5142795138888 264.348L 294.8606626157407 264.348L 294.8606626157407 264.348L 294.8606626157407 264.348L 294.8606626157407 264.348L 294.8606626157407 264.348L 289.5142795138888 264.348" cy="132.174" cx="328.58546006944437" j="7" val="60" barHeight="132.174" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2727" d="M 329.58546006944437 264.348L 329.58546006944437 118.95660000000001Q 329.58546006944437 118.95660000000001 329.58546006944437 118.95660000000001L 334.93184317129624 118.95660000000001Q 334.93184317129624 118.95660000000001 334.93184317129624 118.95660000000001L 334.93184317129624 118.95660000000001L 334.93184317129624 264.348L 334.93184317129624 264.348z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 329.58546006944437 264.348L 329.58546006944437 118.95660000000001Q 329.58546006944437 118.95660000000001 329.58546006944437 118.95660000000001L 334.93184317129624 118.95660000000001Q 334.93184317129624 118.95660000000001 334.93184317129624 118.95660000000001L 334.93184317129624 118.95660000000001L 334.93184317129624 264.348L 334.93184317129624 264.348z" pathFrom="M 329.58546006944437 264.348L 329.58546006944437 264.348L 334.93184317129624 264.348L 334.93184317129624 264.348L 334.93184317129624 264.348L 334.93184317129624 264.348L 334.93184317129624 264.348L 329.58546006944437 264.348" cy="118.95660000000001" cx="368.6566406249999" j="8" val="66" barHeight="145.3914" barWidth="7.346383101851853"></path>
                                       <g id="SvgjsG2709" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                          <g id="SvgjsG2710" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2712" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2714" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2716" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2718" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2720" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2722" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2724" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2726" className="apexcharts-bar-goals-groups"></g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2728" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1">
                                       <path id="SvgjsPath2732" d="M 16.36239872685185 264.348L 16.36239872685185 96.92760000000001Q 16.36239872685185 96.92760000000001 16.36239872685185 96.92760000000001L 21.708781828703703 96.92760000000001Q 21.708781828703703 96.92760000000001 21.708781828703703 96.92760000000001L 21.708781828703703 96.92760000000001L 21.708781828703703 264.348L 21.708781828703703 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 16.36239872685185 264.348L 16.36239872685185 96.92760000000001Q 16.36239872685185 96.92760000000001 16.36239872685185 96.92760000000001L 21.708781828703703 96.92760000000001Q 21.708781828703703 96.92760000000001 21.708781828703703 96.92760000000001L 21.708781828703703 96.92760000000001L 21.708781828703703 264.348L 21.708781828703703 264.348z" pathFrom="M 16.36239872685185 264.348L 16.36239872685185 264.348L 21.708781828703703 264.348L 21.708781828703703 264.348L 21.708781828703703 264.348L 21.708781828703703 264.348L 21.708781828703703 264.348L 16.36239872685185 264.348" cy="96.92760000000001" cx="55.43357928240741" j="0" val="76" barHeight="167.4204" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2734" d="M 56.43357928240741 264.348L 56.43357928240741 77.10150000000002Q 56.43357928240741 77.10150000000002 56.43357928240741 77.10150000000002L 61.779962384259264 77.10150000000002Q 61.779962384259264 77.10150000000002 61.779962384259264 77.10150000000002L 61.779962384259264 77.10150000000002L 61.779962384259264 264.348L 61.779962384259264 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 56.43357928240741 264.348L 56.43357928240741 77.10150000000002Q 56.43357928240741 77.10150000000002 56.43357928240741 77.10150000000002L 61.779962384259264 77.10150000000002Q 61.779962384259264 77.10150000000002 61.779962384259264 77.10150000000002L 61.779962384259264 77.10150000000002L 61.779962384259264 264.348L 61.779962384259264 264.348z" pathFrom="M 56.43357928240741 264.348L 56.43357928240741 264.348L 61.779962384259264 264.348L 61.779962384259264 264.348L 61.779962384259264 264.348L 61.779962384259264 264.348L 61.779962384259264 264.348L 56.43357928240741 264.348" cy="77.10150000000002" cx="95.50475983796296" j="1" val="85" barHeight="187.2465" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2736" d="M 96.50475983796296 264.348L 96.50475983796296 41.85509999999999Q 96.50475983796296 41.85509999999999 96.50475983796296 41.85509999999999L 101.85114293981482 41.85509999999999Q 101.85114293981482 41.85509999999999 101.85114293981482 41.85509999999999L 101.85114293981482 41.85509999999999L 101.85114293981482 264.348L 101.85114293981482 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 96.50475983796296 264.348L 96.50475983796296 41.85509999999999Q 96.50475983796296 41.85509999999999 96.50475983796296 41.85509999999999L 101.85114293981482 41.85509999999999Q 101.85114293981482 41.85509999999999 101.85114293981482 41.85509999999999L 101.85114293981482 41.85509999999999L 101.85114293981482 264.348L 101.85114293981482 264.348z" pathFrom="M 96.50475983796296 264.348L 96.50475983796296 264.348L 101.85114293981482 264.348L 101.85114293981482 264.348L 101.85114293981482 264.348L 101.85114293981482 264.348L 101.85114293981482 264.348L 96.50475983796296 264.348" cy="41.85509999999999" cx="135.5759403935185" j="2" val="101" barHeight="222.49290000000002" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2738" d="M 136.5759403935185 264.348L 136.5759403935185 48.46379999999999Q 136.5759403935185 48.46379999999999 136.5759403935185 48.46379999999999L 141.92232349537034 48.46379999999999Q 141.92232349537034 48.46379999999999 141.92232349537034 48.46379999999999L 141.92232349537034 48.46379999999999L 141.92232349537034 264.348L 141.92232349537034 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 136.5759403935185 264.348L 136.5759403935185 48.46379999999999Q 136.5759403935185 48.46379999999999 136.5759403935185 48.46379999999999L 141.92232349537034 48.46379999999999Q 141.92232349537034 48.46379999999999 141.92232349537034 48.46379999999999L 141.92232349537034 48.46379999999999L 141.92232349537034 264.348L 141.92232349537034 264.348z" pathFrom="M 136.5759403935185 264.348L 136.5759403935185 264.348L 141.92232349537034 264.348L 141.92232349537034 264.348L 141.92232349537034 264.348L 141.92232349537034 264.348L 141.92232349537034 264.348L 136.5759403935185 264.348" cy="48.46379999999999" cx="175.64712094907404" j="3" val="98" barHeight="215.88420000000002" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2740" d="M 176.64712094907404 264.348L 176.64712094907404 72.69570000000002Q 176.64712094907404 72.69570000000002 176.64712094907404 72.69570000000002L 181.99350405092588 72.69570000000002Q 181.99350405092588 72.69570000000002 181.99350405092588 72.69570000000002L 181.99350405092588 72.69570000000002L 181.99350405092588 264.348L 181.99350405092588 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 176.64712094907404 264.348L 176.64712094907404 72.69570000000002Q 176.64712094907404 72.69570000000002 176.64712094907404 72.69570000000002L 181.99350405092588 72.69570000000002Q 181.99350405092588 72.69570000000002 181.99350405092588 72.69570000000002L 181.99350405092588 72.69570000000002L 181.99350405092588 264.348L 181.99350405092588 264.348z" pathFrom="M 176.64712094907404 264.348L 176.64712094907404 264.348L 181.99350405092588 264.348L 181.99350405092588 264.348L 181.99350405092588 264.348L 181.99350405092588 264.348L 181.99350405092588 264.348L 176.64712094907404 264.348" cy="72.69570000000002" cx="215.71830150462958" j="4" val="87" barHeight="191.6523" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2742" d="M 216.71830150462958 264.348L 216.71830150462958 33.043499999999995Q 216.71830150462958 33.043499999999995 216.71830150462958 33.043499999999995L 222.06468460648142 33.043499999999995Q 222.06468460648142 33.043499999999995 222.06468460648142 33.043499999999995L 222.06468460648142 33.043499999999995L 222.06468460648142 264.348L 222.06468460648142 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 216.71830150462958 264.348L 216.71830150462958 33.043499999999995Q 216.71830150462958 33.043499999999995 216.71830150462958 33.043499999999995L 222.06468460648142 33.043499999999995Q 222.06468460648142 33.043499999999995 222.06468460648142 33.043499999999995L 222.06468460648142 33.043499999999995L 222.06468460648142 264.348L 222.06468460648142 264.348z" pathFrom="M 216.71830150462958 264.348L 216.71830150462958 264.348L 222.06468460648142 264.348L 222.06468460648142 264.348L 222.06468460648142 264.348L 222.06468460648142 264.348L 222.06468460648142 264.348L 216.71830150462958 264.348" cy="33.043499999999995" cx="255.78948206018515" j="5" val="105" barHeight="231.30450000000002" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2744" d="M 256.78948206018515 264.348L 256.78948206018515 63.88409999999999Q 256.78948206018515 63.88409999999999 256.78948206018515 63.88409999999999L 262.135865162037 63.88409999999999Q 262.135865162037 63.88409999999999 262.135865162037 63.88409999999999L 262.135865162037 63.88409999999999L 262.135865162037 264.348L 262.135865162037 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 256.78948206018515 264.348L 256.78948206018515 63.88409999999999Q 256.78948206018515 63.88409999999999 256.78948206018515 63.88409999999999L 262.135865162037 63.88409999999999Q 262.135865162037 63.88409999999999 262.135865162037 63.88409999999999L 262.135865162037 63.88409999999999L 262.135865162037 264.348L 262.135865162037 264.348z" pathFrom="M 256.78948206018515 264.348L 256.78948206018515 264.348L 262.135865162037 264.348L 262.135865162037 264.348L 262.135865162037 264.348L 262.135865162037 264.348L 262.135865162037 264.348L 256.78948206018515 264.348" cy="63.88409999999999" cx="295.8606626157407" j="6" val="91" barHeight="200.46390000000002" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2746" d="M 296.8606626157407 264.348L 296.8606626157407 13.217399999999998Q 296.8606626157407 13.217399999999998 296.8606626157407 13.217399999999998L 302.20704571759256 13.217399999999998Q 302.20704571759256 13.217399999999998 302.20704571759256 13.217399999999998L 302.20704571759256 13.217399999999998L 302.20704571759256 264.348L 302.20704571759256 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 296.8606626157407 264.348L 296.8606626157407 13.217399999999998Q 296.8606626157407 13.217399999999998 296.8606626157407 13.217399999999998L 302.20704571759256 13.217399999999998Q 302.20704571759256 13.217399999999998 302.20704571759256 13.217399999999998L 302.20704571759256 13.217399999999998L 302.20704571759256 264.348L 302.20704571759256 264.348z" pathFrom="M 296.8606626157407 264.348L 296.8606626157407 264.348L 302.20704571759256 264.348L 302.20704571759256 264.348L 302.20704571759256 264.348L 302.20704571759256 264.348L 302.20704571759256 264.348L 296.8606626157407 264.348" cy="13.217399999999998" cx="335.93184317129624" j="7" val="114" barHeight="251.13060000000002" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2748" d="M 336.93184317129624 264.348L 336.93184317129624 57.27539999999999Q 336.93184317129624 57.27539999999999 336.93184317129624 57.27539999999999L 342.2782262731481 57.27539999999999Q 342.2782262731481 57.27539999999999 342.2782262731481 57.27539999999999L 342.2782262731481 57.27539999999999L 342.2782262731481 264.348L 342.2782262731481 264.348z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 336.93184317129624 264.348L 336.93184317129624 57.27539999999999Q 336.93184317129624 57.27539999999999 336.93184317129624 57.27539999999999L 342.2782262731481 57.27539999999999Q 342.2782262731481 57.27539999999999 342.2782262731481 57.27539999999999L 342.2782262731481 57.27539999999999L 342.2782262731481 264.348L 342.2782262731481 264.348z" pathFrom="M 336.93184317129624 264.348L 336.93184317129624 264.348L 342.2782262731481 264.348L 342.2782262731481 264.348L 342.2782262731481 264.348L 342.2782262731481 264.348L 342.2782262731481 264.348L 336.93184317129624 264.348" cy="57.27539999999999" cx="376.0030237268518" j="8" val="94" barHeight="207.07260000000002" barWidth="7.346383101851853"></path>
                                       <g id="SvgjsG2730" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                          <g id="SvgjsG2731" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2733" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2735" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2737" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2739" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2741" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2743" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2745" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2747" className="apexcharts-bar-goals-groups"></g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2749" class="apexcharts-series" rel="3" seriesName="FreexCashxFlow" data:realIndex="2">
                                       <path id="SvgjsPath2753" d="M 23.708781828703707 264.348L 23.708781828703707 187.24650000000003Q 23.708781828703707 187.24650000000003 23.708781828703707 187.24650000000003L 29.05516493055556 187.24650000000003Q 29.05516493055556 187.24650000000003 29.05516493055556 187.24650000000003L 29.05516493055556 187.24650000000003L 29.05516493055556 264.348L 29.05516493055556 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 23.708781828703707 264.348L 23.708781828703707 187.24650000000003Q 23.708781828703707 187.24650000000003 23.708781828703707 187.24650000000003L 29.05516493055556 187.24650000000003Q 29.05516493055556 187.24650000000003 29.05516493055556 187.24650000000003L 29.05516493055556 187.24650000000003L 29.05516493055556 264.348L 29.05516493055556 264.348z" pathFrom="M 23.708781828703707 264.348L 23.708781828703707 264.348L 29.05516493055556 264.348L 29.05516493055556 264.348L 29.05516493055556 264.348L 29.05516493055556 264.348L 29.05516493055556 264.348L 23.708781828703707 264.348" cy="187.24650000000003" cx="62.779962384259264" j="0" val="35" barHeight="77.1015" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2755" d="M 63.779962384259264 264.348L 63.779962384259264 174.02910000000003Q 63.779962384259264 174.02910000000003 63.779962384259264 174.02910000000003L 69.12634548611112 174.02910000000003Q 69.12634548611112 174.02910000000003 69.12634548611112 174.02910000000003L 69.12634548611112 174.02910000000003L 69.12634548611112 264.348L 69.12634548611112 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 63.779962384259264 264.348L 63.779962384259264 174.02910000000003Q 63.779962384259264 174.02910000000003 63.779962384259264 174.02910000000003L 69.12634548611112 174.02910000000003Q 69.12634548611112 174.02910000000003 69.12634548611112 174.02910000000003L 69.12634548611112 174.02910000000003L 69.12634548611112 264.348L 69.12634548611112 264.348z" pathFrom="M 63.779962384259264 264.348L 63.779962384259264 264.348L 69.12634548611112 264.348L 69.12634548611112 264.348L 69.12634548611112 264.348L 69.12634548611112 264.348L 69.12634548611112 264.348L 63.779962384259264 264.348" cy="174.02910000000003" cx="102.85114293981482" j="1" val="41" barHeight="90.3189" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2757" d="M 103.85114293981482 264.348L 103.85114293981482 185.04360000000003Q 103.85114293981482 185.04360000000003 103.85114293981482 185.04360000000003L 109.19752604166668 185.04360000000003Q 109.19752604166668 185.04360000000003 109.19752604166668 185.04360000000003L 109.19752604166668 185.04360000000003L 109.19752604166668 264.348L 109.19752604166668 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 103.85114293981482 264.348L 103.85114293981482 185.04360000000003Q 103.85114293981482 185.04360000000003 103.85114293981482 185.04360000000003L 109.19752604166668 185.04360000000003Q 109.19752604166668 185.04360000000003 109.19752604166668 185.04360000000003L 109.19752604166668 185.04360000000003L 109.19752604166668 264.348L 109.19752604166668 264.348z" pathFrom="M 103.85114293981482 264.348L 103.85114293981482 264.348L 109.19752604166668 264.348L 109.19752604166668 264.348L 109.19752604166668 264.348L 109.19752604166668 264.348L 109.19752604166668 264.348L 103.85114293981482 264.348" cy="185.04360000000003" cx="142.92232349537036" j="2" val="36" barHeight="79.3044" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2759" d="M 143.92232349537036 264.348L 143.92232349537036 207.07260000000002Q 143.92232349537036 207.07260000000002 143.92232349537036 207.07260000000002L 149.2687065972222 207.07260000000002Q 149.2687065972222 207.07260000000002 149.2687065972222 207.07260000000002L 149.2687065972222 207.07260000000002L 149.2687065972222 264.348L 149.2687065972222 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 143.92232349537036 264.348L 143.92232349537036 207.07260000000002Q 143.92232349537036 207.07260000000002 143.92232349537036 207.07260000000002L 149.2687065972222 207.07260000000002Q 149.2687065972222 207.07260000000002 149.2687065972222 207.07260000000002L 149.2687065972222 207.07260000000002L 149.2687065972222 264.348L 149.2687065972222 264.348z" pathFrom="M 143.92232349537036 264.348L 143.92232349537036 264.348L 149.2687065972222 264.348L 149.2687065972222 264.348L 149.2687065972222 264.348L 149.2687065972222 264.348L 149.2687065972222 264.348L 143.92232349537036 264.348" cy="207.07260000000002" cx="182.9935040509259" j="3" val="26" barHeight="57.275400000000005" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2761" d="M 183.9935040509259 264.348L 183.9935040509259 165.21750000000003Q 183.9935040509259 165.21750000000003 183.9935040509259 165.21750000000003L 189.33988715277775 165.21750000000003Q 189.33988715277775 165.21750000000003 189.33988715277775 165.21750000000003L 189.33988715277775 165.21750000000003L 189.33988715277775 264.348L 189.33988715277775 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 183.9935040509259 264.348L 183.9935040509259 165.21750000000003Q 183.9935040509259 165.21750000000003 183.9935040509259 165.21750000000003L 189.33988715277775 165.21750000000003Q 189.33988715277775 165.21750000000003 189.33988715277775 165.21750000000003L 189.33988715277775 165.21750000000003L 189.33988715277775 264.348L 189.33988715277775 264.348z" pathFrom="M 183.9935040509259 264.348L 183.9935040509259 264.348L 189.33988715277775 264.348L 189.33988715277775 264.348L 189.33988715277775 264.348L 189.33988715277775 264.348L 189.33988715277775 264.348L 183.9935040509259 264.348" cy="165.21750000000003" cx="223.06468460648145" j="4" val="45" barHeight="99.1305" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2763" d="M 224.06468460648145 264.348L 224.06468460648145 158.6088Q 224.06468460648145 158.6088 224.06468460648145 158.6088L 229.4110677083333 158.6088Q 229.4110677083333 158.6088 229.4110677083333 158.6088L 229.4110677083333 158.6088L 229.4110677083333 264.348L 229.4110677083333 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 224.06468460648145 264.348L 224.06468460648145 158.6088Q 224.06468460648145 158.6088 224.06468460648145 158.6088L 229.4110677083333 158.6088Q 229.4110677083333 158.6088 229.4110677083333 158.6088L 229.4110677083333 158.6088L 229.4110677083333 264.348L 229.4110677083333 264.348z" pathFrom="M 224.06468460648145 264.348L 224.06468460648145 264.348L 229.4110677083333 264.348L 229.4110677083333 264.348L 229.4110677083333 264.348L 229.4110677083333 264.348L 229.4110677083333 264.348L 224.06468460648145 264.348" cy="158.6088" cx="263.13586516203696" j="5" val="48" barHeight="105.73920000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2765" d="M 264.13586516203696 264.348L 264.13586516203696 149.7972Q 264.13586516203696 149.7972 264.13586516203696 149.7972L 269.48224826388883 149.7972Q 269.48224826388883 149.7972 269.48224826388883 149.7972L 269.48224826388883 149.7972L 269.48224826388883 264.348L 269.48224826388883 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 264.13586516203696 264.348L 264.13586516203696 149.7972Q 264.13586516203696 149.7972 264.13586516203696 149.7972L 269.48224826388883 149.7972Q 269.48224826388883 149.7972 269.48224826388883 149.7972L 269.48224826388883 149.7972L 269.48224826388883 264.348L 269.48224826388883 264.348z" pathFrom="M 264.13586516203696 264.348L 264.13586516203696 264.348L 269.48224826388883 264.348L 269.48224826388883 264.348L 269.48224826388883 264.348L 269.48224826388883 264.348L 269.48224826388883 264.348L 264.13586516203696 264.348" cy="149.7972" cx="303.2070457175925" j="6" val="52" barHeight="114.55080000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2767" d="M 304.2070457175925 264.348L 304.2070457175925 147.5943Q 304.2070457175925 147.5943 304.2070457175925 147.5943L 309.5534288194444 147.5943Q 309.5534288194444 147.5943 309.5534288194444 147.5943L 309.5534288194444 147.5943L 309.5534288194444 264.348L 309.5534288194444 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 304.2070457175925 264.348L 304.2070457175925 147.5943Q 304.2070457175925 147.5943 304.2070457175925 147.5943L 309.5534288194444 147.5943Q 309.5534288194444 147.5943 309.5534288194444 147.5943L 309.5534288194444 147.5943L 309.5534288194444 264.348L 309.5534288194444 264.348z" pathFrom="M 304.2070457175925 264.348L 304.2070457175925 264.348L 309.5534288194444 264.348L 309.5534288194444 264.348L 309.5534288194444 264.348L 309.5534288194444 264.348L 309.5534288194444 264.348L 304.2070457175925 264.348" cy="147.5943" cx="343.27822627314805" j="7" val="53" barHeight="116.75370000000001" barWidth="7.346383101851853"></path>
                                       <path id="SvgjsPath2769" d="M 344.27822627314805 264.348L 344.27822627314805 174.02910000000003Q 344.27822627314805 174.02910000000003 344.27822627314805 174.02910000000003L 349.6246093749999 174.02910000000003Q 349.6246093749999 174.02910000000003 349.6246093749999 174.02910000000003L 349.6246093749999 174.02910000000003L 349.6246093749999 264.348L 349.6246093749999 264.348z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskci4ris0b)" pathTo="M 344.27822627314805 264.348L 344.27822627314805 174.02910000000003Q 344.27822627314805 174.02910000000003 344.27822627314805 174.02910000000003L 349.6246093749999 174.02910000000003Q 349.6246093749999 174.02910000000003 349.6246093749999 174.02910000000003L 349.6246093749999 174.02910000000003L 349.6246093749999 264.348L 349.6246093749999 264.348z" pathFrom="M 344.27822627314805 264.348L 344.27822627314805 264.348L 349.6246093749999 264.348L 349.6246093749999 264.348L 349.6246093749999 264.348L 349.6246093749999 264.348L 349.6246093749999 264.348L 344.27822627314805 264.348" cy="174.02910000000003" cx="383.3494068287036" j="8" val="41" barHeight="90.3189" barWidth="7.346383101851853"></path>
                                       <g id="SvgjsG2751" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                          <g id="SvgjsG2752" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2754" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2756" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2758" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2760" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2762" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2764" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2766" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG2768" className="apexcharts-bar-goals-groups"></g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG2708" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG2729" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    <g id="SvgjsG2750" class="apexcharts-datalabels" data:realIndex="2"></g>
                                 </g>
                                 <line id="SvgjsLine2834" x1="0" y1="0" x2="360.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2835" x1="0" y1="0" x2="360.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG2836" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG2837" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG2838" class="apexcharts-point-annotations"></g>
                              </g>
                              <g id="SvgjsG2800" class="apexcharts-yaxis" rel="0" transform="translate(22.359375, 0)">
                                 <g id="SvgjsG2801" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText2802" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2803">120</tspan>
                                       <title>120</title>
                                    </text>
                                    <text id="SvgjsText2804" font-family="Helvetica, Arial, sans-serif" x="20" y="97.48700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2805">90</tspan>
                                       <title>90</title>
                                    </text>
                                    <text id="SvgjsText2806" font-family="Helvetica, Arial, sans-serif" x="20" y="163.574" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2807">60</tspan>
                                       <title>60</title>
                                    </text>
                                    <text id="SvgjsText2808" font-family="Helvetica, Arial, sans-serif" x="20" y="229.66100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2809">30</tspan>
                                       <title>30</title>
                                    </text>
                                    <text id="SvgjsText2810" font-family="Helvetica, Arial, sans-serif" x="20" y="295.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan2811">0</tspan>
                                       <title>0</title>
                                    </text>
                                 </g>
                                 <g id="SvgjsG2812" class="apexcharts-yaxis-title">
                                    <text id="SvgjsText2813" font-family="Helvetica, Arial, sans-serif" x="27.6015625" y="162.174" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -13.3515625 157.6796875)">$ (thousands)</text>
                                 </g>
                              </g>
                              <g id="SvgjsG2695" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 185, 44);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Pie Chart</h5>
                  <h6 class="card-subtitle text-muted">Pie charts are an instrumental visualization tool useful in expressing data and
                     information in terms of percentages, ratio.
                  </h6>
               </div>
               <div class="card-body text-center">
                  <div class="chart w-100">
                     <div id="apexcharts-pie" style="max-width: 440px; margin: auto; min-height: 290.7px;">
                        <div id="apexchartsvrgh9lc4" class="apexcharts-canvas apexchartsvrgh9lc4 apexcharts-theme-light" style="width: 423px; height: 290.7px;">
                           <svg id="SvgjsSvg2839" width="423" height="290.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="290.7">
                                 <div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 24px; right: 5px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="seriesx1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="series-1" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-1</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="seriesx2" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="series-2" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-2</span></div>
                                    <div class="apexcharts-legend-series" rel="3" seriesname="seriesx3" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(252, 185, 44) !important; color: rgb(252, 185, 44); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="series-3" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-3</span></div>
                                    <div class="apexcharts-legend-series" rel="4" seriesname="seriesx4" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(220, 53, 69) !important; color: rgb(220, 53, 69); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="series-4" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-4</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2841" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)">
                                 <defs id="SvgjsDefs2840">
                                    <clipPath id="gridRectMaskvrgh9lc4">
                                       <rect id="SvgjsRect2843" width="294" height="352" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskvrgh9lc4"></clipPath>
                                    <clipPath id="nonForecastMaskvrgh9lc4"></clipPath>
                                    <clipPath id="gridRectMarkerMaskvrgh9lc4">
                                       <rect id="SvgjsRect2844" width="292" height="354" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <g id="SvgjsG2845" class="apexcharts-pie">
                                    <g id="SvgjsG2846" transform="translate(0, 0) scale(1)">
                                       <circle id="SvgjsCircle2847" r="87.41707317073171" cx="144" cy="144" fill="transparent"></circle>
                                       <g id="SvgjsG2848" class="apexcharts-slices">
                                          <g id="SvgjsG2849" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                             <path id="SvgjsPath2850" d="M 144 9.512195121951208 A 134.4878048780488 134.4878048780488 0 0 1 270.9751298009025 188.32026706778845 L 226.5338343705866 172.80817359406248 A 87.41707317073171 87.41707317073171 0 0 0 144 56.58292682926829 L 144 9.512195121951208 z" fill="rgba(59,125,221,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="109.24137931034483" data:startAngle="0" data:strokeWidth="2" data:value="44" data:pathOrig="M 144 9.512195121951208 A 134.4878048780488 134.4878048780488 0 0 1 270.9751298009025 188.32026706778845 L 226.5338343705866 172.80817359406248 A 87.41707317073171 87.41707317073171 0 0 0 144 56.58292682926829 L 144 9.512195121951208 z" stroke="#ffffff"></path>
                                          </g>
                                          <g id="SvgjsG2851" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1">
                                             <path id="SvgjsPath2852" d="M 270.9751298009025 188.32026706778845 A 134.4878048780488 134.4878048780488 0 0 1 21.337604499433084 199.14441395988015 L 64.2694429246315 179.84386907392212 A 87.41707317073171 87.41707317073171 0 0 0 226.5338343705866 172.80817359406248 L 270.9751298009025 188.32026706778845 z" fill="rgba(28,187,140,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="136.55172413793105" data:startAngle="109.24137931034483" data:strokeWidth="2" data:value="55" data:pathOrig="M 270.9751298009025 188.32026706778845 A 134.4878048780488 134.4878048780488 0 0 1 21.337604499433084 199.14441395988015 L 64.2694429246315 179.84386907392212 A 87.41707317073171 87.41707317073171 0 0 0 226.5338343705866 172.80817359406248 L 270.9751298009025 188.32026706778845 z" stroke="#ffffff"></path>
                                          </g>
                                          <g id="SvgjsG2853" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx3" rel="3" data:realIndex="2">
                                             <path id="SvgjsPath2854" d="M 21.337604499433084 199.14441395988015 A 134.4878048780488 134.4878048780488 0 0 1 10.84364695939064 125.12262449807366 L 57.44837052360393 131.72970592374787 A 87.41707317073171 87.41707317073171 0 0 0 64.2694429246315 179.84386907392212 L 21.337604499433084 199.14441395988015 z" fill="rgba(252,185,44,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="32.27586206896552" data:startAngle="245.79310344827587" data:strokeWidth="2" data:value="13" data:pathOrig="M 21.337604499433084 199.14441395988015 A 134.4878048780488 134.4878048780488 0 0 1 10.84364695939064 125.12262449807366 L 57.44837052360393 131.72970592374787 A 87.41707317073171 87.41707317073171 0 0 0 64.2694429246315 179.84386907392212 L 21.337604499433084 199.14441395988015 z" stroke="#ffffff"></path>
                                          </g>
                                          <g id="SvgjsG2855" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx4" rel="4" data:realIndex="3">
                                             <path id="SvgjsPath2856" d="M 10.84364695939064 125.12262449807366 A 134.4878048780488 134.4878048780488 0 0 1 143.97652745013013 9.512197170317592 L 143.98474284258458 56.582928160706444 A 87.41707317073171 87.41707317073171 0 0 0 57.44837052360393 131.72970592374787 L 10.84364695939064 125.12262449807366 z" fill="rgba(220,53,69,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="81.9310344827586" data:startAngle="278.0689655172414" data:strokeWidth="2" data:value="33" data:pathOrig="M 10.84364695939064 125.12262449807366 A 134.4878048780488 134.4878048780488 0 0 1 143.97652745013013 9.512197170317592 L 143.98474284258458 56.582928160706444 A 87.41707317073171 87.41707317073171 0 0 0 57.44837052360393 131.72970592374787 L 10.84364695939064 125.12262449807366 z" stroke="#ffffff"></path>
                                          </g>
                                       </g>
                                    </g>
                                 </g>
                                 <line id="SvgjsLine2857" x1="0" y1="0" x2="288" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine2858" x1="0" y1="0" x2="288" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                              </g>
                              <g id="SvgjsG2842" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-dark">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 185, 44);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(220, 53, 69);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 301px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Heatmap Chart</h5>
                  <h6 class="card-subtitle text-muted">Heatmap is a visualization tool that employs color the way a bar chart employs height
                     and width in representing data.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-heatmap" style="min-height: 365px;">
                        <div id="apexchartsqwvogh7fi" class="apexcharts-canvas apexchartsqwvogh7fi apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg2859" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 175px;"></div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG2861" class="apexcharts-inner apexcharts-graphical" transform="translate(63.0625, 30)">
                                 <defs id="SvgjsDefs2860">
                                    <clipPath id="gridRectMaskqwvogh7fi">
                                       <rect id="SvgjsRect2867" width="345.9375" height="284.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskqwvogh7fi"></clipPath>
                                    <clipPath id="nonForecastMaskqwvogh7fi"></clipPath>
                                    <clipPath id="gridRectMarkerMaskqwvogh7fi">
                                       <rect id="SvgjsRect2868" width="343.9375" height="286.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine2866" x1="0" y1="0" x2="0" y2="282.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="282.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG3059" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG3060" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText3062" font-family="Helvetica, Arial, sans-serif" x="8.4984375" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3063">1</tspan>
                                          <title>1</title>
                                       </text>
                                       <text id="SvgjsText3065" font-family="Helvetica, Arial, sans-serif" x="25.495312499999997" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3066">2</tspan>
                                          <title>2</title>
                                       </text>
                                       <text id="SvgjsText3068" font-family="Helvetica, Arial, sans-serif" x="42.49218749999999" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3069">3</tspan>
                                          <title>3</title>
                                       </text>
                                       <text id="SvgjsText3071" font-family="Helvetica, Arial, sans-serif" x="59.489062499999996" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3072">4</tspan>
                                          <title>4</title>
                                       </text>
                                       <text id="SvgjsText3074" font-family="Helvetica, Arial, sans-serif" x="76.4859375" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3075">5</tspan>
                                          <title>5</title>
                                       </text>
                                       <text id="SvgjsText3077" font-family="Helvetica, Arial, sans-serif" x="93.48281250000001" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3078">6</tspan>
                                          <title>6</title>
                                       </text>
                                       <text id="SvgjsText3080" font-family="Helvetica, Arial, sans-serif" x="110.47968750000001" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3081">7</tspan>
                                          <title>7</title>
                                       </text>
                                       <text id="SvgjsText3083" font-family="Helvetica, Arial, sans-serif" x="127.4765625" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3084">8</tspan>
                                          <title>8</title>
                                       </text>
                                       <text id="SvgjsText3086" font-family="Helvetica, Arial, sans-serif" x="144.4734375" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3087">9</tspan>
                                          <title>9</title>
                                       </text>
                                       <text id="SvgjsText3089" font-family="Helvetica, Arial, sans-serif" x="161.47031249999998" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3090">10</tspan>
                                          <title>10</title>
                                       </text>
                                       <text id="SvgjsText3092" font-family="Helvetica, Arial, sans-serif" x="178.46718749999997" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3093">11</tspan>
                                          <title>11</title>
                                       </text>
                                       <text id="SvgjsText3095" font-family="Helvetica, Arial, sans-serif" x="195.46406249999995" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3096">12</tspan>
                                          <title>12</title>
                                       </text>
                                       <text id="SvgjsText3098" font-family="Helvetica, Arial, sans-serif" x="212.46093749999994" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3099">13</tspan>
                                          <title>13</title>
                                       </text>
                                       <text id="SvgjsText3101" font-family="Helvetica, Arial, sans-serif" x="229.45781249999993" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3102">14</tspan>
                                          <title>14</title>
                                       </text>
                                       <text id="SvgjsText3104" font-family="Helvetica, Arial, sans-serif" x="246.45468749999992" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3105">15</tspan>
                                          <title>15</title>
                                       </text>
                                       <text id="SvgjsText3107" font-family="Helvetica, Arial, sans-serif" x="263.4515624999999" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3108">16</tspan>
                                          <title>16</title>
                                       </text>
                                       <text id="SvgjsText3110" font-family="Helvetica, Arial, sans-serif" x="280.4484374999999" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3111">17</tspan>
                                          <title>17</title>
                                       </text>
                                       <text id="SvgjsText3113" font-family="Helvetica, Arial, sans-serif" x="297.4453124999999" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3114">18</tspan>
                                          <title>18</title>
                                       </text>
                                       <text id="SvgjsText3116" font-family="Helvetica, Arial, sans-serif" x="314.4421874999999" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3117">19</tspan>
                                          <title>19</title>
                                       </text>
                                       <text id="SvgjsText3119" font-family="Helvetica, Arial, sans-serif" x="331.43906249999986" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3120">20</tspan>
                                          <title>20</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine3121" x1="0" y1="283.348" x2="339.9375" y2="283.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG3144" class="apexcharts-grid">
                                    <g id="SvgjsG3145" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine3168" x1="0" y1="0" x2="339.9375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3169" x1="0" y1="31.372" x2="339.9375" y2="31.372" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3170" x1="0" y1="62.744" x2="339.9375" y2="62.744" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3171" x1="0" y1="94.116" x2="339.9375" y2="94.116" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3172" x1="0" y1="125.488" x2="339.9375" y2="125.488" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3173" x1="0" y1="156.86" x2="339.9375" y2="156.86" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3174" x1="0" y1="188.23200000000003" x2="339.9375" y2="188.23200000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3175" x1="0" y1="219.60400000000004" x2="339.9375" y2="219.60400000000004" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3176" x1="0" y1="250.97600000000006" x2="339.9375" y2="250.97600000000006" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3177" x1="0" y1="282.34800000000007" x2="339.9375" y2="282.34800000000007" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG3146" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine3147" x1="0" y1="283.348" x2="0" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3148" x1="16.996875" y1="283.348" x2="16.996875" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3149" x1="33.99375" y1="283.348" x2="33.99375" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3150" x1="50.990624999999994" y1="283.348" x2="50.990624999999994" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3151" x1="67.9875" y1="283.348" x2="67.9875" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3152" x1="84.984375" y1="283.348" x2="84.984375" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3153" x1="101.98125" y1="283.348" x2="101.98125" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3154" x1="118.978125" y1="283.348" x2="118.978125" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3155" x1="135.975" y1="283.348" x2="135.975" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3156" x1="152.97187499999998" y1="283.348" x2="152.97187499999998" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3157" x1="169.96874999999997" y1="283.348" x2="169.96874999999997" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3158" x1="186.96562499999996" y1="283.348" x2="186.96562499999996" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3159" x1="203.96249999999995" y1="283.348" x2="203.96249999999995" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3160" x1="220.95937499999994" y1="283.348" x2="220.95937499999994" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3161" x1="237.95624999999993" y1="283.348" x2="237.95624999999993" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3162" x1="254.95312499999991" y1="283.348" x2="254.95312499999991" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3163" x1="271.94999999999993" y1="283.348" x2="271.94999999999993" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3164" x1="288.9468749999999" y1="283.348" x2="288.9468749999999" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3165" x1="305.9437499999999" y1="283.348" x2="305.9437499999999" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3166" x1="322.9406249999999" y1="283.348" x2="322.9406249999999" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3167" x1="339.9374999999999" y1="283.348" x2="339.9374999999999" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3179" x1="0" y1="282.348" x2="339.9375" y2="282.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine3178" x1="0" y1="1" x2="0" y2="282.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG2869" class="apexcharts-heatmap" clip-path="url(#gridRectMaskqwvogh7fi)">
                                    <g id="SvgjsG2870" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric9" rel="9" data:realIndex="8">
                                       <rect id="SvgjsRect2871" width="16.996875" height="31.372" x="0" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(115,193,253,1)" cx="0" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="0" val="55" color="rgba(115,193,253,1)"></rect>
                                       <rect id="SvgjsRect2872" width="16.996875" height="31.372" x="16.996875" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(252,254,255,1)" cx="16.996875" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="1" val="1" color="rgba(252,254,255,1)"></rect>
                                       <rect id="SvgjsRect2873" width="16.996875" height="31.372" x="33.99375" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(252,254,255,1)" cx="33.99375" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="2" val="1" color="rgba(252,254,255,1)"></rect>
                                       <rect id="SvgjsRect2874" width="16.996875" height="31.372" x="50.990624999999994" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(186,225,254,1)" cx="50.990624999999994" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="3" val="27" color="rgba(186,225,254,1)"></rect>
                                       <rect id="SvgjsRect2875" width="16.996875" height="31.372" x="67.9875" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(120,196,253,1)" cx="67.9875" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="4" val="53" color="rgba(120,196,253,1)"></rect>
                                       <rect id="SvgjsRect2876" width="16.996875" height="31.372" x="84.984375" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(46,163,252,1)" cx="84.984375" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="5" val="82" color="rgba(46,163,252,1)"></rect>
                                       <rect id="SvgjsRect2877" width="16.996875" height="31.372" x="101.98125" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(199,230,254,1)" cx="101.98125" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="6" val="22" color="rgba(199,230,254,1)"></rect>
                                       <rect id="SvgjsRect2878" width="16.996875" height="31.372" x="118.978125" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(38,160,252,1)" cx="118.978125" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="7" val="85" color="rgba(38,160,252,1)"></rect>
                                       <rect id="SvgjsRect2879" width="16.996875" height="31.372" x="135.975" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(161,214,254,1)" cx="135.975" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="8" val="37" color="rgba(161,214,254,1)"></rect>
                                       <rect id="SvgjsRect2880" width="16.996875" height="31.372" x="152.97187499999998" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="152.97187499999998" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="9" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect2881" width="16.996875" height="31.372" x="169.96874999999997" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(140,205,253,1)" cx="169.96874999999997" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="10" val="45" color="rgba(140,205,253,1)"></rect>
                                       <rect id="SvgjsRect2882" width="16.996875" height="31.372" x="186.96562499999996" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(235,246,255,1)" cx="186.96562499999996" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="11" val="8" color="rgba(235,246,255,1)"></rect>
                                       <rect id="SvgjsRect2883" width="16.996875" height="31.372" x="203.96249999999995" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(219,239,254,1)" cx="203.96249999999995" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="12" val="14" color="rgba(219,239,254,1)"></rect>
                                       <rect id="SvgjsRect2884" width="16.996875" height="31.372" x="220.95937499999994" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(82,179,252,1)" cx="220.95937499999994" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="13" val="68" color="rgba(82,179,252,1)"></rect>
                                       <rect id="SvgjsRect2885" width="16.996875" height="31.372" x="237.95624999999993" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(145,207,253,1)" cx="237.95624999999993" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="14" val="43" color="rgba(145,207,253,1)"></rect>
                                       <rect id="SvgjsRect2886" width="16.996875" height="31.372" x="254.95312499999991" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(64,171,252,1)" cx="254.95312499999991" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="15" val="75" color="rgba(64,171,252,1)"></rect>
                                       <rect id="SvgjsRect2887" width="16.996875" height="31.372" x="271.94999999999993" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(247,252,255,1)" cx="271.94999999999993" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="16" val="3" color="rgba(247,252,255,1)"></rect>
                                       <rect id="SvgjsRect2888" width="16.996875" height="31.372" x="288.9468749999999" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(204,233,254,1)" cx="288.9468749999999" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="17" val="20" color="rgba(204,233,254,1)"></rect>
                                       <rect id="SvgjsRect2889" width="16.996875" height="31.372" x="305.9437499999999" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(158,212,253,1)" cx="305.9437499999999" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="18" val="38" color="rgba(158,212,253,1)"></rect>
                                       <rect id="SvgjsRect2890" width="16.996875" height="31.372" x="322.9406249999999" y="0" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(168,217,254,1)" cx="322.9406249999999" cy="0" class="apexcharts-heatmap-rect" i="8" index="8" j="19" val="34" color="rgba(168,217,254,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2891" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric8" rel="8" data:realIndex="7">
                                       <rect id="SvgjsRect2892" width="16.996875" height="31.372" x="0" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="0" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="0" val="81" color="rgba(48,164,252,1)"></rect>
                                       <rect id="SvgjsRect2893" width="16.996875" height="31.372" x="16.996875" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(247,252,255,1)" cx="16.996875" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="1" val="3" color="rgba(247,252,255,1)"></rect>
                                       <rect id="SvgjsRect2894" width="16.996875" height="31.372" x="33.99375" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(230,244,255,1)" cx="33.99375" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="2" val="10" color="rgba(230,244,255,1)"></rect>
                                       <rect id="SvgjsRect2895" width="16.996875" height="31.372" x="50.990624999999994" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="50.990624999999994" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="3" val="81" color="rgba(48,164,252,1)"></rect>
                                       <rect id="SvgjsRect2896" width="16.996875" height="31.372" x="67.9875" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(33,158,252,1)" cx="67.9875" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="4" val="87" color="rgba(33,158,252,1)"></rect>
                                       <rect id="SvgjsRect2897" width="16.996875" height="31.372" x="84.984375" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(41,161,252,1)" cx="84.984375" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="5" val="84" color="rgba(41,161,252,1)"></rect>
                                       <rect id="SvgjsRect2898" width="16.996875" height="31.372" x="101.98125" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(224,242,255,1)" cx="101.98125" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="6" val="12" color="rgba(224,242,255,1)"></rect>
                                       <rect id="SvgjsRect2899" width="16.996875" height="31.372" x="118.978125" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(150,209,253,1)" cx="118.978125" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="7" val="41" color="rgba(150,209,253,1)"></rect>
                                       <rect id="SvgjsRect2900" width="16.996875" height="31.372" x="135.975" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(163,215,254,1)" cx="135.975" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="8" val="36" color="rgba(163,215,254,1)"></rect>
                                       <rect id="SvgjsRect2901" width="16.996875" height="31.372" x="152.97187499999998" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(156,211,253,1)" cx="152.97187499999998" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="9" val="39" color="rgba(156,211,253,1)"></rect>
                                       <rect id="SvgjsRect2902" width="16.996875" height="31.372" x="169.96874999999997" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(232,245,255,1)" cx="169.96874999999997" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="10" val="9" color="rgba(232,245,255,1)"></rect>
                                       <rect id="SvgjsRect2903" width="16.996875" height="31.372" x="186.96562499999996" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(99,187,253,1)" cx="186.96562499999996" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="11" val="61" color="rgba(99,187,253,1)"></rect>
                                       <rect id="SvgjsRect2904" width="16.996875" height="31.372" x="203.96249999999995" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(150,209,253,1)" cx="203.96249999999995" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="12" val="41" color="rgba(150,209,253,1)"></rect>
                                       <rect id="SvgjsRect2905" width="16.996875" height="31.372" x="220.95937499999994" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(77,177,252,1)" cx="220.95937499999994" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="13" val="70" color="rgba(77,177,252,1)"></rect>
                                       <rect id="SvgjsRect2906" width="16.996875" height="31.372" x="237.95624999999993" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(184,224,254,1)" cx="237.95624999999993" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="14" val="28" color="rgba(184,224,254,1)"></rect>
                                       <rect id="SvgjsRect2907" width="16.996875" height="31.372" x="254.95312499999991" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(222,240,254,1)" cx="254.95312499999991" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="15" val="13" color="rgba(222,240,254,1)"></rect>
                                       <rect id="SvgjsRect2908" width="16.996875" height="31.372" x="271.94999999999993" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(112,192,253,1)" cx="271.94999999999993" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="16" val="56" color="rgba(112,192,253,1)"></rect>
                                       <rect id="SvgjsRect2909" width="16.996875" height="31.372" x="288.9468749999999" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(92,183,252,1)" cx="288.9468749999999" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="17" val="64" color="rgba(92,183,252,1)"></rect>
                                       <rect id="SvgjsRect2910" width="16.996875" height="31.372" x="305.9437499999999" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="305.9437499999999" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="18" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect2911" width="16.996875" height="31.372" x="322.9406249999999" y="31.372" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(97,186,253,1)" cx="322.9406249999999" cy="31.372" class="apexcharts-heatmap-rect" i="7" index="7" j="19" val="62" color="rgba(97,186,253,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2912" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric7" rel="7" data:realIndex="6">
                                       <rect id="SvgjsRect2913" width="16.996875" height="31.372" x="0" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(33,158,252,1)" cx="0" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="0" val="87" color="rgba(33,158,252,1)"></rect>
                                       <rect id="SvgjsRect2914" width="16.996875" height="31.372" x="16.996875" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(66,172,252,1)" cx="16.996875" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="1" val="74" color="rgba(66,172,252,1)"></rect>
                                       <rect id="SvgjsRect2915" width="16.996875" height="31.372" x="33.99375" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(71,174,252,1)" cx="33.99375" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="2" val="72" color="rgba(71,174,252,1)"></rect>
                                       <rect id="SvgjsRect2916" width="16.996875" height="31.372" x="50.990624999999994" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(158,212,253,1)" cx="50.990624999999994" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="3" val="38" color="rgba(158,212,253,1)"></rect>
                                       <rect id="SvgjsRect2917" width="16.996875" height="31.372" x="67.9875" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(122,197,253,1)" cx="67.9875" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="4" val="52" color="rgba(122,197,253,1)"></rect>
                                       <rect id="SvgjsRect2918" width="16.996875" height="31.372" x="84.984375" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(79,178,252,1)" cx="84.984375" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="5" val="69" color="rgba(79,178,252,1)"></rect>
                                       <rect id="SvgjsRect2919" width="16.996875" height="31.372" x="101.98125" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(230,244,255,1)" cx="101.98125" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="6" val="10" color="rgba(230,244,255,1)"></rect>
                                       <rect id="SvgjsRect2920" width="16.996875" height="31.372" x="118.978125" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(255,255,255,1)" cx="118.978125" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="7" val="0" color="rgba(255,255,255,1)"></rect>
                                       <rect id="SvgjsRect2921" width="16.996875" height="31.372" x="135.975" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(176,220,254,1)" cx="135.975" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="8" val="31" color="rgba(176,220,254,1)"></rect>
                                       <rect id="SvgjsRect2922" width="16.996875" height="31.372" x="152.97187499999998" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(84,180,252,1)" cx="152.97187499999998" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="9" val="67" color="rgba(84,180,252,1)"></rect>
                                       <rect id="SvgjsRect2923" width="16.996875" height="31.372" x="169.96874999999997" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(54,167,252,1)" cx="169.96874999999997" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="10" val="79" color="rgba(54,167,252,1)"></rect>
                                       <rect id="SvgjsRect2924" width="16.996875" height="31.372" x="186.96562499999996" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(214,237,254,1)" cx="186.96562499999996" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="11" val="16" color="rgba(214,237,254,1)"></rect>
                                       <rect id="SvgjsRect2925" width="16.996875" height="31.372" x="203.96249999999995" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(102,188,253,1)" cx="203.96249999999995" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="12" val="60" color="rgba(102,188,253,1)"></rect>
                                       <rect id="SvgjsRect2926" width="16.996875" height="31.372" x="220.95937499999994" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(209,235,254,1)" cx="220.95937499999994" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="13" val="18" color="rgba(209,235,254,1)"></rect>
                                       <rect id="SvgjsRect2927" width="16.996875" height="31.372" x="237.95624999999993" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(199,230,254,1)" cx="237.95624999999993" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="14" val="22" color="rgba(199,230,254,1)"></rect>
                                       <rect id="SvgjsRect2928" width="16.996875" height="31.372" x="254.95312499999991" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(46,163,252,1)" cx="254.95312499999991" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="15" val="82" color="rgba(46,163,252,1)"></rect>
                                       <rect id="SvgjsRect2929" width="16.996875" height="31.372" x="271.94999999999993" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(61,170,252,1)" cx="271.94999999999993" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="16" val="76" color="rgba(61,170,252,1)"></rect>
                                       <rect id="SvgjsRect2930" width="16.996875" height="31.372" x="288.9468749999999" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(207,234,254,1)" cx="288.9468749999999" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="17" val="19" color="rgba(207,234,254,1)"></rect>
                                       <rect id="SvgjsRect2931" width="16.996875" height="31.372" x="305.9437499999999" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="305.9437499999999" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="18" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect2932" width="16.996875" height="31.372" x="322.9406249999999" y="62.744" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(230,244,255,1)" cx="322.9406249999999" cy="62.744" class="apexcharts-heatmap-rect" i="6" index="6" j="19" val="10" color="rgba(230,244,255,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2933" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric6" rel="6" data:realIndex="5">
                                       <rect id="SvgjsRect2934" width="16.996875" height="31.372" x="0" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(122,197,253,1)" cx="0" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="0" val="52" color="rgba(122,197,253,1)"></rect>
                                       <rect id="SvgjsRect2935" width="16.996875" height="31.372" x="16.996875" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(247,252,255,1)" cx="16.996875" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="1" val="3" color="rgba(247,252,255,1)"></rect>
                                       <rect id="SvgjsRect2936" width="16.996875" height="31.372" x="33.99375" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(227,243,255,1)" cx="33.99375" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="2" val="11" color="rgba(227,243,255,1)"></rect>
                                       <rect id="SvgjsRect2937" width="16.996875" height="31.372" x="50.990624999999994" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(87,181,252,1)" cx="50.990624999999994" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="3" val="66" color="rgba(87,181,252,1)"></rect>
                                       <rect id="SvgjsRect2938" width="16.996875" height="31.372" x="67.9875" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(31,156,251,1)" cx="67.9875" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="4" val="88" color="rgba(31,156,251,1)"></rect>
                                       <rect id="SvgjsRect2939" width="16.996875" height="31.372" x="84.984375" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(148,208,253,1)" cx="84.984375" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="5" val="42" color="rgba(148,208,253,1)"></rect>
                                       <rect id="SvgjsRect2940" width="16.996875" height="31.372" x="101.98125" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(240,248,255,1)" cx="101.98125" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="6" val="6" color="rgba(240,248,255,1)"></rect>
                                       <rect id="SvgjsRect2941" width="16.996875" height="31.372" x="118.978125" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="118.978125" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="7" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect2942" width="16.996875" height="31.372" x="135.975" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(156,211,253,1)" cx="135.975" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="8" val="39" color="rgba(156,211,253,1)"></rect>
                                       <rect id="SvgjsRect2943" width="16.996875" height="31.372" x="152.97187499999998" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(176,220,254,1)" cx="152.97187499999998" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="9" val="31" color="rgba(176,220,254,1)"></rect>
                                       <rect id="SvgjsRect2944" width="16.996875" height="31.372" x="169.96874999999997" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="169.96874999999997" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="10" val="81" color="rgba(48,164,252,1)"></rect>
                                       <rect id="SvgjsRect2945" width="16.996875" height="31.372" x="186.96562499999996" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(240,248,255,1)" cx="186.96562499999996" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="11" val="6" color="rgba(240,248,255,1)"></rect>
                                       <rect id="SvgjsRect2946" width="16.996875" height="31.372" x="203.96249999999995" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(66,172,252,1)" cx="203.96249999999995" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="12" val="74" color="rgba(66,172,252,1)"></rect>
                                       <rect id="SvgjsRect2947" width="16.996875" height="31.372" x="220.95937499999994" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(36,159,252,1)" cx="220.95937499999994" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="13" val="86" color="rgba(36,159,252,1)"></rect>
                                       <rect id="SvgjsRect2948" width="16.996875" height="31.372" x="237.95624999999993" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(140,205,253,1)" cx="237.95624999999993" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="14" val="45" color="rgba(140,205,253,1)"></rect>
                                       <rect id="SvgjsRect2949" width="16.996875" height="31.372" x="254.95312499999991" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(89,182,252,1)" cx="254.95312499999991" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="15" val="65" color="rgba(89,182,252,1)"></rect>
                                       <rect id="SvgjsRect2950" width="16.996875" height="31.372" x="271.94999999999993" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(102,188,253,1)" cx="271.94999999999993" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="16" val="60" color="rgba(102,188,253,1)"></rect>
                                       <rect id="SvgjsRect2951" width="16.996875" height="31.372" x="288.9468749999999" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(38,160,252,1)" cx="288.9468749999999" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="17" val="85" color="rgba(38,160,252,1)"></rect>
                                       <rect id="SvgjsRect2952" width="16.996875" height="31.372" x="305.9437499999999" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(28,155,251,1)" cx="305.9437499999999" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="18" val="89" color="rgba(28,155,251,1)"></rect>
                                       <rect id="SvgjsRect2953" width="16.996875" height="31.372" x="322.9406249999999" y="94.116" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="322.9406249999999" cy="94.116" class="apexcharts-heatmap-rect" i="5" index="5" j="19" val="81" color="rgba(48,164,252,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2954" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric5" rel="5" data:realIndex="4">
                                       <rect id="SvgjsRect2955" width="16.996875" height="31.372" x="0" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(122,197,253,1)" cx="0" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="0" val="52" color="rgba(122,197,253,1)"></rect>
                                       <rect id="SvgjsRect2956" width="16.996875" height="31.372" x="16.996875" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(186,225,254,1)" cx="16.996875" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="1" val="27" color="rgba(186,225,254,1)"></rect>
                                       <rect id="SvgjsRect2957" width="16.996875" height="31.372" x="33.99375" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(71,174,252,1)" cx="33.99375" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="2" val="72" color="rgba(71,174,252,1)"></rect>
                                       <rect id="SvgjsRect2958" width="16.996875" height="31.372" x="50.990624999999994" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(31,156,251,1)" cx="50.990624999999994" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="3" val="88" color="rgba(31,156,251,1)"></rect>
                                       <rect id="SvgjsRect2959" width="16.996875" height="31.372" x="67.9875" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(235,246,255,1)" cx="67.9875" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="4" val="8" color="rgba(235,246,255,1)"></rect>
                                       <rect id="SvgjsRect2960" width="16.996875" height="31.372" x="84.984375" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(242,249,255,1)" cx="84.984375" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="5" val="5" color="rgba(242,249,255,1)"></rect>
                                       <rect id="SvgjsRect2961" width="16.996875" height="31.372" x="101.98125" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(237,247,255,1)" cx="101.98125" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="6" val="7" color="rgba(237,247,255,1)"></rect>
                                       <rect id="SvgjsRect2962" width="16.996875" height="31.372" x="118.978125" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(94,184,252,1)" cx="118.978125" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="7" val="63" color="rgba(94,184,252,1)"></rect>
                                       <rect id="SvgjsRect2963" width="16.996875" height="31.372" x="135.975" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(133,201,253,1)" cx="135.975" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="8" val="48" color="rgba(133,201,253,1)"></rect>
                                       <rect id="SvgjsRect2964" width="16.996875" height="31.372" x="152.97187499999998" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(222,240,254,1)" cx="152.97187499999998" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="9" val="13" color="rgba(222,240,254,1)"></rect>
                                       <rect id="SvgjsRect2965" width="16.996875" height="31.372" x="169.96874999999997" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(74,175,252,1)" cx="169.96874999999997" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="10" val="71" color="rgba(74,175,252,1)"></rect>
                                       <rect id="SvgjsRect2966" width="16.996875" height="31.372" x="186.96562499999996" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(148,208,253,1)" cx="186.96562499999996" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="11" val="42" color="rgba(148,208,253,1)"></rect>
                                       <rect id="SvgjsRect2967" width="16.996875" height="31.372" x="203.96249999999995" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(145,207,253,1)" cx="203.96249999999995" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="12" val="43" color="rgba(145,207,253,1)"></rect>
                                       <rect id="SvgjsRect2968" width="16.996875" height="31.372" x="220.95937499999994" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(204,233,254,1)" cx="220.95937499999994" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="13" val="20" color="rgba(204,233,254,1)"></rect>
                                       <rect id="SvgjsRect2969" width="16.996875" height="31.372" x="237.95624999999993" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="237.95624999999993" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="14" val="81" color="rgba(48,164,252,1)"></rect>
                                       <rect id="SvgjsRect2970" width="16.996875" height="31.372" x="254.95312499999991" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(181,223,254,1)" cx="254.95312499999991" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="15" val="29" color="rgba(181,223,254,1)"></rect>
                                       <rect id="SvgjsRect2971" width="16.996875" height="31.372" x="271.94999999999993" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(189,226,254,1)" cx="271.94999999999993" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="16" val="26" color="rgba(189,226,254,1)"></rect>
                                       <rect id="SvgjsRect2972" width="16.996875" height="31.372" x="288.9468749999999" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(43,162,252,1)" cx="288.9468749999999" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="17" val="83" color="rgba(43,162,252,1)"></rect>
                                       <rect id="SvgjsRect2973" width="16.996875" height="31.372" x="305.9437499999999" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(214,237,254,1)" cx="305.9437499999999" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="18" val="16" color="rgba(214,237,254,1)"></rect>
                                       <rect id="SvgjsRect2974" width="16.996875" height="31.372" x="322.9406249999999" y="125.488" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(112,192,253,1)" cx="322.9406249999999" cy="125.488" class="apexcharts-heatmap-rect" i="4" index="4" j="19" val="56" color="rgba(112,192,253,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2975" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric4" rel="4" data:realIndex="3">
                                       <rect id="SvgjsRect2976" width="16.996875" height="31.372" x="0" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(148,208,253,1)" cx="0" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="0" val="42" color="rgba(148,208,253,1)"></rect>
                                       <rect id="SvgjsRect2977" width="16.996875" height="31.372" x="16.996875" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="16.996875" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="1" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect2978" width="16.996875" height="31.372" x="33.99375" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(110,191,253,1)" cx="33.99375" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="2" val="57" color="rgba(110,191,253,1)"></rect>
                                       <rect id="SvgjsRect2979" width="16.996875" height="31.372" x="50.990624999999994" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(222,240,254,1)" cx="50.990624999999994" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="3" val="13" color="rgba(222,240,254,1)"></rect>
                                       <rect id="SvgjsRect2980" width="16.996875" height="31.372" x="67.9875" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(235,246,255,1)" cx="67.9875" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="4" val="8" color="rgba(235,246,255,1)"></rect>
                                       <rect id="SvgjsRect2981" width="16.996875" height="31.372" x="84.984375" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(122,197,253,1)" cx="84.984375" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="5" val="52" color="rgba(122,197,253,1)"></rect>
                                       <rect id="SvgjsRect2982" width="16.996875" height="31.372" x="101.98125" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(148,208,253,1)" cx="101.98125" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="6" val="42" color="rgba(148,208,253,1)"></rect>
                                       <rect id="SvgjsRect2983" width="16.996875" height="31.372" x="118.978125" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(61,170,252,1)" cx="118.978125" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="7" val="76" color="rgba(61,170,252,1)"></rect>
                                       <rect id="SvgjsRect2984" width="16.996875" height="31.372" x="135.975" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(115,193,253,1)" cx="135.975" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="8" val="55" color="rgba(115,193,253,1)"></rect>
                                       <rect id="SvgjsRect2985" width="16.996875" height="31.372" x="152.97187499999998" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(204,233,254,1)" cx="152.97187499999998" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="9" val="20" color="rgba(204,233,254,1)"></rect>
                                       <rect id="SvgjsRect2986" width="16.996875" height="31.372" x="169.96874999999997" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(36,159,252,1)" cx="169.96874999999997" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="10" val="86" color="rgba(36,159,252,1)"></rect>
                                       <rect id="SvgjsRect2987" width="16.996875" height="31.372" x="186.96562499999996" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(232,245,255,1)" cx="186.96562499999996" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="11" val="9" color="rgba(232,245,255,1)"></rect>
                                       <rect id="SvgjsRect2988" width="16.996875" height="31.372" x="203.96249999999995" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(64,171,252,1)" cx="203.96249999999995" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="12" val="75" color="rgba(64,171,252,1)"></rect>
                                       <rect id="SvgjsRect2989" width="16.996875" height="31.372" x="220.95937499999994" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(66,172,252,1)" cx="220.95937499999994" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="13" val="74" color="rgba(66,172,252,1)"></rect>
                                       <rect id="SvgjsRect2990" width="16.996875" height="31.372" x="237.95624999999993" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(214,237,254,1)" cx="237.95624999999993" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="14" val="16" color="rgba(214,237,254,1)"></rect>
                                       <rect id="SvgjsRect2991" width="16.996875" height="31.372" x="254.95312499999991" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(115,193,253,1)" cx="254.95312499999991" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="15" val="55" color="rgba(115,193,253,1)"></rect>
                                       <rect id="SvgjsRect2992" width="16.996875" height="31.372" x="271.94999999999993" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(125,198,253,1)" cx="271.94999999999993" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="16" val="51" color="rgba(125,198,253,1)"></rect>
                                       <rect id="SvgjsRect2993" width="16.996875" height="31.372" x="288.9468749999999" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(46,163,252,1)" cx="288.9468749999999" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="17" val="82" color="rgba(46,163,252,1)"></rect>
                                       <rect id="SvgjsRect2994" width="16.996875" height="31.372" x="305.9437499999999" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(150,209,253,1)" cx="305.9437499999999" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="18" val="41" color="rgba(150,209,253,1)"></rect>
                                       <rect id="SvgjsRect2995" width="16.996875" height="31.372" x="322.9406249999999" y="156.86" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(219,239,254,1)" cx="322.9406249999999" cy="156.86" class="apexcharts-heatmap-rect" i="3" index="3" j="19" val="14" color="rgba(219,239,254,1)"></rect>
                                    </g>
                                    <g id="SvgjsG2996" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric3" rel="3" data:realIndex="2">
                                       <rect id="SvgjsRect2997" width="16.996875" height="31.372" x="0" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(41,161,252,1)" cx="0" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="0" val="84" color="rgba(41,161,252,1)"></rect>
                                       <rect id="SvgjsRect2998" width="16.996875" height="31.372" x="16.996875" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(115,193,253,1)" cx="16.996875" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="1" val="55" color="rgba(115,193,253,1)"></rect>
                                       <rect id="SvgjsRect2999" width="16.996875" height="31.372" x="33.99375" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(237,247,255,1)" cx="33.99375" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="2" val="7" color="rgba(237,247,255,1)"></rect>
                                       <rect id="SvgjsRect3000" width="16.996875" height="31.372" x="50.990624999999994" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(240,248,255,1)" cx="50.990624999999994" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="3" val="6" color="rgba(240,248,255,1)"></rect>
                                       <rect id="SvgjsRect3001" width="16.996875" height="31.372" x="67.9875" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(43,162,252,1)" cx="67.9875" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="4" val="83" color="rgba(43,162,252,1)"></rect>
                                       <rect id="SvgjsRect3002" width="16.996875" height="31.372" x="84.984375" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(102,188,253,1)" cx="84.984375" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="5" val="60" color="rgba(102,188,253,1)"></rect>
                                       <rect id="SvgjsRect3003" width="16.996875" height="31.372" x="101.98125" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(214,237,254,1)" cx="101.98125" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="6" val="16" color="rgba(214,237,254,1)"></rect>
                                       <rect id="SvgjsRect3004" width="16.996875" height="31.372" x="118.978125" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(79,178,252,1)" cx="118.978125" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="7" val="69" color="rgba(79,178,252,1)"></rect>
                                       <rect id="SvgjsRect3005" width="16.996875" height="31.372" x="135.975" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(133,201,253,1)" cx="135.975" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="8" val="48" color="rgba(133,201,253,1)"></rect>
                                       <rect id="SvgjsRect3006" width="16.996875" height="31.372" x="152.97187499999998" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(122,197,253,1)" cx="152.97187499999998" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="9" val="52" color="rgba(122,197,253,1)"></rect>
                                       <rect id="SvgjsRect3007" width="16.996875" height="31.372" x="169.96874999999997" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(161,214,254,1)" cx="169.96874999999997" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="10" val="37" color="rgba(161,214,254,1)"></rect>
                                       <rect id="SvgjsRect3008" width="16.996875" height="31.372" x="186.96562499999996" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(120,196,253,1)" cx="186.96562499999996" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="11" val="53" color="rgba(120,196,253,1)"></rect>
                                       <rect id="SvgjsRect3009" width="16.996875" height="31.372" x="203.96249999999995" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(69,173,252,1)" cx="203.96249999999995" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="12" val="73" color="rgba(69,173,252,1)"></rect>
                                       <rect id="SvgjsRect3010" width="16.996875" height="31.372" x="220.95937499999994" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(48,164,252,1)" cx="220.95937499999994" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="13" val="81" color="rgba(48,164,252,1)"></rect>
                                       <rect id="SvgjsRect3011" width="16.996875" height="31.372" x="237.95624999999993" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(184,224,254,1)" cx="237.95624999999993" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="14" val="28" color="rgba(184,224,254,1)"></rect>
                                       <rect id="SvgjsRect3012" width="16.996875" height="31.372" x="254.95312499999991" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(181,223,254,1)" cx="254.95312499999991" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="15" val="29" color="rgba(181,223,254,1)"></rect>
                                       <rect id="SvgjsRect3013" width="16.996875" height="31.372" x="271.94999999999993" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(71,174,252,1)" cx="271.94999999999993" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="16" val="72" color="rgba(71,174,252,1)"></rect>
                                       <rect id="SvgjsRect3014" width="16.996875" height="31.372" x="288.9468749999999" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(150,209,253,1)" cx="288.9468749999999" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="17" val="41" color="rgba(150,209,253,1)"></rect>
                                       <rect id="SvgjsRect3015" width="16.996875" height="31.372" x="305.9437499999999" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(250,253,255,1)" cx="305.9437499999999" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="18" val="2" color="rgba(250,253,255,1)"></rect>
                                       <rect id="SvgjsRect3016" width="16.996875" height="31.372" x="322.9406249999999" y="188.23200000000003" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(51,165,252,1)" cx="322.9406249999999" cy="188.23200000000003" class="apexcharts-heatmap-rect" i="2" index="2" j="19" val="80" color="rgba(51,165,252,1)"></rect>
                                    </g>
                                    <g id="SvgjsG3017" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric2" rel="2" data:realIndex="1">
                                       <rect id="SvgjsRect3018" width="16.996875" height="31.372" x="0" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(194,228,254,1)" cx="0" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="0" val="24" color="rgba(194,228,254,1)"></rect>
                                       <rect id="SvgjsRect3019" width="16.996875" height="31.372" x="16.996875" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(97,186,253,1)" cx="16.996875" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="1" val="62" color="rgba(97,186,253,1)"></rect>
                                       <rect id="SvgjsRect3020" width="16.996875" height="31.372" x="33.99375" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(97,186,253,1)" cx="33.99375" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="2" val="62" color="rgba(97,186,253,1)"></rect>
                                       <rect id="SvgjsRect3021" width="16.996875" height="31.372" x="50.990624999999994" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(138,203,253,1)" cx="50.990624999999994" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="3" val="46" color="rgba(138,203,253,1)"></rect>
                                       <rect id="SvgjsRect3022" width="16.996875" height="31.372" x="67.9875" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(46,163,252,1)" cx="67.9875" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="4" val="82" color="rgba(46,163,252,1)"></rect>
                                       <rect id="SvgjsRect3023" width="16.996875" height="31.372" x="84.984375" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(166,216,254,1)" cx="84.984375" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="5" val="35" color="rgba(166,216,254,1)"></rect>
                                       <rect id="SvgjsRect3024" width="16.996875" height="31.372" x="101.98125" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(156,211,253,1)" cx="101.98125" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="6" val="39" color="rgba(156,211,253,1)"></rect>
                                       <rect id="SvgjsRect3025" width="16.996875" height="31.372" x="118.978125" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(102,188,253,1)" cx="118.978125" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="7" val="60" color="rgba(102,188,253,1)"></rect>
                                       <rect id="SvgjsRect3026" width="16.996875" height="31.372" x="135.975" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(189,226,254,1)" cx="135.975" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="8" val="26" color="rgba(189,226,254,1)"></rect>
                                       <rect id="SvgjsRect3027" width="16.996875" height="31.372" x="152.97187499999998" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(181,223,254,1)" cx="152.97187499999998" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="9" val="29" color="rgba(181,223,254,1)"></rect>
                                       <rect id="SvgjsRect3028" width="16.996875" height="31.372" x="169.96874999999997" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(97,186,253,1)" cx="169.96874999999997" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="10" val="62" color="rgba(97,186,253,1)"></rect>
                                       <rect id="SvgjsRect3029" width="16.996875" height="31.372" x="186.96562499999996" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(130,200,253,1)" cx="186.96562499999996" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="11" val="49" color="rgba(130,200,253,1)"></rect>
                                       <rect id="SvgjsRect3030" width="16.996875" height="31.372" x="203.96249999999995" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(227,243,255,1)" cx="203.96249999999995" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="12" val="11" color="rgba(227,243,255,1)"></rect>
                                       <rect id="SvgjsRect3031" width="16.996875" height="31.372" x="220.95937499999994" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(209,235,254,1)" cx="220.95937499999994" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="13" val="18" color="rgba(209,235,254,1)"></rect>
                                       <rect id="SvgjsRect3032" width="16.996875" height="31.372" x="237.95624999999993" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(59,169,252,1)" cx="237.95624999999993" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="14" val="77" color="rgba(59,169,252,1)"></rect>
                                       <rect id="SvgjsRect3033" width="16.996875" height="31.372" x="254.95312499999991" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(145,207,253,1)" cx="254.95312499999991" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="15" val="43" color="rgba(145,207,253,1)"></rect>
                                       <rect id="SvgjsRect3034" width="16.996875" height="31.372" x="271.94999999999993" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(166,216,254,1)" cx="271.94999999999993" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="16" val="35" color="rgba(166,216,254,1)"></rect>
                                       <rect id="SvgjsRect3035" width="16.996875" height="31.372" x="288.9468749999999" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(173,219,254,1)" cx="288.9468749999999" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="17" val="32" color="rgba(173,219,254,1)"></rect>
                                       <rect id="SvgjsRect3036" width="16.996875" height="31.372" x="305.9437499999999" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(252,254,255,1)" cx="305.9437499999999" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="18" val="1" color="rgba(252,254,255,1)"></rect>
                                       <rect id="SvgjsRect3037" width="16.996875" height="31.372" x="322.9406249999999" y="219.60400000000004" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(207,234,254,1)" cx="322.9406249999999" cy="219.60400000000004" class="apexcharts-heatmap-rect" i="1" index="1" j="19" val="19" color="rgba(207,234,254,1)"></rect>
                                    </g>
                                    <g id="SvgjsG3038" class="apexcharts-series apexcharts-heatmap-series" seriesName="Metric1" rel="1" data:realIndex="0">
                                       <rect id="SvgjsRect3039" width="16.996875" height="31.372" x="0" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(179,221,254,1)" cx="0" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="0" val="30" color="rgba(179,221,254,1)"></rect>
                                       <rect id="SvgjsRect3040" width="16.996875" height="31.372" x="16.996875" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(99,187,253,1)" cx="16.996875" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="1" val="61" color="rgba(99,187,253,1)"></rect>
                                       <rect id="SvgjsRect3041" width="16.996875" height="31.372" x="33.99375" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(102,188,253,1)" cx="33.99375" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="2" val="60" color="rgba(102,188,253,1)"></rect>
                                       <rect id="SvgjsRect3042" width="16.996875" height="31.372" x="50.990624999999994" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(135,202,253,1)" cx="50.990624999999994" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="3" val="47" color="rgba(135,202,253,1)"></rect>
                                       <rect id="SvgjsRect3043" width="16.996875" height="31.372" x="67.9875" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(46,163,252,1)" cx="67.9875" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="4" val="82" color="rgba(46,163,252,1)"></rect>
                                       <rect id="SvgjsRect3044" width="16.996875" height="31.372" x="84.984375" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(74,175,252,1)" cx="84.984375" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="5" val="71" color="rgba(74,175,252,1)"></rect>
                                       <rect id="SvgjsRect3045" width="16.996875" height="31.372" x="101.98125" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(171,218,254,1)" cx="101.98125" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="6" val="33" color="rgba(171,218,254,1)"></rect>
                                       <rect id="SvgjsRect3046" width="16.996875" height="31.372" x="118.978125" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(201,231,254,1)" cx="118.978125" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="7" val="21" color="rgba(201,231,254,1)"></rect>
                                       <rect id="SvgjsRect3047" width="16.996875" height="31.372" x="135.975" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(196,229,254,1)" cx="135.975" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="8" val="23" color="rgba(196,229,254,1)"></rect>
                                       <rect id="SvgjsRect3048" width="16.996875" height="31.372" x="152.97187499999998" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(240,248,255,1)" cx="152.97187499999998" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="9" val="6" color="rgba(240,248,255,1)"></rect>
                                       <rect id="SvgjsRect3049" width="16.996875" height="31.372" x="169.96874999999997" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(43,162,252,1)" cx="169.96874999999997" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="10" val="83" color="rgba(43,162,252,1)"></rect>
                                       <rect id="SvgjsRect3050" width="16.996875" height="31.372" x="186.96562499999996" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(163,215,254,1)" cx="186.96562499999996" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="11" val="36" color="rgba(163,215,254,1)"></rect>
                                       <rect id="SvgjsRect3051" width="16.996875" height="31.372" x="203.96249999999995" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(212,236,254,1)" cx="203.96249999999995" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="12" val="17" color="rgba(212,236,254,1)"></rect>
                                       <rect id="SvgjsRect3052" width="16.996875" height="31.372" x="220.95937499999994" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(189,226,254,1)" cx="220.95937499999994" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="13" val="26" color="rgba(189,226,254,1)"></rect>
                                       <rect id="SvgjsRect3053" width="16.996875" height="31.372" x="237.95624999999993" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(25,154,251,1)" cx="237.95624999999993" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="14" val="90" color="rgba(25,154,251,1)"></rect>
                                       <rect id="SvgjsRect3054" width="16.996875" height="31.372" x="254.95312499999991" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(143,206,253,1)" cx="254.95312499999991" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="15" val="44" color="rgba(143,206,253,1)"></rect>
                                       <rect id="SvgjsRect3055" width="16.996875" height="31.372" x="271.94999999999993" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(38,160,252,1)" cx="271.94999999999993" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="16" val="85" color="rgba(38,160,252,1)"></rect>
                                       <rect id="SvgjsRect3056" width="16.996875" height="31.372" x="288.9468749999999" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(209,235,254,1)" cx="288.9468749999999" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="17" val="18" color="rgba(209,235,254,1)"></rect>
                                       <rect id="SvgjsRect3057" width="16.996875" height="31.372" x="305.9437499999999" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(97,186,253,1)" cx="305.9437499999999" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="18" val="62" color="rgba(97,186,253,1)"></rect>
                                       <rect id="SvgjsRect3058" width="16.996875" height="31.372" x="322.9406249999999" y="250.97600000000006" rx="2" ry="2" opacity="1" stroke-width="2" stroke="#ffffff" stroke-dasharray="0" fill="rgba(201,231,254,1)" cx="322.9406249999999" cy="250.97600000000006" class="apexcharts-heatmap-rect" i="0" index="0" j="19" val="21" color="rgba(201,231,254,1)"></rect>
                                    </g>
                                 </g>
                                 <line id="SvgjsLine3180" x1="0" y1="0" x2="339.9375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine3181" x1="0" y1="0" x2="339.9375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG3182" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG3183" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG3184" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect2865" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG3122" class="apexcharts-yaxis" rel="0" transform="translate(33.0625, 0)">
                                 <g id="SvgjsG3123" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText3124" font-family="Helvetica, Arial, sans-serif" x="20" y="16.214" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3125"></tspan>
                                       <title></title>
                                    </text>
                                    <text id="SvgjsText3126" font-family="Helvetica, Arial, sans-serif" x="20" y="47.586" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3127">Metric9</tspan>
                                       <title>Metric9</title>
                                    </text>
                                    <text id="SvgjsText3128" font-family="Helvetica, Arial, sans-serif" x="20" y="78.958" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3129">Metric8</tspan>
                                       <title>Metric8</title>
                                    </text>
                                    <text id="SvgjsText3130" font-family="Helvetica, Arial, sans-serif" x="20" y="110.33000000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3131">Metric7</tspan>
                                       <title>Metric7</title>
                                    </text>
                                    <text id="SvgjsText3132" font-family="Helvetica, Arial, sans-serif" x="20" y="141.702" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3133">Metric6</tspan>
                                       <title>Metric6</title>
                                    </text>
                                    <text id="SvgjsText3134" font-family="Helvetica, Arial, sans-serif" x="20" y="173.074" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3135">Metric5</tspan>
                                       <title>Metric5</title>
                                    </text>
                                    <text id="SvgjsText3136" font-family="Helvetica, Arial, sans-serif" x="20" y="204.44600000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3137">Metric4</tspan>
                                       <title>Metric4</title>
                                    </text>
                                    <text id="SvgjsText3138" font-family="Helvetica, Arial, sans-serif" x="20" y="235.81800000000004" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3139">Metric3</tspan>
                                       <title>Metric3</title>
                                    </text>
                                    <text id="SvgjsText3140" font-family="Helvetica, Arial, sans-serif" x="20" y="267.19000000000005" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3141">Metric2</tspan>
                                       <title>Metric2</title>
                                    </text>
                                    <text id="SvgjsText3142" font-family="Helvetica, Arial, sans-serif" x="20" y="298.56200000000007" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3143">Metric1</tspan>
                                       <title>Metric1</title>
                                    </text>
                                 </g>
                              </g>
                              <g id="SvgjsG2862" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 5;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 6;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 7;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 8;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 9;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Mixed Chart</h5>
                  <h6 class="card-subtitle text-muted">A Mixed Chart is a visualization that allows the combination of two or more distinct
                     graphs.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-mixed" style="min-height: 365px;">
                        <div id="apexchartscpmucih7" class="apexcharts-canvas apexchartscpmucih7 apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg3187" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <foreignObject x="0" y="0" width="423" height="350">
                                 <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="TEAMxA" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(59, 125, 221) !important; color: rgb(59, 125, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="TEAM%20A" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">TEAM A</span></div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="TEAMxB" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(28, 187, 140) !important; color: rgb(28, 187, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="TEAM%20B" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">TEAM B</span></div>
                                    <div class="apexcharts-legend-series" rel="3" seriesname="TEAMxC" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(252, 185, 44) !important; color: rgb(252, 185, 44); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="TEAM%20C" data:collapsed="false" style="color: rgb(108, 117, 125); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">TEAM C</span></div>
                                 </div>
                                 <style type="text/css">	
                                    .apexcharts-legend {	
                                    display: flex;	
                                    overflow: auto;	
                                    padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                    flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    flex-direction: column;	
                                    bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                    justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                    justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                    justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                    cursor: pointer;	
                                    line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                    display: flex;	
                                    align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                    position: relative;	
                                    font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                    pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                    position: relative;	
                                    display: inline-block;	
                                    cursor: pointer;	
                                    margin-right: 3px;	
                                    border-style: solid;
                                    }	
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                    display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                    cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                    display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                    opacity: 0.45;	
                                    }
                                 </style>
                              </foreignObject>
                              <g id="SvgjsG3189" class="apexcharts-inner apexcharts-graphical" transform="translate(66.50986842105263, 30)">
                                 <defs id="SvgjsDefs3188">
                                    <clipPath id="gridRectMaskcpmucih7">
                                       <rect id="SvgjsRect3210" width="375.75" height="275.2" x="-20.75986842105263" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskcpmucih7"></clipPath>
                                    <clipPath id="nonForecastMaskcpmucih7"></clipPath>
                                    <clipPath id="gridRectMarkerMaskcpmucih7">
                                       <rect id="SvgjsRect3211" width="338.23026315789474" height="274.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine3196" x1="0" y1="0" x2="0" y2="270.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG3249" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG3250" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText3252" font-family="Helvetica, Arial, sans-serif" x="1.0994416551246537" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3253">2003</tspan>
                                          <title>2003</title>
                                       </text>
                                       <text id="SvgjsText3255" font-family="Helvetica, Arial, sans-serif" x="65.96649930747922" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3256">Mar '03</tspan>
                                          <title>Mar '03</title>
                                       </text>
                                       <text id="SvgjsText3258" font-family="Helvetica, Arial, sans-serif" x="133.0324402700831" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3259">May '03</tspan>
                                          <title>May '03</title>
                                       </text>
                                       <text id="SvgjsText3261" font-family="Helvetica, Arial, sans-serif" x="200.098381232687" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3262">Jul '03</tspan>
                                          <title>Jul '03</title>
                                       </text>
                                       <text id="SvgjsText3264" font-family="Helvetica, Arial, sans-serif" x="268.26376385041556" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3265">Sep '03</tspan>
                                          <title>Sep '03</title>
                                       </text>
                                       <text id="SvgjsText3267" font-family="Helvetica, Arial, sans-serif" x="335.3297048130195" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3268"></tspan>
                                          <title></title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine3269" x1="-16.25986842105263" y1="271.2" x2="350.4901315789474" y2="271.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG3296" class="apexcharts-grid">
                                    <g id="SvgjsG3297" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine3304" x1="-16.25986842105263" y1="0" x2="350.4901315789474" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3305" x1="-16.25986842105263" y1="27.02" x2="350.4901315789474" y2="27.02" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3306" x1="-16.25986842105263" y1="54.04" x2="350.4901315789474" y2="54.04" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3307" x1="-16.25986842105263" y1="81.06" x2="350.4901315789474" y2="81.06" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3308" x1="-16.25986842105263" y1="108.08" x2="350.4901315789474" y2="108.08" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3309" x1="-16.25986842105263" y1="135.1" x2="350.4901315789474" y2="135.1" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3310" x1="-16.25986842105263" y1="162.12" x2="350.4901315789474" y2="162.12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3311" x1="-16.25986842105263" y1="189.14000000000001" x2="350.4901315789474" y2="189.14000000000001" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3312" x1="-16.25986842105263" y1="216.16000000000003" x2="350.4901315789474" y2="216.16000000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3313" x1="-16.25986842105263" y1="243.18000000000004" x2="350.4901315789474" y2="243.18000000000004" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3314" x1="-16.25986842105263" y1="270.20000000000005" x2="350.4901315789474" y2="270.20000000000005" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG3298" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine3299" x1="1.0994416551246537" y1="271.2" x2="1.0994416551246537" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3300" x1="65.96649930747922" y1="271.2" x2="65.96649930747922" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3301" x1="133.0324402700831" y1="271.2" x2="133.0324402700831" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3302" x1="200.098381232687" y1="271.2" x2="200.098381232687" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3303" x1="268.26376385041556" y1="271.2" x2="268.26376385041556" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3316" x1="0" y1="270.2" x2="334.23026315789474" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine3315" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG3212" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG3213" class="apexcharts-series" seriesName="TEAMxB" data:longestSeries="true" rel="1" data:realIndex="1">
                                       <path id="SvgjsPath3216" d="M 0 270.2L 0 92.75522388059704C 11.928941958102493 92.75522388059704 22.153749350761778 48.39402985074631 34.08269130886427 48.39402985074631C 44.857219529085874 48.39402985074631 54.09252943213297 104.85373134328361 64.86705765235457 104.85373134328361C 76.79599961045707 104.85373134328361 87.02080700311635 5.684341886080802e-14 98.94974896121884 5.684341886080802e-14C 110.4938863400277 5.684341886080802e-14 120.3888612361496 181.47761194029852 131.93299861495845 181.47761194029852C 143.86194057306093 181.47761194029852 154.08674796572024 96.78805970149256 166.01568992382272 96.78805970149256C 177.5598273026316 96.78805970149256 187.45480219875347 185.51044776119403 198.99893957756234 185.51044776119403C 210.92788153566482 185.51044776119403 221.15268892832412 104.85373134328361 233.0816308864266 104.85373134328361C 245.0105728445291 104.85373134328361 255.2353802371884 44.36119402985079 267.1643221952909 44.36119402985079C 278.7084595740997 44.36119402985079 288.60343447022166 161.3134328358209 300.1475718490305 161.3134328358209C 312.076513807133 161.3134328358209 322.30132119979226 96.78805970149256 334.23026315789474 96.78805970149256C 334.23026315789474 96.78805970149256 334.23026315789474 96.78805970149256 334.23026315789474 270.2M 334.23026315789474 96.78805970149256z" fill="rgba(28,187,140,0.25)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 0 270.2L 0 92.75522388059704C 11.928941958102493 92.75522388059704 22.153749350761778 48.39402985074631 34.08269130886427 48.39402985074631C 44.857219529085874 48.39402985074631 54.09252943213297 104.85373134328361 64.86705765235457 104.85373134328361C 76.79599961045707 104.85373134328361 87.02080700311635 5.684341886080802e-14 98.94974896121884 5.684341886080802e-14C 110.4938863400277 5.684341886080802e-14 120.3888612361496 181.47761194029852 131.93299861495845 181.47761194029852C 143.86194057306093 181.47761194029852 154.08674796572024 96.78805970149256 166.01568992382272 96.78805970149256C 177.5598273026316 96.78805970149256 187.45480219875347 185.51044776119403 198.99893957756234 185.51044776119403C 210.92788153566482 185.51044776119403 221.15268892832412 104.85373134328361 233.0816308864266 104.85373134328361C 245.0105728445291 104.85373134328361 255.2353802371884 44.36119402985079 267.1643221952909 44.36119402985079C 278.7084595740997 44.36119402985079 288.60343447022166 161.3134328358209 300.1475718490305 161.3134328358209C 312.076513807133 161.3134328358209 322.30132119979226 96.78805970149256 334.23026315789474 96.78805970149256C 334.23026315789474 96.78805970149256 334.23026315789474 96.78805970149256 334.23026315789474 270.2M 334.23026315789474 96.78805970149256z" pathFrom="M -1 270.2L -1 270.2L 34.08269130886427 270.2L 64.86705765235457 270.2L 98.94974896121884 270.2L 131.93299861495845 270.2L 166.01568992382272 270.2L 198.99893957756234 270.2L 233.0816308864266 270.2L 267.1643221952909 270.2L 300.1475718490305 270.2L 334.23026315789474 270.2"></path>
                                       <path id="SvgjsPath3217" d="M 0 92.75522388059704C 11.928941958102493 92.75522388059704 22.153749350761778 48.39402985074631 34.08269130886427 48.39402985074631C 44.857219529085874 48.39402985074631 54.09252943213297 104.85373134328361 64.86705765235457 104.85373134328361C 76.79599961045707 104.85373134328361 87.02080700311635 5.684341886080802e-14 98.94974896121884 5.684341886080802e-14C 110.4938863400277 5.684341886080802e-14 120.3888612361496 181.47761194029852 131.93299861495845 181.47761194029852C 143.86194057306093 181.47761194029852 154.08674796572024 96.78805970149256 166.01568992382272 96.78805970149256C 177.5598273026316 96.78805970149256 187.45480219875347 185.51044776119403 198.99893957756234 185.51044776119403C 210.92788153566482 185.51044776119403 221.15268892832412 104.85373134328361 233.0816308864266 104.85373134328361C 245.0105728445291 104.85373134328361 255.2353802371884 44.36119402985079 267.1643221952909 44.36119402985079C 278.7084595740997 44.36119402985079 288.60343447022166 161.3134328358209 300.1475718490305 161.3134328358209C 312.076513807133 161.3134328358209 322.30132119979226 96.78805970149256 334.23026315789474 96.78805970149256" fill="none" fill-opacity="1" stroke="#1cbb8c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 0 92.75522388059704C 11.928941958102493 92.75522388059704 22.153749350761778 48.39402985074631 34.08269130886427 48.39402985074631C 44.857219529085874 48.39402985074631 54.09252943213297 104.85373134328361 64.86705765235457 104.85373134328361C 76.79599961045707 104.85373134328361 87.02080700311635 5.684341886080802e-14 98.94974896121884 5.684341886080802e-14C 110.4938863400277 5.684341886080802e-14 120.3888612361496 181.47761194029852 131.93299861495845 181.47761194029852C 143.86194057306093 181.47761194029852 154.08674796572024 96.78805970149256 166.01568992382272 96.78805970149256C 177.5598273026316 96.78805970149256 187.45480219875347 185.51044776119403 198.99893957756234 185.51044776119403C 210.92788153566482 185.51044776119403 221.15268892832412 104.85373134328361 233.0816308864266 104.85373134328361C 245.0105728445291 104.85373134328361 255.2353802371884 44.36119402985079 267.1643221952909 44.36119402985079C 278.7084595740997 44.36119402985079 288.60343447022166 161.3134328358209 300.1475718490305 161.3134328358209C 312.076513807133 161.3134328358209 322.30132119979226 96.78805970149256 334.23026315789474 96.78805970149256" pathFrom="M -1 270.2L -1 270.2L 34.08269130886427 270.2L 64.86705765235457 270.2L 98.94974896121884 270.2L 131.93299861495845 270.2L 166.01568992382272 270.2L 198.99893957756234 270.2L 233.0816308864266 270.2L 267.1643221952909 270.2L 300.1475718490305 270.2L 334.23026315789474 270.2"></path>
                                       <g id="SvgjsG3214" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle3322" r="0" cx="0" cy="0" class="apexcharts-marker wmtgmn74t" stroke="#ffffff" fill="#3b7ddd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG3218" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG3219" class="apexcharts-series" rel="1" seriesName="TEAMxA" data:realIndex="0">
                                       <path id="SvgjsPath3223" d="M -7.696091585872577 270.2L -7.696091585872577 177.444776119403Q -7.696091585872577 177.444776119403 -7.696091585872577 177.444776119403L 7.696091585872577 177.444776119403Q 7.696091585872577 177.444776119403 7.696091585872577 177.444776119403L 7.696091585872577 177.444776119403L 7.696091585872577 270.2L 7.696091585872577 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M -7.696091585872577 270.2L -7.696091585872577 177.444776119403Q -7.696091585872577 177.444776119403 -7.696091585872577 177.444776119403L 7.696091585872577 177.444776119403Q 7.696091585872577 177.444776119403 7.696091585872577 177.444776119403L 7.696091585872577 177.444776119403L 7.696091585872577 270.2L 7.696091585872577 270.2z" pathFrom="M -7.696091585872577 270.2L -7.696091585872577 270.2L 7.696091585872577 270.2L 7.696091585872577 270.2L 7.696091585872577 270.2L 7.696091585872577 270.2L 7.696091585872577 270.2L -7.696091585872577 270.2" cy="177.444776119403" cx="7.696091585872577" j="0" val="23" barHeight="92.755223880597" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3225" d="M 26.386599722991694 270.2L 26.386599722991694 225.83880597014925Q 26.386599722991694 225.83880597014925 26.386599722991694 225.83880597014925L 41.77878289473685 225.83880597014925Q 41.77878289473685 225.83880597014925 41.77878289473685 225.83880597014925L 41.77878289473685 225.83880597014925L 41.77878289473685 270.2L 41.77878289473685 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 26.386599722991694 270.2L 26.386599722991694 225.83880597014925Q 26.386599722991694 225.83880597014925 26.386599722991694 225.83880597014925L 41.77878289473685 225.83880597014925Q 41.77878289473685 225.83880597014925 41.77878289473685 225.83880597014925L 41.77878289473685 225.83880597014925L 41.77878289473685 270.2L 41.77878289473685 270.2z" pathFrom="M 26.386599722991694 270.2L 26.386599722991694 270.2L 41.77878289473685 270.2L 41.77878289473685 270.2L 41.77878289473685 270.2L 41.77878289473685 270.2L 41.77878289473685 270.2L 26.386599722991694 270.2" cy="225.83880597014925" cx="41.77878289473685" j="1" val="11" barHeight="44.361194029850736" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3227" d="M 57.170966066481995 270.2L 57.170966066481995 181.47761194029852Q 57.170966066481995 181.47761194029852 57.170966066481995 181.47761194029852L 72.56314923822715 181.47761194029852Q 72.56314923822715 181.47761194029852 72.56314923822715 181.47761194029852L 72.56314923822715 181.47761194029852L 72.56314923822715 270.2L 72.56314923822715 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 57.170966066481995 270.2L 57.170966066481995 181.47761194029852Q 57.170966066481995 181.47761194029852 57.170966066481995 181.47761194029852L 72.56314923822715 181.47761194029852Q 72.56314923822715 181.47761194029852 72.56314923822715 181.47761194029852L 72.56314923822715 181.47761194029852L 72.56314923822715 270.2L 72.56314923822715 270.2z" pathFrom="M 57.170966066481995 270.2L 57.170966066481995 270.2L 72.56314923822715 270.2L 72.56314923822715 270.2L 72.56314923822715 270.2L 72.56314923822715 270.2L 72.56314923822715 270.2L 57.170966066481995 270.2" cy="181.47761194029852" cx="72.56314923822715" j="2" val="22" barHeight="88.72238805970147" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3229" d="M 91.25365737534626 270.2L 91.25365737534626 161.3134328358209Q 91.25365737534626 161.3134328358209 91.25365737534626 161.3134328358209L 106.64584054709142 161.3134328358209Q 106.64584054709142 161.3134328358209 106.64584054709142 161.3134328358209L 106.64584054709142 161.3134328358209L 106.64584054709142 270.2L 106.64584054709142 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 91.25365737534626 270.2L 91.25365737534626 161.3134328358209Q 91.25365737534626 161.3134328358209 91.25365737534626 161.3134328358209L 106.64584054709142 161.3134328358209Q 106.64584054709142 161.3134328358209 106.64584054709142 161.3134328358209L 106.64584054709142 161.3134328358209L 106.64584054709142 270.2L 106.64584054709142 270.2z" pathFrom="M 91.25365737534626 270.2L 91.25365737534626 270.2L 106.64584054709142 270.2L 106.64584054709142 270.2L 106.64584054709142 270.2L 106.64584054709142 270.2L 106.64584054709142 270.2L 91.25365737534626 270.2" cy="161.3134328358209" cx="106.64584054709142" j="3" val="27" barHeight="108.88656716417908" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3231" d="M 124.23690702908587 270.2L 124.23690702908587 217.7731343283582Q 124.23690702908587 217.7731343283582 124.23690702908587 217.7731343283582L 139.62909020083103 217.7731343283582Q 139.62909020083103 217.7731343283582 139.62909020083103 217.7731343283582L 139.62909020083103 217.7731343283582L 139.62909020083103 270.2L 139.62909020083103 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 124.23690702908587 270.2L 124.23690702908587 217.7731343283582Q 124.23690702908587 217.7731343283582 124.23690702908587 217.7731343283582L 139.62909020083103 217.7731343283582Q 139.62909020083103 217.7731343283582 139.62909020083103 217.7731343283582L 139.62909020083103 217.7731343283582L 139.62909020083103 270.2L 139.62909020083103 270.2z" pathFrom="M 124.23690702908587 270.2L 124.23690702908587 270.2L 139.62909020083103 270.2L 139.62909020083103 270.2L 139.62909020083103 270.2L 139.62909020083103 270.2L 139.62909020083103 270.2L 124.23690702908587 270.2" cy="217.7731343283582" cx="139.62909020083103" j="4" val="13" barHeight="52.42686567164178" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3233" d="M 158.31959833795014 270.2L 158.31959833795014 181.47761194029852Q 158.31959833795014 181.47761194029852 158.31959833795014 181.47761194029852L 173.7117815096953 181.47761194029852Q 173.7117815096953 181.47761194029852 173.7117815096953 181.47761194029852L 173.7117815096953 181.47761194029852L 173.7117815096953 270.2L 173.7117815096953 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 158.31959833795014 270.2L 158.31959833795014 181.47761194029852Q 158.31959833795014 181.47761194029852 158.31959833795014 181.47761194029852L 173.7117815096953 181.47761194029852Q 173.7117815096953 181.47761194029852 173.7117815096953 181.47761194029852L 173.7117815096953 181.47761194029852L 173.7117815096953 270.2L 173.7117815096953 270.2z" pathFrom="M 158.31959833795014 270.2L 158.31959833795014 270.2L 173.7117815096953 270.2L 173.7117815096953 270.2L 173.7117815096953 270.2L 173.7117815096953 270.2L 173.7117815096953 270.2L 158.31959833795014 270.2" cy="181.47761194029852" cx="173.7117815096953" j="5" val="22" barHeight="88.72238805970147" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3235" d="M 191.30284799168976 270.2L 191.30284799168976 120.9850746268657Q 191.30284799168976 120.9850746268657 191.30284799168976 120.9850746268657L 206.69503116343492 120.9850746268657Q 206.69503116343492 120.9850746268657 206.69503116343492 120.9850746268657L 206.69503116343492 120.9850746268657L 206.69503116343492 270.2L 206.69503116343492 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 191.30284799168976 270.2L 191.30284799168976 120.9850746268657Q 191.30284799168976 120.9850746268657 191.30284799168976 120.9850746268657L 206.69503116343492 120.9850746268657Q 206.69503116343492 120.9850746268657 206.69503116343492 120.9850746268657L 206.69503116343492 120.9850746268657L 206.69503116343492 270.2L 206.69503116343492 270.2z" pathFrom="M 191.30284799168976 270.2L 191.30284799168976 270.2L 206.69503116343492 270.2L 206.69503116343492 270.2L 206.69503116343492 270.2L 206.69503116343492 270.2L 206.69503116343492 270.2L 191.30284799168976 270.2" cy="120.9850746268657" cx="206.69503116343492" j="6" val="37" barHeight="149.2149253731343" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3237" d="M 225.38553930055403 270.2L 225.38553930055403 185.51044776119403Q 225.38553930055403 185.51044776119403 225.38553930055403 185.51044776119403L 240.7777224722992 185.51044776119403Q 240.7777224722992 185.51044776119403 240.7777224722992 185.51044776119403L 240.7777224722992 185.51044776119403L 240.7777224722992 270.2L 240.7777224722992 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 225.38553930055403 270.2L 225.38553930055403 185.51044776119403Q 225.38553930055403 185.51044776119403 225.38553930055403 185.51044776119403L 240.7777224722992 185.51044776119403Q 240.7777224722992 185.51044776119403 240.7777224722992 185.51044776119403L 240.7777224722992 185.51044776119403L 240.7777224722992 270.2L 240.7777224722992 270.2z" pathFrom="M 225.38553930055403 270.2L 225.38553930055403 270.2L 240.7777224722992 270.2L 240.7777224722992 270.2L 240.7777224722992 270.2L 240.7777224722992 270.2L 240.7777224722992 270.2L 225.38553930055403 270.2" cy="185.51044776119403" cx="240.7777224722992" j="7" val="21" barHeight="84.68955223880596" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3239" d="M 259.4682306094183 270.2L 259.4682306094183 92.75522388059704Q 259.4682306094183 92.75522388059704 259.4682306094183 92.75522388059704L 274.86041378116346 92.75522388059704Q 274.86041378116346 92.75522388059704 274.86041378116346 92.75522388059704L 274.86041378116346 92.75522388059704L 274.86041378116346 270.2L 274.86041378116346 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 259.4682306094183 270.2L 259.4682306094183 92.75522388059704Q 259.4682306094183 92.75522388059704 259.4682306094183 92.75522388059704L 274.86041378116346 92.75522388059704Q 274.86041378116346 92.75522388059704 274.86041378116346 92.75522388059704L 274.86041378116346 92.75522388059704L 274.86041378116346 270.2L 274.86041378116346 270.2z" pathFrom="M 259.4682306094183 270.2L 259.4682306094183 270.2L 274.86041378116346 270.2L 274.86041378116346 270.2L 274.86041378116346 270.2L 274.86041378116346 270.2L 274.86041378116346 270.2L 259.4682306094183 270.2" cy="92.75522388059704" cx="274.86041378116346" j="8" val="44" barHeight="177.44477611940295" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3241" d="M 292.4514802631579 270.2L 292.4514802631579 181.47761194029852Q 292.4514802631579 181.47761194029852 292.4514802631579 181.47761194029852L 307.8436634349031 181.47761194029852Q 307.8436634349031 181.47761194029852 307.8436634349031 181.47761194029852L 307.8436634349031 181.47761194029852L 307.8436634349031 270.2L 307.8436634349031 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 292.4514802631579 270.2L 292.4514802631579 181.47761194029852Q 292.4514802631579 181.47761194029852 292.4514802631579 181.47761194029852L 307.8436634349031 181.47761194029852Q 307.8436634349031 181.47761194029852 307.8436634349031 181.47761194029852L 307.8436634349031 181.47761194029852L 307.8436634349031 270.2L 307.8436634349031 270.2z" pathFrom="M 292.4514802631579 270.2L 292.4514802631579 270.2L 307.8436634349031 270.2L 307.8436634349031 270.2L 307.8436634349031 270.2L 307.8436634349031 270.2L 307.8436634349031 270.2L 292.4514802631579 270.2" cy="181.47761194029852" cx="307.8436634349031" j="9" val="22" barHeight="88.72238805970147" barWidth="15.392183171745154"></path>
                                       <path id="SvgjsPath3243" d="M 326.53417157202216 270.2L 326.53417157202216 149.21492537313435Q 326.53417157202216 149.21492537313435 326.53417157202216 149.21492537313435L 341.9263547437673 149.21492537313435Q 341.9263547437673 149.21492537313435 341.9263547437673 149.21492537313435L 341.9263547437673 149.21492537313435L 341.9263547437673 270.2L 341.9263547437673 270.2z" fill="rgba(59,125,221,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 326.53417157202216 270.2L 326.53417157202216 149.21492537313435Q 326.53417157202216 149.21492537313435 326.53417157202216 149.21492537313435L 341.9263547437673 149.21492537313435Q 341.9263547437673 149.21492537313435 341.9263547437673 149.21492537313435L 341.9263547437673 149.21492537313435L 341.9263547437673 270.2L 341.9263547437673 270.2z" pathFrom="M 326.53417157202216 270.2L 326.53417157202216 270.2L 341.9263547437673 270.2L 341.9263547437673 270.2L 341.9263547437673 270.2L 341.9263547437673 270.2L 341.9263547437673 270.2L 326.53417157202216 270.2" cy="149.21492537313435" cx="341.9263547437673" j="10" val="30" barHeight="120.98507462686564" barWidth="15.392183171745154"></path>
                                       <g id="SvgjsG3221" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                          <g id="SvgjsG3222" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3224" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3226" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3228" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3230" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3232" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3234" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3236" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3238" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3240" className="apexcharts-bar-goals-groups"></g>
                                          <g id="SvgjsG3242" className="apexcharts-bar-goals-groups"></g>
                                       </g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG3244" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG3245" class="apexcharts-series" seriesName="TEAMxC" data:longestSeries="true" rel="1" data:realIndex="2">
                                       <path id="SvgjsPath3248" d="M 0 149.21492537313435C 11.928941958102493 149.21492537313435 22.153749350761778 169.37910447761195 34.08269130886427 169.37910447761195C 44.857219529085874 169.37910447761195 54.09252943213297 125.01791044776121 64.86705765235457 125.01791044776121C 76.79599961045707 125.01791044776121 87.02080700311635 149.21492537313435 98.94974896121884 149.21492537313435C 110.4938863400277 149.21492537313435 120.3888612361496 88.72238805970153 131.93299861495845 88.72238805970153C 143.86194057306093 88.72238805970153 154.08674796572024 129.05074626865672 166.01568992382272 129.05074626865672C 177.5598273026316 129.05074626865672 187.45480219875347 12.098507462686598 198.99893957756234 12.098507462686598C 210.92788153566482 12.098507462686598 221.15268892832412 60.49253731343288 233.0816308864266 60.49253731343288C 245.0105728445291 60.49253731343288 255.2353802371884 32.262686567164224 267.1643221952909 32.262686567164224C 278.7084595740997 32.262686567164224 288.60343447022166 125.01791044776121 300.1475718490305 125.01791044776121C 312.076513807133 125.01791044776121 322.30132119979226 112.91940298507464 334.23026315789474 112.91940298507464" fill="none" fill-opacity="1" stroke="rgba(252,185,44,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskcpmucih7)" pathTo="M 0 149.21492537313435C 11.928941958102493 149.21492537313435 22.153749350761778 169.37910447761195 34.08269130886427 169.37910447761195C 44.857219529085874 169.37910447761195 54.09252943213297 125.01791044776121 64.86705765235457 125.01791044776121C 76.79599961045707 125.01791044776121 87.02080700311635 149.21492537313435 98.94974896121884 149.21492537313435C 110.4938863400277 149.21492537313435 120.3888612361496 88.72238805970153 131.93299861495845 88.72238805970153C 143.86194057306093 88.72238805970153 154.08674796572024 129.05074626865672 166.01568992382272 129.05074626865672C 177.5598273026316 129.05074626865672 187.45480219875347 12.098507462686598 198.99893957756234 12.098507462686598C 210.92788153566482 12.098507462686598 221.15268892832412 60.49253731343288 233.0816308864266 60.49253731343288C 245.0105728445291 60.49253731343288 255.2353802371884 32.262686567164224 267.1643221952909 32.262686567164224C 278.7084595740997 32.262686567164224 288.60343447022166 125.01791044776121 300.1475718490305 125.01791044776121C 312.076513807133 125.01791044776121 322.30132119979226 112.91940298507464 334.23026315789474 112.91940298507464" pathFrom="M -1 270.2L -1 270.2L 34.08269130886427 270.2L 64.86705765235457 270.2L 98.94974896121884 270.2L 131.93299861495845 270.2L 166.01568992382272 270.2L 198.99893957756234 270.2L 233.0816308864266 270.2L 267.1643221952909 270.2L 300.1475718490305 270.2L 334.23026315789474 270.2"></path>
                                       <g id="SvgjsG3246" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                          <g class="apexcharts-series-markers">
                                             <circle id="SvgjsCircle3323" r="0" cx="0" cy="0" class="apexcharts-marker w8gqrhz3aj" stroke="#ffffff" fill="#fcb92c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                          </g>
                                       </g>
                                    </g>
                                    <g id="SvgjsG3215" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    <g id="SvgjsG3220" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG3247" class="apexcharts-datalabels" data:realIndex="2"></g>
                                 </g>
                                 <line id="SvgjsLine3317" x1="-16.25986842105263" y1="0" x2="350.4901315789474" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine3318" x1="-16.25986842105263" y1="0" x2="350.4901315789474" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG3319" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG3320" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG3321" class="apexcharts-point-annotations"></g>
                                 <rect id="SvgjsRect3324" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                 <rect id="SvgjsRect3325" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect3195" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG3270" class="apexcharts-yaxis" rel="0" transform="translate(16.25, 0)">
                                 <g id="SvgjsG3271" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText3272" font-family="Helvetica, Arial, sans-serif" x="20" y="32" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3273">67</tspan>
                                       <title>67</title>
                                    </text>
                                    <text id="SvgjsText3274" font-family="Helvetica, Arial, sans-serif" x="20" y="59.019999999999996" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3275">60</tspan>
                                       <title>60</title>
                                    </text>
                                    <text id="SvgjsText3276" font-family="Helvetica, Arial, sans-serif" x="20" y="86.03999999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3277">54</tspan>
                                       <title>54</title>
                                    </text>
                                    <text id="SvgjsText3278" font-family="Helvetica, Arial, sans-serif" x="20" y="113.05999999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3279">47</tspan>
                                       <title>47</title>
                                    </text>
                                    <text id="SvgjsText3280" font-family="Helvetica, Arial, sans-serif" x="20" y="140.07999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3281">40</tspan>
                                       <title>40</title>
                                    </text>
                                    <text id="SvgjsText3282" font-family="Helvetica, Arial, sans-serif" x="20" y="167.1" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3283">34</tspan>
                                       <title>34</title>
                                    </text>
                                    <text id="SvgjsText3284" font-family="Helvetica, Arial, sans-serif" x="20" y="194.12" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3285">27</tspan>
                                       <title>27</title>
                                    </text>
                                    <text id="SvgjsText3286" font-family="Helvetica, Arial, sans-serif" x="20" y="221.14000000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3287">20</tspan>
                                       <title>20</title>
                                    </text>
                                    <text id="SvgjsText3288" font-family="Helvetica, Arial, sans-serif" x="20" y="248.16000000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3289">13</tspan>
                                       <title>13</title>
                                    </text>
                                    <text id="SvgjsText3290" font-family="Helvetica, Arial, sans-serif" x="20" y="275.18" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3291">7</tspan>
                                       <title>7</title>
                                    </text>
                                    <text id="SvgjsText3292" font-family="Helvetica, Arial, sans-serif" x="20" y="302.2" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3293">0</tspan>
                                       <title>0</title>
                                    </text>
                                 </g>
                                 <g id="SvgjsG3294" class="apexcharts-yaxis-title">
                                    <text id="SvgjsText3295" font-family="Helvetica, Arial, sans-serif" x="11.6953125" y="165.1" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -6.9609375 160.6015625)">Points</text>
                                 </g>
                              </g>
                              <g id="SvgjsG3190" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(28, 187, 140);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 185, 44);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-zoomin-icon" title="Zoom In">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoomout-icon" title="Zoom Out">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-pan-icon" title="Panning">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <defs>
                                       <path d="M0 0h24v24H0z" id="a"></path>
                                    </defs>
                                    <clipPath id="b">
                                       <use overflow="visible" xlink:href="#a"></use>
                                    </clipPath>
                                    <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-reset-icon" title="Reset Zoom">
                                 <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">Candlestick Chart</h5>
                  <h6 class="card-subtitle text-muted">A candlestick chart is a style of financial chart used to describe price movements.
                  </h6>
               </div>
               <div class="card-body">
                  <div class="chart w-100">
                     <div id="apexcharts-candlestick" style="min-height: 365px;">
                        <div id="apexcharts79mo21un" class="apexcharts-canvas apexcharts79mo21un apexcharts-theme-light" style="width: 423px; height: 350px;">
                           <svg id="SvgjsSvg3326" width="423" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG3328" class="apexcharts-inner apexcharts-graphical" transform="translate(70.53273231190832, 30)">
                                 <defs id="SvgjsDefs3327">
                                    <clipPath id="gridRectMask79mo21un">
                                       <rect id="SvgjsRect3359" width="363.46875" height="289.2" x="-14.501482311908322" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask79mo21un"></clipPath>
                                    <clipPath id="nonForecastMask79mo21un"></clipPath>
                                    <clipPath id="gridRectMarkerMask79mo21un">
                                       <rect id="SvgjsRect3360" width="338.46578537618336" height="292.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine3334" x1="0" y1="0" x2="0" y2="288.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="288.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG3387" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG3388" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText3390" font-family="Helvetica, Arial, sans-serif" x="0.4999488570645491" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3391">Feb '16</tspan>
                                          <title>Feb '16</title>
                                       </text>
                                       <text id="SvgjsText3393" font-family="Helvetica, Arial, sans-serif" x="60.99376056187499" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3394">Jun '16</tspan>
                                          <title>Jun '16</title>
                                       </text>
                                       <text id="SvgjsText3396" font-family="Helvetica, Arial, sans-serif" x="121.98752112375" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3397">Oct '16</tspan>
                                          <title>Oct '16</title>
                                       </text>
                                       <text id="SvgjsText3399" font-family="Helvetica, Arial, sans-serif" x="183.48123054268953" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3400">Feb '17</tspan>
                                          <title>Feb '17</title>
                                       </text>
                                       <text id="SvgjsText3402" font-family="Helvetica, Arial, sans-serif" x="243.47509339043543" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3403">Jun '17</tspan>
                                          <title>Jun '17</title>
                                       </text>
                                       <text id="SvgjsText3405" font-family="Helvetica, Arial, sans-serif" x="304.4688539523104" y="317.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan3406">Oct '17</tspan>
                                          <title>Oct '17</title>
                                       </text>
                                    </g>
                                    <line id="SvgjsLine3407" x1="-12.001482311908322" y1="289.2" x2="346.4672676880917" y2="289.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG3420" class="apexcharts-grid">
                                    <g id="SvgjsG3421" class="apexcharts-gridlines-horizontal">
                                       <line id="SvgjsLine3429" x1="-12.001482311908322" y1="0" x2="346.4672676880917" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3430" x1="-12.001482311908322" y1="72.05" x2="346.4672676880917" y2="72.05" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3431" x1="-12.001482311908322" y1="144.1" x2="346.4672676880917" y2="144.1" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3432" x1="-12.001482311908322" y1="216.14999999999998" x2="346.4672676880917" y2="216.14999999999998" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine3433" x1="-12.001482311908322" y1="288.2" x2="346.4672676880917" y2="288.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG3422" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine3423" x1="0.4999488570645491" y1="289.2" x2="0.4999488570645491" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3424" x1="60.99376056187499" y1="289.2" x2="60.99376056187499" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3425" x1="121.98752112375" y1="289.2" x2="121.98752112375" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3426" x1="183.48123054268953" y1="289.2" x2="183.48123054268953" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3427" x1="243.47509339043543" y1="289.2" x2="243.47509339043543" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3428" x1="304.4688539523104" y1="289.2" x2="304.4688539523104" y2="295.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine3435" x1="0" y1="288.2" x2="334.46578537618336" y2="288.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine3434" x1="0" y1="1" x2="0" y2="288.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 </g>
                                 <g id="SvgjsG3361" class="apexcharts-candlestick-series apexcharts-plot-series">
                                    <g id="SvgjsG3362" class="apexcharts-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath3364" d="M -4.899498799232582 160.67150000000004L 0 160.67150000000004L 0 125.51110000000006L 0 160.67150000000004L 4.899498799232582 160.67150000000004L 4.899498799232582 187.61820000000012L 0 187.61820000000012L 0 193.23810000000003L 0 187.61820000000012L -4.899498799232582 187.61820000000012L -4.899498799232582 160.17150000000004" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M -4.899498799232582 160.67150000000004L 0 160.67150000000004L 0 125.51110000000006L 0 160.67150000000004L 4.899498799232582 160.67150000000004L 4.899498799232582 187.61820000000012L 0 187.61820000000012L 0 193.23810000000003L 0 187.61820000000012L -4.899498799232582 187.61820000000012L -4.899498799232582 160.17150000000004" pathFrom="M 0 187.61820000000012M -4.899498799232582 187.61820000000012" cy="160.67150000000004" cx="4.399498799232582" j="0" val="53.85" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3365" d="M 9.599018055639343 163.40940000000012L 14.498516854871925 163.40940000000012L 14.498516854871925 144.24410000000012L 14.498516854871925 163.40940000000012L 19.398015654104505 163.40940000000012L 19.398015654104505 173.6405000000001L 14.498516854871925 173.6405000000001L 14.498516854871925 196.69650000000013L 14.498516854871925 173.6405000000001L 9.599018055639343 173.6405000000001L 9.599018055639343 162.90940000000012" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 9.599018055639343 163.40940000000012L 14.498516854871925 163.40940000000012L 14.498516854871925 144.24410000000012L 14.498516854871925 163.40940000000012L 19.398015654104505 163.40940000000012L 19.398015654104505 173.6405000000001L 14.498516854871925 173.6405000000001L 14.498516854871925 196.69650000000013L 14.498516854871925 173.6405000000001L 9.599018055639343 173.6405000000001L 9.599018055639343 162.90940000000012" pathFrom="M 14.498516854871925 173.6405000000001M 9.599018055639343 173.6405000000001" cy="163.40940000000012" cx="18.898015654104505" j="1" val="52.95" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3366" d="M 25.097432624640366 173.4964000000001L 29.996931423872947 173.4964000000001L 29.996931423872947 161.68020000000013L 29.996931423872947 173.4964000000001L 34.896430223105526 173.4964000000001L 34.896430223105526 180.4132000000002L 29.996931423872947 180.4132000000002L 29.996931423872947 193.95860000000016L 29.996931423872947 180.4132000000002L 25.097432624640366 180.4132000000002L 25.097432624640366 172.9964000000001" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 25.097432624640366 173.4964000000001L 29.996931423872947 173.4964000000001L 29.996931423872947 161.68020000000013L 29.996931423872947 173.4964000000001L 34.896430223105526 173.4964000000001L 34.896430223105526 180.4132000000002L 29.996931423872947 180.4132000000002L 29.996931423872947 193.95860000000016L 29.996931423872947 180.4132000000002L 25.097432624640366 180.4132000000002L 25.097432624640366 172.9964000000001" pathFrom="M 29.996931423872947 180.4132000000002M 25.097432624640366 180.4132000000002" cy="173.4964000000001" cx="34.396430223105526" j="2" val="52.48" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3367" d="M 40.09589833657684 179.54860000000008L 44.99539713580942 179.54860000000008L 44.99539713580942 175.94610000000011L 44.99539713580942 179.54860000000008L 49.894895935042 179.54860000000008L 49.894895935042 227.10160000000008L 44.99539713580942 227.10160000000008L 44.99539713580942 246.69920000000002L 44.99539713580942 227.10160000000008L 40.09589833657684 227.10160000000008L 40.09589833657684 179.04860000000008" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 40.09589833657684 179.54860000000008L 44.99539713580942 179.54860000000008L 44.99539713580942 175.94610000000011L 44.99539713580942 179.54860000000008L 49.894895935042 179.54860000000008L 49.894895935042 227.10160000000008L 44.99539713580942 227.10160000000008L 44.99539713580942 246.69920000000002L 44.99539713580942 227.10160000000008L 40.09589833657684 227.10160000000008L 40.09589833657684 179.04860000000008" pathFrom="M 44.99539713580942 227.10160000000008M 40.09589833657684 227.10160000000008" cy="179.54860000000008" cx="49.394895935042" j="3" val="49.24" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3368" d="M 55.59431290557786 176.0902000000001L 60.49381170481044 176.0902000000001L 60.49381170481044 174.93740000000014L 60.49381170481044 176.0902000000001L 65.39331050404303 176.0902000000001L 65.39331050404303 229.11900000000003L 60.49381170481044 229.11900000000003L 60.49381170481044 249.293L 60.49381170481044 229.11900000000003L 55.59431290557786 229.11900000000003L 55.59431290557786 175.5902000000001" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 55.59431290557786 176.0902000000001L 60.49381170481044 176.0902000000001L 60.49381170481044 174.93740000000014L 60.49381170481044 176.0902000000001L 65.39331050404303 176.0902000000001L 65.39331050404303 229.11900000000003L 60.49381170481044 229.11900000000003L 60.49381170481044 249.293L 60.49381170481044 229.11900000000003L 55.59431290557786 229.11900000000003L 55.59431290557786 175.5902000000001" pathFrom="M 60.49381170481044 229.11900000000003M 55.59431290557786 229.11900000000003" cy="176.0902000000001" cx="64.89331050404303" j="4" val="52.78" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3369" d="M 70.59277861751434 175.36970000000008L 75.49227741674693 175.36970000000008L 75.49227741674693 166.0032000000001L 75.49227741674693 175.36970000000008L 80.3917762159795 175.36970000000008L 80.3917762159795 183.15110000000016L 75.49227741674693 183.15110000000016L 75.49227741674693 211.53880000000015L 75.49227741674693 183.15110000000016L 70.59277861751434 183.15110000000016L 70.59277861751434 174.86970000000008" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 70.59277861751434 175.36970000000008L 75.49227741674693 175.36970000000008L 75.49227741674693 166.0032000000001L 75.49227741674693 175.36970000000008L 80.3917762159795 175.36970000000008L 80.3917762159795 183.15110000000016L 75.49227741674693 183.15110000000016L 75.49227741674693 211.53880000000015L 75.49227741674693 183.15110000000016L 70.59277861751434 183.15110000000016L 70.59277861751434 174.86970000000008" pathFrom="M 75.49227741674693 183.15110000000016M 70.59277861751434 183.15110000000016" cy="175.36970000000008" cx="79.8917762159795" j="5" val="52.29" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3370" d="M 86.09119318651537 178.97220000000016L 90.99069198574796 178.97220000000016L 90.99069198574796 151.59320000000014L 90.99069198574796 178.97220000000016L 95.89019078498053 178.97220000000016L 95.89019078498053 184.4480000000001L 90.99069198574796 184.4480000000001L 90.99069198574796 192.51760000000013L 90.99069198574796 184.4480000000001L 86.09119318651537 184.4480000000001L 86.09119318651537 178.47220000000016" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 86.09119318651537 178.97220000000016L 90.99069198574796 178.97220000000016L 90.99069198574796 151.59320000000014L 90.99069198574796 178.97220000000016L 95.89019078498053 178.97220000000016L 95.89019078498053 184.4480000000001L 90.99069198574796 184.4480000000001L 90.99069198574796 192.51760000000013L 90.99069198574796 184.4480000000001L 86.09119318651537 184.4480000000001L 86.09119318651537 178.47220000000016" pathFrom="M 90.99069198574796 184.4480000000001M 86.09119318651537 184.4480000000001" cy="178.97220000000016" cx="95.39019078498053" j="6" val="52.58" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3371" d="M 101.58960775551637 114.84770000000003L 106.48910655474896 114.84770000000003L 106.48910655474896 110.23650000000009L 106.48910655474896 114.84770000000003L 111.38860535398153 114.84770000000003L 111.38860535398153 176.37840000000017L 106.48910655474896 176.37840000000017L 106.48910655474896 185.1685000000001L 106.48910655474896 176.37840000000017L 101.58960775551637 176.37840000000017L 101.58960775551637 114.34770000000003" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 101.58960775551637 114.84770000000003L 106.48910655474896 114.84770000000003L 106.48910655474896 110.23650000000009L 106.48910655474896 114.84770000000003L 111.38860535398153 114.84770000000003L 111.38860535398153 176.37840000000017L 106.48910655474896 176.37840000000017L 106.48910655474896 185.1685000000001L 106.48910655474896 176.37840000000017L 101.58960775551637 176.37840000000017L 101.58960775551637 114.34770000000003" pathFrom="M 106.48910655474896 176.37840000000017M 101.58960775551637 176.37840000000017" cy="114.84770000000003" cx="110.88860535398153" j="7" val="57.03" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3372" d="M 116.58807346745286 114.70360000000016L 121.48757226668545 114.70360000000016L 121.48757226668545 98.70850000000007L 121.48757226668545 114.70360000000016L 126.38707106591802 114.70360000000016L 126.38707106591802 126.95210000000009L 121.48757226668545 126.95210000000009L 121.48757226668545 232.28920000000005L 121.48757226668545 126.95210000000009L 116.58807346745286 126.95210000000009L 116.58807346745286 114.20360000000016" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 116.58807346745286 114.70360000000016L 121.48757226668545 114.70360000000016L 121.48757226668545 98.70850000000007L 121.48757226668545 114.70360000000016L 126.38707106591802 114.70360000000016L 126.38707106591802 126.95210000000009L 121.48757226668545 126.95210000000009L 121.48757226668545 232.28920000000005L 121.48757226668545 126.95210000000009L 116.58807346745286 126.95210000000009L 116.58807346745286 114.20360000000016" pathFrom="M 121.48757226668545 126.95210000000009M 116.58807346745286 126.95210000000009" cy="114.70360000000016" cx="125.88707106591802" j="8" val="56.19" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3373" d="M 132.08648803645386 89.48610000000008L 136.98598683568645 89.48610000000008L 136.98598683568645 88.62150000000008L 136.98598683568645 89.48610000000008L 141.885485634919 89.48610000000008L 141.885485634919 128.3931L 136.98598683568645 128.3931L 136.98598683568645 137.18320000000017L 136.98598683568645 128.3931L 132.08648803645386 128.3931L 132.08648803645386 88.98610000000008" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 132.08648803645386 89.48610000000008L 136.98598683568645 89.48610000000008L 136.98598683568645 88.62150000000008L 136.98598683568645 89.48610000000008L 141.885485634919 89.48610000000008L 141.885485634919 128.3931L 136.98598683568645 128.3931L 136.98598683568645 137.18320000000017L 136.98598683568645 128.3931L 132.08648803645386 128.3931L 132.08648803645386 88.98610000000008" pathFrom="M 136.98598683568645 128.3931M 132.08648803645386 128.3931" cy="89.48610000000008" cx="141.385485634919" j="9" val="58.79" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3374" d="M 147.08495374839035 85.73950000000013L 151.98445254762294 85.73950000000013L 151.98445254762294 77.09350000000018L 151.98445254762294 85.73950000000013L 156.8839513468555 85.73950000000013L 156.8839513468555 89.63020000000006L 151.98445254762294 89.63020000000006L 151.98445254762294 97.55570000000012L 151.98445254762294 89.63020000000006L 147.08495374839035 89.63020000000006L 147.08495374839035 85.23950000000013" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 147.08495374839035 85.73950000000013L 151.98445254762294 85.73950000000013L 151.98445254762294 77.09350000000018L 151.98445254762294 85.73950000000013L 156.8839513468555 85.73950000000013L 156.8839513468555 89.63020000000006L 151.98445254762294 89.63020000000006L 151.98445254762294 97.55570000000012L 151.98445254762294 89.63020000000006L 147.08495374839035 89.63020000000006L 147.08495374839035 85.23950000000013" pathFrom="M 151.98445254762294 89.63020000000006M 147.08495374839035 89.63020000000006" cy="85.73950000000013" cx="156.3839513468555" j="10" val="59.05" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3375" d="M 162.58336831739138 67.15060000000005L 167.48286711662396 67.15060000000005L 167.48286711662396 56.05490000000009L 167.48286711662396 67.15060000000005L 172.38236591585655 67.15060000000005L 172.38236591585655 81.12830000000008L 167.48286711662396 81.12830000000008L 167.48286711662396 81.41650000000004L 167.48286711662396 81.12830000000008L 162.58336831739138 81.12830000000008L 162.58336831739138 66.65060000000005" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 162.58336831739138 67.15060000000005L 167.48286711662396 67.15060000000005L 167.48286711662396 56.05490000000009L 167.48286711662396 67.15060000000005L 172.38236591585655 67.15060000000005L 172.38236591585655 81.12830000000008L 167.48286711662396 81.12830000000008L 167.48286711662396 81.41650000000004L 167.48286711662396 81.12830000000008L 162.58336831739138 81.12830000000008L 162.58336831739138 66.65060000000005" pathFrom="M 167.48286711662396 81.12830000000008M 162.58336831739138 81.12830000000008" cy="67.15060000000005" cx="171.88236591585655" j="11" val="60.34" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3376" d="M 178.08178288639238 66.28600000000017L 182.98128168562496 66.28600000000017L 182.98128168562496 64.55680000000007L 182.98128168562496 66.28600000000017L 187.88078048485755 66.28600000000017L 187.88078048485755 116.28870000000006L 182.98128168562496 116.28870000000006L 182.98128168562496 119.45890000000009L 182.98128168562496 116.28870000000006L 178.08178288639238 116.28870000000006L 178.08178288639238 65.78600000000017" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 178.08178288639238 66.28600000000017L 182.98128168562496 66.28600000000017L 182.98128168562496 64.55680000000007L 182.98128168562496 66.28600000000017L 187.88078048485755 66.28600000000017L 187.88078048485755 116.28870000000006L 182.98128168562496 116.28870000000006L 182.98128168562496 119.45890000000009L 182.98128168562496 116.28870000000006L 178.08178288639238 116.28870000000006L 178.08178288639238 65.78600000000017" pathFrom="M 182.98128168562496 116.28870000000006M 178.08178288639238 116.28870000000006" cy="66.28600000000017" cx="187.38078048485755" j="12" val="56.93" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3377" d="M 192.08035088419976 114.99180000000001L 196.97984968343235 114.99180000000001L 196.97984968343235 76.22890000000007L 196.97984968343235 114.99180000000001L 201.8793484826649 114.99180000000001L 201.8793484826649 117.87380000000007L 196.97984968343235 117.87380000000007L 196.97984968343235 129.11360000000013L 196.97984968343235 117.87380000000007L 192.08035088419976 117.87380000000007L 192.08035088419976 114.49180000000001" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 192.08035088419976 114.99180000000001L 196.97984968343235 114.99180000000001L 196.97984968343235 76.22890000000007L 196.97984968343235 114.99180000000001L 201.8793484826649 114.99180000000001L 201.8793484826649 117.87380000000007L 196.97984968343235 117.87380000000007L 196.97984968343235 129.11360000000013L 196.97984968343235 117.87380000000007L 192.08035088419976 117.87380000000007L 192.08035088419976 114.49180000000001" pathFrom="M 196.97984968343235 117.87380000000007M 192.08035088419976 117.87380000000007" cy="114.99180000000001" cx="201.3793484826649" j="13" val="56.82" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3378" d="M 207.5787654532008 82.13700000000017L 212.47826425243338 82.13700000000017L 212.47826425243338 77.52580000000012L 212.47826425243338 82.13700000000017L 217.37776305166597 82.13700000000017L 217.37776305166597 115.71230000000014L 212.47826425243338 115.71230000000014L 212.47826425243338 147.41430000000003L 212.47826425243338 115.71230000000014L 207.5787654532008 115.71230000000014L 207.5787654532008 81.63700000000017" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 207.5787654532008 82.13700000000017L 212.47826425243338 82.13700000000017L 212.47826425243338 77.52580000000012L 212.47826425243338 82.13700000000017L 217.37776305166597 82.13700000000017L 217.37776305166597 115.71230000000014L 212.47826425243338 115.71230000000014L 212.47826425243338 147.41430000000003L 212.47826425243338 115.71230000000014L 207.5787654532008 115.71230000000014L 207.5787654532008 81.63700000000017" pathFrom="M 212.47826425243338 115.71230000000014M 207.5787654532008 115.71230000000014" cy="82.13700000000017" cx="216.87776305166597" j="14" val="59.3" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3379" d="M 222.57723116513725 74.21150000000011L 227.47672996436984 74.21150000000011L 227.47672996436984 39.05110000000013L 227.47672996436984 74.21150000000011L 232.3762287636024 74.21150000000011L 232.3762287636024 84.87490000000014L 227.47672996436984 84.87490000000014L 227.47672996436984 85.01900000000012L 227.47672996436984 84.87490000000014L 222.57723116513725 84.87490000000014L 222.57723116513725 73.71150000000011" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 222.57723116513725 74.21150000000011L 227.47672996436984 74.21150000000011L 227.47672996436984 39.05110000000013L 227.47672996436984 74.21150000000011L 232.3762287636024 74.21150000000011L 232.3762287636024 84.87490000000014L 227.47672996436984 84.87490000000014L 227.47672996436984 85.01900000000012L 227.47672996436984 84.87490000000014L 222.57723116513725 84.87490000000014L 222.57723116513725 73.71150000000011" pathFrom="M 227.47672996436984 84.87490000000014M 222.57723116513725 84.87490000000014" cy="74.21150000000011" cx="231.8762287636024" j="15" val="59.85" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3380" d="M 238.07564573413828 72.48230000000012L 242.97514453337087 72.48230000000012L 242.97514453337087 70.46490000000006L 242.97514453337087 72.48230000000012L 247.87464333260345 72.48230000000012L 247.87464333260345 94.81780000000003L 242.97514453337087 94.81780000000003L 242.97514453337087 134.58940000000018L 242.97514453337087 94.81780000000003L 238.07564573413828 94.81780000000003L 238.07564573413828 71.98230000000012" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 238.07564573413828 72.48230000000012L 242.97514453337087 72.48230000000012L 242.97514453337087 70.46490000000006L 242.97514453337087 72.48230000000012L 247.87464333260345 72.48230000000012L 247.87464333260345 94.81780000000003L 242.97514453337087 94.81780000000003L 242.97514453337087 134.58940000000018L 242.97514453337087 94.81780000000003L 238.07564573413828 94.81780000000003L 238.07564573413828 71.98230000000012" pathFrom="M 242.97514453337087 94.81780000000003M 238.07564573413828 94.81780000000003" cy="72.48230000000012" cx="247.37464333260345" j="16" val="58.42" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3381" d="M 253.07411144607474 95.9706000000001L 257.9736102453073 95.9706000000001L 257.9736102453073 58.648700000000076L 257.9736102453073 95.9706000000001L 262.8731090445399 95.9706000000001L 262.8731090445399 109.22780000000012L 257.9736102453073 109.22780000000012L 257.9736102453073 118.88250000000005L 257.9736102453073 109.22780000000012L 253.07411144607474 109.22780000000012L 253.07411144607474 95.4706000000001" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 253.07411144607474 95.9706000000001L 257.9736102453073 95.9706000000001L 257.9736102453073 58.648700000000076L 257.9736102453073 95.9706000000001L 262.8731090445399 95.9706000000001L 262.8731090445399 109.22780000000012L 257.9736102453073 109.22780000000012L 257.9736102453073 118.88250000000005L 257.9736102453073 109.22780000000012L 253.07411144607474 109.22780000000012L 253.07411144607474 95.4706000000001" pathFrom="M 257.9736102453073 109.22780000000012M 253.07411144607474 109.22780000000012" cy="95.9706000000001" cx="262.3731090445399" j="17" val="57.42" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3382" d="M 268.5725260150758 104.3284000000001L 273.4720248143084 104.3284000000001L 273.4720248143084 99.71720000000016L 273.4720248143084 104.3284000000001L 278.371523613541 104.3284000000001L 278.371523613541 148.27890000000014L 273.4720248143084 148.27890000000014L 273.4720248143084 199.14620000000014L 273.4720248143084 148.27890000000014L 268.5725260150758 148.27890000000014L 268.5725260150758 103.8284000000001" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 268.5725260150758 104.3284000000001L 273.4720248143084 104.3284000000001L 273.4720248143084 99.71720000000016L 273.4720248143084 104.3284000000001L 278.371523613541 104.3284000000001L 278.371523613541 148.27890000000014L 273.4720248143084 148.27890000000014L 273.4720248143084 199.14620000000014L 273.4720248143084 148.27890000000014L 268.5725260150758 148.27890000000014L 268.5725260150758 103.8284000000001" pathFrom="M 273.4720248143084 148.27890000000014M 268.5725260150758 148.27890000000014" cy="104.3284000000001" cx="277.871523613541" j="18" val="54.71" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3383" d="M 284.0709405840768 110.23650000000009L 288.9704393833094 110.23650000000009L 288.9704393833094 51.58780000000013L 288.9704393833094 110.23650000000009L 293.869938182542 110.23650000000009L 293.869938182542 146.98200000000008L 288.9704393833094 146.98200000000008L 288.9704393833094 170.32620000000009L 288.9704393833094 146.98200000000008L 284.0709405840768 146.98200000000008L 284.0709405840768 109.73650000000009" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 284.0709405840768 110.23650000000009L 288.9704393833094 110.23650000000009L 288.9704393833094 51.58780000000013L 288.9704393833094 110.23650000000009L 293.869938182542 110.23650000000009L 293.869938182542 146.98200000000008L 288.9704393833094 146.98200000000008L 288.9704393833094 170.32620000000009L 288.9704393833094 146.98200000000008L 284.0709405840768 146.98200000000008L 284.0709405840768 109.73650000000009" pathFrom="M 288.9704393833094 146.98200000000008M 284.0709405840768 146.98200000000008" cy="110.23650000000009" cx="293.369938182542" j="19" val="57.35" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3384" d="M 299.0694062960133 28.96410000000003L 303.9689050952459 28.96410000000003L 303.9689050952459 27.5231L 303.9689050952459 28.96410000000003L 308.8684038944785 28.96410000000003L 308.8684038944785 107.21040000000005L 303.9689050952459 107.21040000000005L 303.9689050952459 115.28000000000009L 303.9689050952459 107.21040000000005L 299.0694062960133 107.21040000000005L 299.0694062960133 28.46410000000003" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 299.0694062960133 28.96410000000003L 303.9689050952459 28.96410000000003L 303.9689050952459 27.5231L 303.9689050952459 28.96410000000003L 308.8684038944785 28.96410000000003L 308.8684038944785 107.21040000000005L 303.9689050952459 107.21040000000005L 303.9689050952459 115.28000000000009L 303.9689050952459 107.21040000000005L 299.0694062960133 107.21040000000005L 299.0694062960133 28.46410000000003" pathFrom="M 303.9689050952459 107.21040000000005M 299.0694062960133 107.21040000000005" cy="28.96410000000003" cx="308.3684038944785" j="20" val="62.99" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3385" d="M 314.5678208650143 30.40510000000006L 319.4673196642469 30.40510000000006L 319.4673196642469 22.76780000000008L 319.4673196642469 30.40510000000006L 324.3668184634795 30.40510000000006L 324.3668184634795 46.688400000000115L 319.4673196642469 46.688400000000115L 319.4673196642469 76.08480000000009L 319.4673196642469 46.688400000000115L 314.5678208650143 46.688400000000115L 314.5678208650143 29.90510000000006" fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 314.5678208650143 30.40510000000006L 319.4673196642469 30.40510000000006L 319.4673196642469 22.76780000000008L 319.4673196642469 30.40510000000006L 324.3668184634795 30.40510000000006L 324.3668184634795 46.688400000000115L 319.4673196642469 46.688400000000115L 319.4673196642469 76.08480000000009L 319.4673196642469 46.688400000000115L 314.5678208650143 46.688400000000115L 314.5678208650143 29.90510000000006" pathFrom="M 319.4673196642469 46.688400000000115M 314.5678208650143 46.688400000000115" cy="30.40510000000006" cx="323.8668184634795" j="21" val="61.76" barWidth="9.798997598465164"></path>
                                       <path id="SvgjsPath3386" d="M 329.5662865769508 28.24360000000013L 334.46578537618336 28.24360000000013L 334.46578537618336 12.248500000000035L 334.46578537618336 28.24360000000013L 339.365284175416 28.24360000000013L 339.365284175416 47.40890000000013L 334.46578537618336 47.40890000000013L 334.46578537618336 53.4611000000001L 334.46578537618336 47.40890000000013L 329.5662865769508 47.40890000000013L 329.5662865769508 27.74360000000013" fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-candlestick-area" index="0" clip-path="url(#gridRectMask79mo21un)" pathTo="M 329.5662865769508 28.24360000000013L 334.46578537618336 28.24360000000013L 334.46578537618336 12.248500000000035L 334.46578537618336 28.24360000000013L 339.365284175416 28.24360000000013L 339.365284175416 47.40890000000013L 334.46578537618336 47.40890000000013L 334.46578537618336 53.4611000000001L 334.46578537618336 47.40890000000013L 329.5662865769508 47.40890000000013L 329.5662865769508 27.74360000000013" pathFrom="M 334.46578537618336 47.40890000000013M 329.5662865769508 47.40890000000013" cy="28.24360000000013" cx="338.865284175416" j="22" val="63.04" barWidth="9.798997598465164"></path>
                                    </g>
                                    <g id="SvgjsG3363" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 </g>
                                 <line id="SvgjsLine3436" x1="-12.001482311908322" y1="0" x2="346.4672676880917" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine3437" x1="-12.001482311908322" y1="0" x2="346.4672676880917" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG3438" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG3439" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG3440" class="apexcharts-point-annotations"></g>
                                 <rect id="SvgjsRect3441" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                 <rect id="SvgjsRect3442" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect3333" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG3408" class="apexcharts-yaxis" rel="0" transform="translate(24.53125, 0)">
                                 <g id="SvgjsG3409" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText3410" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3411">65.00</tspan>
                                       <title>65.00</title>
                                    </text>
                                    <text id="SvgjsText3412" font-family="Helvetica, Arial, sans-serif" x="20" y="103.45" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3413">60.00</tspan>
                                       <title>60.00</title>
                                    </text>
                                    <text id="SvgjsText3414" font-family="Helvetica, Arial, sans-serif" x="20" y="175.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3415">55.00</tspan>
                                       <title>55.00</title>
                                    </text>
                                    <text id="SvgjsText3416" font-family="Helvetica, Arial, sans-serif" x="20" y="247.54999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3417">50.00</tspan>
                                       <title>50.00</title>
                                    </text>
                                    <text id="SvgjsText3418" font-family="Helvetica, Arial, sans-serif" x="20" y="319.59999999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan3419">45.00</tspan>
                                       <title>45.00</title>
                                    </text>
                                 </g>
                              </g>
                              <g id="SvgjsG3329" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 175px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(59, 125, 221);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                           <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                              <div class="apexcharts-zoomin-icon" title="Zoom In">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoomout-icon" title="Zoom Out">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-pan-icon" title="Panning">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <defs>
                                       <path d="M0 0h24v24H0z" id="a"></path>
                                    </defs>
                                    <clipPath id="b">
                                       <use overflow="visible" xlink:href="#a"></use>
                                    </clipPath>
                                    <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-reset-icon" title="Reset Zoom">
                                 <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu-icon" title="Menu">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                 </svg>
                              </div>
                              <div class="apexcharts-menu">
                                 <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                 <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                 <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 424px; height: 366px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php include './footer.php'; ?>