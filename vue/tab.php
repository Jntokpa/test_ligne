<div class="container">
    <h1>Bootstrap Table</h1>

    <p>A table with third party integration extension Filter control extension Data export</a> pour exporter</p>

    <div id="toolbar">
        <select class="form-control">
            <option value="">Export Basic</option>
            <option value="all">Export All</option>
            <option value="selected">Export Selected</option>
        </select>
    </div>

    <table id="table" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table-responsive">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="prenom" data-filter-control="input" data-sortable="true">First Name</th>
                <th data-field="date" data-filter-control="select" data-sortable="true">Date</th>
                <th data-field="examen" data-filter-control="select" data-sortable="true">Examination</th>
                <th data-field="note" data-sortable="true">Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>
                <td>Jitender</td>
                <td>01/09/2015</td>
                <td>Français</td>
                <td>12/20</td>
            </tr>
            <tr>
                <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td>
                <td>Jahid</td>
                <td>05/09/2015</td>
                <td>Philosophie</td>
                <td>8/20</td>
            </tr>

        </tbody>
    </table>
</div>