var CanvasRealizadas = document.getElementById("ChartRealizadas");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 15;

var DataRealizadas = {
    labels: [
        "Realizadas",
        "Otras"
    ],
    datasets: [
        {
            data: [totalCondRea, totalRea],
            backgroundColor: [
                "#8ec148",
                "#EAEAEA"
            ],
            borderColor: "white",
            borderWidth: 1
        }
    ]
};

var chartOptionsRealizadas = {
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

var ChartRealizadas = new Chart(CanvasRealizadas, {
  type: 'doughnut',
  data: DataRealizadas,
  options: chartOptionsRealizadas
});
