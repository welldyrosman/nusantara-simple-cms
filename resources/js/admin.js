window.$ = window.jQuery = require('jquery');

const trumbowyg = require('trumbowyg');
const base64 = require('trumbowyg/plugins/base64/trumbowyg.base64.js');
const noembed = require('trumbowyg/plugins/noembed/trumbowyg.noembed.js');
const preformatted = require('trumbowyg/plugins/preformatted/trumbowyg.preformatted.js');
const colors = require('trumbowyg/plugins/colors/trumbowyg.colors.js');
const flatpickr = require('flatpickr');
const feather = require('feather-icons');

require('datatables.net');
require('datatables.net-buttons');
require('../../vendor/yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js');

$(function() {
  $(".datepicker").flatpickr();
  $('.notification').not('.is-permanent').delay(3000).fadeOut(350);
  $('#editor').trumbowyg({
    btns: [
      ['formatting'],
      ['link', 'insertImage', 'base64', 'noembed'],
      ['preformatted', 'backColor', 'strong', 'em', 'del', 'unorderedList'],
      ['viewHTML']
    ],
    resetCss: true
  });
  $('.file-input').on('change', function () {
    $(this).parent().find('.file-name').removeClass('is-hidden').text(this.value.replace(/.*[\/\\]/, ''));
  });
  feather.replace();
});
$(function () {
  $('input')
    .on('change', function (event) {
      var $element = $(event.target);
      var $container = $element.closest('.example');

      if (!$element.data('tagsinput')) return;

      var val = $element.val();
      if (val === null) val = 'null';
      var items = $element.tagsinput('items');

      $('code', $('pre.val', $container)).html(
        $.isArray(val)
          ? JSON.stringify(val)
          : '"' + val.replace('"', '\\"') + '"'
      );
      $('code', $('pre.items', $container)).html(
        JSON.stringify($element.tagsinput('items'))
      );
    })
    .trigger('change');
});
$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor: '#007bff',
          data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }

              return '$' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  var $visitorsChart = $('#visitors-chart')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type: 'line',
        data: [100, 120, 170, 167, 180, 177, 160],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
      {
        type: 'line',
        data: [60, 80, 70, 67, 80, 77, 100],
        backgroundColor: 'tansparent',
        borderColor: '#ced4da',
        pointBorderColor: '#ced4da',
        pointBackgroundColor: '#ced4da',
        fill: false
        // pointHoverBackgroundColor: '#ced4da',
        // pointHoverBorderColor    : '#ced4da'
      }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })
});