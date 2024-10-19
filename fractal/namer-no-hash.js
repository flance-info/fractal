// namer-no-hash.js
const { Namer } = require('@parcel/plugin');
const path = require('path');

module.exports = new Namer({
  name: 'namer-no-hash',
  async name({ bundle, bundleGraph, options }) {
    // Get the entry asset for the bundle
    let entryAssets = bundle.getEntryAssets();
    if (entryAssets.length === 0) {
      // If there are no entry assets, fallback to default naming
      return null;
    }

    let entryAsset = entryAssets[0];

    // Determine the original filename
    let fileName = path.basename(entryAsset.filePath, path.extname(entryAsset.filePath)) + '.' + bundle.type;

    return fileName;
  },
});
