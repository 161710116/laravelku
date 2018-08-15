@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="panel-title">Assalamualaikum</h2>
                    </div>
                <div class="card-header">
                    
                    <hr>
                    <h4>Statistik Penulis</h4>
                    <canvas id="chartPenulis" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="/js/Chart.min.js"></script>
<script>
var data = {
    labels: {!! json_encode($authors) !!},
    datasets: [{
        label: 'Jumlah buku',
        data: {!! json_encode($books) !!},
        backgroundColor: ['purple','green','pink','blue','red','purple'],
        borderColor: "['green']",
        }]
    };

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    stepSize:1
                }   
            }]
        }
    };

    var ctx = document.getElementById("chartPenulis").getContext("2d");

    var authorChart = new Chart(ctx, {
        type: 'polarArea',
        data: data,
        options: options
    });

</script>
@endsection