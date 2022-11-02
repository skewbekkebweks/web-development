<?php

namespace Class\Classes\Mvc;

class UserController
{
    public function usersPage(Request $request)
    {
        return '<ul>
                    <li>' . $request->getParam('item1') . '</li>
                    <li>' . $request->getParam('item2', 'abc') . '</li>
                    <li>' . $request->getParam('item3', 'xyz') . '</li>
                </ul>';
    }
    public function usersPhotosPage(Request $request) {
        return "<ul>
aaaa
</ul>";
    }
}