define(['uiComponent'], function(Component) {
    'use strict'
    console.log("UI component is loading");
    return Component.extend({
        defaults: {
            tasks: [
                {label: "Task 4"},
                {label: "Task 5"},
                {label: "Task 6"}
            ]
        },

        initObservable: function() {
            this._super().observe(['tasks']);
            this.tasks().push({label: "Task 7"});
            return this;
        } 
    });
})