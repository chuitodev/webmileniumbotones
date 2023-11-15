@extends('layouts.volt')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-12 col-sm-3 col-xl-3 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                            <i class="far fa-smile" style="font-size: 2em;"></i>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Guadalupe&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-1">{{ $countTodayYesGuadalupe }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Guadalupe&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-2">{{ $countTodayYesGuadalupe }}</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Sí
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-3 col-xl-3 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                            <i class="far fa-frown" style="font-size: 2em;"></i>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Guadalupe&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-1">{{ $countTodayNoGuadalupe }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Guadalupe&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-2">{{ $countTodayNoGuadalupe }}</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            No
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-3 col-xl-3 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                            <i class="far fa-smile" style="font-size: 2em;"></i>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Reynosa&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-1">{{ $countTodayYesReynosa }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Reynosa&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-2">{{ $countTodayYesReynosa }}</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Sí
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-3 col-xl-3 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                            <i class="far fa-frown" style="font-size: 2em;"></i>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Reynosa&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-1">{{ $countTodayNoReynosa }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Reynosa&nbsp;<i class="fas fa-warehouse"></i></h2>
                            <h3 class="mb-2">{{ $countTodayNoReynosa }}</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            No
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2 mb-lg-2 box-col">
    <div class="col-lg-2">
        <h6>Ver gráficos por:</h6>
    </div>
    <div class="col-lg-1">
        <div class="form-check">
            <input class="form-check-input" id="baseUnitDays" name="baseUnit"
            type="radio" value="days" autocomplete="off" />
            <label class="form-check-label" for="baseUnitDays">Días</label>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-check">
            <input class="form-check-input" id="baseUnitWeeks" name="baseUnit"
            type="radio" value="weeks" autocomplete="off" />
            <label class="form-check-label" for="baseUnitWeeks">Semanas</label>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-check">
            <input class="form-check-input" id="baseUnitMonths" name="baseUnit"
            type="radio" value="months" checked="checked" autocomplete="off" />
            <label class="form-check-label" for="baseUnitMonths">Meses</label>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-check">
            <input class="form-check-input" id="baseUnitYears" name="baseUnit"
            type="radio" value="years" autocomplete="off" />
            <label class="form-check-label" for="baseUnitYears">Años</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-6">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                        <h2 class="h3 fw-extrabold">Guadalupe</h2>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div id="chartGuadalupe"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                        <h2 class="h3 fw-extrabold">Reynosa</h2>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div id="chartReynosa"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<link href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.common.min.css" rel="stylesheet" />
<!-- <link href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.default.min.css" rel="stylesheet" /> -->
<link data-href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.bootstrap-main.min.css" rel="stylesheet" href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.bootstrap-main.min.css">
<script src="https://kendo.cdn.telerik.com/2021.3.914/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2021.3.914/js/kendo.all.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2021.3.914/js/messages/kendo.messages.es-MX.min.js"></script>

<script>
    function createCharts() {
        var dataGuadalupe = [],
            dataReynosa = [],
            logsGuadalupe = JSON.parse(@json($logsGuadalupe)),
            logsReynosa = JSON.parse(@json($logsReynosa));

        for(let i = 0; i < logsGuadalupe.length; i++) {
            let registro = new Object();
            registro.countYes = parseInt(logsGuadalupe[i].countYes);
            registro.countNo = parseInt(logsGuadalupe[i].countNo);
            registro.date = new Date(logsGuadalupe[i].date.replace('-', '/'));

            dataGuadalupe.push(registro);
        };

        for(let i = 0; i < logsReynosa.length; i++) {
            let registro = new Object();
            registro.countYes = parseInt(logsReynosa[i].countYes);
            registro.countNo = parseInt(logsReynosa[i].countNo);
            registro.date = new Date(logsReynosa[i].date.replace('-', '/'));

            dataReynosa.push(registro);
        };

        console.log("dataReynosa", dataReynosa);

        $("#chartGuadalupe").kendoChart({
            dataSource: {
                data: dataGuadalupe
            },
            tooltip: {
                visible: true
            },
            series: [{
                type: "column",
                aggregate: "sum",
                field: "countYes",
                categoryField: "date",
                color: "#10B981"
            }, {
                type: "column",
                aggregate: "sum",
                field: "countNo",
                categoryField: "date",
                color: "#fb503b"
            }],
            categoryAxis: {
                baseUnit: "months",
                majorGridLines: {
                    visible: false
                }
            },
            valueAxis: {
                line: {
                    visible: false
                },
                majorUnit: 100
            },
            pannable: {
                lock: "y",
            },
            zoomable: {
                mousewheel: {
                    lock: "y"
                },
                selection: {
                    lock: "y"
                }
            }
        });

        $("#chartReynosa").kendoChart({
            dataSource: {
                data: dataReynosa
            },
            tooltip: {
                visible: true
            },
            series: [{
                type: "column",
                aggregate: "sum",
                field: "countYes",
                categoryField: "date",
                color: "#10B981"
            }, {
                type: "column",
                aggregate: "sum",
                field: "countNo",
                categoryField: "date",
                color: "#fb503b"
            }],
            categoryAxis: {
                baseUnit: "months",
                majorGridLines: {
                    visible: false
                }
            },
            valueAxis: {
                line: {
                    visible: false
                },
                majorUnit: 100
            },
            pannable: {
                lock: "y",
            },
            zoomable: {
                mousewheel: {
                    lock: "y"
                },
                selection: {
                    lock: "y"
                }
            }
        });
    }

    $(document).ready(createCharts);
    $(".box-col").bind("change", refresh);

    function refresh() {
        var chartGuadalupe = $("#chartGuadalupe").data("kendoChart"),
            chartReynosa = $("#chartReynosa").data("kendoChart"),

            seriesGuadalupe = chartGuadalupe.options.series,
            seriesReynosa = chartReynosa.options.series,

            categoryAxisGuadalupe = chartGuadalupe.options.categoryAxis,
            categoryAxisReynosa = chartReynosa.options.categoryAxis,

            baseUnitInputs = $("input:radio[name=baseUnit]");

        for (var i = 0, length = seriesGuadalupe.length; i < length; i++) {
            seriesGuadalupe[i].aggregate = "sum";
        };
        for (var j = 0, length = seriesReynosa.length; j < length; j++) {
            seriesReynosa[j].aggregate = "sum";
        };

        categoryAxisGuadalupe.baseUnit = categoryAxisReynosa.baseUnit = baseUnitInputs.filter(":checked").val();

        chartGuadalupe.refresh();
        chartReynosa.refresh();
    }
</script>
@endsection
