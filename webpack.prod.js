const path = require('path');
const webpack = require('webpack');
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const WorkboxPlugin = require('workbox-webpack-plugin');

module.exports = {
    entry: './src/js/scripts.js',
    output: {
        filename: 'js/[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: 'production',
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
                  MiniCssExtractPlugin.loader,
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
        }),
        new MiniCssExtractPlugin({ filename: "[name].css" }),
        new WorkboxPlugin.GenerateSW({
            // Do not precache images
            exclude: [/\.(?:png|jpg|jpeg|svg)$/],
      
            // Define runtime caching rules.
            runtimeCaching: [{
              // Match any request that ends with .png, .jpg, .jpeg or .svg.
              urlPattern: /\.(?:png|jpg|jpeg|svg)$/,
      
              // Apply a cache-first strategy.
              handler: 'CacheFirst',
      
              options: {
                // Use a custom cache name.
                cacheName: 'images',
      
                // Only cache 10 images.
                expiration: {
                  maxEntries: 10,
                },
              },
            }],
          })
        ]
    };