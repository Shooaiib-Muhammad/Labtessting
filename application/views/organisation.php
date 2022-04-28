<?php
$this->load->view('Header');
?>
<style>
    /* highcharts */


    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 80%;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    #container h4 {
        text-transform: none;
        font-size: 14px;
        font-weight: normal;
    }

    #container p {
        font-size: 13px;
        line-height: 16px;
    }

    @media screen and (max-width: 600px) {
        #container h4 {
            font-size: 2.3vw;
            line-height: 3vw;
        }

        #container p {
            font-size: 2.3vw;
            line-height: 3vw;
        }
    }

    /* highchart ends here */
</style>
<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <!-- <h1 class="page-width">Innovation</h1> -->
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!--End Page Title-->

    <!-- <div class="container">
  <div class="row">
  <h2>Organization</h2>
 </div> -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/sankey.js"></script>
    <script src="https://code.highcharts.com/modules/organization.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>

    </figure>


</div>
<!--End Body Content-->
<?php

$this->load->view('Footer');
?>

<script>
    Highcharts.chart('container', {
        chart: {
            height: 700,
            inverted: true
        },

        title: {
            text: 'Lab Hierarchy '
        },

        accessibility: {
            point: {
                descriptionFormatter: function(point) {
                    var nodeName = point.toNode.name,
                        nodeId = point.toNode.id,
                        nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                        parentDesc = point.fromNode.id;
                    return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
                }
            }
        },

        series: [{
            type: 'organization',
            keys: ['from', 'to'],
            data: [
                ['CEO', 'Technical Director'],
                ['Technical Director', 'Quality Manager Lab'],
                ['Quality Manager Lab', 'Technical Manager'],
                ['Quality Manager Lab', 'Ass. Quality Manager'],
                ['Quality Manager Lab', 'Lab Manager'],
                ['Technical Manager', 'Deputy Technical Manager'],
                ['Lab Manager', 'Lab Officer1'],
                ['Lab Manager', 'Lab Officer2'],
                ['Lab Officer1', 'Lab Technician1'],
                ['Lab Officer1', 'Lab Technician2'],
                ['Lab Officer1', 'Lab Technician3'],
                ['Lab Officer1', 'Lab Technician4'],
                ['Lab Officer2', 'Lab Technician5'],
                ['Lab Officer2', 'Lab Technician6'],


            ],
            levels: [{
                level: 0,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 1,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 2,
                color: '#980104'
            }, {
                level: 4,
                color: '#359154'
            }],
            nodes: [{
                    id: 'CEO',
                    title: 'CEO',
                    name: 'Mr. Hassan Masood Khawaja',
                    image: './assets/images/hassan.jpg'
                }, {
                    id: 'Technical Director',
                    title: 'Technical Director',
                    name: 'Ms.Tehseen Hassan',
                    color: '#007ad0',
                    image: './assets/images/female.png'
                }, {
                    id: 'Quality Manager Lab',
                    title: 'Quality Manager Lab',
                    name: 'Mr. Zain Abbas',
                    image: './assets/images/zain.jpg'
                }, {
                    id: 'Technical Manager',
                    title: 'Technical Manager',
                    name: 'Ms. Hufsa Moonis Mir',
                    image: './assets/images/female.png'
                }, {
                    id: 'Ass. Quality Manager',
                    title: 'Ass. Quality Manager',
                    name: 'Mr. Muhammad Irfan',
                    image: './assets/images/irfan.jpg'
                }, {
                    id: 'Lab Manager',
                    title: 'Lab Manager',
                    name: 'Mr. Sohail Rasheed',
                    image: './assets/images/sohail.jpg'
                }, {
                    id: 'Deputy Technical Manager',
                    title: 'Deputy Technical Manager',
                    name: 'Ms. Fatima Rasheed',
                    image: './assets/images/female.png'
                }, {
                    id: 'Lab Officer1',
                    title: 'Lab Officer1',
                    name: 'Mr. Tanveer Ali',
                    image: './assets/images/tanveer.jpg'
                }, {
                    id: 'Lab Officer2',
                    title: 'Lab Officer2',
                    name: 'Mr. Muhammad Munir',
                    image: './assets/images/m.munir.jpg'
                }, {
                    id: 'Lab Technician1',
                    title: 'Lab Technician1',
                    name: 'Mr. Umer ',
                    image: './assets/images/umer.jpg'
                }, {
                    id: 'Lab Technician2',
                    title: 'Lab Technician2',
                    name: 'Mr. Imran Munir',
                    image: './assets/images/munir.jpg'
                }, {
                    id: 'Lab Technician3',
                    title: 'Lab Technician3',
                    name: 'Mr. Parvaiz Bhatti',
                    image: './assets/images/pervaiz.jpg'
                }, {
                    id: 'Lab Technician4',
                    title: 'Lab Technician4',
                    name: 'Mr. Bilal Tahir',
                    image: './assets/images/bilal.jpg'
                }, {
                    id: 'Lab Technician5',
                    title: 'Lab Technician5',
                    name: 'Mr. Mohiuddin',
                    image: './assets/images/mahudin.jpg'
                }, {
                    id: 'Lab Technician6',
                    title: 'Lab Technician6',
                    name: 'Mr. Azeem',
                    image: './assets/images/azeem.jpg'
                }

            ],
            colorByPoint: false,
            color: '#007ad0',
            dataLabels: {
                color: 'white'
            },
            borderColor: 'white',
            nodeWidth: 75
        }],
        tooltip: {
            outside: true
        },
        exporting: {
            allowHTML: true,
            sourceWidth: 900,
            sourceHeight: 900
        }

    });
</script>