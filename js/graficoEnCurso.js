var CanvasCurso = document.getElementById("ChartEnCurso");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 15;

var DataCurso = {
    labels: [
        "Curso",
        "Otras"
    ],
    datasets: [
        {
            data: [totalCondCur, totalCur],
            backgroundColor: [
                "#f8ba43",
                "#EAEAEA"
            ],
            borderColor: "white",
            borderWidth: 1
        }
    ]
};

var chartOptionsCurso = {
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

var ChartCurso = new Chart(CanvasCurso, {
  type: 'doughnut',
  data: DataCurso,
  options: chartOptionsCurso
});
