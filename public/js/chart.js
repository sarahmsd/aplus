const ctx = document.getElementById('lineChart');
const rond = document.getElementById('doughnut');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
        label: 'Offres en chiffres',
        data: [12, 19, 3, 5, 12, 4],
        backgroundColor: [
            'rgba(85,85,85,1)'
        ],
        borderColor: [
            'rgb(42,155,99)'
        ],
        borderWidth: 2
      }]
    },
    options: {
      responsive:true
    }
  });




  new Chart(rond, {
    type: 'doughnut',
    data: {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
        label: 'Candidatures',
        data: [12, 19, 3, 5, 2, 7],
        backgroundColor: [
          'rgba(120, 46, 130, 1)',
          'rgba(235, 149, 50, 1',
          'rgb(139,0,0)',
          'rgba(54, 162, 235, 1)',
          'rgba(211, 84, 0, 1)',
          'rgba(108, 122, 137, 1)',
      ],
        borderColor: [
            'rgb(255,255,255)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });


  