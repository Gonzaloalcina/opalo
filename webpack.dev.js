const path = require('path');
const webpack = require('webpack');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

// setup env
const config = require("./config/index.js");


module.exports = {
    entry: {
        main: './src/js/scripts.js',
        styles: './src/scss/styles.scss',
      },
    output: {
        filename: 'js/[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: 'development',
    devtool: 'source-map',
    stats: 'verbose',
    devServer: {
        port: 9000,
        hot: true,
        headers: {
          "Access-Control-Allow-Origin": "*",
        },
        proxy: {
          "*": {
            target: config.url,
            changeOrigin: true,
          },
          "/": {
            target: config.url,
            changeOrigin: true,
          },
        },
      },
    module: {
        rules: [
            {
                test: '/\.js$/',
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
              test: /\.s[ac]ss$/i,
              use: [
                "style-loader",
                "css-loader",
                "postcss-loader",
                "sass-loader",
                {
                  loader: "sass-resources-loader",
                  options: {
                    resources: [
                      path.resolve(__dirname, "./src/scss/global/vars.scss"),
                    ],
                  },
                },
              ],
            },
            {
              test: /\.css$/i,
              use: ["style-loader", "css-loader", "postcss-loader"],
            },
        ]
    },
    plugins: [
        new CleanWebpackPlugin({
            // Simulate the removal of files
            dry: true,
            // Write Logs to Console
            verbose: true,
            // Automatically remove all unused webpack assets on rebuild
            cleanStaleWebpackAssets: true,
            protectWebpackAssets: false
        })
    ]
}