requirejs.config({
    baseUrl: 'js',
    map: {
        '*': {
            'css': '../bower_components/require-css/css.min'
        }
    },
    paths: {
            app: '../app',
            jquery: './../resources/js/jquery.min',
            bootstrap:'./../resources/plugins/bootstrap/dist/js/bootstrap.min', 
            carousel:"./../resources/plugins/owl-carousel/owl.carousel",
            themepunch :"./../resources/plugins/rs-plugin/js/jquery.themepunch.tools.min",
            revolution:"./../resources/plugins/rs-plugin/js/jquery.themepunch.revolution.min",
            selectbox:"./../resources/plugins/selectbox/jquery.selectbox-0.1.3.min",
            countdown:"./../resources/plugins/countdown/jquery.syotimer",
            optionswitcher:"./../resources/plugins/options/optionswitcher",
            custom:"./../resources/js/custom",
            sweetalert : "../resources/bower_components/sweetalert/dist/sweetalert.min"
    },
    shim: {
       
      

    }
});