'use strict';
/* global instantsearch */

var search = instantsearch({
  appId: 'FM3GHJGA1T',
  apiKey: 'de6f693844a49775415380088208bc66',
  indexName: 'scholarships'
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#q',
    placeholder: 'Αναζητησε υποτροφία'
  })
);

search.addWidget(
  instantsearch.widgets.stats({
    container: '#stats'
  })
);

search.on('render', function() {
  $('.product-picture img').addClass('transparent');
  $('.product-picture img').one('load', function() {
      $(this).removeClass('transparent');
  }).each(function() {
      if(this.complete) $(this).load();
  });
});

var hitTemplate =
  '<article class="hit">' +
      '<div class="product-picture-wrapper">' +
        '<div class="product-picture"><img src="{{study.section[0].name}}" /></div>' +
      '</div>' +
      '<div class="product-desc-wrapper">' +
        '<div class="product-name">{{{_highlightResult.school.admin.name.value}}}</div>' +
        // '<div class="product-type">{{school.type.name}}</div>' +
        '<div class="product-type">Σπουδές: {{{_highlightResult.study.name.value}}}</div>' +
        '<div class="product-type">Level: {{{_highlightResult.section.name.value}}}</div>' +
        '<div class="product-type">Section: {{study.section}}</div>' +
        '<div class="product-type">Πόλη: {{school.city}}</div>' +
        '<div class="product-price">{{criteria.name}}</div>' +
        // '<div class="product-rating">{{#stars}}<span class="ais-star-rating--star{{^.}}__empty{{/.}}"></span>{{/stars}}</div>' +
      '</div>' +
  '</article>';

var noResultsTemplate =
  '<div class="text-center">Δεν βρέθηκαν αποτελέσματα<strong>{{query}}</strong>.</div>';

var menuTemplate =
  '<a href="javascript:void(0);" class="facet-item {{#isRefined}}active{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> {{name}}</span class="facet-name"></a>';

var facetTemplateCheckbox =
  '<a href="javascript:void(0);" class="facet-item">' +
    '<input type="checkbox" class="{{cssClasses.checkbox}}" value="{{name}}" {{#isRefined}}checked{{/isRefined}} />{{name}}' +
    '<span class="facet-count">({{count}})</span>' +
  '</a>';

var facetTemplateColors =
  '<a href="javascript:void(0);" data-facet-value="{{name}}" class="facet-color {{#isRefined}}checked{{/isRefined}}"></a>';

search.addWidget(
  instantsearch.widgets.hits({
    container: '#hits',
    hitsPerPage: 12,
    templates: {
      empty: noResultsTemplate,
      item: hitTemplate
    },
    transformData: function(hit) {
      hit.stars = [];
      for (var i = 1; i <= 5; ++i) {
        hit.stars.push(i <= hit.rating);
      }
      return hit;
    }
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination',
    cssClasses: {
      active: 'active'
    },
    labels: {
      previous: '<i class="fa fa-angle-left fa-2x"></i> Previous page',
      next: 'Next page <i class="fa fa-angle-right fa-2x"></i>'
    },
    showFirstLast: false
  })
);

search.addWidget(
  instantsearch.widgets.hierarchicalMenu({
    container: '#categories',
    attributes: ['school.type.name'],
    // attributes: ['school.city','school.type.name'],
    sortBy: ['name:asc'],
    templates: {
      item: menuTemplate
    }
  })
);

// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#materials',
//     attributeName: 'materials',
//     operator: 'or',
//     limit: 10,
//     templates: {
//       item: facetTemplateCheckbox,
//       header: '<div class="facet-title">Materials</div class="facet-title">'
//     }
//   })
// );

// search.addWidget(
//   instantsearch.widgets.refinementList({
//     container: '#colors',
//     attributeName: 'colors',
//     operator: 'or',
//     limit: 10,
//     templates: {
//       item: facetTemplateColors,
//       header: '<div class="facet-title">Colors</div class="facet-title">'
//     }
//   })
// );

// search.addWidget(
//   instantsearch.widgets.starRating({
//     container: '#rating',
//     attributeName: 'rating',
//     templates: {
//       header: '<div class="facet-title">Ratings</div class="facet-title">'
//     }
//   })
// );

// search.addWidget(
//   instantsearch.widgets.priceRanges({
//     container: '#prices',
//     attributeName: 'price',
//     cssClasses: {
//       list: 'nav nav-list',
//       count: 'badge pull-right',
//       active: 'active'
//     },
//     templates: {
//       header: '<div class="facet-title">Prices</div class="facet-title">'
//     }
//   })
// );

// search.addWidget(
//   instantsearch.widgets.sortBySelector({
//     container: '#sort-by-selector',
//     indices: [
//       {name: 'ikea', label: 'Featured'},
//       {name: 'ikea_price_asc', label: 'Price asc.'},
//       {name: 'ikea_price_desc', label: 'Price desc.'}
//     ],
//     label:'sort by'
//   })
// );

search.addWidget(
  instantsearch.widgets.clearAll({
    container: '#clear-all',
    templates: {
      link: '<i class="fa fa-eraser"></i>Καθαρισμός Φίλτρων'
    },
    cssClasses: {
      root: 'btn btn-block btn-default'
    },
    autoHideContainer: true
  })
);

search.start();
