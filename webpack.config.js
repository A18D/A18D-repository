var path = require('path');
var config = {
    context: path.join(__dirname, 'js'),
    entry: [
        './main.js',
    ],
    module: {
        loaders: [
            {
                test: /\.css$/,
                loaders: ["style-loader", "css-loader"]
            }
        ]
    },
    output: {
        path: path.join(__dirname, 'www'),
        filename: 'bundle.js',
        publicPath: '/',
    },
    devServer: {
        proxy: {
            '/': {
                target: 'http://s1.localhost/PHPChernovik/webpack-hmr-php/web',
                secure: false
            }
        }
    }
};
module.exports = config;
