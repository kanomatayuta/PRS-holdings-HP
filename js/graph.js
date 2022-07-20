
const myChart = document.getElementById("myChart").getContext('2d');
const dataLabelPlugin = {
  afterDatasetsDraw: function (chart, easing) {
    const ctx = chart.ctx;
    chart.data.datasets.forEach(function (dataset, i) {
      const meta = chart.getDatasetMeta(i);
      if (!meta.hidden)
      {
        meta.data.forEach(function (element, index) {
          ctx.fillStyle = 'rgb(255, 255, 255)';

          const fontSize = 16;
          const fontStyle = 'normal';
          const fontFamily = 'Helvetica Neue';
          ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

          const dataString = dataset.data[index].toString() + "%";

          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';

          const padding = 5;
          const position = element.tooltipPosition();
          ctx.fillText(dataString, position.x, position.y - (fontSize / 10) - padding);
        })
      }
    })
  }
}

const chart = new Chart(myChart, {
  type: 'pie',
  data: {
    labels: ["フロントエンド", "バックエンド", "インフラ", "その他(運用、保守)"],
    datasets: [{
      hoverBorderWidth: [3],
      hoverBorderColor: ["#81D6E6"],
      backgroundColor: [
        "#092A60",
        "#8BB6FF",
        "#5A97FF",
        "#D6E5FF"
      ],
      data: [60, 20, 10, 10]
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      },
      tooltips: {
        enabled: false
      },
    },
    maintainAspectRatio: false
  },
  plugins: [dataLabelPlugin],
});