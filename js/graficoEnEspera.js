var CanvasEspera = document.getElementById("ChartEnEspera");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 15;

var DataEspera = {
    labels: [
        "Espera",
        "Resto"
    ],
    datasets: [
        {
            data: [totalCondEsp, totalEsp],
            backgroundColor: [
                "grey",
                "#EAEAEA"
            ],
            borderColor: "white",
            borderWidth: 1
        }
    ]
};

var chartOptionsEspera = {
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

var ChartEspera = new Chart(CanvasEspera, {
  type: 'doughnut',
  data: DataEspera,
  options: chartOptionsEspera
});
