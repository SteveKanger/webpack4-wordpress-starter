const common = require('./config.common');

console.log('[Webpack] Use dev configuration\n');

module.exports = {
    ...common,
    mode: 'development',
    devtool: '#source-map',
};
