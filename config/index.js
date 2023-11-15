var wordpress_folder = 'http://localhost/wp-opalo//';
var theme_name = 'opalo';
module.exports = {
    url: wordpress_folder,
    public_paths: {
        virtual: 'http://localhost:9000/',
        local: wordpress_folder + 'wp-content/themes/' + theme_name + '/dist/js/',
    }
}