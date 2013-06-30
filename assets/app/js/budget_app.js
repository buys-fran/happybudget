var budgetApp = angular.module('myApp', []);

budgetApp.factory("BudgetIncome", function () {
    var BudgetIncome = {};
    BudgetIncome.categories = [
        {
            name: "Gross",
            subcategories: [
                {
                    subcategoryname: "Salary"
                },
                {
                    subcategoryname: "Other Income"
                }
            ]


        },
        {
            name: "Interest"
        }
    ];

    return BudgetIncome;
})

function IncomeCtrl($scope, BudgetIncome) {
    $scope.income = BudgetIncome;
}