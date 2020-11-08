define([
    "uiComponent",
    "jquery", 
    "Magento_Ui/js/modal/confirm",
    "MageMastery_Todo/js/service/task"
], function (
    Component,
    $,
    modal,
    taskService
) {
    "use strict";
    console.log("UI component is loading");
    return Component.extend({
        defaults: {
            buttonSelector: "#add-new-task-button",
            newTask: "",
            tasks: [],
        },

        initObservable: function () {
            this._super().observe(["tasks", "newTask"]);
            var self = this;

            taskService.getList().then(function (tasks) {
                self.tasks(tasks);
                return tasks;
            })
            return this;
        },

        switchStatus: function (data, event) {
            const taskId = $(event.target).data("id");

            let items = this.tasks().map((task) => {
                if (task.task_id === taskId) {
                    task.status = task.status === 'open' ? 'complete' : 'open';
                    taskService.update(task.task_id, task.status);
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

                        taskService.delete(self.tasks().find(function (task) {
                            if(task.task_id) {
                                return task;
                            }
                        }))

                        if (self.tasks().length === 1) {
                            this.tasks(tasks);
                        }

                        self.tasks().forEach((task) => {
                            if (task.task_id !== taskId) {
                                tasks.push(task);
                            } 
                        });

                        self.tasks(tasks);
                    },
                },
            });
        },
        addTask: function () {
            const self = this;

            var task = {
                label: this.newTask(),
                status: 'open',
            }

            taskService.create(task).then(function(taskId) {
                task.task_id = taskId;
                self.tasks.push(task);
                self.newTask('');
            })
        },
        clickKey: function(data, event) {
            if(event.keyCode === 13) {
                event.preventDefault();
                $(this.buttonSelector).click();
            }
        }
    });
});
