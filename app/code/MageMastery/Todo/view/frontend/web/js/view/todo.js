define(["uiComponent", "jquery"], function (Component, $) {
    "use strict";
    console.log("UI component is loading");
    return Component.extend({
        defaults: {
            tasks: [
                { id: 1, label: "Task 4", status: false },
                { id: 2, label: "Task 5", status: false },
                { id: 3, label: "Task 6", status: true },
            ],
        },

        initObservable: function () {
            this._super().observe(["tasks"]);
            // this.tasks().push({label: "Task 7"});
            return this;
        },

        switchStatus: function (data, event) {
            const taskId = $(event.target).data("id");

            let items = this.tasks().map((task) => {
                if (task.id === taskId) {
                    task.status = !task.status;
                }

                return task;
            });

            this.tasks(items);
        },
    });
});
