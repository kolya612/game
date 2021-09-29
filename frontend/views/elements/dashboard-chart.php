<?php
    $this->registerJs("
        $('[name=period]').change(function(){
            $.pjax.reload({container: '#weight_chart', timeout: 10000, data: {period: $(this).val()}});
        });
    ",\yii\web\View::POS_END);
?>
<div class="d-flex justify-content-between align-items-center w-188 mb-4">
    <h4 class="mb-4">Your Weight Tracker</h4>
    <div class="form-group">
        <select name="period" class="form-control" id="exampleFormControlSelect1">
            <option value="30">30 days</option>
            <option value="90">3 Month</option>
            <option value="180">6 Month</option>
        </select>
    </div>
</div>
<?php \yii\widgets\Pjax::begin(['id'=>'weight_chart']); ?>

<canvas id="chart-weight"></canvas>

<?
$trackerValues = Yii::$app->user->identity->getWeightTrackersValues(Yii::$app->request->get('period',30));
$targetValues = Yii::$app->user->identity->getTargetWeightTrackersValues(Yii::$app->request->get('period',30));

$allValues=\yii\helpers\ArrayHelper::merge(
        Yii::$app->user->identity->getWeightTrackersValuesArray(Yii::$app->request->get('period',30)),
        Yii::$app->user->identity->getTargetWeightTrackersValuesArray(Yii::$app->request->get('period',30)),
);
$min=min($allValues)-10;
if($min<0) $min=0;
$max=max($allValues);
$stepSize=round(($max-$min)/4, 0);

$this->registerJs("           
        var options = {
            responsive: true,
            currentWeight: ".((int)Yii::$app->user->identity->goal_weight).",
            tooltips: {
                 enabled: true,
                 backgroundColor: '#7084CB',
                 titleAlign: 'center',
                 titleFontSize: 30,
                 titleFontFamily: 'Sofia Pro',
                 bodyFontFamily: 'Sofia Pro',
                 bodyFontSize: 14,
                 bodyAlign: 'center',
                 bodySpacing: 5,
                 displayColors: false,
                 cornerRadius: 30,
                 xPadding: 15,
                 yPadding: 10,
                 filter: function (tooltipItem) {
                    return tooltipItem.datasetIndex === 0;
                 },
                 callbacks: {
                                   
                    label: function(tooltipItem, data) {
                        var label = tooltipItem.xLabel;
                        return label;
                    },
                    
                    title: function(tooltipItem, data) {
                        if(tooltipItem.length){
                            var label = Math.round(tooltipItem[0].yLabel * 100) / 100;
                            return label+' lbs';
                        }else{
                            return '';
                        }
                    },
                }
            },
            animations: {
              tension: {
                duration: 1000,
                easing: 'linear',
                from: 1,
                to: 0,
                loop: false
              }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display:false,
                    },
                    ticks: {
                        fontColor: '#56666D',
                        fontSize: 13,
                        fontFamily: '\"Sofia Pro\",sans-serif'
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display:true,
                        drawBorder: false,
                    },
                    ticks: {
                        stepSize: ".$stepSize.",
                        fontStyle: 'bold',
                        fontColor: '#56666D',
                        fontSize: 14,
                        padding: -20,
//                        padding: 5,
                        labelOffset: 15,
                        fontFamily: '\"Sofia Pro\",sans-serif',
                        max: ".$max.",
                        min: ".($max-$stepSize*4).",
                        callback: function(value, index, values) {
                            if(index==values.length-1) return '';
                            if(value>0) return value;
                            else return '';
                        }
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Weight in Pounds',
                        padding: {
                            top: 4,
                            bottom: 4
                        }
                    }
                }]
            },
            legend: {
                display: false,
            }
        };
        
        var ctx = document.getElementById('chart-weight').getContext('2d');

        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(0, 17, 238, 0.33)');   
        gradient.addColorStop(1, 'rgba(209, 230, 249, 0)');

        new Chart('chart-weight', {
            type: 'line',
            data: {
                labels: [".Yii::$app->user->identity->getWeightTrackersLabels(Yii::$app->request->get('period',30))."],
                datasets: [
                ".("
                {
                    label: 'Weight Tracker',
                    data: [".$trackerValues."],
                    backgroundColor: gradient,
                    borderColor: [
                        '#0011EE'
                    ],
                    pointBackgroundColor: '#0011EE',
                    pointBorderColor: '#0011EE',
                    borderWidth: 3
                },
                ")."
                {
                    label: 'Target Weight',
                    data: [".$targetValues."],
                    backgroundColor: [
                        'transparent',
                    ],
                    borderColor: [
                        '#00AA77'
                    ],
                    borderWidth: 3,
                    pointBackgroundColor: ['#00AA77','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent'],
                    pointBorderColor: ['#00AA77','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent','transparent'], 
                    pointStyle: ['triangle'],
                    pointRotation: ['90']
                }
                
                
                ]
            },
            options: Chart.helpers.merge(options, {
                title: {
//                                        text: 'fill: start',
                    display: false
                }
            })
        });           

    ",\yii\web\View::POS_END);

?>

<?php \yii\widgets\Pjax::end(); ?>