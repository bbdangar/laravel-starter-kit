<?php

return array(
    'permissions' => array(
        'Global' => array(
            array(
                'permission' => 'superuser',
                'label'      => 'God Of System',
            ),
        ),

        'Admin' => array(
            array(
                'permission' => 'admin',
                'label'      => 'Admin Rights',
            ),
        ),

        'Users' => array(
            array(
                'permission' => 'user.create',
                'label' => 'Register New User',
            ),
            array(
                'permission' => 'user.edit',
                'label' => 'Update User',
            ),
            array(
                'permission' => 'user.delete',
                'label' => 'Delete/Restore User',
            ),
        ),
    ),
);
