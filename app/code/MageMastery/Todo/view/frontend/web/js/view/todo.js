define(["uiComponent", "jquery", "Magento_Ui/js/modal/confirm"], function (
    Component,
    $,
    modal
) {
    "use strict";
    console.log("UI component is loading");
    return Component.extend({
        defaults: {
            buttonSelector: "#add-new-task-button",
            newTask: "",
            tasks: [
                { id: 1, label: "Task 4", status: false },
                { id: 2, label: "Task 5", status: false },
                { id: 3, label: "Task 6", status: true },
            ],
        },

        initObservable: function () {
            this._super().observe(["tasks", "newTask"]);
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

        deleteTask: function (taskId) {
            let self = this;

            modal({
                content: "Are you sure you would like to delete this task?",
                actions: {
                    confirm: () => {
                        let tasks = [];

                        if (this.tasks().length === 1) {
                            this.tasks(tasks);
                        }

                        this.tasks().forEach((task) => {
                            if (task.id !== taskId) {
                                tasks.push(task);
                            }
                        });

                        this.tasks(tasks);
                    },
                },
            });
        },
        addTask: function () {
            this.tasks.push({
                id: this.tasks().length + 1,
                label: this.newTask(),
                status: false,
            });
            this.newTask('');
        },
        clickKey: function(data, event) {
            if(event.keyCode === 13) {
                event.preventDefault();
                $(this.buttonSelector).click();
            }
        }
    });
});
