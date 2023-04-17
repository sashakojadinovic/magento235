define(['uiComponent'], function(Component){
    'use strict'
    return Component.extend({
        initialize: function(){
            this._super();
            this.heading = "Hello from Knockout.js"
        }
    });

});
/*
define(['uiComponent'], function (Component) {
    "use strict";
    return Component.extend({
        defaults: {
            template: "Lobbster_Knock/customtext"
        },
        initialize: function() {
            this._super();
            this.heading = "Hello";
        }
    });
});
*/


