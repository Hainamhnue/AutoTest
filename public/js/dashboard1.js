Morris.Area({
    element: 'morris-area-chart2',
    data: [{
        period: '2015',
        SiteA: 85,

    }, {
        period: '2016',
        SiteA: 90,

    }, {
        period: '2017',
        SiteA: 90,

    }, {
        period: '2018',
        SiteA: 95,

    },
        {
            period: '2019',
            SiteA: 92,

        },
        {
            period: '2020',
            SiteA: 90,

        }],
    xkey: 'period',
    ykeys: ['SiteA'],
    labels: ['Site A'],
    pointSize: 0,
    fillOpacity: 1,
    pointStrokeColors: ['#cbb2ae'],
    behaveLikeLine: true,
    gridLineColor: '#e0e0e0',
    lineWidth: 0,
    smooth: false,
    hideHover: 'auto',
    lineColors: ['#cbb2ae'],
    resize: true

});

$(".counter").counterUp({
    delay: 100,
    time: 1200
});
