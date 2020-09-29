(function ($) {

    var charts = {
        init: function () {
            //Tipo de letra
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            //Color de fondo
            Chart.defaults.global.defaultFontColor = '#292b2c';

            this.obtenerdatos();

        },

        //Usando la respuesta 
        obtenerdatos: function () {
            var request = $.ajax({
                url: 'http://3.230.42.32:8080/ApiSanLuis/public/api/graph',
                method: 'GET'
            });
            request.done(function (response) {
                charts.creater(response);
            });

        },
        creater: function (response) {
            var ctx = document.getElementById("grafico");
            var mychart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: response.months,
                    datasets: [{
                            label: 'Serenazgo',
                            backgroundColor: 'rgba(255, 99, 132, 1)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            data: response.alerts_countMun1,
                        }, {
                            label: 'Ambulancia',
                            backgroundColor: 'rgba(255, 159, 64, 0.5)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            data: response.alerts_countMun2,
                            borderWidth: 1,
                        }, {
                            label: 'Bombero',
                            backgroundColor: 'rgba(255, 206, 86, 0.5)',
                            borderColor: 'rgba(255, 206, 86, 1)',
                            data: response.alerts_countMun3,
                        }, {
                            label: 'Seguridad Sanitaria',
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            data: response.alerts_countMun4,
                        }, {
                            label: 'Defensa civil',
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            data: response.alerts_countMun5,
                        },
                        /* 
                        {
                            label: 'Puntos de evacuación',
                            backgroundColor: 'rgba(255, 159, 64, 0.5)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            data: response.alerts_countMun6,
                        }, 
                        */
                        {
                            label: 'Alerta Mujer',
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            data: response.alerts_countMun7,
                        }
                        /* , 
                        {
                            label: 'Ubicación de instituciones',
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            data: response.alerts_countMun8,
                        } 
                        */
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    title: {
                        display: true,
                        text: "Cantidad de incidencias por mes",
                        scaleLabel: 'white',
                        fontSize: 20,
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: true,
                                /* color: "rgba(255,99,132,0.2)" */
                            },
                            ticks: {
                                maxTicksLimit: 7
                            },
                            //Ancho de las barras
                            barPercentage: 0.5,
                            stacked: true
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                //max: response.max - 10,
                                maxTicksLimit: response.max,
                            },
                            scaleLabel: {
                                display: true,
                                //Se agrega un texto al lado, algo que tambien se puede en el X :V
                                /*  labelString: 'asdasd' */
                            },
                            gridLines: {
                                display: true,
                                color: "rgba(255,99,132,0.2)"
                            },
                            stacked: true
                        }],

                    },
                    legend: {
                        display: true,
                        labels: {
                            fontColor: "#333",
                            fontSize: 18,
                        }
                    },
                    plugins: {
                        datalabels: {
                            //Cambiar de color
                            /* color: 'red', */
                            display: function (context) {
                                var index = context.dataIndex;
                                var value = context.dataset.data[index];
                                return value > 0;
                            },
                            align: 'center',
                            anchor: 'center'
                        }
                    }
                }

            });
        }
    };

    charts.init();

})(jQuery);


Chart.Legend.prototype.afterFit = function () {
    this.height = this.height + 30;
};

function savePDF() {
    html2canvas(document.getElementById("contenedor"), {
        onrendered: function (canvas) {
            var doc = new jsPDF();
            var img = canvas.toDataURL();
            //Ratio para evitar la deformación, divide el alto por el ancho de lo que hay dentro de container
            var hratio = canvas.height / canvas.width
            var width = doc.internal.pageSize.width;
            var height = width * hratio

            doc.addImage(img, 10, 10, width, height);
            doc.save('grafica.pdf');
        }
    });
}
