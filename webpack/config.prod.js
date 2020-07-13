const common = require('./config.common');

console.log('[Webpack] Use prod configuration\n');

module.exports = {
    ...common,
    mode: 'production',
};
