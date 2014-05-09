var profile = (function () {
    // These are the only files needed for building this profile
    var requiredOnly = [".", ".", /(\/\.)|(~$)|(node_modules|txt|scss|\.profile|\.package)/];
    return {
        action: "release",
        basePath: "..",
        layerOptimize: "closure",
        optimize: "closure",
        cssOptimize: "comments",
        mini: true,
        stripConsole: "all",
        selectorEngine: "lite",

        packages: [
            {
                name: "dojo",
                location: "resources/dojo-1.9.3/dojo"
            },
            {
                name: "dijit",
                location: "resources/dojo-1.9.3/dijit"
            },
            {
                name: "dojox",
                location: "resources/dojo-1.9.3/dojox"
            },
            // {
            //     name: "dgrid",
            //     location: "resources/dgrid"
            // },
            {
                name: "WebSublimateCMS",
                location: "WebSublimateCMS/src",
                trees: [
                    requiredOnly
                ]
            }
        ],
        layers: {
            "WebSublimateCMS/main": {
                include: [
                    "dojo/dojo",
                    "dojo/domReady",
                    "WebSublimateCMS/view/MainView/MainView"
                ],
                customBase: true,
                boot: true
            }
        },

        defaultConfig: {
            hasCache: {
                'dojo-built': true,
                'dojo-loader': true,
                'dom': true,
                'host-browser': true,
                "config-selectorEngine": "lite"
            },
            async: true
        },

        // Our minimal loader doesn’t need to run outside the browser and we definitely won’t be running in legacy mode!
        // Therefore, we can overwrite the layer boot text with custom code to trim the last few bytes from the nano loader.
        dojoBootText:"require.boot && require.apply(null, require.boot);",

        // Providing hints to the build system allows code to be conditionally removed on a more granular level than
        // simple module dependencies can allow. This is especially useful for creating tiny mobile builds.
        // Keep in mind that dead code removal only happens in minifiers that support it! Currently, only Closure Compiler
        // to the Dojo build system with dead code removal.
        // A documented list of has-flags in use within the toolkit can be found at
        // <http://dojotoolkit.org/reference-guide/dojo/has.html>.

        // How to achieve NANO DOJO BUILD: http://jamesthom.as/blog/2012/08/03/finding-nano/
        staticHasFeatures: {
            // The trace & log APIs are used for debugging the loader, so we do not need them in the build.
            'dojo-trace-api': false,
            'dojo-log-api': false,

            // This causes normally private loader data to be exposed for debugging. In a release build, we do not need
            // that either.
            'dojo-publish-privates': false,

            // This application is pure AMD, so get rid of the legacy loader.
            'dojo-sync-loader': false,

            // `dojo-xhr-factory` relies on `dojo-sync-loader`, which we have removed.
            'dojo-xhr-factory': false,

            // We are not loading tests in production, so we can get rid of some test sniffing code.
            'dojo-test-sniff': false,

            'config-dojo-loader-catches': false,
            'config-tlmSiblingOfDojo': false,
            'dojo-timeout-api': false,
            'dojo-cdn': false,
            'dojo-loader-eval-hint-url': true,
            'config-stripStrict': false,
            'ie-event-behavior': false
        }
    }
})();
