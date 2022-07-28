var CanvasCanceladas = document.getElementById("ChartCanceladas");




Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 15;

var DataCanceladas = {
    labels: [
        "Canceladas",
        "Resto"
    ],
    datasets: [
        {
            data: [totalCondCan, totalCan],
            backgroundColor: [
                "#d94555",
                "#EAEAEA"
            ],
            borderColor: "white",
            borderWidth: 1
        }
    ]
};

var chartOptionsCanceladas = {
  rotation: -Math.PI,
  cutoutPercentage: 30,
  circumference: Math.PI,
  legend: {
    position: 'bottom'
  },
  animation: {
    animateRotate: true,
    animateScale: false
  }
};

var ChartCanceladas = new Chart(CanvasCanceladas, {
  type: 'doughnut',
  data: DataCanceladas,
  options: chartOptionsCanceladas
});
