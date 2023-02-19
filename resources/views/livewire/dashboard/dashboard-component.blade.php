<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card-counter primary">
                <i class="fa-solid fa-puzzle-piece"></i>
                <span class="count-numbers">{{ $skillsCount > 0 ? $skillsCount : 0 }}</span>
                <span class="count-name">Skills</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter danger">
                <i class="fa-solid fa-users"></i>
                <span class="count-numbers">{{ $clientsCount > 0 ? $clientsCount : 0 }}</span>
                <span class="count-name">Clients</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter success">
                <i class="fa-brands fa-dropbox"></i>
                <span class="count-numbers">{{ $projectsCount > 0 ? $projectsCount : 0 }}</span>
                <span class="count-name">Project</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa-solid fa-people-carry-box"></i>
                <span class="count-numbers">{{ $servicesCount > 0 ? $servicesCount : 0 }}</span>
                <span class="count-name">Services</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart (Last 6 Month Project-Revenue)</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>


    @section('script-page')
        <!-- Page level plugins -->
        <script src="{{ asset('vendors/vendor/chart.js/Chart.min.js') }}"></script>

        {{-- <script src="{{ asset('vendors/js/demo/chart-bar-demo.js') }}"></script> --}}
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito',
                '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
                // *     example: number_format(1234.56, 2, ',', ' ');
                // *     return: '1 234,56'
                number = (number + '').replace(',', '').replace(' ', '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                    s = '',
                    toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }


            console.log(@js($priceMonthly->month));

            // Bar Chart Example
            var ctx = document.getElementById("myBarChart");
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [@js($priceMonthly->month)],
                    datasets: [{
                        label: "Revenue",
                        backgroundColor: "#4e73df",
                        hoverBackgroundColor: "#2e59d9",
                        borderColor: "#4e73df",
                        data: [@js($priceMonthly->price)],
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            },
                            maxBarThickness: 10,
                        }],
                        // yAxes: [{
                        //     ticks: {
                        //         min: 0,
                        //         max: 15000,
                        //         maxTicksLimit: 5,
                        //         padding: 10,
                        //         // Include a dollar sign in the ticks
                        //         callback: function(value, index, values) {
                        //             return '$' + number_format(value);
                        //         }
                        //     },
                        //     gridLines: {
                        //         color: "rgb(234, 236, 244)",
                        //         zeroLineColor: "rgb(234, 236, 244)",
                        //         drawBorder: false,
                        //         borderDash: [2],
                        //         zeroLineBorderDash: [2]
                        //     }
                        // }],
                    },
                    legend: {
                        display: false
                    },
                    // tooltips: {
                    //     titleMarginBottom: 10,
                    //     titleFontColor: '#6e707e',
                    //     titleFontSize: 14,
                    //     backgroundColor: "rgb(255,255,255)",
                    //     bodyFontColor: "#858796",
                    //     borderColor: '#dddfeb',
                    //     borderWidth: 1,
                    //     xPadding: 15,
                    //     yPadding: 15,
                    //     displayColors: false,
                    //     caretPadding: 10,
                    //     callbacks: {
                    //         label: function(tooltipItem, chart) {
                    //             var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    //             return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                    //         }
                    //     }
                    // },
                }
            });
        </script>
    @endsection

</div>
