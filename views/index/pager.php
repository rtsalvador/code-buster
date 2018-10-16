<div class="container" style="margin-top:100px;">
    <table class="table table-bordered table-pager" data-page="<?= isset($_GET['page']) ? $_GET['page'] : '1'?>">
        <thead>
            <tr>
                <th class="sort" data-sort="asc" data-field="id">Id <i class="text-default glyphicon glyphicon-sort"></i></th>
                <th class="sort" data-sort="asc" data-field="first_name">First Name <i class="text-default glyphicon glyphicon-sort"></i></th>
                <th class="sort" data-sort="asc" data-field="last_name">Last Name <i class="text-default glyphicon glyphicon-sort"></i></th>
                <th class="sort" data-sort="asc" data-field="email">Email <i class="text-default glyphicon glyphicon-sort"></i></th>
                <th class="sort" data-sort="asc" data-field="birthdate">Birthdate <i class="text-default glyphicon glyphicon-sort"></i></th>
            </tr>
        </thead>
        <tbody class="data-body">
            
        </tbody>
    </table>
    <div class="form-group col-lg-1">
        <select name="" id="pages" class="form-control" data-size="10">
        </select>
    </div>
</div>