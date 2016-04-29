<div id = "header"></div>
<div id = "picture"></div>
<div id = "sidepane">

    <?php

        echo '<br><br><br>';

		echo anchor('admin/user_info','User info');	
        echo anchor('admin/add_item_larea','Add item');
        echo anchor('admin/history_larea','History');
		echo anchor('admin/subjectwise_books','All Books');
        echo anchor('admin/search_input_larea','Search');
        echo anchor('admin/approve_new_user','Approve New User Request');
        echo anchor('admin/approve_borrow_req','Approve Borrow Request');
        echo anchor('admin/due_larea','Due status');
        echo anchor('admin/issue_larea','Issue');
        echo anchor('admin/return_larea','Return');
        echo anchor('admin/logout_larea','logout');

    ?>
</div>
<div id ="sidepaneright"></div>
<div id ="signForm">
    Search result:
</div>
<div id = "footer"></div>