/**
 *
 */
var Symbl = (function() {


    /**
     * @scope Symbl
     */
    return {

        PROJECT_NAME:       '',
        WWW_HOME_DIR:       '/',
        WWW_SCRIPT_DIR:     '/',
        REAL_PROJECT_NAME:  '/',
        GET_QUERY:          '',


        /**
         *
         */
        init: function(home_dir, project_name, script_dir, real_project_name, query) {

            this.WWW_HOME_DIR       = home_dir;
            this.PROJECT_NAME       = project_name;
            this.WWW_SCRIPT_DIR     = script_dir;
            this.REAL_PROJECT_NAME  = real_project_name;
            this.QUERY              = query;


        }


    }; // Symbl public

})();

/**
 *
 */
;(function ($, window, document, undefined) {



    /**
     * remove error block on change
     */
    $(document).on('change', '.is-invalid input,select,textarea', function (e) {
        $(this).removeClass('is-invalid');
    });
    $(document).on('click', 'input[type="checkbox"].is-invalid', function (e) {
        $(this).removeClass('is-invalid');
    });


    /**
     *
     */
    $.extend({

        /**
         *
         */
        selectbox: {

            defaults: {
                no_results_text         : 'no result',
                disable_search_threshold: 3,
                search_contains         : true,
                allow_single_deselect   : true
            },

            /**
             *
             */
            init: function(root, config)
            {
                $.extend(this.defaults, config? config : {} );
                root.find('.chosen-select').chosen(this.defaults);
            }

        }


    });




}(jQuery, window, document));




