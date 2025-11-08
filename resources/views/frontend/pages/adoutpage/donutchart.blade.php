<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Responsive Donut Chart</title>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <style>
  /* Container for the section */
  .use-of-fund {
    display: flex;
    flex-wrap: wrap; /* allow stacking on small screens */
    align-items: flex-start;
    justify-content: space-between;
    gap: 40px;
    padding: 60px 20px;
    /* background-color: #f9f9f9; */
  }

  /* Left text content */
  .fund-text {
    flex: 1 1 300px;   /* grow, shrink, base width */
    max-width: 600px;
  }

  .fund-text h2 {
    font-size: 28px;
      font-weight: 600;
    margin-bottom: 15px;
  }

  .fund-text p {
    /* color: #555; */
    margin-bottom: 25px;
  }

  .legend-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .legend-color {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
  }

  .fund-highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
  }

  .highlight {
    background: #fff;
    padding: 15px 20px;
    border-radius: 8px;
    /* box-shadow: 0 5px 15px rgba(0,0,0,0.05); */
    flex: 1 1 120px;
    min-width: 120px;
    text-align: center;
  }

  .highlight h4 {
    margin: 0 0 5px 0;
    font-size: 26px;
    color: #28a745;
  }

  .highlight p {
    margin: 0;
    font-size: 12px;
  }

  /* Chart container */
  .chart-container {
    flex: 1 1 300px;
    max-width: 500px;
    min-height: 300px;
    /* background-color: #fff; */
    border-radius: 10px;
    /* box-shadow: 0 5px 15px rgba(0,0,0,0.05); */
    position: relative;
  }

  #chartdiv {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  #total {
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .use-of-fund {
      flex-direction: column;
      padding: 40px 20px;
    }

    .chart-container {
      max-width: 100%;
      min-height: 250px;
      margin-top: 30px;
    }

    .fund-text h2 {
      font-size: 1.7rem;
    }
  }

  @media (max-width: 480px) {
    .fund-text h2 {
      font-size: 1.5rem;
    }

    .highlight {
      flex: 1 1 100%;
    }
  }
</style>

</head>
<body>

<div id="chartdiv"></div>
<div id="total"></div>

<script>
  // 1️⃣ Create root element
  var root = am5.Root.new("chartdiv");

  // 2️⃣ Set themes
  root.setThemes([am5themes_Animated.new(root)]);

  // 3️⃣ Create chart
  var chart = root.container.children.push(am5percent.PieChart.new(root, {
    layout: root.verticalLayout,
    innerRadius: am5.percent(50) // Donut
  }));

  // 4️⃣ Create series
  var series = chart.series.push(am5percent.PieSeries.new(root, {
    valueField: "value",
    categoryField: "category",
    alignLabels: false
  }));

  series.labels.template.setAll({
    textType: "circular",
    centerX: 0,
    centerY: 0,
    forceHidden: true
  });

  // 5️⃣ Set data
  series.data.setAll([
    { value: 1149, category: "One" },
    { value: 105, category: "Two" },
    { value: 19, category: "Three" },
    { value: 17, category: "Four" },
    { value: 5, category: "Five" },
  ]);

  // 6️⃣ Create legend
  var legend = chart.children.push(am5.Legend.new(root, {
    centerX: am5.percent(50),
    x: am5.percent(50),
    marginTop: 15,
    marginBottom: 15,
  }));

  legend.data.setAll(series.dataItems);

  // 7️⃣ Animate series
  series.appear(1000, 100);

  // 8️⃣ Optional total percentage
  series.events.on("datavalidated", () => {
    const percents = [];
    series.dataItems.forEach((dataItem) => {
      const dataItemPercent = dataItem.get('valuePercentTotal');
      percents.push(Math.round(dataItemPercent * 100) / 100);
    });

    let totalPercentage = percents.reduce((acc, percentage) => acc + percentage, 0);
    totalPercentage = Math.round(totalPercentage * 100) / 100;

    const sumString = percents.join(' + ');

    // document.getElementById('total').innerText = `Total percentage: ${sumString} = ${totalPercentage}`;
  });
</script>

</body>
</html>
