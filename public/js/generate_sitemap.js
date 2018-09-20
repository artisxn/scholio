const algoliaConfig = {
    appId: 'N08SZYEUO0',
    apiKey: '76ed12f5bc490510e0e26645ae7c6445', // Must have a browse permission
    indexName: 'dummySchools',
  };

  const hitToParams = ({ url }) => ({ loc: url })

  algoliaSitemap({
    algoliaConfig,
    sitemapLoc: 'https://example.com/sitemaps',
    outputFolder: 'sitemaps',
    hitToParams
  });