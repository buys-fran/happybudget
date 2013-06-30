<div class="row" ng-app="budgetApp">

<div class="offset1 span11">
<div class="row">
    <div class="span8">
        <h1>MyBudget</h1>
    </div>
    <div class="span3">
        <br/>
        <br/>
        <small><p class="text-right muted">Last saved at 20:12PM 20/06/2013</p></small>
    </div>

</div>
<div class="row">

<div class="span2">
    <!-- Left Menu -->
    <div class="accordion" id="budgetMenu">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#budgetMenu" href="#collapseManage">
                    Manage Budgets
                </a>
            </div>
            <div id="collapseManage" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#openbudget">Open</a></li>
                        <li><a href="#savebudgetas">Save As</a></li>
                        <li><a href="#deletebudget">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#budgetMenu" href="#collapseSettings">
                    Settings
                </a>
            </div>
            <div id="collapseSettings" class="accordion-body collapse">
                <div class="accordion-inner">
                    <small>
                        <form class="">
                            <fieldset>

                                <label class="control-label " for="inputUnit">Unit:
                                    <select class="span1">
                                        <option>No</option>
                                        <option selected>R</option>
                                        <option>$</option>
                                    </select>
                                </label>

                                <label class="control-label" for="inputUnit">Prec:
                                    <select class="span1">
                                        <option>0</option>
                                        <option>1</option>
                                        <option selected>2</option>
                                    </select>
                                </label>

                                <a class="pull-right" href="#">more</a>

                            </fieldset>
                        </form>
                    </small>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#budgetMenu" href="#collapseHelp">
                    Help
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /span2 -->

<div class="offset1 span8" style="">
    <div class="row">
        <div class="span8">
            <div class="accordion" id="budgetLayout">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <h3 style="padding-left: 10px">
                            <table width="95%">
                                <tbody>
                                <tr>
                                    <td class="text-left">Balance:</td>
                                    <td class="text-right" width="25%" style="color: darkgreen">R1,000,024.52</td>
                                </tr>
                                </tbody>
                            </table>
                        </h3>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <table width="95%">
                            <tbody>
                            <tr>
                                <td width="10%">
                                    <div>
                                        <a>
                                            <button class="btn btn-success" type="button"><i
                                                    class="icon-plus icon-white"></i></button>
                                        </a>

                                    </div>
                                </td>
                                <td class="text-left"><a class="accordion-toggle btn btn-primary" data-toggle="collapse"
                                                         href="#collapseIncome"><i class="icon-list icon-white"></i>
                                        Income</a>
                                </td>
                                <td class="text-right" width="25%"><strong>R1,000,024.52</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="collapseIncome" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div ng-controller="IncomeCtrl">
                                <table class="table table-bordered table-condensed table-hover table-striped" ng-repeat="category in income.categories">
                                    <thead>
                                    <td>
                                        <a>
                                            <button class="btn btn-success btn-mini" type="button"><i
                                                    class="icon-plus icon-white"></i></button>
                                        </a>
                                        {{category.name}}
                                    </td>
                                    <td width="20%">Suggestion</td>
                                    <td class="text-right" width="20%">Actual</td>
                                    <td class="text-right" width="20%">
                                        Allocated
                                    </td>
                                    <td class="text-right" width="5%">
                                        <a>
                                            <button class="btn btn-danger btn-mini" type="button"><i
                                                    class="icon-minus icon-white"></i></button>
                                        </a>
                                    </td>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td width="">
                                            <a>
                                                <button class="btn btn-danger btn-mini" type="button"><i
                                                        class="icon-minus icon-white"></i></button>
                                            </a>
                                            {{"Afrihost"}}
                                        </td>
                                        <td class="text-right" width="20%">
                                            <div class="text-right">R1,000,000.00</div>
                                        </td>
                                        <td class="text-right" width="20%">
                                            <div class="text-right">R1,000.00</div>
                                        </td>
                                        <td class="text-right" width="20%">
                                            <div class="text-right">R1,000.00</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <table width="95%">
                            <tbody>
                            <tr>
                                <td width="10%">
                                    <div>
                                        <a>
                                            <button class="btn btn-success" type="button"><i
                                                    class="icon-plus icon-white"></i></button>
                                        </a>

                                    </div>
                                </td>
                                <td class="text-left"><a class="accordion-toggle btn btn-primary" data-toggle="collapse"
                                                         href="#collapseExpenses"><i class="icon-list icon-white"></i>
                                        Expenses</a>
                                </td>
                                <td class="text-right" width="25%"><strong>R1,000,024.52</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="collapseExpenses" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <table class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                <td>
                                    <a>
                                        <button class="btn btn-success btn-mini" type="button"><i
                                                class="icon-plus icon-white"></i></button>
                                    </a>
                                    Transport
                                </td>
                                <td width="20%">Suggestion</td>
                                <td class="text-right" width="20%">Actual</td>
                                <td class="text-right" width="20%">
                                    Allocated
                                </td>
                                <td class="text-right" width="5%">
                                    <a>
                                        <button class="btn btn-danger btn-mini" type="button"><i
                                                class="icon-minus icon-white"></i></button>
                                    </a>
                                </td>

                                </thead>
                                <tbody>
                                <tr>
                                    <td width="">
                                        <a>
                                            <button class="btn btn-danger btn-mini" type="button"><i
                                                    class="icon-minus icon-white"></i></button>
                                        </a>
                                        Fuel
                                    </td>
                                    <td class="text-right" width="20%">
                                        <div class="text-right">R1,000,000.00</div>
                                    </td>
                                    <td class="text-right" width="20%">
                                        <div class="text-right">R1,000.00</div>
                                    </td>
                                    <td class="text-right" width="20%">
                                        <div class="text-right">R1,000.00</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
</div>
<!-- /container -->
</div>

</div>

