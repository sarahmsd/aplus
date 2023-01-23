const ctx = document.getElementById('doughnut');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(54, 162, 235, 0.2)',

        ],
        borderColor: [
            'rgb(42,155,99)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });